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
			<!-- Begin hot-categories -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="hot-categories">
								<p>Danh mục: </p>
								<ul>
									<li><a href="{{URL::to('blog/take-care')}}">Chăm sóc</a></li>
									<li><a href="{{URL::to('blog/trade')}}">Trao đổi</a></li>
									<li><a href="{{URL::to('blog/discuss')}}">Thảo luận</a></li>
									<li><a href="{{URL::to('blog/shop')}}">Mua bán</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End hot-categories -->
			<!-- Begin home slider -->
			<section>
				<div class="home-slider">
					<img src="{{asset('front-end/img/home-slider.jpg')}}" alt="coffee" style="width: 100%; height: auto;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="slider">
									<div class="slide slide-1">			
										<div class="slide-desc">
											<h1>Chăm sóc</h1>
											<p class="h3 discount">Làm thế nào để chăm sóc cây đúng cách?</p>
											<a href="blog/take-care" class="button">Read now</a>
										</div>
									</div>
									<div class="slide slide-2">			
										<div class="slide-desc">
											<h1>Thảo luận</h1>
											<p class="h3 discount">Cùng nhau trao đổi kiến thức</p>
											<a href="blog/discuss" class="button">Read now</a>
										</div>
									</div>
									<div class="slide slide-3">			
										<div class="slide-desc">
											<h1>Trao đổi</h1>
											<p class="h3 discount">Trao đổi cây</p>
											<a href="blog/discuss" class="button">Read now</a>
										</div>
									</div>
									<div class="slide slide-3">			
										<div class="slide-desc">
											<h1>Mua bán</h1>
											<p class="h3 discount">Mua bán cây<span>-10%</span></p>
											<a href="blog/shop" class="button">shop now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End home slider -->
			<!-- START SECTION HOME -->
			<main class="home-content" style="padding-top: 100px;">
				<section>
					<div class="container category-baner-wrap">
						<div class="row">
							<div class="col-md-4">
								<div class="category-baner">
									<img src="{{asset('front-end/img/category-baners-1.jpg')}}" class="category-baner-2">
									<div class="category-baner-text">
										<h2>new!</h2>
										<h3>the new posts</h3>
										<a href="blog/new-posts" class="button" style="color: #404040;">read now</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">				
								<div class="category-baner">
									<img src="{{asset('front-end/img/category-baners-2.jpg')}}" class="category-baner-2">
									<div class="category-baner-text">
										<h2>Hot!</h2>
										<h3>The hot posts </h3>
										<a href="blog/hot-posts" class="button" style="color: #404040;">read now</a>
									</div>
								</div>				
							</div>
							<div class="col-md-4">
								<div class="category-baner">
									<img src="{{asset('front-end/img/category-baners-3.jpg')}}" class="category-baner-2">
									<div class="category-baner-text">
										<h2>Shopping!</h2>
										<h3>buy it</h3>
										<a href="blog/shop" class="button" style="color: #404040;">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="featured-slider">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<p class="h3">Post</p>
									<p class="h2 separator">Hot Post</p>
									<div class="prev-slider"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
									<div class="next-slider"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="slider">
										@foreach($hotPosts as $data)
										<div class="card">
											<div class="post" style="width: 100%; min-height: 450px;">
												<div class="post-prev">
													<a href="blog/{{$data->slug}}">
														<img src="{{$data->imagePath}}" alt="post" style="width: 100%; height: 300px;">
													</a>
												</div>
												<div class="post-head">
													<div class="post-data">
														<time datetime="2018-05-23" class="time-bg">{{ date('M', strtotime($data->updated_at)) }}<span>{{ date('d', strtotime($data->updated_at)) }}</span></time>
													</div>
													<div class="iner-post-head" style="width: auto; min-height: 130px; padding-right: 10px;">
														<a href="blog/{{$data->slug}}" class="h4">{{$data->title}}</a>
														<ul class="post-tag">
															<li><a href="#">by {{$data->firstName}} {{$data->lastName}}</a></li>
															<li><a href="#card">{{$data->category}}</a></li>
														</ul>
													</div>
												</div>
												<div class="post-desc">
													<a href="blog/{{$data->slug}}" class="learn">Read more</a>
													<span style="float: right;"><i class="fa fa-eye"></i>  {{$data->viewCount}}</span>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="baner">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="baner-content">
										<p class="h1">SENDA</p>
										<p class="h3">Nơi những con người yêu thích <span>sen đá</span></p>
										<a href="{{URL::to('blog')}}" class="button">Read now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="base-block">
					<div class="latest-post-slider">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<p class="h3">What's new</p>
									<p class="h2 separator">new post blog</p>
									<div class="prev-slider"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
									<div class="next-slider"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-12">
									<div class="slider">
										@foreach($lastPosts as $data)
										<div class="card">
											<div class="post" style="width: 100%; min-height: 450px;">
												<div class="post-prev">
													<a href="blog/{{$data->slug}}">
														<img src="{{$data->imagePath}}" alt="post" style="width: 100%; height: 300px;">
													</a>
												</div>
												<div class="post-head">
													<div class="post-data">
														<time datetime="2018-05-23" class="time-bg">{{ date('M', strtotime($data->updated_at)) }}<span>{{ date('d', strtotime($data->updated_at)) }}</span></time>
													</div>
													<div class="iner-post-head" style="width: auto; min-height: 130px; padding-right: 10px;">
														<a href="blog/{{$data->slug}}" class="h4">{{$data->title}}</a>
														<ul class="post-tag">
															<li><a href="#">by {{$data->firstName}} {{$data->lastName}}</a></li>
															<li><a href="#card">{{$data->category}}</a></li>
														</ul>
													</div>
												</div>
												<div class="post-desc">
													<a href="blog/{{$data->slug}}" class="learn">Read more</a>
													<span style="float: right;"><i class="fa fa-eye"></i>  {{$data->viewCount}}</span>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="best-seller-slider">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<p class="h3">TakeCare</p>
									<p class="h2 separator">How to take care?</p>
									<div class="prev-slider"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
									<div class="next-slider"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
								</div>
							</div>			
							<div class="row">
								<div class="col-md-12">
									<div class="slider">
										@foreach($takeCarePosts as $data)
										<div class="card">
											<div class="post" style="width: 100%; min-height: 450px;">
												<div class="post-prev">
													<a href="blog/{{$data->slug}}">
														<img src="{{$data->imagePath}}" alt="post" style="width: 100%; height: 300px;">
													</a>
												</div>
												<div class="post-head">
													<div class="post-data">
														<time datetime="2018-05-23" class="time-bg">{{ date('M', strtotime($data->updated_at)) }}<span>{{ date('d', strtotime($data->updated_at)) }}</span></time>
													</div>
													<div class="iner-post-head" style="width: auto; min-height: 130px; padding-right: 10px;">
														<a href="blog/{{$data->slug}}" class="h4">{{$data->title}}</a>
														<ul class="post-tag">
															<li><a href="#">by {{$data->firstName}} {{$data->lastName}}</a></li>
															<li><a href="#card">{{$data->category}}</a></li>
														</ul>
													</div>
												</div>
												<div class="post-desc">
													<a href="blog/{{$data->slug}}" class="learn">Read more</a>
													<span style="float: right;"><i class="fa fa-eye"></i>  {{$data->viewCount}}</span>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
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
			{{-- @if(!empty($errorLogin))
				<script type="text/javascript">alert("Tài khoản hoặc mật khẩu không đúng, vui lòng kiểm tra lại");</script>
			@endif --}}
			@if (session('errorLogin'))
			    <script type="text/javascript">alert('Tài khoản hoặc mật khẩu không đúng!! Vui lòng thử lại');</script>
			@endif
			@if (session('emptyLogin'))
			    <script type="text/javascript">alert('Vui lòng đăng nhập để sử dụng tính năng này');</script>
			@endif
			<div class="popup-register-form">
				<div class="wrap-register-form">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="popup-form-block">
									<div class="sign-up-text">
										<p class="h4">Don't have an account?</p>
										<p>Still not registered? Register and you will be able to comment and ask questions to specialists.</p>
										<p class="to-form to-signup-thumb">Sign Up</p>
									</div>
									<div class="sign-in-text">
										<p class="h4">Already have an account? Sign in</p>
										<p>If you already have an account, just enter your login information. So you can leave comments and ask questions to specialists.</p>
										<p class="to-form to-signin-thumb">Sign In</p>
									</div>
									<div class="wrap-form to-signup" id="wrap-sign-form">
										<div class="close-popup-form"><i class="fa fa-times" aria-hidden="true"></i></div>
										<form action="register" class="sign-up" method="POST">
											{{ csrf_field() }}
											<p class="h4">Register</p>
											<div class="form-info-wrap">
												<input type="text" id="up-user" placeholder="FirstName" name="firstName" required>
												<label for="up-user"><i class="fa fa-user" aria-hidden="true"></i></label>
											</div>
											<div class="form-info-wrap">
												<input type="text" id="up-user" placeholder="LastName" name="lastName" required>
												<label for="up-user"><i class="fa fa-user" aria-hidden="true"></i></label>
											</div>
											<div class="form-info-wrap">
												<input type="text" id="up-user" placeholder="Username" name="userName" required>
												<label for="up-user"><i class="fa fa-user" aria-hidden="true"></i></label>
											</div>
											<div class="form-info-wrap">
												<input type="text" id="up-email" placeholder="E-mail" name="email" required>
												<label for="up-email"><i class="fa fa-envelope" aria-hidden="true"></i></label>
											</div>
											<div class="form-info-wrap">
												<input type="password" id="up-pass" placeholder="Password" name="password"required>
												<label for="up-pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
											</div>
											<button type="submit">Sign Up</button>
											<p class="to-form to-signin-thumb">Sign In</p>
										</form>
										<form action="login" class="sign-in" method="POST">
											{{ csrf_field() }}
											<p class="h4">Login</p>
											<div class="form-info-wrap">
												<input type="text" id="in-user" placeholder="Username" name="userName" required>
												<label for="in-user"><i class="fa fa-user" aria-hidden="true"></i></label>
											</div>
											<div class="form-info-wrap">
												<input type="password" id="in-pass" placeholder="Password" name="password" required>
												<label for="in-pass"><i class="fa fa-lock" aria-hidden="true"></i></label>
											</div>
											<button type="submit">Login</button>
											<p id="forgot" class="forgot">Forgot password?</p>
											<p class="to-form to-signup-thumb">Sign Up</p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-register-form-succeed">
					<div class="register-succeed-content">
						<div class="logo">
							<a href="index.html">Coffee<span>.</span></a>
						</div>
						<h3>Thanks for <br> your registration</h3>
					</div>
				</div>
			</div>
			<!-- End regiter form -->
			<!-- Begin forgot popup -->
			<div class="forgot-popup-wrap">
				<div class="forgot-popup">
					<p class="close-forgot"><i class="fa fa-times" aria-hidden="true"></i></p>
					<h4>Forgot password?</h4>
					<p>Enter your email address and we will send you further instructions on how to reset the password.</p>
					<form action="#" class="forgot-popup-form">
						<input type="email" placeholder="E-mail" required>
						<button type="submit">Restore password</button>
					</form>
					<p class="to-login">Back to login</p>
				</div>
			</div>
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