<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Baba Çavuş</title>
    <meta name="description" content="Açıklama." />
    <meta name="author" content="Five Ajans">

    <link rel="icon" href="<?php echo e(asset_url('client/images/favicon.png')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/css/all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/css/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/js/lib/slick/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/js/lib/slick/slick-theme.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/css/flaticon.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset_url('client/css/responsive.css')); ?>">

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
	<div class="page-loading">
		<img src="<?php echo e(asset_url('client/images/loader.gif')); ?>" alt="Baba Çavuş">
	</div>
	<!-- page-loading end -->

    <div class="wrapper">
        <header>
            <div class="container-fluid">
                <div class="header-content d-flex flex-wrap align-items-center">
					<div class="logo">
						<a href="<?php echo e(site_url()); ?>" title="Baba Çavuş">
							<img src="<?php echo e(asset_url('client/images/logo.png')); ?>" alt="Baba Çavuş">
						</a>
					</div>
					<!-- logo end -->

					<nav>
						<ul>
							<li>
								<a href="<?php echo e(site_url()); ?>" title="Anasayfa" class="active">
									Anasayfa
								</a>
							</li>
							<li>
								<a href="#" title="Hakkımızda">
									Hakkımızda
								</a>
							</li>
							<li>
								<a href="#" title="Blog">
									Blog
								</a>
							</li>
							<li>
								<a href="#" title="İletişim">
									İletişim
								</a>
							</li>
						</ul>
					</nav>
					<!-- navigation end -->

                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div>
					<!-- menu-bar end -->

                    <ul class="oth-lnks ml-auto">
						<li>
							<img src="<?php echo e(asset_url('client/images/icons/phone.svg')); ?>" alt="Telefon">
							<a href="#">
								+1 654 847 52 25
							</a>
						</li>
						<li>
							<a href="#" title="Ara" class="search-icon">
								<img src="<?php echo e(asset_url('client/images/icons/search.svg')); ?>" alt="Ara">
							</a>
						</li>
						<li>
							<a href="#" title="Sepet" class="cart-ico">
								<img src="<?php echo e(asset_url('client/images/icons/cart.svg')); ?>" alt="Sepet">
							</a>
							<span class="cart-item-num">0</span>
						</li>
						<li>
							<a href="#" title="Giriş Yap" class="cart-ico">
								Giriş Yap
								<img src="<?php echo e(asset_url('client/images/icons/sign-in.svg')); ?>" alt="Giriş Yap">
							</a>
						</li>
					</ul>
					<!-- oth-lnks end -->

				</div>
				<!-- header-content end -->

				<div class="search-bar">
					<div class="container">
						<form action="" method="post">
							<input type="text" name="search" placeholder="Ara">
						</form>
					</div>
				</div>
				<!-- search-bar end -->

			</div>
        </header>
		<!-- header end -->

        <div class="responsive-mobile-menu">
			<ul>
				<li>
					<a href="<?php echo e(site_url()); ?>" title="Anasayfa" class="active">
						Anasayfa
					</a>
				</li>
				<li>
					<a href="#" title="Hakkımızda">
						Hakkımızda
					</a>
				</li>
				<li>
					<a href="#" title="Blog">
						Blog
					</a>
				</li>
				<li>
					<a href="#" title="İletişim">
						İletişim
					</a>
				</li>
			</ul>
		</div>
		<!-- responsive-mobile-menu end -->

		<?php echo $__env->yieldContent('content'); ?>

        <footer>
			<div class="top-footer">
				<div class="fixed-bg bg3"></div>
				<div class="phone-div">
					<div class="border-circle">
						<div class="phone-circle">
							<a href="#" title="" class="ext-link"></a>
							<svg width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18.3333 14.1V16.6C18.3343 16.8321 18.2867 17.0618 18.1937 17.2745C18.1008 17.4871 17.9644 17.678 17.7934 17.8349C17.6224 17.9918 17.4205 18.1113 17.2006 18.1856C16.9808 18.26 16.7478 18.2876 16.5167 18.2667C13.9523 17.9881 11.4891 17.1118 9.32498 15.7084C7.31151 14.4289 5.60443 12.7218 4.32498 10.7084C2.91663 8.53436 2.04019 6.05919 1.76665 3.48336C1.74583 3.25291 1.77321 3.02066 1.84707 2.80138C1.92092 2.5821 2.03963 2.3806 2.19562 2.20971C2.35162 2.03882 2.54149 1.90228 2.75314 1.80879C2.9648 1.7153 3.1936 1.66691 3.42499 1.66669H5.92498C6.32941 1.66271 6.72148 1.80592 7.02812 2.06964C7.33476 2.33335 7.53505 2.69956 7.59165 3.10002C7.69717 3.90008 7.89286 4.68563 8.17498 5.44169C8.2871 5.73996 8.31137 6.06412 8.24491 6.37576C8.17844 6.6874 8.02404 6.97345 7.79998 7.20002L6.74165 8.25836C7.92795 10.3446 9.65536 12.0721 11.7417 13.2584L12.8 12.2C13.0266 11.976 13.3126 11.8216 13.6242 11.7551C13.9359 11.6886 14.26 11.7129 14.5583 11.825C15.3144 12.1071 16.0999 12.3028 16.9 12.4084C17.3048 12.4655 17.6745 12.6694 17.9388 12.9813C18.203 13.2932 18.3435 13.6913 18.3333 14.1Z" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 col-md-6">
							<div class="widget widget-about">
								<img src="<?php echo e(asset_url('client/images/logo.png')); ?>" alt="Baba Çavuş">
								<h4>
									Working schedule
								</h4>
								<p>
									Mon-Sat: 9:00 am - 10:00 pm
									<br>
									Sun: 10:00 am - 8:00 pm
								</p>
							</div>
							<!--widget-about end-->

						</div>
						<div class="col-lg-6 col-md-6">
							<div class="widget widget-contact text-center">
								<h2>
									<span>Call us</span>
									to make an order!
								</h2>
								<p>
									Don’t be shy, we don’t bite :)
								</p>
								<strong>+1 654 847 52 25</strong>
							</div>
							<!--widget-contact end-->

						</div>
						<div class="col-lg-3 col-md-6">
							<div class="widget widget-payment">
								<div class="wid-payment">
									<h4>
										Payment Options
									</h4>
									<img src="<?php echo e(asset_url('client/images/imgs.png')); ?>" alt="Payment Options">
								</div>
								<div class="wid-payment">
									<h4>
										Download the App
									</h4>
									<ul>
										<li>
											<a href="#" title="Play Store">
												<img src="<?php echo e(asset_url('client/images/btn1.png')); ?>" alt="Play Store">
											</a>
										</li>
										<li>
											<a href="#" title="App Store">
												<img src="<?php echo e(asset_url('client/images/btn2.png')); ?>" alt="App Store">
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!--widget-payment end-->

						</div>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copyright">
								<p>
									&copy; Copyright <?php echo e(date('Y')); ?> BabaÇavuş
								</p>
							</div>
							<!-- copyright end -->

						</div>
						<div class="col-lg-6">
							<div class="find-us text-right">
								<h5>
									Find Us:
								</h5>
								<ul class="social-links-text">
									<li>
										<a href="#" title="Facebook">
											Facebook
										</a>
									</li>
									<li>
										<a href="#" title="Instagram">
											Instagram
										</a>
									</li>
									<li>
										<a href="#" title="Twitter">
											Twitter
										</a>
									</li>
								</ul>
							</div>
							<!-- find-us end -->

						</div>
					</div>
				</div>
			</div>
        </footer>
		<!--footer end-->

    </div>
	<!--wrapper end-->

    <script src="<?php echo e(asset_url('client/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset_url('client/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset_url('client/js/lib/slick/slick.js')); ?>"></script>
    <script src="<?php echo e(asset_url('client/js/isotope.js')); ?>"></script>
    <script src="<?php echo e(asset_url('client/js/scripts.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\babacavus-five\public\views/client/layouts/main.blade.php ENDPATH**/ ?>