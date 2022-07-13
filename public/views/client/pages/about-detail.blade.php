@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<!-- content -->
	<div class="content" data-pagetitle="about me">

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
										<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/10.jpg') }}"></div>
									</div>
								</div>
								<!-- ms_item end -->

								<!-- ms_item -->
								<div class="swiper-slide ">
									<div class="ms-item_fs fl-wrap">
										<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/8.jpg') }}"></div>
									</div>
								</div>
								<!-- ms_item end -->

								<!-- ms_item -->
								<div class="swiper-slide">
									<div class="ms-item_fs fl-wrap">
										<div class="bg par-elem" data-bg="{{ asset_url('client/images/bg/13.jpg') }}"></div>
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
						About My
						<br>
						Studio
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
								Some Words About Me
							</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
							</p>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dec-img fl-wrap">
									<img src="{{ asset_url('client/images/about.jpg') }}" class="respimg" alt="">
									<a class="video_link image-popup" href="#">
										<i class="fas fa-play"></i>
										<span>Play Story video</span>
									</a>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="main-about fl-wrap">
									<h2>
										Innovative solutions to boost
										<br>
										<span>your creative</span> projects
									</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat fermentum.
									</p>
									<p>
										Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.
									</p>
									<div class="facts-container fl-wrap">

										<!-- inline-facts -->
										<div class="inline-facts-wrap">
											<div class="inline-facts">
												<div class="milestone-counter">
													<div class="stats animaper">
														<div class="num" data-content="0" data-num="145">
															0
														</div>
													</div>
												</div>
												<h6>
													Finished projects
												</h6>
											</div>
										</div>
										<!-- inline-facts end -->

										<!-- inline-facts -->
										<div class="inline-facts-wrap">
											<div class="inline-facts">
												<div class="milestone-counter">
													<div class="stats animaper">
														<div class="num" data-content="0" data-num="825">0</div>
													</div>
												</div>
												<h6>
													Working hours
												</h6>
											</div>
										</div>
										<!-- inline-facts end -->

										<!-- inline-facts -->
										<div class="inline-facts-wrap">
											<div class="inline-facts">
												<div class="milestone-counter">
													<div class="stats animaper">
														<div class="num" data-content="0" data-num="15">0</div>
													</div>
												</div>
												<h6>
													Awards won
												</h6>
											</div>
										</div>
										<!-- inline-facts end -->

									</div>
									<a href="portfolio.html" class="btn ajax color-bg fl-btn">
										<span>My Portfolio</span>
									</a>
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
								Services Provided
							</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.
							</p>
						</div>

						<!--process-wrap -->
						<div class="process-wrap fl-wrap">
							<div class="row">
								<div class="col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
											<i class="fal fa-desktop"></i>
										</span>
										<h4>
											Web Design
										</h4>
										<div class="clearfix"></div>
										<p>
											Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.
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
														Concept
													</li>
													<li>
														Design
													</li>
													<li>
														3D Modeling
													</li>
												</ul>
												<p>
													Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.
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
											Branding
										</h4>
										<div class="clearfix"></div>
										<p>
											Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.
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
														Concept
													</li>
													<li>
														Design
													</li>
													<li>
														3D Modeling
													</li>
												</ul>
												<p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
										<i class="fal fa-mobile-android"></i>
										</span>
										<h4>UI/UX Design</h4>
										<div class="clearfix"></div>
										<p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
										<span class="process-numder">03.</span>
										<div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
										<div class="proces-details-content">
											<div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
											<div class="proces-details-content-wrap">
												<ul class="pdcw_list fl-wrap">
													<li>Concept</li>
													<li>Design</li>
													<li>3D Modeling</li>
												</ul>
												<p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-sm-6">
									<div class="process-details">
										<span class="pd-icon">
										<i class="fal fa-camera-alt"></i>
										</span>
										<h4>Photography</h4>
										<div class="clearfix"></div>
										<p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.</p>
										<span class="process-numder">04.</span>
										<div class="show-phdc"><i class="fal fa-plus"></i> <span>Details</span></div>
										<div class="proces-details-content">
											<div class="close-hidden_pdc"><i class="fal fa-times"></i></div>
											<div class="proces-details-content-wrap">
												<ul class="pdcw_list fl-wrap">
													<li>Concept</li>
													<li>Design</li>
													<li>3D Modeling</li>
												</ul>
												<p>Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--process-wrap   end-->
						<div class="srv-link-text fl-wrap">
							<h4>Ready to order your project ? Visit my contacts page :  </h4>
							<a href="contacts.html" class="btn ajax color-bg  fl-btn"><span>Contacts</span></a>
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
