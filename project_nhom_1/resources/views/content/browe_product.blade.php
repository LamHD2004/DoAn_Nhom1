@extends('form_master.layout_index')

@section('browe_product')
    <div class="inner-banner">
        <div class="container">
            <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Live Auction</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Live Auction</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="live-auction-section pt-120 pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row gy-4 mb-60 d-flex justify-content-center">

                @foreach ($pro as $key)
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
                                <h4><a href="{{route('ShowFormAuctionDetails',['id'=>$key->id])}}">{{ $firtName }}</a></h4>
                                <p>Bidding Price : <span><span>{{ $key->price_start }}$</span></span></p>
                                <div class="auction-card-bttm">
                                    <a href="{{route('ShowFormAuctionDetails',['id'=>$key->id])}}" class="eg-btn btn--primary btn--sm">Place a Bid</a>
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
            <div class="row">
                <nav class="pagination-wrap">
                    <ul class="pagination d-flex justify-content-center gap-md-3 gap-2">
                        
                        {{ $pro->links() }}
                        
                       
                    </ul>
                </nav>
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
