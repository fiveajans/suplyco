<?php

namespace App\Controllers\Client;

use Core\Controller;
use PDO;

class Products extends Controller
{
	public function index()
	{
		// Products, images and videos
		$sql = "SELECT p.name AS name, p.slug AS slug,
		pi.image AS image,
		pv.video AS video
		FROM products p
		INNER JOIN product_images pi ON pi.product_id = p.id
		LEFT JOIN product_videos pv ON pv.product_id = p.id
		WHERE p.deleted_at IS NULL AND (p.default_image = pi.id OR p.default_video = pv.id)
		ORDER BY p.priority ASC";

		$query = $this->db->query($sql, PDO::FETCH_OBJ);

		$data = [
			'products' => $query
		];

		return $this->view('client.pages.products', $data);
	}

	public function detail($slug)
	{
		// Products
		$sql = "SELECT id, name, description, info
		FROM products
		WHERE deleted_at IS NULL AND slug = '{$slug}'";

		$product = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

		if (!$product)
		{
			header('Location: ' . site_url('products'));
			exit;
		}

		$id = $product->id;

		// Images
		$sql = "SELECT image
		FROM product_images
		WHERE deleted_at IS NULL AND product_id = '{$id}'";

		$images = $this->db->query($sql, PDO::FETCH_OBJ);

		// Videos
		$sql = "SELECT video
		FROM product_videos
		WHERE deleted_at IS NULL AND product_id = '{$id}'";

		$videos = $this->db->query($sql, PDO::FETCH_OBJ);

		// Accordions
		$sql = "SELECT title, content
		FROM product_accordions
		WHERE deleted_at IS NULL AND product_id = '{$id}'";

		$accordions = $this->db->query($sql, PDO::FETCH_OBJ);

		$data = [
			'product' => $product,
			'images' => $images,
			'videos' => $videos,
			'accordions' => $accordions
		];

		return $this->view('client.pages.products-detail', $data);
	}
}
