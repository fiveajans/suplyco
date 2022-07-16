@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<div class="content" data-pagetitle="Portfolio single">
		<div class="page-scroll-nav psn_single">

			<!-- content-nav_holder -->
			<div class="content-nav_holder">
				<div class="content-nav">
					<ul>
						<li>
							<a href="portfolio-single2.html" class="ln ajax">
								<i class="fal fa-long-arrow-left"></i>
								<span>Prev <strong>- Project Title</strong></span>
							</a>
							<div class="content-nav-media">
								<div class="bg" data-bg="{{ asset_url('client/images/folio/5.jpg') }}"></div>
							</div>
						</li>
						<li>
							<a href="portfolio-single3.html" class="rn ajax">
								<span>Next <strong>- Project Title</strong></span>
								<i class="fal fa-long-arrow-right"></i>
							</a>
							<div class="content-nav-media">
								<div class="bg" data-bg="{{ asset_url('client/images/folio/8.jpg') }}"></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- content-nav_holder end -->

		</div>

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
						Portfolio
						<br>
						Single
					</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
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
								Kent Brant Concept
							</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="container">
						<div class="fl-wrap">
							<img src="{{ asset_url('client/images/folio/17.jpg') }}" alt="" style="width: 100%">
						</div>
						<div class="fl-wrap text-block">
							<div class="pr-subtitle">
								Project Info
							</div>
							<p>
								Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae. Ut nec hinc dolor possim. An eros argumentum vel, elit diceret duo eu, quo et aliquid ornatus delicatissimi.  Pri choro pertinax indoctum ne, ad partiendo persecuti forensibus est.
							</p>
							<p>
								Cu nam tale ferri utroque, eu habemus albucius mel, cu vidit possit ornatus eum. Eu ius postulant salutatus definitionem, explicari. Graeci viderer qui ut, at habeo facer solet usu. Pri choro pertinax indoctum ne, ad partiendo persecuti forensibus est.
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
