<?php

namespace App\Controllers\Client;

use Core\Controller;

class Home extends Controller
{
	public function index()
	{
		return $this->view('client.pages.home');
	}
}
