<?php

namespace App\Controllers;

class controllerAddProperty extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('addProperty');
		echo view('layouts/footer');
	}
}
