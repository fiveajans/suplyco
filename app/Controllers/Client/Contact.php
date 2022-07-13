<?php

namespace App\Controllers\Client;

use Core\Controller;

class Contact extends Controller
{
	public function index()
	{
		return $this->view('client.pages.contact');
	}
}
