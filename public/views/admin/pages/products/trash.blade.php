@extends('admin.layouts.main')

@section('styles')

	<!-- Data Tables -->
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/datatables/dataTables.bs4.css') }}">
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/datatables/dataTables.bs4-custom.css') }}">
	<link rel="stylesheet" href="{{ asset_url('admin/vendor/datatables/buttons.bs.css') }}">

@endsection

@section('content')

	@if ($products->rowCount())

		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="copy-print-csv" class="table v-middle">
								<thead>
									<tr>
										<th>
											Ürün
										</th>
										<th>
											Açıklama
										</th>
										<th>
											Güncellenme Tarihi
										</th>
										<th>
											Silinme Tarihi
										</th>
										<th>
											Durum
										</th>
										<th>
											İşlemler
										</th>
									</tr>
								</thead>
								<tbody>

									@foreach ($products as $product)

										<tr>
											<td>
												<div class="media-box">
													<img src="{{ upload_url('images/cache/products/40x40/' . $product->image) }}" class="media-avatar" alt="{{ $product->name }}">
													<div class="media-box-body">
														<a href="{{ site_url('admin/products/update/' . $product->id) }}" class="text-truncate">
															{{ $product->name }}
														</a>
														<p>
															#{{ $product->id }}
														</p>
													</div>
												</div>
											</td>
											<td>
												{{ $product->description }}
											</td>
											<td>
												{{ $product->updated_at }}
											</td>
											<td>
												{{ $product->deleted_at }}
											</td>
											<td>
												<span class="badge bg-danger">Pasif</span>
											</td>
											<td>
												<div class="actions">
													<a href="{{ site_url('admin/products/update/' . $product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Düzenle">
														<i class="icon-edit1 text-info"></i>
													</a>
													<a href="{{ site_url('admin/products/restore/' . $product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Geri Al">
														<i class="icon-refresh text-warning"></i>
													</a>
												</div>
											</td>
										</tr>

									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row end -->

	@else

		<div class="alert alert-warning" role="alert">
			Sistemde silinmiş ürün bulunamadı.
		</div>

	@endif

@endsection

@section('scripts')

	<!-- Rating JS -->
	<script src="{{ asset_url('admin/vendor/rating/raty.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/rating/raty-custom.js') }}"></script>

	<!-- Data Tables -->
	<script src="{{ asset_url('admin/vendor/datatables/dataTables.min.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

	<!-- Custom Data tables -->
	<script src="{{ asset_url('admin/vendor/datatables/custom/custom-datatables.js') }}"></script>

	<!-- Download / CSV / Copy / Print -->
	<script src="{{ asset_url('admin/vendor/datatables/buttons.min.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/datatables/jszip.min.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/datatables/pdfmake.min.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/datatables/vfs_fonts.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/datatables/html5.min.js') }}"></script>
	<script src="{{ asset_url('admin/vendor/datatables/buttons.print.min.js') }}"></script>

@endsection
