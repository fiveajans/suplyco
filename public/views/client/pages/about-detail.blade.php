@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<!-- content -->
	<div class="content" data-pagetitle="About Us">

		<!-- hero-section-dec -->
		<div class="hero-section-dec color-bg">
			<div class="progress-indicator">
				<svg xmlns="http://www.w3.org/2000/svg" viewbox="-1 -1 34 34">
					<circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
					<circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar"></circle>
				</svg>
			</div>
		</div>
		<!-- hero-section-dec end -->

		<!-- fixed-column-wrap -->
		<div class="fixed-column-wrap">
			<div class="pr-bg"></div>

			<!-- fixed-column-wrap-content -->
			<div class="fixed-column-wrap-content">

				<!-- slideshow-container -->
				<div class="slideshow-container">
					<div class="slideshow-container_wrap fl-wrap full-height">
						<div class="swiper-container">
							<div class="swiper-wrapper">

								<!-- ms_item -->
								<div class="swiper-slide">
									<div class="ms-item_fs fl-wrap">
										<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/bg-02.jpg') }}"></div>
									</div>
								</div>
								<!-- ms_item end -->

								<!-- ms_item -->
								<div class="swiper-slide ">
									<div class="ms-item_fs fl-wrap">
										<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/bg-01.jpg') }}"></div>
									</div>
								</div>
								<!-- ms_item end -->

								<!-- ms_item -->
								<div class="swiper-slide">
									<div class="ms-item_fs fl-wrap">
										<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/8.jpg') }}"></div>
									</div>
								</div>
								<!-- ms_item end -->

							</div>
						</div>
					</div>
				</div>
				<!-- slideshow-container end -->

				<div class="overlay"></div>
				<div class="progress-bar-wrap bot-element">
					<div class="progress-bar"></div>
				</div>

				<!-- fixed-column-wrap_title -->
				<div class="fixed-column-wrap_title first-tile_load">
					<h2>
						About
						<br>
						Us
					</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
					</p>
				</div>
				<!-- fixed-column-wrap_title end -->

				<div class="fixed-column-dec"></div>
				<div class="scroll-notifer">
					Scroll Down
				</div>
				<div class="section-counter">
					<div class="sc_current">
						<span>01</span>
					</div>
					<div class="sc_total"></div>
				</div>
				<div class="fcwc-pagination fcwc-wrap"></div>
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
								Başlık
							</h3>
							<p>
								Kısa başlık açıklaması.
							</p>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dec-img fl-wrap">
									<img src="{{ asset_url('client/images/about.jpg') }}" class="respimg" alt="">
									<a href="https://www.youtube.com/watch?v=5_bNQf4o3XI" class="video_link image-popup">
										<i class="fas fa-play"></i>
										<span>Play Story video</span>
									</a>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="main-about fl-wrap">
									<h2>
										Başlık
										<!-- ./span -->
									</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat fermentum.
									</p>
									<p>
										Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="section-number">
						<span>0</span>1.
					</div>
				</section>
				<!-- section end-->

				<div class="section-separator fl-wrap">
					<span></span>
				</div>

				<!-- section  -->
				<section class="scroll_sec" id="sec2">
					<div class="container">
						<div class="section-title">
							<h3>
								Başlık
							</h3>
							<p>
								Kısa başlık açıklaması.
							</p>
						</div>

						<!--process-wrap -->
						<div class="process-wrap fl-wrap">
							<div class="row">
								<div class="col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
											<i class="fab fa-accusoft"></i>
										</span>
										<h4>
											Plywood
										</h4>
										<div class="clearfix"></div>
										<p>
											It is indispensable for the sectors because it is a water-resistant and high-strength product used by many sectors.
										</p>
										<span class="process-numder">01.</span>
										<div class="show-phdc">
											<i class="fal fa-plus"></i>
											<span>Details</span>
										</div>
										<div class="proces-details-content">
											<div class="close-hidden_pdc">
												<i class="fal fa-times"></i>
											</div>
											<div class="proces-details-content-wrap">
												<ul class="pdcw_list fl-wrap">
													<li>
														Plywood
													</li>
												</ul>
												<p>
													Buraya içerik gelecek.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
											<i class="fab fa-pagelines"></i>
										</span>
										<h4>
											Naturally
										</h4>
										<div class="clearfix"></div>
										<p>
											We produce products of maximum quality by using all technology that can increase the level of sustainable life without harming nature.
										</p>
										<span class="process-numder">02.</span>
										<div class="show-phdc">
											<i class="fal fa-plus"></i>
											<span>Details</span>
										</div>
										<div class="proces-details-content">
											<div class="close-hidden_pdc">
												<i class="fal fa-times"></i>
											</div>
											<div class="proces-details-content-wrap">
												<ul class="pdcw_list fl-wrap">
													<li>
														Naturally
													</li>
												</ul>
												<p>
													Buraya içerik gelecek.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
											<i class="fas fa-lightbulb"></i>
										</span>
										<h4>
											R&D
										</h4>
										<div class="clearfix"></div>
										<p>
											The changing world and developing sectors cause new products to be demanded constantly. We offer the right products to the market.
										</p>
										<span class="process-numder">03.</span>
										<div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
										<div class="proces-details-content">
											<div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
											<div class="proces-details-content-wrap">
												<ul class="pdcw_list fl-wrap">
													<li>R&D</li>
												</ul>
												<p>
													Buraya içerik gelecek.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
											<i class="fas fa-hands-helping"></i>
										</span>
										<h4>
											Client
										</h4>
										<div class="clearfix"></div>
										<p>
											We provide 24/7 professional service with our after-sales support team. In this way, we get fast results with instant returns.
										</p>
										<span class="process-numder">04.</span>
										<div class="show-phdc">
											<i class="fal fa-plus"></i>
											<span>Details</span>
										</div>
										<div class="proces-details-content">
											<div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
											<div class="proces-details-content-wrap">
												<ul class="pdcw_list fl-wrap">
													<li>Client</li>
												</ul>
												<p>
													Buraya içerik gelecek.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--process-wrap   end-->
						<div class="srv-link-text fl-wrap">
							<h4>Ready to order your project ? Visit my contacts page :  </h4>
							<a href="{{ site_url('contact') }}" class="btn ajax color-bg  fl-btn"><span>Contacts</span></a>
						</div>
					</div>
					<div class="section-number"> <span>0</span>2. </div>
				</section>
				<!-- section end-->
				<div class="section-separator fl-wrap"><span></span></div>
			</div>
			<!--column-wrap-container end -->

		</div>
		<!--column-wrap end-->

		<div class="to-top-btn to-top">
			<i class="fal fa-long-arrow-up"></i>
		</div>
	</div>
	<!-- content end-->

@endsection

@section('scripts')
@endsection
