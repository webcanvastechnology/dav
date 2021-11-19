<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\RegularCourseController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\RegularCoursePayment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/abcd', [FrontendController::class, 'abcd']);

Auth::routes();

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/courses', [FrontendController::class, 'courses'])->name('courses');
Route::get('/course-details/{id}', [FrontendController::class, 'course_details']);
Route::get('/apply-code',[FrontendController::class, 'apply_code'])->name('apply-code');
Route::get('/home', [HomeController::class, 'index'])->name('userdashboard');
Route::get('course-registration/{id}/{sub_id}', [RegularCoursePayment::class, 'course_registration'])->name('course-registration');
Route::post('post-registration-course', [RegularCoursePayment::class, 'postRegistration_course'])->name('postregistration-course');
Route::get('confirm-course', [RegularCoursePayment::class, 'confirm_course'])->name('confirm-course');
Route::post('regular-payment-process', [RegularCoursePayment::class, 'paymentProcess']);

Route::get('regular-payment-success/{app_id}', [RegularCoursePayment::class, 'paymentSuccess']);
/*
Start Admin Panel

|-----------------

*/

Route::get('/admin-panel', [AdminController::class,'index'])->name('admin-panel');
Route::post('/admin-login', [AdminController::class,'admin_login_check']);
Route::get('/dashboard',  [SuperAdminController::class,'index']);
Route::get('/admin-logout', [SuperAdminController::class,'admin_logout']);

Route::get('/paid-user', [SuperAdminController::class,'paid_user']);
Route::get('/unpaid-user', [SuperAdminController::class,'unpaid_user']);
Route::get('/contact-list', [SuperAdminController::class,'contact_list']);
Route::get('/visitor-list', [SuperAdminController::class,'visitor_list']);

Route::get('cq-paid-user', [SuperAdminController::class,'cq_paid_user']);
Route::get('cq-unpaid-user', [SuperAdminController::class,'cq_unpaid_user']);

Route::get('cq-school-user', [SuperAdminController::class,'cq_school_user']);
Route::get('cbse-school-user', [SuperAdminController::class,'cbse_school_user']);

Route::get('stepup-paid-user/{id}', [SuperAdminController::class,'stepup_paid_user']);
Route::get('stepup-unpaid-user/{id}', [SuperAdminController::class,'stepup_unpaid_user']);

Route::get('mocktest-user', [SuperAdminController::class,'mocktest_user']);
Route::get('cbse-user', [SuperAdminController::class,'cbse_user']);

Route::get('/olympaid-paid-user/{user_type}', [SuperAdminController::class,'olympaid_paid_user']);
Route::get('/olympaid-unpaid-user/{user_type}', [SuperAdminController::class,'olympaid_unpaid_user']);
Route::get('/olympaid-school-user', [SuperAdminController::class,'olympaid_school_user']);
Route::get('/code-india-code-user', [SuperAdminController::class,'code_india_code_user']);

/* Teacher courses */

Route::get('/add-course', [SuperAdminController::class,'add_course']);

Route::post('post-course', [SuperAdminController::class, 'postCourse'])->name('postcourse');
Route::get('/manage-course', [SuperAdminController::class,'manage_course']);
Route::get('/edit-course/{id}', [SuperAdminController::class,'edit_course']);
Route::post('update-course', [SuperAdminController::class, 'updateCourse'])->name('updatecourse');
Route::get('/update-status-course/{id}/{st}', [SuperAdminController::class,'status_course']);

Route::get('/add-subcourse', [SuperAdminController::class,'add_subcourse']);

Route::post('post-subcourse', [SuperAdminController::class, 'postsubCourse'])->name('postsubcourse');
Route::get('/manage-subcourse', [SuperAdminController::class,'manage_subcourse']);
Route::get('/edit-subcourse/{id}', [SuperAdminController::class,'edit_subcourse']);
Route::post('update-subcourse', [SuperAdminController::class, 'updatesubCourse'])->name('updatesubcourse');
Route::get('/update-status-subcourse/{id}/{st}', [SuperAdminController::class,'status_subcourse']);

/* Student courses */

Route::get('/add-special-course', [SuperAdminController::class,'add_special_course']);

