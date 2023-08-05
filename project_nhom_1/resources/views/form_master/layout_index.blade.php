<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/bidout/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 07:08:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidout - Auction and Bidding HTML Template</title>
    <link rel="icon" href="/assets/images/bg/sm-logo.png" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="/assets/css/animate.css">

    <link rel="stylesheet" href="/assets/css/all.css">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/boxicons.min.css">

    <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/jquery-ui.css">

    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/slick.css">

    <link rel="stylesheet" href="/assets/css/nice-select.css">

    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/css/odometer.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>



    <div class="mobile-search">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <label>What are you lookking for?</label>
                    <input type="text" placeholder="Search Products, Category, Brand">
                </div>
                <div class="col-1 d-flex justify-content-end align-items-center">
                    <div class="search-cross-btn">

                        <i class="bi bi-x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="topbar">
        <div class="topbar-left d-flex flex-row align-items-center">
            <h6>Follow Us</h6>
            <ul class="topbar-social-list gap-2">
                <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
            </ul>
        </div>
        <div class="email-area">
            <h6>Email: <a
                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#d4b7bbbaa0b5b7a094b1acb5b9a4b8b1fab7bbb9"><span
                        class="__cf_email__"
                        data-cfemail="cdaea2a3b9acaeb98da8b5aca0bda1a8e3aea2a0">[email&#160;protected]</span></a></h6>
        </div>
        <div class="topbar-right">
            <ul class="topbar-right-list">
                <li><span>Language</span><img src="/assets/images/icons/flag-eng.png" alt="image">
                    <ul class="topbar-sublist">
                        <li><span>Germeny</span><img src="/assets/images/icons/flag-germeny.svg" alt="image"></li>
                        <li> <span>French</span><img src="/assets/images/icons/flag-french.svg" alt="image"></li>
                        <li><span>Bengali</span><img src="/assets/images/icons/flag-bangla.svg" alt="image"></li>
                    </ul>
                </li>
                <li>Currency
                    <ul class="topbar-sublist">
                        <li><a href="login.html"><i class="bi bi-currency-dollar"></i>Usd</a></li>
                        <li><a href="register.html"><i class="bi bi-currency-euro"></i>Euro</a></li>
                        <li><a href="register.html"><i class="bi bi-currency-pound"></i>Pound</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <header class="header-area style-1">
        <div class="header-logo">
            <a href="ShowFormHomePage"><img alt="image" src="/assets/images/bg/header-logo.png"></a>
        </div>
        <div class="main-menu">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap ">
                    <a href="index-2.html"><img alt="image" src="/assets/images/bg/header-logo.png"></a>
                </div>
                <div class="menu-close-btn">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>

            @php
                $cat_parent = $cat->where('parent', '', null);
            @endphp

            <ul class="menu-list">
                @foreach ($cat_parent as $item)
                    @if ($item->image_path == null)
                        @php
                            $childs = $cat->where('parent', '=', $item->id);
                        @endphp
                        <li class="{{ count($childs) > 0 ? 'menu-item-has-children' : '' }}">
                            @if ($item->parent == null)
                                <a href="/{{$item->link}}">{{ $item->name }}</a>
                                @php
                                    $childs = $cat->where('parent', '=', $item->id);                                  
                                @endphp
                                @if (count($childs) > 0)
                                    <ul class="submenu">
                                        @foreach ($childs as $r)
                                            <li><a href="/{{$r->link}}">{{ $r->name }}</a></li>
                                        @endforeach

                                    </ul>
                                @endif
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>

            <div class="d-lg-none d-block">
                <form class="mobile-menu-form mb-5">
                    <div class="input-with-btn d-flex flex-column">
                        <input type="text" placeholder="Search here...">
                        <button type="submit" class="eg-btn btn--primary btn--sm">Search</button>
                    </div>
                </form>
                <div class="hotline two">
                    <div class="hotline-info">
                        <span>Click To Call</span>
                        <h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-right d-flex align-items-center">
            <div class="hotline d-xxl-flex d-none">
                <div class="hotline-icon">
                    <img alt="image" src="/assets/images/icons/header-phone.svg">
                </div>
                <div class="hotline-info">
                    <span>Click To Call</span>
                    <h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
                </div>
            </div>
            <div class="search-btn">
                <i class="bi bi-search"></i>
            </div>
            <div class="eg-btn btn--primary header-btn">
                <a href="dashboard.html">My Account</a>
            </div>
            <div class="mobile-menu-btn d-lg-none d-block">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    </header>


    @yield('homepage')

    @yield('about')

    @yield('how_work')

    @yield('browe_product')

    @yield('blog')

    @yield('blog_details')

    @yield('action_details')

    @yield('faq')

    @yield('histories')

    @yield('login')
    
    @yield('signup')

    @yield('404')

    @yield('contact')




    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <a href="index-2.html"><img alt="image" src="/assets/images/bg/footer-logo.png"></a>
                            <p>Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                            <form>
                                <div class="input-with-btn d-flex jusify-content-start align-items-strech">
                                    <input type="text" placeholder="Enter your email">
                                    <button type="submit"><img alt="image"
                                            src="/assets/images/icons/send-icon.svg"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                        <div class="footer-item">
                            <h5>Navigation</h5>
                            <ul class="footer-list">
                                <li><a href="live-auction.html">All Product</a></li>
                                <li><a href="how-works.html">How It Works</a></li>
                                <li><a href="dashboard.html">My Account</a></li>
                                <li><a href="about.html">About Company</a></li>
                                <li><a href="blog.html">Our News Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                        <div class="footer-item">
                            <h5>Help & FAQs</h5>
                            <ul class="footer-list">
                                <li><a href="product.html">Help Center</a></li>
                                <li><a href="faq.html">Customer FAQs</a></li>
                                <li><a href="login.html">Terms and Conditions</a></li>
                                <li><a href="about.html">Security Information</a></li>
                                <li><a href="blog.html">Merchant Add Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h5>Latest Feed</h5>
                            <ul class="recent-feed-list">
                                <li class="single-feed">
                                    <div class="feed-img">
                                        <a href="blog-details.html"><img alt="image"
                                                src="/assets/images/blog/recent-feed1.png"></a>
                                    </div>
                                    <div class="feed-content">
                                        <span>January 31, 2022</span>
                                        <h6><a href="blog-details.html">Grant Distributions Conti nu to Incr Ease.</a>
                                        </h6>
                                    </div>
                                </li>
                                <li class="single-feed">
                                    <div class="feed-img">
                                        <a href="blog-details.html"><img alt="image"
                                                src="/assets/images/blog/recent-feed2.png"></a>
                                    </div>
                                    <div class="feed-content">
                                        <span>February 21, 2022</span>
                                        <h6><a href="blog-details.html">Seminar for Children to Learn About.</a></h6>
                                    </div>
                                </li>
                                <li class="single-feed">
                                    <div class="feed-img">
                                        <a href="/blog-details.html"><img alt="image"
                                                src="/assets/images/blog/recent-feed3.png"></a>
                                    </div>
                                    <div class="feed-content">
                                        <span>March 22, 2022</span>
                                        <h6><a href="blog-details.html">Education and teacher for all African
                                                Children.</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex align-items-center g-4">
                    <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center">
                        <p>Copyright 2022 <a href="#">Bid Out</a> | Design By <a
                                href="https://www.egenslab.com/" class="egns-lab">Egens Lab</a></p>
                    </div>
                    <div
                        class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center flex-sm-nowrap flex-wrap">
                        <p class="d-sm-flex d-none">We Accepts:</p>
                        <ul class="footer-logo-list">
                            <li><a href="#"><img alt="image" src="/assets/images/bg/footer-pay1.png"></a>
                            </li>
                            <li><a href="#"><img alt="image" src="/assets/images/bg/footer-pay2.png"></a>
                            </li>
                            <li><a href="#"><img alt="image" src="/assets/images/bg/footer-pay3.png"></a>
                            </li>
                            <li><a href="#"><img alt="image" src="/assets/images/bg/footer-pay4.png"></a>
                            </li>
                            <li><a href="#"><img alt="image" src="/assets/images/bg/footer-pay5.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script data-cfasync="false" src="/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/jquery.nice-select.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/viewport.jquery.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/auction-detail.js"></script>
    @yield('scripts')
    @yield('scripts_details')
</body>

<!-- Mirrored from demo.egenslab.com/html/bidout/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 07:08:35 GMT -->

</html>
