@extends('admin.layouts.main')

@section('styles')

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
						Ürün Ekle
					</div>
				</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="name" value="{{ $old['name'] ?? null }}" required class="form-control">
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
									<input type="file" name="images[]" accept="image/*" multiple required class="form-control">
									<div class="field-placeholder">
										Resimler
										<span class="text-danger">*</span>
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
								
								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<input type="text" name="priority" value="{{ $old['priority'] ?? null }}" placeholder="1" class="form-control">
									<div class="field-placeholder">
										Öncelik
									</div>
								</div>
								<!-- Field wrapper end -->

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Field wrapper start -->
								<div class="field-wrapper">
									<textarea name="description" rows="10" required class="form-control">{{ $old['description'] ?? null }}</textarea>
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
									<textarea name="info" class="summernote">{{ $old['info'] ?? null }}</textarea>
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
