@extends('form_master.layout_index')

@section('signup')
    <div class="inner-banner">
        <div class="container">
            <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Sign Up</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="signup-section pt-120 pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="section-bg-top">
        <img alt="image" src="assets/images/bg/section-bg.png" class="section-bg-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Sign Up</h3>
                            <p>Do you already have an account? <a href="login.html">Log in here</a></p>
                        </div>

                        <form action="{{ route('getRegister') }}" method="POST" class="w-100">

                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Frist Name *</label>
                                        <input name="firtname" type="text" placeholder="Frist Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Last Name *</label>
                                        <input name="lastname" type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Enter Your Email *</label>
                                        <input name="email" type="email" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Password *</label>
                                        <input type="password" name="password" id="password"
                                            placeholder="Create A Password" />
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Enter Your PhoneNumber *</label>
                                        <input name="phone" type="text" pattern="[0-9]+"
                                            placeholder="Enter Your Phone Number">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="html">
                                            <label for="html">I agree to the Terms & Policy</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="account-btn">Create Account</button>
                        </form>

                        <div class="alternate-signup-box">
                            <h6>or signup WITH</h6>
                            <div class="btn-group gap-4">
                                <a href="#" class="eg-btn google-btn d-flex align-items-center"><i
                                        class='bx bxl-google'></i><span>signup whit google</span></a>
                                <a href="#" class="eg-btn facebook-btn d-flex align-items-center"><i
                                        class='bx bxl-facebook'></i>signup whit facebook</a>
                            </div>
                        </div>
                        <div class="form-poicy-area">
                            <p>By clicking the "signup" button, you create a Cobiro account, and you agree to Cobiro's <a
                                    href="#">Terms & Conditions</a> & <a href="#">Privacy Policy.</a></p>
                        </div>
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
