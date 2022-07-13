<?php

namespace App\Controllers\Client;

use Core\Controller;

class About extends Controller
{
	public function index()
	{
		return $this->view('client.pages.about');
	}

	public function detail()
	{
		return $this->view('client.pages.about-detail');
	}
}
