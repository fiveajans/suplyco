<?php

namespace App\Controllers\Client;

use Core\Controller;

class Career extends Controller
{
	public function index()
	{
		return $this->view('client.pages.career');
	}

	public function joinUs()
	{
		return $this->view('client.pages.join-us');
	}
}
