@extends('form_master.layout_index')

@section('how_work')
    <div class="inner-banner">
        <div class="container">
            @foreach ($slides as $item)
                @if ($item->order == 0)
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                        {{ $item->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
                        </ol>
                    </nav>
                @endif
            @endforeach
        </div>
    </div>


    <div class="how-work-section pt-120 pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="section-bg-top">
        <div class="container">
            <div class="row g-4 mb-60">


                @foreach ($slides as $item)
                    @if ($item->order == 1)
                        <div class="col-xl-6 col-lg-6">
                            <div class="how-work-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <span>01.</span>
                                <h3>{{ $item->title }}</h3>
                                <p class="para">{{ $item->description }}</p>

                                <a href="#" class="eg-btn btn--primary btn--md">Register Account</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-flex justify-content-lg-end justify-content-center">
                            <div class="how-work-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <img alt="image" src="{{ $item->image_path }}" class="work-img">
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="row g-4 mb-60">

                @foreach ($slides as $item)
                    @if ($item->order == 2)
                        <div
                            class="col-xl-6 col-lg-6 d-flex justify-content-lg-start justify-content-center order-lg-1 order-2">
                            <div class="how-work-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <img alt="image" src="{{ $item->image_path }}" class="work-img">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                            <div class="how-work-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <span>02.</span>
                                <h3>{{ $item->title }}</h3>
                                <p class="para">{{ $item->description }}</p>

                                <a href="#" class="eg-btn btn--primary btn--md">Add Your Item</a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="row g-4">

                @foreach ($slides as $item)
                    @if ($item->order == 3)
                        <div class="col-xl-6 col-lg-6">
                            <div class="how-work-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <span>03.</span>
                                <h3>{{$item->title}}</h3>
                                <p class="para">{{$item->description}}</p>
                                <a href="#" class="eg-btn btn--primary btn--md">Purchase Item</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-flex justify-content-lg-end justify-content-center">
                            <div class="how-work-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <img alt="image" src="{{$item->image_path}}" class="work-img">
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>


    <div class="choose-us-section pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="section-bg-bottom">
        <div class="container">
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

                {{-- icon --}}

                @foreach ($slide_icon as $item)
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
