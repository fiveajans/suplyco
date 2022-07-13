@extends('client.layouts.main')

@section('styles')
@endsection

@section('content')

	<div class="content full-height no-mob-hidden2" data-pagetitle="Contacts">
		<div class="content-inner">
			<div class="content-front">
				<div class="cf-inner">
					<div class="contact-details-title fl-wrap">
						<h2>Contact Detais</h2>
					</div>
					<div class="contact-details fl-wrap">
						<ul>
							<li><span>01. Mail :</span><a href="#" target="_blank">info@suplyco.com</a></li>
							<li><span>02. Adress :</span><a href="#" target="_blank">Adnan Kahveci Str. Inönü Blvd. <br /> No: 89-91 Beylikdüzü, Istanbul/Turkey</a></li>
							<li><span>03. Phone :</span><a href="#">+90 (212) 6704545 </a> , <a href="#">+90 (212) 6704546</a></li>
						</ul>
					</div>
					<a href="#" class="btn fl-btn color-bg show_contact-form"><span>Say Hello</span></a>
					<div class="aside-show_cf show_contact-form"><i class="fal fa-envelope"></i></div>
				</div>
			</div>
			<div class="content-back">
				<div class="hidden-contact_form-wrap_inner">
					<div class="close-contact_form cnt-anim"><i class="fal fa-times"></i></div>
					<div class="contact-details-title fl-wrap">
						<h2>Get in Touch</h2>
					</div>
					<div id="contact-form" class="fl-wrap">
						<div id="message"></div>
						<form class="custom-form" action="php/contact.php" name="contactform" id="contactform">
							<fieldset>
								<div class="row">
									<div class="col-sm-6">
										<input type="text" name="name" id="name" placeholder="Your Name *" value="" />
									</div>
									<div class="col-sm-6">
										<input type="text" name="email" id="email" placeholder="Email Address *" value="" />
									</div>
								</div>
								<textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:" class="cnt-anim"></textarea>
								<button class="btn fl-btn color-bg" id="submit"><span>Send Message</span> </button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="map-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d324186.9503090958!2d28.97875676021888!3d40.98342562532352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cacf669634c589%3A0xfae0d6ab43f4db36!2sSilka%20Kapak!5e0!3m2!1str!2str!4v1654879280948!5m2!1str!2str" width="100%" height="100%" style="border: 0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="main_social">
			<span class="main-social-title">Find on:</span>
			<ul>
				<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
			</ul>
		</div>
	</div>

@endsection

@section('scripts')
@endsection
