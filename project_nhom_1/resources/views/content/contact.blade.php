@extends('form_master.layout_index')

@section('contact')
    <div class="inner-banner">
        <div class="container">
            <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="contact-section pt-120 pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row pb-120 mb-70 g-4 d-flex justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="contact-signle hover-border1 d-flex flex-row align-items-center wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="text">
                            <h4>Location</h4>
                            <p>168/170, Ave 01,Old York Drive Rich Mirpur, Dhaka</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="contact-signle hover-border1 d-flex flex-row align-items-center wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="text">
                            <h4>Phone</h4>
                            <a href="tel:+880171-770000">+02 135498 26649</a>
                            <a href="tel:+8801761111456">+8801761111456</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="contact-signle hover-border1 d-flex flex-row align-items-center wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".6s">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div class="text">
                            <h4>Email</h4>
                            <a
                                href="https://demo.egenslab.com/cdn-cgi/l/email-protection#770402070718050337120f161a071b125914181a"><span
                                    class="__cf_email__"
                                    data-cfemail="2c5f595c5c435e586c49544d415c4049024f4341">[email&#160;protected]</span></a>
                            <a
                                href="https://demo.egenslab.com/cdn-cgi/l/email-protection#b2dbdcd4ddf2d7cad3dfc2ded79cd1dddf"><span
                                    class="__cf_email__"
                                    data-cfemail="a9c0c7cfc6e9ccd1c8c4d9c5cc87cac6c4">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="form-wrapper wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title2">
                            <h3>Get in Touch</h3>
                            <p class="para">Feel free to ask me any question or let's do to talk about our future
                                collaboration.</p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Your Name :">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-inner">
                                        <input type="email" placeholder="Your Email :">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Your Phone :">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Subject :">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" placeholder="Write Message :" rows="12"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="eg-btn btn--primary btn--md form--btn">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-area wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6255252.31904332!2d-106.08810052683293!3d40.04590513383155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1650355365902!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-us-counter pb-120">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/employee.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="5400">&nbsp;</h3>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/review.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="1250">&nbsp;</h3>
                            <p>Good Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/smily.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="4250">&nbsp;</h3>
                            <p>Winner Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".8s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/comment.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="500">&nbsp;</h3>
                            <p>New Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
