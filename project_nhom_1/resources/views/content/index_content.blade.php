@extends('form_master.layout_index')

@section('homepage')
    <div class="hero-area hero-style-one">
        <div class="hero-main-wrapper position-relative">
            <div class="swiper banner1">
                <div class="swiper-wrapper">

                    @foreach ($slides as $item)
                        @if ($item->code == 'slide-banner-1')
                            <div class="swiper-slide">
                                <div class="slider-bg-{{ $item->id }}"
                                    style="background-image: url({{ $item->image_path }})">
                                    <div class="container">
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-xl-10 col-lg-10">
                                                <div class="banner1-content">
                                                    <span>Welcome To Auction House</span>
                                                    <h1>{{ $item->title }}</h1>
                                                    <p>{{ $item->description }}</p>
                                                    <a href="{{ $item->link }}" class="eg-btn btn--primary btn--lg">Start
                                                        Exploring</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="hero-one-pagination d-flex justify-content-center flex-column align-items-center gap-3"></div>
        </div>
    </div>


    <div class="category-section pt-120 pb-120">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="swiper category1-slider">
                    <div class="swiper-wrapper">

                        {{-- day la phan categories --}}

                        @foreach ($cat as $item)
                            @if (!empty($item->image_path))
                                <div class="swiper-slide">
                                    <div class="eg-card category-card1 wow animate fadeInDown" data-wow-duration="1500ms"
                                        data-wow-delay="200ms">
                                        <div class="cat-icon">
                                            <div width="100" height="100" viewBox="0 0 60 60">

                                                @php
                                                    echo $item->image_path;
                                                @endphp


                                            </div>
                                        </div>
                                        <a href="#">
                                            <h5>{{ $item->name }}</h5>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach



                    </div>
                </div>
            </div>
            <div class="slider-arrows text-center d-xl-flex d-none  justify-content-end">
                <div class="category-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide">
                    <i class='bx bx-chevron-left'></i>
                </div>
                <div class="category-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
                    <i class='bx bx-chevron-right'></i>
                </div>
            </div>
        </div>
    </div>


    <div class="live-auction pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg">
        <div class="container position-relative">
            <img alt="image" src="assets/images/bg/dotted1.png" class="dotted1">
            <img alt="image" src="assets/images/bg/dotted1.png" class="dotted2">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Live Auction</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mb-60 d-flex justify-content-center">

                @foreach ($pro->take(6) as $key)
                    @php
                        $imagePathsArray = explode(',', $key->image_path);
                        $firstImagePath = $imagePathsArray[0];
                        
                        $nameArray = explode('|', $key->name);
                        $firtName = $nameArray[0];
                    @endphp

                    <div class="col-lg-4 col-md-6 col-sm-10 ">
                        <div data-wow-duration="1.5s" data-wow-delay="0.2s"
                            class="eg-card auction-card1 wow animate fadeInDown">
                            <div class="auction-img">
                                <img alt="image" src="{{ $firstImagePath }}">
                                <div class="auction-timer">

                                    <div class="countdown">
                                        <h4 class="timepro" data-end="{{ $key->time_end }}"></h4>
                                    </div>


                                </div>
                                <div class="author-area">
                                    <div class="author-emo">
                                        <img alt="image" src="assets/images/icons/smile-emo.svg">
                                    </div>
                                    <div class="author-name">
                                        <span>by @robatfox</span>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-content">
                                <h4><a href="auction-details.html">{{ $firtName }}</a></h4>
                                <p>Bidding Price : <span><span>{{ $key->price_start }}$</span></span></p>
                                <div class="auction-card-bttm">
                                    <a href="auction-details.html" class="eg-btn btn--primary btn--sm">Place a Bid</a>
                                    <div class="share-area">
                                        <ul class="social-icons d-flex">
                                            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                                            </li>
                                            <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                            <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest"></i></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                            </li>
                                        </ul>
                                        <div>
                                            <div class="share-btn"><i class='bx bxs-share-alt'></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                




            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 text-center">
                    <a href="live-auction.html" class="eg-btn btn--primary btn--md mx-auto">View All</a>
                </div>
            </div>
        </div>
    </div>


    <div class="upcoming-seciton pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Up Comming Auction</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="swiper upcoming-slider">
                    <div class="swiper-wrapper">

                        @foreach ($pro->take(13) as $key)
                            @php
                                $imagePathsArray = explode(',', $key->image_path);
                                $firstImagePath = $imagePathsArray[0];
                                
                                $nameArray = explode('|', $key->name);
                                $firtName = $nameArray[0];
                            @endphp
                            @if ($key->id_categories != 1)
                                <div class="swiper-slide">
                                    <div class="eg-card c-feature-card1 wow animate fadeInDown" data-wow-duration="1.5s"
                                        data-wow-delay="0.2s">
                                        <div class="auction-img">
                                            <img alt="image" src="{{$firstImagePath}}">
                                            <div class="auction-timer2 gap-lg-3 gap-md-2 gap-1">
                                                <div class="countdown-single">
                                                    <h5 class="timepro" data-end="{{ $key->time_end }}"></h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="author-area2">
                                                <div class="author-name">
                                                    <span>by @robatfox</span>
                                                </div>
                                                <div class="author-emo">
                                                    <img alt="image" src="assets/images/bg/upcoming-author1.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-feature-content">
                                            <div class="c-feature-category">Time Zoon</div>
                                            <a href="auction-details.html">
                                                <h4>{{$firtName}}</h4>
                                            </a>
                                            <p>Bidding Price : <span>{{$key->price_start}}</span></p>
                                            <div class="auction-card-bttm">
                                                <a href="auction-details.html" class="eg-btn btn--primary btn--sm">View
                                                    Details</a>
                                                <div class="share-area">
                                                    <ul class="social-icons d-flex">
                                                        <li><a href="https://www.facebook.com/"><i
                                                                    class="bx bxl-facebook"></i></a></li>
                                                        <li><a href="https://www.twitter.com/"><i
                                                                    class="bx bxl-twitter"></i></a>
                                                        </li>
                                                        <li><a href="https://www.pinterest.com/"><i
                                                                    class="bx bxl-pinterest"></i></a></li>
                                                        <li><a href="https://www.instagram.com/"><i
                                                                    class="bx bxl-instagram"></i></a></li>
                                                    </ul>
                                                    <div>
                                                        <div class="share-btn"><i class='bx bxs-share-alt'></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
                <div class="slider-bottom d-flex justify-content-between align-items-center">
                    <a href="live-auction.html" class="eg-btn btn--primary btn--md">View ALL</a>
                    <div class="swiper-pagination style-3 d-lg-block d-none"></div>
                    <div class="slider-arrows coming-arrow d-flex gap-3">
                        <div class="coming-prev1 swiper-prev-arrow" tabindex="0" role="button"
                            aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
                        <div class="coming-next1 swiper-next-arrow" tabindex="0" role="button"
                            aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial-section pt-80 pb-80">
        <img alt="image" src="assets/images/bg/client-right.png" class="client-right-vector">
        <img alt="image" src="assets/images/bg/client-left.png" class="client-left-vector">
        <img alt="image" src="assets/images/bg/clent-circle1.png" class="client-circle1">
        <img alt="image" src="assets/images/bg/clent-circle2.png" class="client-circle2">
        <img alt="image" src="assets/images/bg/clent-circle3.png" class="client-circle3">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>What Client Say</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                data-wow-delay=".2s">
                                <img alt="image" src="assets/images/icons/quote-green.svg" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="assets/images/bg/testi1.png">
                                </div>
                                <div class="testi-content">
                                    <p class="para">The Pacific Grove Chamber of Commerce would like to thank eLab
                                        Communications and Mr. Will Elkadi for all the efforts that
                                        assisted me nicely manners.</p>
                                    <div class="testi-designation">
                                        <h5><a href="blog.html">Johan Martin</a></h5>
                                        <p>CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                data-wow-delay=".4s">
                                <img alt="image" src="assets/images/icons/quote-green.svg" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="assets/images/bg/testi2.png">
                                </div>
                                <div class="testi-content">
                                    <p class="para">Nullam cursus tempor ex. Nullam nec dui id metus consequat congue
                                        ac at est. Pellentesque blandit neque at elit tristique tincidunt.</p>
                                    <div class="testi-designation">
                                        <h5><a href="#">Jamie anderson</a></h5>
                                        <p>Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                data-wow-delay=".4s">
                                <img alt="image" src="assets/images/icons/quote-green.svg" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="assets/images/bg/testi3.png">
                                </div>
                                <div class="testi-content">
                                    <p class="para">Maecenas vitae porttitor neque, ac porttitor nunc. Duis venenatis
                                        lacinia libero. Nam nec augue ut nunc vulputate tincidunt at suscipit nunc. </p>
                                    <div class="testi-designation">
                                        <h5><a href="#">John Peter</a></h5>
                                        <p>Area Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrows testimonial2-arrow d-flex justify-content-between gap-3">
                    <div class="testi-prev1 swiper-prev-arrow" tabindex="0" role="button"
                        aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
                    <div class="testi-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sponsor-section style-1 pb-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Trusted By 500+ Businesses.</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slick-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div id="slick1">

                        @foreach ($slides as $item)
                            @if ($item->code == 'slide-item')
                                <div class="slide-item"><img alt="image" src="{{ $item->image_path }}"></div>
                                <div class="slide-item"><img alt="image" src="{{ $item->image_path }}"></div>
                                <div class="slide-item"><img alt="image" src="{{ $item->image_path }}"></div>
                                <div class="slide-item"><img alt="image" src="{{ $item->image_path }}"></div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="recent-news-section pt-120 pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg">
        <img alt="image" src="assets/images/icons/dot-circle.svg" class="dot-circle">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Our Recent News</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-md-6 col-sm-10">
                    <div class="single-blog-style1 wow animate fadeInDown" data-wow-duration="1.5s"
                        data-wow-delay="0.2s">
                        <div class="blog-img">
                            <a href="#" class="blog-date"><i class="bi bi-calendar-check"></i>Jan 30, 2022</a>
                            <img alt="image" src="assets/images/blog/blogstyle11.png">
                        </div>
                        <div class="blog-content">
                            <h5><a href="blog-details.html">David Droga Still Has Faith in Online Advertising Creative
                                    Digital Reviews</a></h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/blog/author1.png">
                                    <a href="blog.html" class="author-name">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg">
                                    <a href="#" class="comment">05 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-10">
                    <div class="single-blog-style1 wow animate fadeInDown" data-wow-duration="1.5s"
                        data-wow-delay="0.4s">
                        <div class="blog-img">
                            <a href="#" class="blog-date"><i class="bi bi-calendar-check"></i>May 30,
                                2022</a>
                            <img alt="image" src="assets/images/blog/blogstyle12.png">
                        </div>
                        <div class="blog-content">
                            <h5><a href="blog-details.html">Take our friend Johnny No-Job, for example. He’s a
                                    specialist in influencer.</a></h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="assets/images/blog/author1.png">
                                    <a href="blog.html" class="author-name">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="assets/images/icons/comment-icon.svg">
                                    <a href="#" class="comment">05 Comments</a>
                                </div>
                            </div>
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
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow animate fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/employee.svg">
                        </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="5400">&nbsp;</h3>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow animate fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/review.svg">
                        </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="1250">&nbsp;</h3>
                            <p>Good Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow animate fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/smily.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="4250">&nbsp;</h3>
                            <p>Winner Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1 wow animate fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="counter-icon"> <img alt="image" src="assets/images/icons/comment.svg">
                        </div>
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

