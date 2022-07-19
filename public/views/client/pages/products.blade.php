@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<div class="content full-height hor-content_padd" data-pagetitle="Products">

		<!--<div class="fixed-bottom-panel fs-fix-bom-panel hfw">
			<div class="gallery-filters-wrap">
				<div class="gallery-filters init_hidden_filter">
					<a href="plywood.html" class="gallery-filter">
						Plywood
					</a>
					<a href="particle-board.html" class="gallery-filter">
						Particle Board
					</a>
					<a href="biofuel.html" class="gallery-filter">
						Biofuel
					</a>
					<a href="ready-made-solutions.html" class="gallery-filter">
						Ready-Made Solutions
					</a>
					<a href="load-rate-calculator.html" class="gallery-filter">
						Load Rate Calculator
					</a>
					<a href="catalogues-of-plywood-grades.html" class="gallery-filter">
						Catalogues of Plywood Grades
					</a>
				</div>
				<div class="psn_button act-filter">
					<i class="fal fa-sort"></i>
					Filter
				</div>
			</div>
		</div>-->

		<!-- horizontal-grid -->
		<div class="horizontal-grid-wrap fl-wrap full-height">

			<!-- portfolio start -->
			<div class="two-ver-columns lightgallery" id="portfolio_horizontal_container">

				@php
					$i = 0
				@endphp

				@foreach ($products as $product)

					@php
						$i++
					@endphp

					<!-- portfolio_item -->
					<div class="portfolio_item {{ $i == 1 || $i == 4 ? 'portfolio_item_second' : null }}">
						<div class="grid-item-holder hov_zoom">
							<img src="{{ upload_url('images/original/products/' . $product->image) }}" alt="{{ $product->name }}">
							<div class="grid-det">
								
								@if ($product->video)

									<a href="https://www.youtube.com/watch?v={{ $product->video }}" class="grid-media-zoom image-popup">
										<i class="far fa-play"></i>
									</a>

								@endif

								<div class="grid-det-item">
									<a href="{{ site_url('products/' . $product->slug) }}" class="ajax grid-det_link">
										{{ $product->name }}
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- portfolio_item end -->

				@endforeach

			</div>
			<!-- portfolio end -->

		</div>
		<!-- horizontal-grid end -->

		<div class="hero-scroll-down-notifer">
			<div class="scroll-down-wrap ">
				<div class="mousey">
					<div class="scroller"></div>
				</div>
			</div>
			<i class="far fa-angle-down"></i>
		</div>
		<div class="fs-folio-counter hor-scroll-counter">
			<div class="folio-counter">
				<div class="num-album">
					<span></span>
				</div>
				<div class="all-album"></div>
			</div>
		</div>
		<div class="body-color-bg"></div>
		<div class="fs-pg-idicator_wrap hor-scroll-idicator color-bg">
			<div class="progress-indicator">
				<svg xmlns="http://www.w3.org/2000/svg" viewbox="-1 -1 44 44">
					<circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
					<circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar"></circle>
				</svg>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
@endsection
