@extends('admin.layouts.auth')

@section('styles')
@endsection

@section('content')

	<!-- Row start -->
	<div class="row g-0 h-100">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="login-about">
				<div class="slogan">
					<span>Yönetim Paneli'ne</span>
					<span>Hoşgeldiniz</span>
				</div>
				<div class="about-desc">
					Giriş problemi yaşıyorsanız sistem sağlayıcınız ile iletişime geçiniz.
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="login-wrapper">
				<form action="" method="post">
					<div class="login-screen">
						<div class="login-body">
							<a href="{{ site_url('admin/login') }}" class="login-logo">
								<img src="{{ asset_url('admin/img/logo-black.svg') }}" alt="Suplyco" style="width: 300px">
							</a>
							<h6>
								Hoşgeldiniz,
								<br>
								Lütfen sisteme giriş yapın.
							</h6>
							<div class="field-wrapper">
								<input type="text" name="username" value="{{ $username ?? null }}" autofocus>
								<div class="field-placeholder">
									Kullanıcı Adı
								</div>
							</div>
							<div class="field-wrapper mb-3">
								<input type="password" name="password">
								<div class="field-placeholder">
									Şifre
								</div>
							</div>
							<div class="actions">
								<!--<a href="#">
									Şifreni mi unuttun?
								</a>-->
								<button type="submit" class="btn btn-primary">
									Giriş Yap
								</button>
							</div>

							@isset ($error)
								<div class="alert alert-{{ $error['class'] }}" role="alert">
									{{ $error['text'] }}
								</div>
							@endisset

						</div>
						<!--<div class="login-footer">
							<span class="additional-link">
								Kullanıcı hesabın yok mu?
								<a href="#" class="btn btn-light">
									Talep Et
								</a>
							</span>
						</div>-->
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Row end -->

@endsection

@section('scripts')
@endsection
