<?php

namespace App\Controllers\Api;

use Core\Controller;
use Symfony\Component\HttpFoundation\Request;

class Products extends Controller
{
	public function image(Request $request)
	{
		if ($request->getMethod() == 'POST')
		{
			$action = $request->request->get('action');

			switch ($action)
			{
				case 'delete':
					$id = $request->request->get('id');
					$defaultImage = $request->request->get('defaultImage');

					if ($defaultImage != 'true')
					{
						$sql = "UPDATE product_images SET
						deleted_at = :deleted_at
						WHERE id = :id";

						$query = $this->db->prepare($sql);

						$update = $query->execute([
							'deleted_at' => date('Y:m:d H:i:s'),
							'id' => $id
						]);

						if ($update)
						{
							return 'success';
						}
						else
						{
							return 'error';
						}
					}
					else
					{
						return 'default';
					}
					break;

				case 'default':
					$id = $request->request->get('id');
					$product = $request->request->get('product');

					$sql = "UPDATE products SET
					default_image = :default_image
					WHERE id = :id";

					$query = $this->db->prepare($sql);

					$update = $query->execute([
						'default_image' => $id,
						'id' => $product
					]);

					if ($update)
					{
						return 'success';
					}
					else
					{
						return 'error';
					}
					break;

				default:
					return 'action';
					break;
			}
		}
	}
}
