<?php

namespace App\Controllers;
use App\Models\PropertyModel;

class Home extends BaseController
{
	public function index()
	{
		$taskproperty = new PropertyModel();
		$resulProperty = $taskproperty->readproperty();
		$data = array(
			"property" => $resulProperty,
		);
		echo view('layouts/header');
		echo view('home', $data);
		echo view('layouts/footer');
	}

}
