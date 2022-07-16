<?php

namespace App\Controllers\Client;

use Core\Controller;
use Symfony\Component\HttpFoundation\Request;

class Career extends Controller
{
	public function index()
	{
		return $this->view('client.pages.career');
	}

	public function joinUs(Request $request)
	{
		if ($request->getMethod() == 'POST')
		{
			$this->validator->rule('required', [
				''
			]);

			$upload = upload('cv')->allowed(['application/pdf']);

			if ($error = $upload->error())
			{
                $this->validator->error('cv', $error);
            }

			if ($this->validator->validate())
			{
				$original = $upload->to('uploads/files');

				$data = $this->validator->data();
			}
		}

		return $this->view('client.pages.join-us');
	}
}
