<?php

$app->router->notFound(function () {
	header('Location: ' . site_url());
	exit;
});

$app->router->get('/', 'Client.Home@index');

$app->router->group('/admin', function ($router) {

	$router->get('/', function () {
		header('Location: ' . site_url('admin/dashboard'));
		exit;
	});

	$router->any('/login', 'Admin.Auth.Login@index');
	$router->any('/logout', 'Admin.Auth.Logout@index');

	$router->get('/dashboard', 'Admin.Dashboard@index');

	$router->group('/products', function ($router) {

		$router->get('/', function () {
			header('Location: ' . site_url('admin/products/approved'));
			exit;
		});

		$router->get('/approved', 'Admin.Products@approved');

	});

}, ['before' => 'UserCheckAuth']);
