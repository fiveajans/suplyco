@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<div class="content" data-pagetitle="Blog single">

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
				<div class="bg" data-bg="{{ asset_url('client/images/bg/3.jpg') }}"></div>
				<div class="overlay"></div>
				<div class="progress-bar-wrap bot-element">
					<div class="progress-bar"></div>
				</div>

				<!-- fixed-column-wrap_title -->
				<div class="fixed-column-wrap_title first-tile_load">
					<h2>
						Last News
						<br>
						And Updates
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
						<div class="section-title fl-wrap">
							<h3>
								Join Us
							</h3>
						</div>
						<div class="fl-wrap text-block">
							<p>
								Please, fill your information completely and correctly. *The ones mark are mandatory.
							</p>
						</div>
						<div class="section-separator sp2 fl-wrap">
							<span></span>
						</div>
						<div class="single-post-comm" id="comments">
							<div id="respond" class="clearafix">
								<div class="comment-reply-form clearfix">
									<div class="alert alert-danger" style="margin: 0">
										error
									</div>
									<form action="" method="post" enctype="multipart/form-data" class="add-comment custom-form dropzone" id="dropzone-form">
										<fieldset>
											<div class="row">
												<div class="col-md-12">
													<input type="text" placeholder="Full Name *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Identity Number *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Bhirtday *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="email" placeholder="Email Address *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Phone Number *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Phone Number (If Not Reached) *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Address *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Graduated School *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Graduated Department *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="GPA *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Programs and Methods You Can Use (With Details) *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Certificates" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Jon Experiences (With Details)" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Tell About Yourself" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Perspective On Life" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Why Work With You? *" value="" required>
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Reference Information (With Details)" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="LinkedIn" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="GitHub" value="">
												</div>
												<div class="col-md-12">
													<input type="text" placeholder="Your Own Website" value="">
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<textarea cols="40" rows="3" placeholder="Comment"></textarea>
												</div>
											</div>
											<div class="row" style="margin: 20px -15px">
												<div class="col-md-12">
													<label for="cv" class="file-upload">
														<i class="fa fa-cloud-upload"></i>
														CV* Upload
													</label>
													<input type="file" name="cv" required id="cv" style="display: none">
												</div>
											</div>
											<div class="row" style="margin-top: 15px">
												<div class="col-md-12">
													<input type="checkbox" name="law" required id="law">
													<label for="law">
														I have read and understood
														<b>the personal data protection law.</b>
													</label>
												</div>
											</div>
										</fieldset>
										<button type="submit" class="btn flat-btn color-bg" id="submit">
											<span>Send</span>
										</button>
									</form>
								</div>
							</div>
							<!-- end respond -->

						</div>
						<!-- comments end -->

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
