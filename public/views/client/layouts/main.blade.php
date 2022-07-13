<!DOCTYPE HTML>
<html lang="en">
<head>

	<!--=============== basic ===============-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title>Suplyco</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">

	<!--=============== favicon ===============-->
	<link rel="shortcut icon" href="{{ asset_url('client/images/iconn.png') }}">

	<!--=============== css ===============-->
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/plugins.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/style.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/color.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset_url('client/css/custom.css') }}">

	@yield('styles')
</head>
<body>

	<!-- loader -->
	<div class="loader">
		<div class="loading-text-container">
			<span class="loading-text">
				Load<strong>ing</strong>
			</span>
			<span class="loader_count">0</span>
		</div>
		<div class="loader-anim"></div>
		<div class="loader-anim2 color-bg"></div>
	</div>
	<!-- loader end -->

	<!-- cookie -->
	<div class="cookie-message">
		<div class="cm-text">
			<span>We use cookies to improve our services.</span>
			<span>By continuing to navigate the website, you agree to the rules for the use of cookies</span>
		</div>
		<button class="btn fl-btn color-bg" id="cookie-accept">
			<span>Accept</span>
		</button>
	</div>
	<!-- cookie end -->

	<!-- main start -->
	<div id="main">

		<!-- header -->
		<header class="main-header">

			<!-- logo -->
			<a href="{{ site_url() }}" class="ajax logo-holder">
				<img src="{{ asset_url('client/images/logo.svg') }}" alt="">
			</a>
			<!-- logo end -->

			<!-- nav-button-wrap -->
			<div class="nav-button but-hol">
				<span class="ncs"></span>
				<span class="nos"></span>
				<span class="nbs"></span>
				<div class="menu-button-text">
					Menu
				</div>
			</div>
			<!-- nav-button-wrap end -->

			<!-- header-contacts -->
			<div class="header-contacts">
				<ul>
					<li>
						<span>01. Call</span>
						<a href="tel:+90 (212) 6704545">
							+90 (212) 6704545
						</a>
					</li>
					<li>
						<span>02. Write</span>
						<a href="mailto:info@suplyco.com">
							info@suplyco.com
						</a>
					</li>
				</ul>
				<a href="contacts.html" class="ajax contacts-btn">
					Get in touch
				</a>
			</div>
			<!-- header-contacts end -->

		</header>
		<!-- header end -->

		<!-- left-header -->
		<aside class="left-header">
			<span class="lh_dec color-bg"></span>
			<div class="left-header_social">
				<ul>
					<li>
						<a href="#">
							<img src="{{ asset_url('client/fonts/tr.svg') }}" alt="" width="20" height="20">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="{{ asset_url('client/fonts/de.svg') }}" alt="" width="20" height="20">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="{{ asset_url('client/fonts/es.svg') }}" alt="" width="20" height="20">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="{{ asset_url('client/fonts/cn.svg') }}" alt="" width="20" height="20">
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- left-header end -->

		<!-- share button -->
		<div class="share-btn showshare color-bg">
		<span>
			Share
			<i class="fal fa-plus"></i></span>
		</div>
		<!-- share button end -->

		<!-- right header -->
		<div class="hc_dec_color">
			<div class="page-subtitle"><span></span></div>
		</div>
		<!-- right header end -->

		<!-- wrapper -->
		<div id="wrapper">
			<!-- navigation menu-->
			<div class="nav-holder">
				<div class="nav-holder-wrap but-hol">
					<div class="nav-container fl-wrap">

						<!-- nav -->
						<nav class="nav-inner" id="menu">
							<ul>
								<li>
									<a href="{{ site_url() }}">
										Home
									</a>
								</li>
								<li>
									<a href="{{ site_url('about') }}">
										About
									</a>
								</li>
								<li>
									<a href="{{ site_url('products') }}">
										Products
									</a>
								</li>
								<!--<li>
									<a href="about.html">
										Sustaınabılıty
									</a>
								</li>
								<li>
									<a href="about.html">
										Communıty
									</a>
								</li>-->
								<li>
									<a href="{{ site_url('career') }}">
										Career
									</a>
								</li>
								<li>
									<a href="{{ site_url('contact') }}">
										Contact
									</a>
								</li>
							</ul>
						</nav>
						<!-- nav end-->

					</div>
					<div class="nav-footer">
						<span>&copy; Suplyco {{ date('Y') }} / ALL RIGHTS RESERVED.</span>
					</div>
					<div class="nav-holder-wrap_line"></div>
					<div class="nav-holder-wrap_dec"></div>
				</div>
			</div>
			<div class="nav-overlay"></div>
			<!-- navigation menu end -->

			@yield('content')

			<!-- share-wrapper -->
			<div class="share-wrapper">
				<div class="close-share-btn">
					<i class="fal fa-long-arrow-left"></i>
				</div>
				<div class="share-container fl-wrap isShare"></div>
			</div>
			<!-- share-wrapper end -->

		</div>
		<!-- wrapper end -->

		<!-- cursor-->
		<div class="element">
			<div class="element-item"></div>
		</div>
		<!-- cursor end-->

	</div>
	<!-- Main end -->

	<!--=============== scripts  ===============-->
	<script src="{{ asset_url('client/js/jquery.min.js') }}"></script>
	<script src="{{ asset_url('client/js/plugins.js') }}"></script>
	<script src="{{ asset_url('client/js/scripts.js') }}"></script>
	<script src="{{ asset_url('client/js/custom.js') }}"></script>

	@yield('scripts')
</body>
</html>
