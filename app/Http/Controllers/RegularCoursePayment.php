<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
use DB;
use Mail;
use Redirect;
use Session;
use Toastr;

class RegularCoursePayment extends Controller
{
    public function course_registration($id, $sub_id)
    {
        if ($sub_id == 0) {
            $find_course = DB::table('regular_courses')->where('id', $id)->first();

            $course_idd = $find_course->id;
        } else {
            $find_course = DB::table('aud_category')->where('aud_id', $sub_id)->first();
            $course_idd = $find_course->aud_id;
        }
        $find_course_details = DB::table('regular_courses')->where('id', $id)->first();
        return view('user.pages.course_registration')
            ->with('find_course', $find_course)
            ->with('find_course_details', $find_course_details)
            ->with('sub_id', $sub_id)
            ->with('course_idd', $course_idd);

        

    }

    public function postRegistration_course(Request $request)
    {
       
        $this->validate($request, array(
            'name' => 'required',

            'org_name' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'email' => 'required',

        ));
        
        $payment_link=$request->payment_link;
        $data = array();
        $data['application_id'] = 'REG'.rand(100000, 999999);
        $data['name'] = $request->name;
        $data['org_name'] = $request->org_name;
        $data['city'] = $request->city;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['grade'] = $request->grade;
        $data['teach'] = $request->teach;
        $data['number_of_participants'] = $request->number_of_participants;
        /* $data['batch_date'] = $request->class_date;
        $data['course_module'] = $request->course_module;
 */
        $data['course_id'] = $request->course_id;
        $data['aud_id'] = $request->sub_course_id;
        
       
        $data['fees'] = ((int)($request->fees) * (int)($request->number_of_participants));
       /*  if ($request->course_module == null) {
            $data['fees'] = ($request->fees) * ($request->number_of_participants);
        } else {
            $data['fees'] = ($request->fees);
        } */
        $data['created_at'] = date('Y-m-d H:i:s');
        $customer_id = DB::table('events_regular')
            ->insertGetId($data);
        Session::put('id', $customer_id);

       $payment= DB::table('aud_category')->where('aud_id',$request->sub_course_id)->first();
       if($payment_link != 0){

        Toastr::success(' Registration Successfull !! Please proceed for the payment.  ', 'Success');
        return redirect()->route('confirm-course');
       }
       else{
        Toastr::success(' Thank you for registering with us. One of our team members will come in contact with you soon. ', 'Success');
        $this->Regularmail_school($data['application_id']);
        return redirect()->route('courses');
       }

    }

    public function confirm_course()
    {

        $customer_id = Session::get('id');

        $customer_info = DB::table('events_regular')->where([
            ['id', '=', $customer_id],

        ])->first();

        $find_course = DB::table('regular_courses')->where('id', $customer_info->course_id)->first();

        return view('user.pages.confirm_course_registration')
            ->with('customer_info', $customer_info)
            ->with('find_course', $find_course);

       

    }

    public function paymentProcess(Request $request)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:6073ac72b483c5925603d15d5cfe70a3",
                "X-Auth-Token:00d30c9628d6b93c9373a0f277719f51"));
        $payload = array(
            'purpose' => $request->course_name,
            'amount' => $request->fees,
            'phone' => $request->phone,
            'buyer_name' => $request->name,
            'redirect_url' => 'https://www.davincilab.in/regular-payment-success/' . $request->reg_id,
            'send_email' => true,

            'send_sms' => true,
            'email' => $request->email,
            'allow_repeated_payments' => false,
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response);
        return redirect($response->payment_request->longurl);

    }

    public function paymentSuccess(Request $request)
    {

        $input = $request->all();

        
      

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payments/' . $request->get('payment_id'));

            curl_setopt($ch, CURLOPT_HEADER, false);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            curl_setopt($ch, CURLOPT_HTTPHEADER,

                array("X-Api-Key:6073ac72b483c5925603d15d5cfe70a3",

                    "X-Auth-Token:00d30c9628d6b93c9373a0f277719f51"));

            $response = curl_exec($ch);

            $err = curl_error($ch);

            curl_close($ch);

            if ($err) {

                // \Session::put('error','Payment Failed, Try Again!!');

                Toastr::error(' Payment Failed, Try Again!!  ', 'Error');

                return redirect()->route('/');

            } else {

                $data = json_decode($response);

            }

            if ($data->success == true) {

                if ($data->payment->status == 'Credit') {

                    // Here Your Database Insert Login
                    $input['reg_id'] = $request->app_id;
                    $input['name'] = $data->payment->buyer_name;

                    $input['email'] = $data->payment->buyer_email;

                    $input['mobile'] = $data->payment->buyer_phone;

                    $input['amount'] = $data->payment->amount;

                    Payment::create($input);

                    DB::table('events_regular ')
                        ->where('application_id', $request->app_id)
                        ->update(['status' => 1]);

                    // \Session::put('success','Your payment has been pay successfully, Enjoy!!');

                    $this->Regularmail($request->app_id);
                    Toastr::success(' Your payment has been pay successfully, Enjoy!! ', 'Success');

                    //$this->Testmail($request->app_id);

                    //return redirect()->route('/');
                    return redirect::to('/');

                } else {

                    // \Session::put('error','Payment Failed, Try Again!!');

                    Toastr::error(' Payment Failed, Try Again!!  ', 'Error');

                    return redirect::to('/');

                }

            }
        

    }

    public function Regularmail($reg_no)
    {

        $find_user = DB::table('events_regular')
            ->join('payments', 'events_regular.application_id', '=', 'payments.reg_id')
            ->where('events_regular.application_id', $reg_no)

            ->select('events_regular.*', 'payments.amount')
            ->first();

        $find_email = DB::table('regular_courses')->where('id',$find_user->course_id)->first();

        $details = [
            'title' => $find_email->email_subject,
            'email_desc' => $find_email->email_desc,
            'body' => 'we have received your payment Rs.' . $find_user->amount . 'and Your Registration ID:' . $find_user->application_id,
        ];

        //$name = 'Lokesh';
        //Mail::to('tanmoy.bishoi@gmail.com')->send(new SendMailable($name));

        Mail::to($find_user->email)->send(new \App\Mail\RegularMail($details));

        Toastr::success('Email Send Successfully ', 'Success');

        return redirect::to('/');
    }

    public function Regularmail_school($reg_no)
    {

        $find_user = DB::table('events_regular')
            
            ->where('application_id', $reg_no)

            
            ->first();

        $find_email = DB::table('regular_courses')->where('id',$find_user->course_id)->first();

        $details = [
            'title' => $find_email->email_subject,
            'email_desc' => $find_email->email_desc,
            'body' => 'Thank you for registering with us. One of our team members will come in contact with you soon. ' . 'Your Registration ID:' . $find_user->application_id,
        ];

        //$name = 'Lokesh';
        //Mail::to('tanmoy.bishoi@gmail.com')->send(new SendMailable($name));

        Mail::to($find_user->email)->send(new \App\Mail\RegularMail($details));

        Toastr::success('Email Send Successfully ', 'Success');

        return redirect::to('/');
    }

}
