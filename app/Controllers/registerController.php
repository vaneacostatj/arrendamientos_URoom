<?php

namespace App\Controllers;

class registerController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('register');
		echo view('layouts/footer');
	}
}