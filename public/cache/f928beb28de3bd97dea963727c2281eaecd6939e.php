

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<!-- Row start -->
	<div class="row g-0 h-100">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="login-about">
				<div class="slogan">
					<span>Baba</span>
					<span>Çavuş</span>
					<span>Yönetim Paneli</span>
				</div>
				<div class="about-desc">
					UniPro a data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process.
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="login-wrapper">
				<form action="" method="post">
					<div class="login-screen">
						<div class="login-body">
							<a href="<?php echo e(site_url('admin/login')); ?>" class="login-logo">
								<img src="<?php echo e(asset_url('admin/img/logo.svg')); ?>" alt="Five Ajans">
							</a>
							<h6>
								Hoşgeldiniz,
								<br>
								Lütfen sisteme giriş yapın.
							</h6>
							<div class="field-wrapper">
								<input type="text" name="username" value="<?php echo e($username ?? null); ?>" autofocus>
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
								<a href="#">
									Şifreni mi unuttun?
								</a>
								<button type="submit" class="btn btn-primary">
									Giriş Yap
								</button>
							</div>

							<?php if(isset($error)): ?>
								<div class="alert alert-<?php echo e($error['class']); ?>" role="alert">
									<?php echo e($error['text']); ?>

								</div>
							<?php endif; ?>

						</div>
						<div class="login-footer">
							<span class="additional-link">
								Kullanıcı hesabın yok mu?
								<a href="#" class="btn btn-light">
									Talep Et
								</a>
							</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Row end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\babacavus-five\public\views/admin/pages/auth/login.blade.php ENDPATH**/ ?>