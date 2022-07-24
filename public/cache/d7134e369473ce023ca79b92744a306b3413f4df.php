

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="content full-height" data-pagetitle="Home Page">
		<div class="fl-wrap full-height hero-conatiner">
			<div class="hero-wrapper fl-wrap full-height hidden-item">
				<span class="hc_dec"></span>

				<!-- fs-slider-wrap -->
				<!-- hero-slider-wrap -->
				<div class="hero-slider-wrap home-half-slider fl-wrap full-height">
					<div class="hero-slider fs-gallery-wrap fl-wrap full-height">
						<div class="swiper-container">
							<div class="swiper-wrapper">

								<!-- swiper-slide-->
								<div class="swiper-slide">
									<div class="half-hero-wrap">
										<div class="hhw_header">
											Welcome to plywood company
										</div>
										<h1>
											The Nature
											<br>
											<span>Of Progress</span>
											<br>
											<span></span>
										</h1>
										<h4>
											Modern, fast-growing company entered the echelon of the leading players in the woodworking market.
										</h4>
										<div class="clearfix"></div>
										<a href="<?php echo e(site_url('about')); ?>" class="btn ajax fl-btn color-bg">
											<span>Learn More</span>
										</a>
									</div>
								</div>
								<!-- swiper-slide end-->

								<!-- swiper-slide-->
								<div class="swiper-slide">
									<div class="half-hero-wrap">
										<h1>
											The Future
											<br>
											<span>Of Production</span>
											<br>
											<span></span>
										</h1>
										<h4>
											Specially developed solutions for use various industries.
										</h4>
										<div class="clearfix"></div>
										<a href="<?php echo e(site_url('products')); ?>" class="btn ajax fl-btn color-bg">
											<span>All Production</span>
										</a>
									</div>
								</div>
								<!-- swiper-slide end-->

								<!-- swiper-slide-->
								<div class="swiper-slide">
									<div class="half-hero-wrap">
										<div class="hhw_header"></div>
										<h1>
											<span>Buy</span>
											<br>
											Productıon
											<br>
										</h1>
										<h4>
											For puchasing or additional information, please contact our managers or authorized dealers
										</h4>
										<div class="clearfix"></div>
										<a href="<?php echo e(site_url('contact')); ?>" class="btn ajax fl-btn color-bg">
											<span>Learn More</span>
										</a>
									</div>
								</div>
								<!-- swiper-slide end-->

							</div>
						</div>
					</div>
				</div>
				<!-- hero-slider-wrap  end-->

				<!-- hero-slider-img-->
				<div class="hero-slider-img hero-slider-wrap_halftwo hidden-item">
					<div class="swiper-container">
						<div class="swiper-wrapper">

							<!-- swiper-slide-->
							<div class="swiper-slide">
								<div class="bg" data-bg="<?php echo e(asset_url('client/images/bg/bg-01.jpg')); ?>" data-swiper-parallax="20%"></div>
								<div class="overlay"></div>
							</div>
							<!-- swiper-slide end-->

							<!-- swiper-slide-->
							<div class="swiper-slide">
								<div class="bg" data-bg="<?php echo e(asset_url('client/images/bg/bg-02.jpg')); ?>" data-swiper-parallax="20%"></div>
								<div class="overlay"></div>
							</div>
							<!-- swiper-slide end-->

							<!-- swiper-slide-->
							<div class="swiper-slide">
								<div class="bg" data-bg="<?php echo e(asset_url('client/images/bg/8.jpg')); ?>" data-swiper-parallax="20%"></div>
								<div class="overlay"></div>
							</div>
							<!-- swiper-slide end-->

						</div>
					</div>
					<div class="hero-corner-dec"></div>
					<div class="hero-corner-dec2"></div>
				</div>
				<!-- hero-slider-img  end-->

				<!-- slider-controls -->
				<div class="slider-progress-bar">
					<span>
						<svg class="circ" width="50" height="50">
							<circle class="circ2" cx="25" cy="25" r="23" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none"></circle>
							<circle class="circ1" cx="25" cy="25" r="23" stroke="#fff" stroke-width="2" fill="none"></circle>
						</svg>
					</span>
				</div>
				<div class="clone-counter">
					<div class="current">
						01
					</div>
				</div>
				<div class="swiper-counter hs_counter">
					<div class="current">
						01
					</div>
					<div class="total"></div>
				</div>
				<div class="hero-slider_control-wrap">
					<div class="hsc hsc-prev">
						<span>
							<i class="fal fa-angle-left"></i>
						</span>
					</div>
					<div class="hsc hsc-next">
						<span>
							<i class="fal fa-angle-right"></i>
						</span>
					</div>
				</div>
				<!-- slider-controls end-->

				<a href="<?php echo e(site_url('about')); ?>" class="ajax start-btn">
					<span>
						Start explore
						<i class="fal fa-long-arrow-right"></i>
					</span>
				</a>
				<div class="play-pause_slider hsc_pp auto_actslider">
					<i class="fas fa-play"></i>
				</div>
			</div>
			<!-- hero-container end-->
			<div class="hero-decor-numb">
				<span>THE FUTURE</span>
				<span>PRODUCTION</span>
				<a href="#" target="_blank" class="hero-decor-numb-tooltip">
					Based In Suplyco
				</a>
			</div>
			<div class="hero-slider-wrap_pagination"></div>
			<div class="hero-scroll-down-notifer">
				<div class="scroll-down-wrap ">
					<div class="mousey">
						<div class="scroller"></div>
					</div>
				</div>
				<i class="far fa-angle-down"></i>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\suplyco\public\views/client/pages/home.blade.php ENDPATH**/ ?>