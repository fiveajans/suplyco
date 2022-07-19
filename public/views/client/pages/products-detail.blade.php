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
					<div class="carnival">
						Scroll down
					</div>
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
								{{ $product->name }}
							</h3>
							<p>
								{{ $product->description }}
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="center-carousel-wrap fl-wrap">
						<div class="center-carousel fl-wrap">
							<div class="swiper-container">
								<div class="swiper-wrapper lightgallery">

									@php
										$i = 0
									@endphp
									
									@foreach ($images as $image)

										@php
											$i++
										@endphp

										<!-- swiper-slide -->
										<div class="swiper-slide hov_zoom">
											<img src="{{ upload_url('images/original/products/' . $image->image) }}" alt="{{ $product->name }}">
											<a href="{{ upload_url('images/original/products/' . $image->image) }}" class="box-media-zoom popup-image">
												<i class="fal fa-search"></i>
											</a>
											<span class="slide-numb">.0{{ $i }}</span>
											<div class="show-info">
												<span>Info</span>
												<div class="tooltip-info">
													<h5>
														{{ $product->name }}
													</h5>
													<p>
														{{ $product->description }}
													</p>
												</div>
											</div>
										</div>
										<!-- swiper-slide end -->

									@endforeach

									@foreach ($videos as $video)

										@php
											$i++
										@endphp

										<!-- swiper-slide -->
										<div class="swiper-slide hov_zoom">
											<img src="https://i.ytimg.com/vi/{{ $video->video }}/maxresdefault.jpg" alt="">
											<a href="https://www.youtube.com/watch?v={{ $video->video }}" class="box-media-zoom image-popup">
												<i class="far fa-play"></i>
											</a>
											<span class="slide-numb">.0{{ $i }}</span>
											<div class="show-info">
												<span>Info</span>
												<div class="tooltip-info">
													<h5>
														{{ $product->name }}
													</h5>
													<p>
														{{ $product->description }}
													</p>
												</div>
											</div>
										</div>
										<!-- swiper-slide end -->

									@endforeach

								</div>
							</div>
						</div>
						<div class="fsc ccsw-next">
							<i class="fal fa-angle-right"></i>
						</div>
						<div class="fsc ccsw-prev">
							<i class="fal fa-angle-left"></i>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="container">
						<div class="fl-wrap text-block">
							<div class="pr-subtitle">
								Product Info
							</div>
							<p>
								{{ $product->info }}
							</p>
						</div>

						@if ($accordions->rowCount())

							<div class="pr-subtitle">
								The Brief
							</div>

							<!-- accordion -->
							<div class="accordion mar-top">

								@php
									$i = 0;
								@endphp
								
								@foreach ($accordions as $accordion)

									@php
										$i++;
									@endphp

									<a href="#" class="toggle {{ $i == 1 ? 'act-accordion' : null }}">
										{{ $accordion->title }}
										<span></span>
									</a>
									<div class="accordion-inner {{ $i == 1 ? 'visible' : null }}">
										<p>
											{{ $accordion->content }}
										</p>
									</div>

								@endforeach

							</div>
							<!-- accordion end -->

						@endif

						<div class="srv-link-text fl-wrap" style="margin-top: 50px">
							<h4>
								Ready to order your products? Contacts page:
							</h4>
							<a href="{{ site_url('contact') }}" class="btn ajax color-bg fl-btn">
								<span>Contacts</span>
							</a>
						</div>
					</div>
				</section>
				<!-- section end -->

			</div>
			<!-- column-wrap-container end -->

		</div>
		<!-- column-wrap end -->

		<div class="to-top-btn to-top">
			<i class="fal fa-long-arrow-up"></i>
		</div>
	</div>

@endsection

@section('scripts')
@endsection