{{-- coundown cho product  --}}

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            //Lap qua tat ca cac dom co class la timepro

            $('.timepro').each((i, v) => {

                var endDate = $(v).data('end');
                calculateCountdown(endDate, v)
            })

            //Goi den ham calculateCountdown, truyen vao tham so thoi gian


            // Tạo một hàm để tính thời gian còn lại
            function calculateCountdown(endDate, countdownElement) {

                var endTime = new Date(endDate).getTime();
                console.log(endTime);
                var now = new Date().getTime();
                var timeRemaining = endTime - now;

                // Tính toán số lượng ngày, giờ, phút và giây còn lại
                var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Hiển thị đếm ngược trên trang HTML
                $(countdownElement).html(days + "Ngày : " + hours + "Giờ  " + minutes +
                    "Phút : " + seconds + "Giây");

                // Kiểm tra nếu đã đạt đến ngày kết thúc, thì dừng đếm ngược
                if (timeRemaining <= 0) {
                    clearInterval(countdownInterval);
                    $(countdownElement).innerHTML = "Đã kết thúc";
                }
            }

            // Gọi hàm calculateCountdown() mỗi giây để cập nhật đếm ngược
            var countdownInterval = setInterval(() => {
        $('.timepro').each((i, v) => {
            var endDate = $(v).data('end');
            calculateCountdown(endDate, v);
        });
    }, 1000);
        });
    </script>
@endsection
