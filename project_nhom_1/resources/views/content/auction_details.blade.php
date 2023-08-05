@extends('form_master.layout_index')
@section('action_details')
    <div class="inner-banner">
        <div class="container">
            <h2 class="inner-banner-title  wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s">Auction Details</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Auction Details</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="auction-details-section pt-120">
        <img alt="image" src="/assets/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="/assets/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row g-4 mb-50">


                <div
                    class="col-xl-6 col-lg-7 d-flex flex-row align-items-start justify-content-lg-start justify-content-center flex-md-nowrap flex-wrap gap-4">
                    <ul class="nav small-image-list d-flex flex-md-column flex-row justify-content-center gap-4  wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".4s">

                        @php
                            $imagePaths = explode(',', $pro->image_path);
                            $firstImagePath = $imagePaths[0];
                            
                            $nameString = explode('|', $pro->name);
                            
                            $firstName = $nameString[0];
                            $secondName = $nameString[1];
                            
                            $desciptionString = explode('|', $pro->description);
                            $firstdescription = $desciptionString[0];
                            
                        @endphp

                        @foreach ($imagePaths as $imagePath)
                            <li class="nav-item">
                                <div id="details-img1" data-bs-toggle="pill" data-bs-target="#gallery-img1"
                                    aria-controls="gallery-img1">
                                    <img class="js-image-element" alt="image" src="{{ $imagePath }}"
                                        class="img-fluid">
                                </div>
                            </li>
                        @endforeach

                    </ul>

                    <div class="tab-content mb-4 d-flex justify-content-lg-start justify-content-center  wow fadeInUp"
                        data-wow-duration="1.5s" data-wow-delay=".4s">

                        <div class="tab-pane big-image fade show active" id="gallery-img1">
                            <div class="auction-gallery-timer d-flex align-items-center justify-content-center flex-wrap">
                                <h3 class="timepro" data-end="{{ $pro->time_end }}">&nbsp;</h3>
                            </div>
                            <img alt="image" src="{{ $firstImagePath }}" class="img-fluid js-display-img"
                                style="width: 520px">
                        </div>

                    </div>

                </div>


                <div class="col-xl-6 col-lg-5">
                    <div class="product-details-right  wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h3>{{ $firstName }}</h3>
                        <p class="para">{{ $secondName }}</p>
                        <h4>Bidding Price: <span>{{ $pro->price_start }}$</span></h4>
                        <div class="bid-form">
                            <div class="form-title">
                                <h5>Bid Now</h5>
                                <p>Bid Amount : Minimum Bid $20.00</p>
                            </div>
                            <form>
                                <div class="form-inner gap-2">
                                    <input type="number" value="{{ $pro->price_start }}" oninput="adjustPrice(this)">



                                    <button class="eg-btn btn--primary btn--sm" type="button">Place Bid</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-8">
                    <ul class="nav nav-pills d-flex flex-row justify-content-start gap-sm-4 gap-3 mb-45 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".2s" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active details-tab-btn" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link details-tab-btn" id="pills-bid-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bid" type="button" role="tab" aria-controls="pills-bid"
                                aria-selected="false">Biding History</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link details-tab-btn" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Other Auction</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s"
                            id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="describe-content">
                                <h4>How can have anything you ant in life if you ?</h4>

                                <ul class="describe-list">

                                    @foreach ($desciptionString as $des)
                                        <li><a href="#">{{ $des }}</a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-bid" role="tabpanel" aria-labelledby="pills-bid-tab">
                            <div class="bid-list-area">
                                <ul class="bid-list">
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img alt="image" src="/assets/images/bg/bidder1.png">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>Robart FOX</h6>
                                                        </a>
                                                        <p>24.50 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 Hours Ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img alt="image" src="/assets/images/bg/bidder2.png">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>Jane Cooper</h6>
                                                        </a>
                                                        <p>224.5 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>5 Hours Ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img alt="image" src="/assets/images/bg/bidder3.png">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>Guy Hawkins</h6>
                                                        </a>
                                                        <p>34.5 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>6 Hours 45 minutes Ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img alt="image" src="/assets/images/bg/bidder1.png">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>Robart FOX</h6>
                                                        </a>
                                                        <p>24.50 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 Hours Ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-7">
                                                <div class="bidder-area">
                                                    <div class="bidder-img">
                                                        <img alt="image" src="/assets/images/bg/bidder2.png">
                                                    </div>
                                                    <div class="bidder-content">
                                                        <a href="#">
                                                            <h6>Robart FOX</h6>
                                                        </a>
                                                        <p>24.50 ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-end">
                                                <div class="bid-time">
                                                    <p>4 Hours Ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row d-flex justify-content-center g-4">

                                @foreach ($products->take(2) as $key)
                                    @php
                                        $imagePathsArray = explode(',', $key->image_path);
                                        $firstImagePath = $imagePathsArray[0];
                                        
                                        $nameArray = explode('|', $key->name);
                                        $firtName = $nameArray[0];
                                    @endphp

                                    <div class="col-lg-6 col-md-4 col-sm-10">
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
                                                <h4><a
                                                        href="{{ route('ShowFormAuctionDetails', ['id' => $key->id]) }}">{{ $firtName }}</a>
                                                </h4>
                                                <p>Bidding Price : <span><span>{{ $key->price_start }}$</span></span></p>
                                                <div class="auction-card-bttm">
                                                    <a href="{{ route('ShowFormAuctionDetails', ['id' => $key->id]) }}"
                                                        class="eg-btn btn--primary btn--sm">Place a Bid</a>
                                                    <div class="share-area">
                                                        <ul class="social-icons d-flex">
                                                            <li><a href="https://www.facebook.com/"><i
                                                                        class="bx bxl-facebook"></i></a>
                                                            </li>
                                                            <li><a href="https://www.twitter.com/"><i
                                                                        class="bx bxl-twitter"></i></a></li>
                                                            <li><a href="https://www.pinterest.com/"><i
                                                                        class="bx bxl-pinterest"></i></a>
                                                            </li>
                                                            <li><a href="https://www.instagram.com/"><i
                                                                        class="bx bxl-instagram"></i></a>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="sidebar-banner wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                            <div class="banner-content">
                                <span>CARS</span>
                                <h3>Toyota AIGID A Clasis Cars Sale</h3>
                                <a href="auction-details.html" class="eg-btn btn--primary card--btn">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-us-counter pt-120 pb-120">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1  wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="counter-icon"> <img alt="image" src="/assets/images/icons/employee.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="5400">&nbsp;</h3>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1  wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="counter-icon"> <img alt="image" src="/assets/images/icons/review.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="1250">&nbsp;</h3>
                            <p>Good Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1  wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="counter-icon"> <img alt="image" src="/assets/images/icons/smily.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="4250">&nbsp;</h3>
                            <p>Winner Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border1  wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".8s">
                        <div class="counter-icon"> <img alt="image" src="/assets/images/icons/comment.svg"> </div>
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


@section('scripts_details')
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



    <script>
        function adjustPrice(inputElement) {
            // Lấy giá trị đã được truyền vào từ PHP
            const priceStart = parseFloat(inputElement.getAttribute('value'));

            // Lấy giá trị mới nhập từ người dùng
            const newPrice = parseFloat(inputElement.value);

            // Kiểm tra nếu giá trị mới nhập vào nhỏ hơn giá trị đã truyền vào + 20 hoặc là giá trị ban đầu, thì đặt giá trị mới là giá trị đã truyền vào cộng thêm 20
            if (isNaN(newPrice) || newPrice <= priceStart) {
                inputElement.value = priceStart + 20; // Đặt giá trị mới là giá trị đã truyền vào cộng thêm 20
            }
        }
    </script>
@endsection
