@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<div class="content" data-pagetitle="Career">

		<!-- hero-section-dec -->
		<div class="hero-section-dec color-bg">
			<div class="progress-indicator">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
					<circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
					<circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar" />
				</svg>
			</div>
		</div>
		<!-- hero-section-dec end -->

		<!-- fixed-column-wrap -->
		<div class="fixed-column-wrap">
			<div class="pr-bg"></div>

			<!-- fixed-column-wrap-content -->
			<div class="fixed-column-wrap-content">
				<div class="scroll-nav-wrap color-bg">
					<div class="carnival">Scroll down</div>
					<div class="snw-dec">
						<div class="mousey">
							<div class="scroller"></div>
						</div>
					</div>
				</div>
				<div class="bg" data-bg="{{ asset_url('client/images/bg/3.jpg') }}"></div>
				<div class="overlay"></div>
				<div class="progress-bar-wrap bot-element">
					<div class="progress-bar"></div>
				</div>

				<!-- fixed-column-wrap_title -->
				<div class="fixed-column-wrap_title first-tile_load">
					<h2>
						We Are Here
						<br>
						For You
					</h2>
					<p>
						Some decisions in life leave scars. Join us if you want these tracks to be perfect.
					</p>
				</div>
				<!-- fixed-column-wrap_title end -->

				<div class="fixed-column-dec"></div>
				<div class="fixed-column-linedec"></div>
				<div class="scroll-notifer">
					Scroll Down
				</div>
			</div>
			<!-- fixed-column-wrap-content end -->

		</div>
		<!-- fixed-column-wrap end -->

		<!-- column-wrap -->
		<div class="column-wrap">

			<!-- column-wrap-container -->
			<div class="column-wrap-container fl-wrap">
				<div class="col-wc_dec"></div>
				<section class="scroll_sec" id="sec1">
					<div class="container">
						<div class="section-title">
							<h3>
								Join Us
							</h3>
							<p>
								JOB OPPORTUNITIES OUR CAREER OPPORTUNITIES FOR YOU
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="container">
						<div class="fl-wrap">
							<img src="{{ asset_url('client/images/career.jpg') }}" alt="Career" style="width: 100%">
						</div>
						<div class="fl-wrap text-block">
							<div class="pr-subtitle">
								Intern
							</div>
							<p>
								Working with us wants spirit, wants life, wants to lead the future, wants to work with all the power, wants to experience, wants to be friends, wants to be right, wants to be straight, does not want the environment, does not need friend at court, wants a good future. If you want to work with us, you should be like us. Must be with us. We must walk together, fall when we fall, feel sad when we are sad, happy when we are happy. if vision and mission are available to you, if you believe in your team, if your team and work come before everything, if you are be convenient, send and application to us!
							</p>
						</div>
						<a href="{{ site_url('career/join-us') }}" class="btn color-bg fl-btn det-anim">
							<span>Join Us</span>
						</a>
						<div class="section-separator fl-wrap" style="margin-top: 50px">
							<span></span>
						</div>
					</div>
				</section>
				<!--section end-->

			</div>
			<!--column-wrap-container end -->

		</div>
		<!--column-wrap end-->

		<div class="to-top-btn to-top">
			<i class="fal fa-long-arrow-up"></i>
		</div>
	</div>

@endsection

@section('scripts')
@endsection
