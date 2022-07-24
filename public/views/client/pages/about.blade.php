@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<div class="content full-height" data-pagetitle="About">

		<!-- fs-slider-wrap  -->
		<div class="video-holder-wrap hero_entry">
			<div class="media-container" data-scrollax="properties: { translateY: '30%' }">
				<div class="bg mob-bg" style="background-image: url({{ asset_url('client/images/bg/2.jpg') }})"></div>
				<div class="video-container">
					<video playsinline autoplay loop muted class="bgvid">
						<source src="{{ asset_url('client/video/suplyco.mp4') }}" type="video/mp4">
					</video>
				</div>

				<!--
					Vimeo
					<div class="background-vimeo" data-vim="97871257"></div>
				-->
				<!--
					YouTube
					<div class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"></div>
				-->

			</div>
			<div class="overlay"></div>
			<div class="half-hero-wrap hhw-vis">
				<div class="hhw_header">
					<div class="rotate_text hero-decor-let">
						<div>
							Building
						</div>
						<div>
							<span>Furniture And Interiors</span>
						</div>
						<div>
							Commercıal transport
						</div>
						<div>
							Commercıal transport
						</div>
						<div>
							<span>Lase Cuttıng</span>
						</div>
						<div>
							Engineered Floorıngt
						</div>
					</div>
				</div>
				<h1>
					Company
					<br>
					<span>Plywood</span>
					<br>
					Suplyco
					<span>Tech.</span>
				</h1>
				<h4>
					Specially deceloped solutions for use in various industries.
				</h4>
				<div class="clearfix"></div>
				<a href="{{ site_url('about/detail') }}" class="btn ajax fl-btn color-bg">
					<span>Read More</span>
				</a>
			</div>

			<!--hero_promo-wrap-->
			<div class="hero_promo-wrap bot-element2">
				<div class="hero_promo-title">
					<h4>
						Play Story Video
					</h4>
					<p>
						Learn our difference by watching our story.
					</p>
				</div>
				<div class="hero_promo-button" id="html5-videos" data-html="#video1">
					<div class="bg" data-bg="{{ asset_url('client/images/bg/3.jpg') }}"></div>
					<div class="overlay"></div>
					<a href="#">
						<i class="fas fa-play"></i>
					</a>
				</div>
			</div>
			<!--hero_promo-wrap end-->

			<!-- Hidden video div -->
			<div style="display: none" id="video1">
				<video class="lg-video-object lg-html5" controls preload="none">
					<source src="{{ asset_url('client/video/suplyco.mp4') }}" type="video/mp4">
				</video>
			</div>

		</div>
		<!-- fs-slider-wrap end -->

		<a href="{{ site_url('about/detail') }}" class="ajax start-btn st2">
			<span>
				Start Explore
				<i class="fal fa-long-arrow-right"></i>
			</span>
		</a>
		<div class="body-color-bg"></div>
	</div>

@endsection

@section('scripts')
@endsection
