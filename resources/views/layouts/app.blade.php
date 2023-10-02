<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!---google fonts hear-->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<!--font awesome css-->
	<script defer src="https://kit.fontawesome.com/c1a85835c5.js"></script>
	<!--animate css hear-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- light_case css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/css/lightcase.min.css" />
	<!--swiper css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
	<!-- shortcut image png is loaded -->
	<link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.png')}}">
	<!-- style CSS is loaded -->
	<link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    @yield('styles')

	<title>@yield('title','DevsTron')</title>
</head>

<body data-spy="scroll" class="overflow-auto">
	<!-- preloader start here -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- preloader ending here -->
	<!-- offer area start -->
	<!-- <div class="offer position-fixed">
		<div class="container">
			<div class="offer-box d-flex justify-content-between p-2">
				<p>Get <b>50%</b> discount for your 1st purchase</p>
				<a href="#">Close</a>
			</div>
		</div>
	</div> -->
	<!-- offer area end -->
	<!-- mobile menu area start -->
	<div class="mobile-menu">
		<nav class="mobile-header primary-menu d-lg-none">
			<div class="header-logo">
				<a href="/" class="logo style-1">
					<img src="{{ asset ('assets/images/logo/logo-black.png')}}" alt="logo">
				</a>
			</div>
			<div class="header-bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</nav>
		<nav class="menu">
			<div class="mobile-menu-area d-lg-none">
				<div class="mobile-menu-area-inner" id="scrollbar">
					<ul class="m-menu">
						<li>
							<a href="/" class="active">Home</a>
						</li>
						<li>
							<a href="#0">About</a>
							<ul class="m-submenu">
								<li>
									<a href="/about">About Us</a>
								</li>
								<li>
									<a href="/team">Teams</a>
								</li>
								<li>
									<a href="/career">Career</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="/service">Services</a>
						</li>
						<li>
							<a href="/portfolio">Portfolio</a>
						</li>
						<li>
							<a href="/blog">Blogs</a>
						</li>
						<li>
							<a href="/contact">Contact Us</a>
						</li>
						<li>
							<a href="https://helpdesk.devstron.com"><i class="fa-solid fa-headset"></i> Helpdesk</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- mobile menu area end -->

	<!-- header start -->
	<header class="d-none d-lg-block">
		<div class="bg-white">
			<div class="container-fluid">
				<div class="header-item">
					<div class="header-logo">
						<a href="/"><img src="{{ asset ('assets/images/logo/logo-black.png')}}" alt="logo"></a>
					</div>
					<div class="header-menu">
						<nav class="primary-menu">
							<div class="main-menu-area">
								<ul class="main-menu">
									<li>
										<a href="/" class="active">Home</a>
									</li>
									<li>
										<a href="#0">About</a>
										<ul class="submenu">
											<li>
												<a href="/about">About Us</a>
											</li>
											<li>
												<a href="/team">Teams</a>
											</li>
											<li>
												<a href="/career">Career</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/service">Services</a>
									</li>
									<li>
										<a href="/portfolio">Portfolio</a>
									</li>
									<li>
										<a href="/blog">Blogs</a>
									</li>
									<li>
										<a href="/contact">Contact Us</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="herder-icon">
						<ul class="search-cart">
							<li class="cart">
								<a href="https://helpdesk.devstron.com" class="cart-link">
									<i class="fa-solid fa-headset"></i> Help
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->

    @yield('content')


	<!-- footer area start -->
	<footer>
		<div class="footer-position">
			<div class="animate-bubble style-1 style-2">
				<div class="bubble a-one"></div>
				<div class="bubble a-three"></div>
				<div class="bubble a-four"></div>
				<div class="bubble a-six"></div>
				<div class="bubble a-eight">
					<img src="{{ asset ('assets/images/banner/shape/a3.png')}}" alt="animate">
				</div>
				<div class="bubble a-nine">
					<img src="{{ asset ('assets/images/banner/shape/a3.png')}}" alt="animate">
				</div>
				<div class="bubble a-ten">
					<img src="{{ asset ('assets/images/banner/shape/a3.png')}}" alt="animate">
				</div>
				<div class="bubble a-eleven">
					<img src="{{ asset ('assets/images/banner/shape/a3.png')}}" alt="animate">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-12">
						<div class="footer-media">
							<a href="#">
								<img src="{{ asset ('assets/images/logo/logo-white.png')}}" alt="footer-image">
							</a>
							<p>
								DevsTron create engaging desktop, mobile, and online solutions with skilled software
								developers on staff, for our clients.
							</p>
							<ul class="footer-social">
								<li>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6  col-12">
						<div class="footer-contact">
							<h4>Contact Us</h4>
							<ul>
								<li>
									<i class="fas fa-map-marker-alt"></i>
									<span>12NA2, Sraboni Building, Khilket</span>
								</li>
								<li>
									<i class="fas fa-phone"></i>
									<span>(+880) 1516-117503</span>
								</li>
								<li>
									<i class="fas fa-envelope"></i>
									<span>hello@devstron.com</span>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6  col-12">
						<div class="link-us">
							<h4>Quick Link</h4>
							<ul>
								<li>
									<a href="/">Home</a>
								</li>
								<li>
									<a href="/about">About</a>
								</li>
								<li>
									<a href="/career">Career</a>
								</li>
								<li>
									<a href="/blog">Blog</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6  col-12">
						<div class="footer-news">
							<h4>newsletter</h4>
							<form action="#0">
								<input type="text" class="email" placeholder="Enter Email Address">
								<button type="submit" class="button">
									Subscribe
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="footer-bottom">
		<div class="container">
			<div class="copy-right text-center">
				<p>&copy; 2022 <a href="/">DevsTron</a> Rights Reserved.
			</div>
		</div>
	</div>
	<!-- footer area ends -->

	<!--scroll up-->
	<div class="scroll-top">
		<div class="scrollToTop active">
			<span>
				<i class="fas fa-arrow-up"></i>
			</span>
		</div>
	</div>
	<!--scroll up-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Bootstrap JS, then font-awosame, then lightcase Js, then image loaded & isotope Js, than swiper js -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/countdown/2.6.0/countdown.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/js/lightcase.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
	<script src="{{ asset ('assets/js/theia-sticky-sidebar.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="{{ asset ('assets/js/app.js')}}"></script>
    @yield('scripts')
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>
