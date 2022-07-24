@extends('admin.layouts.main')

@section('styles')

	<!-- Gallery css -->
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/gallery/gallery.css') }}">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/summernote/summernote-bs4.css') }}">

@endsection

@section('content')

	@if ($message)

		<div class="row gutters mb-2">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="alert alert-{{ $message['class'] }}">
					{{ $message['text'] }}
				</div>
			</div>
		</div>

	@endif

	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<!-- Card start -->
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						Ürün Düzenle
					</div>
				</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="name" value="{{ $product->name }}" required class="form-control">
									<div class="field-placeholder">
										Ürün Adı
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="file" name="images[]" accept="image/*" multiple class="form-control">
									<div class="field-placeholder">
										Resimler
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="priority" value="{{ $product->priority }}" placeholder="1" class="form-control">
									<div class="field-placeholder">
										Öncelik
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>

							@if ($images->rowCount())

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">

									<!-- Gallery start -->
									<div class="baguetteBoxThree gallery">

										<!-- Row start -->
										<div class="row g-2">

											@foreach ($images as $image)

												<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6" id="image-{{ $image->id }}" data-default="{{ $image->id == $product->default_image ? 'true' : 'false' }}">
													<a href="{{ upload_url('images/original/products/' . $image->image) }}" class="effects">
														<img src="{{ upload_url('images/cache/products/400x400/' . $image->image) }}" alt="{{ $product->name }}" class="img-fluid">
														<div class="overlay">
															<span class="expand">+</span>
														</div>
													</a>
													<div class="text-center action-image">
														
														@if ($image->id != $product->default_image)

															<i onclick="deleteImage({{ $image->id }}, {{ $product->id }})" class="icon-check-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Varsayılan Yap"></i>

														@endif

														<i onclick="deleteImage({{ $image->id }})" class="icon-x-circle text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sil"></i>
													</div>
												</div>

											@endforeach

										</div>
										<!-- Row end -->

									</div>
									<!-- Gallery end -->

								</div>

							@endif

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<textarea name="description" rows="10" required class="form-control">{{ $product->description }}</textarea>
									<div class="field-placeholder">
										Açıklama
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<textarea name="info" class="summernote">{{ $product->info }}</textarea>
									<div class="field-placeholder">
										Bilgi
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button type="submit" class="btn btn-primary">
									Kaydet
								</button>
							</div>
						</div>
						<!-- Row end -->

					</form>
				</div>
			</div>
			<!-- Card end -->

		</div>
	</div>
	<!-- Row end -->

@endsection

@section('scripts')

	<!-- Gallery JS -->
	<script src="{{ asset_url('admin/vendor/gallery/baguetteBox.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/gallery/plugins.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/gallery/custom-gallery.js') }}"></script>

	<script>
		function deleteImage(id) {

			var defaultImage = $('#image-' + id).data('default');

			$.post(
				API_URL + '/products/image',
				{ action: 'delete', id: id, defaultImage: defaultImage },
				function (data) {

					if (data == 'action') {

						Swal.fire({
							title: 'Hata!',
							text: 'Lütfen gönderilen işlemi kontrol edin.',
							icon: 'danger',
							confirmButtonText: 'Tamam'
						});

					} else if (data == 'default') {

						Swal.fire({
							title: 'Hata!',
							text: 'Varsayılan ürün resmi silinemez.',
							icon: 'error',
							confirmButtonText: 'Tamam'
						});

					} else if (data == 'error') {

						Swal.fire({
							title: 'Hata!',
							text: 'Bir hata oluştu ve ürün resmi silinemedi.',
							icon: 'error',
							confirmButtonText: 'Tamam'
						});

					} else {

						$('#image-' + id).hide(500);

						Swal.fire({
							title: 'Başarılı!',
							text: 'Ürün resmi başarıyla silindi.',
							icon: 'success',
							confirmButtonText: 'Tamam'
						});

					}

				}
			);

		}

		function defaultImage(id, product) {
			$.post(
				API_URL + '/products/image',
				{ action: 'default', id: id, product: product },
				function (data) {

					if (data == 'action') {

						Swal.fire({
							title: 'Hata!',
							text: 'Lütfen gönderilen işlemi kontrol edin.',
							icon: 'danger',
							confirmButtonText: 'Tamam'
						});

					} else if (data == 'error') {

						Swal.fire({
							title: 'Hata!',
							text: 'Bir hata oluştu ve varsayılan ürün resmi ayarlanamadı.',
							icon: 'error',
							confirmButtonText: 'Tamam'
						});

					} else {

						$('#image-' + id + '').hide(500);

						Swal.fire({
							title: 'Başarılı!',
							text: 'Ürün resmi başarıyla varsayılan yapıldı.',
							icon: 'success',
							confirmButtonText: 'Tamam'
						});

					}

				}
			);

		}
	</script>

	<!-- Summernote JS -->
	<script src="{{ asset_url('admin/vendor/summernote/summernote-bs4.js') }}"></script>

	<script>
		// Summernote
		$(document).ready(function () {
			$('.summernote').summernote({
				height: 210,
				tabsize: 4,
				focus: false,
				toolbar: [
					['font', ['bold', 'underline', 'clear']],
					['para', ['ul', 'ol']],
					['insert', ['link', 'picture', 'video']],
					['view', ['fullscreen', 'codeview', 'help']]
				],
				lang: 'tr-TR'
			});
		});
	</script>

@endsection
