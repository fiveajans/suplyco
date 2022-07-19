<?php

namespace App\Controllers\Admin;

use Core\Controller;
use PDO;
use Symfony\Component\HttpFoundation\Request;
use Verot\Upload\Upload;

class Products extends Controller
{
	public function approved()
	{
        $sql = "SELECT p.id AS id, p.name AS name, p.description AS description, p.updated_at AS updated_at,
        pi.image AS image
        FROM products p
        LEFT JOIN product_images pi ON pi.product_id = p.id
		WHERE
		CASE
			WHEN p.default_image IS NOT NULL THEN p.default_image = pi.id
			ELSE pi.id
		END
        ORDER BY p.id DESC";

        $query = $this->db->query($sql, PDO::FETCH_OBJ);

        $data = [
            'products' => $query
        ];

		return $this->view('admin.pages.products.approved', $data);
	}

	public function create(Request $request)
    {
		$old = [];
		$message = [];

		if ($request->getMethod() == 'POST')
		{
			$this->validator->rule('required', [
				'name',
				'description',
				'info'
			]);

			$old = $this->validator->data();

			if ($this->validator->validate())
			{
				$files = [];

				foreach ($_FILES['images'] as $k => $l)
				{
					foreach ($l as $i => $v)
					{
						if (!array_key_exists($i, $files))
						{
							$files[$i] = array();
						}

						$files[$i][$k] = $v;
					}
				}

				$uploadError = false;
				$images = [];

				foreach ($files as $file)
				{
					$handle = new Upload($file);

					if ($handle->uploaded)
					{
						$name = permalink($old['name']) . '_' . hashid();
						$images[] = $name . '.webp';

						$handle->allowed = ['image/*'];
						$handle->file_new_name_body = $name;
						$handle->image_convert = 'webp';
						$handle->process('./uploads/images/original/products');

						$handle->allowed = ['image/*'];
						$handle->file_new_name_body = $name;
						$handle->image_convert = 'webp';
						$handle->image_resize = true;
						$handle->image_x = 400;
						$handle->image_y = 400;
						$handle->image_ratio_crop = true;
						$handle->process('./uploads/images/cache/products/400x400');

						$handle->allowed = ['image/*'];
						$handle->file_new_name_body = $name;
						$handle->image_convert = 'webp';
						$handle->image_resize = true;
						$handle->image_x = 40;
						$handle->image_y = 40;
						$handle->image_ratio_crop = true;
						$handle->process('./uploads/images/cache/products/40x40');

						if (!$handle->processed)
						{
							$uploadError = true;
						}
					}
					else
					{
						$uploadError = true;
					}

					$handle->clean();
				}

				if ($uploadError)
				{
					$message = [
						'class' => 'danger',
						'text' => 'Bir hata oluştu ve resim(ler) yüklenemedi.'
					];
				}
				else
				{
					$name = $old['name'];
					$slug = permalink($name);
					$description = $old['description'];
					$info = $old['info'];
					$priority = $old['priority'];

					$sql = "INSERT INTO products SET
					name = ?,
					slug = ?,
					description = ?,
					info = ?,
					priority = ?";

					$query = $this->db->prepare($sql);

					$insert = $query->execute([
						$name,
						$slug,
						$description,
						$info,
						$priority
					]);

					if ($insert)
					{
						$insertError  = false;
						$id = $this->db->lastInsertId();

						$i = 0;

						foreach ($images as $image)
						{
							$i++;

							$sql = "INSERT INTO product_images SET
							image = ?,
							product_id = ?";

							$query = $this->db->prepare($sql);

							$insert = $query->execute([
								$image,
								$id
							]);

							if (!$insert)
							{
								$insertError = true;
							}

							$imageId = $this->db->lastInsertId();

							if ($i == 1)
							{
								$sql = "UPDATE products SET
								default_image = :default_image
								WHERE id = :id";

								$query = $this->db->prepare($sql);

								$update = $query->execute([
									'default_image' => $imageId,
									'id' => $id
								]);

								if (!$update)
								{
									$insertError = true;
								}
							}
						}

						if ($insertError)
						{
							$message = [
								'class' => 'warning',
								'text' => 'Ürün resimleri eklenirken bir hata oluştu.'
							];
						}
						else
						{
							$message = [
								'class' => 'success',
								'text' => 'Ürün başarılı bir şekilde eklendi.'
							];
						}
					}
					else
					{
						$message = [
							'class' => 'danger',
							'text' => 'Bir hata oluştu ve ürün eklenemedi.'
						];
					}
				}
			}
			else
			{
				$message = [
					'class' => 'warning',
					'text' => 'Lütfen gerekli alanları doldurun.'
				];
			}
		}

		$data = [
			'old' => $old,
			'message' => $message
		];

		return $this->view('admin.pages.products.create', $data);
    }

    public function update($id)
    {
		return $this->view('admin.pages.products.update');
    }
}