Route::post('post-special-course', [SuperAdminController::class, 'postSpecialCourse'])->name('postspecialcourse');
Route::get('/manage-course-special', [SuperAdminController::class,'manage_course_special']);
Route::get('/edit-course-special/{id}', [SuperAdminController::class,'edit_course_special']);
Route::post('update-course-special', [SuperAdminController::class, 'updateCourseSpecial'])->name('updatecoursespecial');
Route::get('update-course-special-order', [SuperAdminController::class, 'updateOrder'])->name('update-course-special-order');
/* Regular Courses */
Route::get('/add-regular-course', [RegularCourseController::class,'add_course']);
Route::post('post-regular-course', [RegularCourseController::class, 'postCourse'])->name('postregularcourse');
Route::get('/manage-regular-course', [RegularCourseController::class,'manage_course']);
Route::get('/edit-regular-course/{id}', [RegularCourseController::class,'edit_regular_course']);
Route::post('update-regular-course', [RegularCourseController::class, 'updateCourse'])->name('updateregularcourse');
Route::get('/update-status-regular-course/{id}/{st}', [RegularCourseController::class,'status_course']);
Route::get('/delete-regular-course/{id}', [RegularCourseController::class,'delete_course']);

Route::get('/add-audience', [RegularCourseController::class,'add_audience']);
Route::post('post-audience', [RegularCourseController::class, 'postaudience'])->name('postaudiencecategory');
Route::get('/manage-audience', [RegularCourseController::class,'manage_audience']);
Route::get('/edit-audience/{id}', [RegularCourseController::class,'edit_audience']);
Route::post('update-audience', [RegularCourseController::class, 'updateaudience'])->name('updateaudiencecategory');

/* Free Workshop */
Route::get('/add-workshops', [WorkshopController::class,'add_workshops']);
Route::post('post-workshops', [WorkshopController::class, 'postworkshops'])->name('postworkshops');
Route::get('/manage-workshop', [WorkshopController::class,'manage_workshop']);
Route::get('/update-status-workshops/{id}/{st}', [WorkshopController::class,'status_workshop']);
Route::get('/edit-workshops/{id}', [WorkshopController::class,'edit_workshop']);
Route::post('update-workshops', [WorkshopController::class, 'updateworkshop'])->name('updateworkshops');

/* Coupon */


Route::get('/add-coupon', [SuperAdminController::class,'add_coupon']);

Route::post('post-coupon', [SuperAdminController::class, 'postcoupon'])->name('postcoupon');
Route::get('/manage-coupon', [SuperAdminController::class,'manage_coupon']);
Route::get('/delete-coupon/{id}', [SuperAdminController::class,'delete_coupon']);
Route::get('/report-coupon', [SuperAdminController::class,'report_coupon']);


Route::get('/add-date', [SuperAdminController::class,'add_date']);

Route::post('post-date', [SuperAdminController::class, 'postdate'])->name('postdate');

Route::get('/manage-date', [SuperAdminController::class,'manage_date']);
Route::get('/edit-date/{id}', [SuperAdminController::class,'edit_date']);
Route::post('update-date', [SuperAdminController::class, 'updateDate'])->name('updatedate');
Route::get('/delete-date/{id}', [SuperAdminController::class,'delete_date']);

//Testimonial

Route::get('/add-testimonial', [SuperAdminController::class,'add_testimonial']);

Route::post('post-testimonial', [SuperAdminController::class, 'postTestimonial'])->name('posttestimonial');
Route::get('/manage-testimonial', [SuperAdminController::class,'manage_testimonial']);
Route::get('/edit-testimonial/{id}', [SuperAdminController::class,'edit_testimonial']);
Route::post('update-testimonial', [SuperAdminController::class, 'updateTestimonial'])->name('updateTestimonial');
Route::get('/update-status-testimonial/{id}/{st}', [SuperAdminController::class,'status_testimonial']);

Route::get('dropzone', [ SuperAdminController::class, 'dropzone' ]);

Route::post('dropzone/store', [ SuperAdminController::class, 'dropzoneStore' ])->name('dropzone.store');
Route::post('ckeditor/upload', [ SuperAdminController::class, 'upload' ])->name('ckeditor.upload');