@extends('form_master.layout_index')
@section('about')
    @foreach ($slides as $item)
        @if ($item->order == 0)
            <div class="inner-banner" style="background-image: url({{ $item->image_path }});">
                <div class="container">
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                        {{ $item->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="ShowFormHomePage">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        @endif
    @endforeach


    @foreach ($slides as $item)
        @if ($item->order == 1)
            <div class="about-section pt-120 pb-120">
                <img src="assets/images/bg/section-bg.png" class="img-fluid section-bg-top" alt="section-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center g-4">
                        <div class="col-lg-6 col-md-10">
                            <div class="about-img-area">
                                <div class="total-tag">
                                    <img src="assets/images/bg/total-tag.png" alt="">
                                    <h6>Total Raised</h6>
                                    <h5>$45,390.00</h5>
                                </div>
                                <img src="{{ $item->image_path }}" class="img-fluid about-img wow fadeInUp"
                                    data-wow-duration="1.5s" data-wow-delay=".2s" alt="about-img">
                                <img src="assets/images/bg/about-linear.png" class="img-fluid about-linear" alt="">
                                <img src="assets/images/bg/about-vector.png" class="img-fluid about-vector" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="about-content wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <span>Who we are!</span>
                                <h2>{{ $item->title }}</h2>

                                @php
                                    $descripArray = explode('|', $item->description);
                                    $firstDescrip = $descripArray[0];
                                    $remainingDescrips = array_slice($descripArray, 1);
                                @endphp

                                <p class="para">{{ $firstDescrip }}</p>

                                <ul class="about-list">


                                    @foreach ($remainingDescrips as $descrip2)
                                        <li><a href="#">{{ $descrip2 }}</a></li>
                                    @endforeach


                                </ul>
                                <a href="#choose-us" class="eg-btn btn--primary btn--md">More About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach



    <div class="choose-us-section pb-120" id="choose-us">
        <img src="assets/images/bg/section-bg.png" class="section-bg-bottom" alt="">
        <div class="container position-relative">
            <img src="assets/images/bg/angle-vector.png" class="img-fluid angle-vector" alt="">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Why Choose Us</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">


                @foreach ($slides as $item)
                    @if ($item->order == 3)
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="single-feature hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                data-wow-delay=".2s">
                                <span class="sn">{{ $loop->index }}</span>
                                <div class="icon">
                                    <div width="68" height="68" viewBox="0 0 68 68">
                                        @php
                                            echo $item->image_path;
                                        @endphp
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="#">{{ $item->title }}</a></h5>
                                    <p class="para">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </div>


    <div class="testimonial-section pt-80 pb-80">
        <img src="assets/images/bg/client-right.png" class="client-right-vector" alt="">
        <img src="assets/images/bg/client-left.png" class="client-left-vector" alt="">
        <img src="assets/images/bg/clent-circle1.png" class="client-circle1" alt="">
        <img src="assets/images/bg/clent-circle2.png" class="client-circle2" alt="">
        <img src="assets/images/bg/clent-circle3.png" class="client-circle3" alt="">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">

                    @foreach ($slides as $item)
                        @if ($item->order == 2)
                            <div class="section-title1">
                                <h2>{{ $item->title }}</h2>
                                <p class="mb-0">{{ $item->description }}</p>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="row d-flex justify-content-center position-relative">
                <div class="swiper testimonial-slider2">
                    <div class="swiper-wrapper">

                        @foreach ($slides as $item)
                            @if ($item->order == 4)
                                @php
                                    $titleArray = explode('|',$item->title);
                                    $firtTitle = $titleArray[0];
                                    $secontTitle = $titleArray[1];
                                @endphp
                                <div class="swiper-slide">
                                    <div class="testimonial-single style2 hover-border1 wow fadeInDown"
                                        data-wow-duration="1.5s" data-wow-delay="0.3s">
                                        <img src="assets/images/icons/quote-green.svg" class="quote-icon" alt="quote-icon">
                                        <div class="testi-img">
                                            <img src="{{$item->image_path}}" alt="">
                                        </div>
                                        <div class="testi-content">
                                            <div class="testi-designation">
                                                <h5>{{$firtTitle}}</h5>
                                                <p>{{$secontTitle}}</p>
                                            </div>
                                            <p class="para">{{$item->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="slider-arrows testimonial2-arrow d-flex justify-content-between gap-3">
                    <div class="testi-prev2 swiper-prev-arrow" tabindex="0" role="button"
                        aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
                    <div class="testi-next2 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-us-counter pt-120 pb-120">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="counter-icon"> <img src="assets/images/icons/employee.svg" alt="employee"></div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="400">&nbsp;</h3>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="counter-icon"> <img src="assets/images/icons/review.svg" alt="review"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="250">&nbsp;</h3>
                            <p>Good Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.9s">
                        <div class="counter-icon"> <img src="assets/images/icons/smily.svg" alt="smily"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="350">&nbsp;</h3>
                            <p>Winner Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".8s">
                        <div class="counter-icon"> <img src="assets/images/icons/comment.svg" alt="comment"> </div>
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
