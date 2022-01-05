@extends('layouts.userapp')

@section('content')

<div class="page-banner-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Contact
                    </h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    <form id="contactForm" action="{{ route('send-contact') }}" class="form-contact" method="post">
                        @csrf()
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" class="form-control" required
                                        data-error="Please enter your phone number" placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subjects" class="form-control" required
                                        data-error="Please enter your subjects" placeholder="Subjects">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="5" required
                                        data-error="Please enter your message" class="form-control"
                                        placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="contact-information">
                    <h3>Here to Help</h3>
                    <ul class="contact-list">
                        <li><i class='bx bx-map'></i> Location: <span>8-107/12, M-park residency, Shilpa Nagar, Nagaram,
                                Hyderabad-500083 </span></li>
                        <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+91 9908442000">+91 9908442000</a>
                        </li>
                        <li><i class='bx bx-envelope'></i> Email Us: <a href="">connect@superteacher.in</a></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>


<div id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60887.533563608755!2d78.602232!3d17.485023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4117f6804bd856a1!2sSuperTeacher!5e0!3m2!1sen!2sin!4v1606408995370!5m2!1sen!2sin"></iframe>
</div>





@endsection
