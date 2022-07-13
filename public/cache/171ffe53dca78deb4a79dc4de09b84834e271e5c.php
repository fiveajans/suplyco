<!DOCTYPE html>
<html lang="tr">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="robots" content="noindex, nofollow">

	<!-- Title -->
	<title>Yönetim Paneli</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo e(asset_url('admin/img/fav.png')); ?>">

	<!-- *************
		************ Common Css Files *************
	************ -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/css/bootstrap.min.css')); ?>">

	<!-- Main css -->
	<link rel="stylesheet" href="<?php echo e(asset_url('admin/css/main.css')); ?>">

	<?php echo $__env->yieldContent('styles'); ?>
</head>
<body class="authentication">

	<!-- Loading wrapper start -->
	<div id="loading-wrapper">
		<div class="spinner-border"></div>
		Yükleniyor...
	</div>
	<!-- Loading wrapper end -->

	<!-- *************
		************ Login container start *************
	************* -->
	<div class="login-container">
		<div class="container-fluid h-100">

			<?php echo $__env->yieldContent('content'); ?>

		</div>
	</div>
	<!-- *************
		************ Login container end *************
	************* -->

	<!-- *************
		************ Required JavaScript Files *************
	************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="<?php echo e(asset_url('admin/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/js/bootstrap.bundle.min.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/js/modernizr.js')); ?>"></script>
	<script src="<?php echo e(asset_url('admin/js/moment.js')); ?>"></script>

	<!-- *************
		************ Vendor Js Files *************
	************* -->
	<!-- Main Js Required -->
	<script src="<?php echo e(asset_url('admin/js/main.js')); ?>"></script>

	<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\babacavus-five\public\views/admin/layouts/auth.blade.php ENDPATH**/ ?>