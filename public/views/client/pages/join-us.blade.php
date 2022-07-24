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
									
									@if ($message)

										<div class="alert alert-{{ $message['class'] }}" style="margin: 0">
											{!! $message['text'] !!}
										</div>

									@endif

									<form action="" method="post" enctype="multipart/form-data" class="add-comment custom-form dropzone" id="dropzone-form">
										<fieldset>
											<div class="row">
												<div class="col-md-12">
													<input type="text" name="name" placeholder="Full Name *" value="{{ $old ? $old['name'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="identity" placeholder="Identity Number *" value="{{ $old ? $old['identity'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="birthday" placeholder="Birthday *" value="{{ $old ? $old['birthday'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="email" name="email" placeholder="Email Address *" value="{{ $old ? $old['email'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="phone" placeholder="Phone Number *" value="{{ $old ? $old['phone'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="phone_2" placeholder="Phone Number (If Not Reached) *" value="{{ $old ? $old['phone_2'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="address" placeholder="Address *" value="{{ $old ? $old['address'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="gra_school" placeholder="Graduated School *" value="{{ $old ? $old['gra_school'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="gra_department" placeholder="Graduated Department *" value="{{ $old ? $old['gra_department'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="gpa" placeholder="GPA *" value="{{ $old ? $old['gpa'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="certificates" placeholder="Certificates" value="{{ $old ? $old['certificates'] : null }}">
												</div>
												<div class="col-md-12">
													<input type="text" name="job_exp" placeholder="Job Experiences (With Details)" value="{{ $old ? $old['job_exp'] : null }}">
												</div>
												<div class="col-md-12">
													<input type="text" name="about" placeholder="Tell About Yourself" value="{{ $old ? $old['about'] : null }}">
												</div>
												<div class="col-md-12">
													<input type="text" name="perspective" placeholder="Perspective On Life" value="{{ $old ? $old['perspective'] : null }}">
												</div>
												<div class="col-md-12">
													<input type="text" name="why_work" placeholder="Why Work With You? *" value="{{ $old ? $old['why_work'] : null }}" required>
												</div>
												<div class="col-md-12">
													<input type="text" name="reference" placeholder="Reference Information (With Details)" value="{{ $old ? $old['reference'] : null }}">
												</div>
												<div class="col-md-12">
													<input type="text" name="linkedin" placeholder="LinkedIn" value="{{ $old ? $old['linkedin'] : null }}">
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<textarea name="comment" cols="40" rows="3" placeholder="Comment">{{ $old ? $old['comment'] : null }}</textarea>
												</div>
											</div>
											<div class="row" style="margin: 20px -15px">
												<div class="col-md-12">
													<label for="cv" class="file-upload">
														<i class="fa fa-cloud-upload"></i>
														Upload Resume*
													</label>
													<input type="file" name="cv" id="cv" style="display: none">
												</div>
											</div>
											<div class="row" style="margin-top: 15px">
												<div class="col-md-12">
													<input type="checkbox" name="law" {{ $old && $old['law'] ? 'checked' : null }} required id="law">
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
