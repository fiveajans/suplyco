

<?php $__env->startSection('styles'); ?>

	<!-- Data Tables -->
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/vendor/datatables/dataTables.bs4.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/vendor/datatables/dataTables.bs4-custom.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/vendor/datatables/buttons.bs.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php if($products->rowCount()): ?>

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
											Kategori
										</th>
										<th>
											Fiyat
										</th>
										<th>
											Tarih
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

									<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<tr>
											<td>
												<div class="media-box">
													<img src="<?php echo e(upload_url('cache/products/40x40/' . $product->image)); ?>" class="media-avatar" alt="Product">
													<div class="media-box-body">
														<a href="<?php echo e(site_url('admin/products/update/' . $product->id)); ?>" class="text-truncate">
															<?php echo e($product->name); ?>

														</a>

														<?php if($product->sku): ?>
															<p>
																SKU: #<?php echo e($product->sku); ?>

															</p>
														<?php endif; ?>

													</div>
												</div>
											</td>
											<td>
												<a href="<?php echo e(site_url('admin/products/categories/update/' . $product->category_id)); ?>">
													<?php echo e($product->category_name); ?>

												</a>
											</td>
											<td>
												₺<?php echo e($product->price); ?>

											</td>
											<td>
												<?php echo e($product->updated_at); ?>

											</td>
											<td>
												<span class="badge bg-success">Mevcut</span>
											</td>
											<td>
												<div class="actions">
													<a href="<?php echo e(site_url('admin/products/update/' . $product->id)); ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Düzenle">
														<i class="icon-edit1 text-info"></i>
													</a>
													<a href="<?php echo e(site_url('admin/products/delete/' . $product->id)); ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sil">
														<i class="icon-x-circle text-danger"></i>
													</a>
												</div>
											</td>
										</tr>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row end -->

	<?php else: ?>

		<div class="alert alert-warning" role="alert">
			Sistemde kayıtlı ürün bulunamadı.
		</div>

	<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<!-- Rating JS -->
	<script src="<?php echo e(asset_url('admin/vendor/rating/raty.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/rating/raty-custom.js')); ?>"></script>

	<!-- Data Tables -->
	<script src="<?php echo e(asset_url('admin/vendor/datatables/dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/datatables/dataTables.bootstrap.min.js')); ?>"></script>

	<!-- Custom Data tables -->
	<script src="<?php echo e(asset_url('admin/vendor/datatables/custom/custom-datatables.js')); ?>"></script>

	<!-- Download / CSV / Copy / Print -->
	<script src="<?php echo e(asset_url('admin/vendor/datatables/buttons.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/datatables/jszip.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/datatables/pdfmake.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/datatables/vfs_fonts.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/datatables/html5.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/vendor/datatables/buttons.print.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\babacavus-five\public\views/admin/pages/products/approved.blade.php ENDPATH**/ ?>