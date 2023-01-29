<!DOCTYPE html>
<html>
<head>
    <title>SENDA</title>
    <link rel="icon" href="{{ asset('/back-end/admin/assets/img/logo.jpg')}}" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/index.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--====>> Font Awesome V4 CSS <<====-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--====>> Google Fonts CSS <<====-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
    <!--====>> Slick Slider CSS <<====-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>

    <!-- Custom select -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<style type="text/css">
    body {
        margin: 0px;
    }

</style>
</head>
    <body class="home-page">
        <div class="preloader">
                <div class="preloader-content">
                    <div class="preloader-item-1"></div>
                    <div class="preloader-item-2"></div>
                    <div class="preloader-item-3"></div>
                    <div class="preloader-item-4"></div>
                    <div class="preloader-item-5"></div>
                </div>
            </div>
            <!-- START SECTION HEADER -->
            <header>
                <header>
                <div class="user-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- START BLOCK INNER HEADER -->
                                <div class="iner-user-header">
                                    <nav class="second-nav">
                                        <ul>
                                            <li><a href="{{URL::to('about')}}">Giới thiệu</a></li>
                                            <li><a href="{{URL::to('contact')}}">Liên hệ</a></li>
                                            <li><a href="{{URL::to('blog')}}">Blog</a></li>
                                        </ul>
                                    </nav>
                                    <div class="user-settings">
                                        <ul>
                                            <li class="language">
                                                <p class="check"><img src="{{asset('front-end/img/vietnam.png')}}" alt="VN">Vietnam <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                                <ul>
                                                    <li><a href="#"><img src="{{asset('front-end/img/vietnam.png')}}" alt="VN">Vietnam</a></li>
                                                    <li><a href="#"><img src="{{asset('front-end/img/US_icon.jpg')}}" alt="US">English</a></li>
                                                </ul>
                                            </li>
                                            @if (Auth::user())  
                                            <li><a href="#" class=""><i class="fa fa-user-circle-o"></i> Xin chào, {{Auth::user()->lastName}}</a></li>
                                            <li><a href="{{URL::to('logout')}}" class=""><i class="fa fa-sign-out"></i> Đăng xuất</a></li> 
                                            @else
                                                <li><a href="#" class="header-sign"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a></li>
                                                <li><a href="#" class="header-login"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Đăng ký</a></li>
                                            @endif
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOCK INNER HEADER -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-header">
                                <!-- START SECTION HEADER TOP -->
                                <div class="main-header-top">
                                    <div class="logo">
                                        <div class="humburger"> <span></span> </div>
                                        <a href="{{URL::to('index')}}">Senda</a>
                                    </div>
                                    <form action="search" class="search-form">
                                        <div class="search-drop-down drop-down">
                                            <p class="selected"><span id="selected-category">Tất cả</span><i class="fa fa-angle-down" aria-hidden="true"></i></p>
                                            <ul class="search-list" data-select='#selected-category'>
                                                <li><p class="search-list-item select-item">Tất cả</p></li>
                                                <li><p class="search-list-item select-item">Chăm sóc</p></li>
                                                <li><p class="search-list-item select-item">Thảo luận</p></li>
                                                <li><p class="search-list-item select-item">Trao đổi</p></li>
                                                <li><p class="search-list-item select-item">Mua bán</p></li>
                                            </ul>
                                        </div>
                                        <input type="search" name="search" placeholder="Tìm kiếm...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                    <div class="indicators">
                                        <a href="#" class="indicator">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                            <span class="indicator-count">10</span>
                                        </a>
                                        <a href="#" class="indicator">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            <span class="indicator-count">14</span>
                                        </a>
                                        <a href="#" class="indicator cart">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            <span class="indicator-count">12</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- END SECTION HEADER TOP -->
                                <!-- START SECTION HEADER MENU -->
                                <div class="main-header-menu">
                                    <ul class="menu">
                                        <li class="close_menu">close</li>
                                        <li>
                                            <a href="{{URL::to('index')}}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('blog')}}">Bài viết</a>
                                            <i class="fa fa-angle-down to-menu" aria-hidden="true"></i>
                                            <ul>
                                                <li class="back"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</li>
                                                <li>
                                                    <a href="{{URL::to('blog/take-care')}}">Chăm sóc</a>
                                                    <i class="fa fa-angle-down to-menu" aria-hidden="true"></i>
                                                    <ul>
                                                        <li class="back"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</li>
                                                        <li><a href="single-news.html">Cho người mới bắt đầu</a></li>
                                                        <li><a href="single-news.html">Bệnh của cây</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{URL::to('blog/discuss')}}">Thảo luận</a>
                                                </li>
                                                <li><a href="{{URL::to('blog/trade')}}">Trao đổi</a></li>
                                                <li><a href="{{URL::to('blog/shop')}}">Mua bán</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{URL::to('about')}}">Giới thiệu</a></li>
                                        <li><a href="{{URL::to('user/my-post')}}">Xem bài đăng</a></li>
                                        <li>
                                            <a href="#">Đăng bài</a>
                                            <i class="fa fa-angle-down to-menu" aria-hidden="true"></i>
                                            <ul>
                                                <li class="back"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</li>
                                                <li>
                                                    <a href="{{URL::to('post/take-care')}}">Bài chăm sóc</a>
                                                    <i class="fa fa-angle-down to-menu" aria-hidden="true"></i>
                                                    <ul>
                                                        <li class="back"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</li>
                                                        <li><a href="single-news.html">Cho người mới bắt đầu</a></li>
                                                        <li><a href="single-news.html">Bệnh của cây</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{URL::to('post/discuss')}}">Thảo luận</a>
                                                </li>
                                                <li><a href="{{URL::to('post/trade')}}">Trao đổi</a></li>
                                                <li><a href="{{URL::to('post/shop')}}">Mua bán</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{URL::to('contact')}}">Liên hệ</a></li>
                                    </ul>
                                </div>
                                <!-- END SECTION HEADER MENU -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END SECTION HEADER -->
            
            <!-- START SECTION HOME -->
            <main class="home-content" style="padding-top: 100px;">
                <section>
                    <div class="container category-baner-wrap">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 col-xl-7 post-form">
                                @yield('content')
                            </div>
                            <div class="col-md-12 col-lg-5 col-xl-5 blog">
                                <h4>Hot posts</h4>
                                @foreach($hotPosts as $data)
                                <div class="blog col-xl-12" style="border: 1px solid rgba(0,0,0,.125); margin-top: 10px; border-radius: 10px; min-height: 100px;">
                                    <div class="row">
                                        <div class="image-post col-xl-4 col-lg-4 col-md-4" style="padding: 10px;">
                                            <img src="{{URL::to($data->imagePath)}}">
                                        </div>
                                        <div class="title-post col-xl-8 col-lg-8 col-md-8" style="padding-top: 10px;">
                                            <a href="{{URL::to('blog/'.$data->slug)}}" style="font-size: 14px;">{{$data->title}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <h4 style="padding-top: 40px;">New posts</h4>
                                @foreach($lastPosts as $data)
                                <div class="blog col-xl-12" style="border: 1px solid rgba(0,0,0,.125);margin-top: 10px; min-height: 100px; border-radius: 10px;">
                                    <div class="row">
                                        <div class="image-post col-xl-4 col-lg-4 col-md-4" style="padding: 10px;">
                                            <img src="{{URL::to($data->imagePath)}}">
                                        </div>
                                        <div class="title-post col-xl-8 col-lg-8 col-md-8" style="padding-top: 10px;">
                                            <a href="{{URL::to('blog/'.$data->slug)}}" style="font-size: 14px;">{{$data->title}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="brand-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="baner-content">
                                    <p class="h1">SENDA</p>
                                    <p class="h3">Hãy tham gia cùng chúng tôi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- END SECTION HOME -->
            <!-- START SECTION FOOTER -->
            <footer>
                <div class="base-block">
                    <div class="container">
                        <div class="row footer-nav">
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="wrap-footer-nav">
                                    <p class="h4">About us</p>
                                    <nav>
                                        <ul>
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="contact.html">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="wrap-footer-nav">
                                    <p class="h4">categories</p>
                                    <nav>
                                        <ul>
                                            <li><a href="about-us.html">Take care</a></li>
                                            <li><a href="about-us.html">Trade</a></li>
                                            <li><a href="#">Discuss</a></li>
                                            <li><a href="#">Shopping</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="wrap-footer-nav">
                                    <p class="h4">customer Services</p>
                                    <nav>
                                        <ul>
                                            <li><a href="about-us.html">Post blog</a></li>
                                            <li><a href="#">Post product</a></li>
                                            <li><a href="#">Read blog</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3 wrap-footer-contact">
                                <p class="h4">contact</p>
                                <ul class="footer-contact">
                                    <li>Adress: Huynh Lam, Hoa Hai, Ngu Hanh Son, Da Nang City</li>
                                    <li><a href="tel:0708026082">Phone: <span>(+84) 070 8026 082</span></a></li>
                                    <li><a href="mailto:pdmnhat.19it3@vku.udn.vn">Email: <span>pdmnhat.19it3@vku.udn.vn</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="footer-logo-wrap">
                                    <div class="footer-logo white">
                                        <a href="index.html">SENDA</a>
                                    </div>
                                    <p>Copyright © 2021 All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <div class="wrap-footer-subscribe">
                                    <p class="h4">CONTACT</p>
                                    <form action="#" class="subscribe-form">
                                        <input type="email" name="email" placeholder="Your e-mail" required>
                                        <button type="submit">CONTACT</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-offset-0 col-md-3 col-md-offset-1 col-lg-offset-1">
                                <div class="paymants-wrap">
                                    <p class="h4">DESIGN by</p>
                                    <ul class="footer-contact">
                                    <li>Pham Duong Minh Nhat</li>
                                </ul>
                                </div>              
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END SECTION FOOTER -->
            <!-- Begin regiter form -->
            
            <!-- End regiter form -->
            <!-- Begin forgot popup -->
            
            <!-- End forgot popup -->
            <!-- START SECTION POPUP -->
            <div class="main-popup">
                <div class="popup-content">
                    <div class="close-main-popup"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="footer-logo-wrap">
                        <div class="footer-logo white">
                            <a href="index.html">SENDA</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="h1">newsletter</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi</p>
                                <form action="#" class="popup-form">
                                    <div class="inner-wrap">
                                        <input type="text" placeholder="Name" required>
                                        <input type="email" placeholder="E-mail" required>
                                    </div>
                                    <button type="submit">subscribe</button>
                                </form>                     
                            </div>
                        </div>
                    </div>
                    <div class="do-not-show">
                        <input type="checkbox" id="do-not-show">
                        <label for="do-not-show">Do not show this popup again</label>
                    </div>
                </div>
                <div class="bg-popup"></div>
            </div>
            <!-- END SECTION POPUP -->
            <p class="back-top" id="toTop"><i class="fa fa-angle-up" aria-hidden="true"></i></p>
            <script type="text/javascript">
                function convertToSlug( str ) {
                    var slug;
                    slug = str.toLowerCase();

                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                    slug = slug.replace(/đ/gi, 'd');
                    //Xóa các ký tự đặt biệt
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    //Đổi khoảng trắng thành ký tự gạch ngang
                    slug = slug.replace(/ /gi, "-");
                    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                    slug = slug.replace(/\[/gi, "");
                    slug = slug.replace(/\]/gi, "");
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    //Xóa các ký tự gạch ngang ở đầu và cuối
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                    document.getElementById("slug").value= slug;
                }
            </script>
            <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'mytextarea' );
                CKEDITOR.replace( 'txtEditContent' );
            </script>
            <!-- ===> Juery 3.2.1 JS <==== -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!-- ===> Juery UI 1.12.1 JS <==== -->
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <!-- ===> Bootstrap 3 JS <==== -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- ===> Slick slider JS <==== -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
            <!-- ===> Touchpunch JS <==== -->
            <script src="libs/touchpunch/touchpunch.js"></script>
            <!-- Custom select -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <!-- ===> Common JS <==== -->
            <script src="{{asset('front-end/js/common.js')}}"></script>
    </body>
</html>