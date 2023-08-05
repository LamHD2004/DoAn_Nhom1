@extends('form_master.layout_index')

@section('blog')
    <div class="inner-banner">
        <div class="container">
            <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Our Blog</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="blog-section pt-120 pb-120">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="assets/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center g-4 mb-60">

                @foreach ($blogs as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                        <div class="single-blog-style1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                            <div class="blog-img">
                                <a href="#" class="blog-date"><i class="bi bi-calendar-check"></i>{{$item->pubdate}}</a>
                                <img alt="image" src="{{$item->image_path}}">
                            </div>
                            <div class="blog-content">
                                <h5><a href="ShowFormBlogDetails">{{$item->title}}</a></h5>
                                <div class="blog-meta">
                                    <div class="author">
                                        <img alt="image" src="assets/images/blog/author1.png">
                                        <a href="ShowFormBlogDetails" class="author-name">Johan Martin</a>
                                    </div>
                                    <div class="comment">
                                        <img alt="image" src="assets/images/icons/comment-icon.svg">
                                        <a href="#" class="comment">05 Comments</a>
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
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">02</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
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
