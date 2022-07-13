<?php

namespace App\Controllers\Admin;

use Core\Controller;
use PDO;

class Products extends Controller
{
	public function approved()
	{
        $sql = "SELECT p.id AS id, p.sku AS sku, p.name AS name, p.price AS price, p.updated_at AS updated_at,
        pi.image AS image,
        pc.id AS category_id, pc.name AS category_name
        FROM products p
        INNER JOIN product_images pi ON pi.product_id = p.id
        INNER JOIN product_categories pc ON pc.id = p.category_id
        ORDER BY p.id DESC";

        $query = $this->db->query($sql, PDO::FETCH_OBJ);

        $data = [
            'products' => $query
        ];

		return $this->view('admin.pages.products.approved', $data);
	}

    public function update($id)
    {

    }
}
