<?php

namespace App\Controllers;
use App\Models\PropertyModel;

class controllerAddProperty extends BaseController
{
	public function index()
	{
		$taskProperty = new PropertyModel();
		$taskProperty->addProperty();	
		echo view('layouts/header');
		echo view('addProperty');
		echo view('layouts/footer');
	}
	public function create(){

		echo view('layouts/header');
		echo "addProperty";
		echo view('layouts/footer');
		
		
	}
}
