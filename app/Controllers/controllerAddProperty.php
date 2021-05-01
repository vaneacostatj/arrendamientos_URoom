<?php

namespace App\Controllers;
use App\Models\PropertyModel;

class controllerAddProperty extends BaseController
{
	public function index()
	{	
		$taskproperty = new PropertyModel();
	
		$resultTasksproperty = $taskproperty->readtask();

		$data =array(
			"tasks"=>$resultTasksproperty,
			
		);

		echo view('layouts/header');
		echo view('addProperty', $data);
		echo view('layouts/footer');
	}
	public function viewProperty(){
		echo view('layouts/header');
		echo view('addProperty');
		echo view('layouts/footer');
	}


	public function create(){

		$request = \Config\Services::request();
		$document = $request-> getPost('Document');
        $city = $request-> getPost('City');
        $country = $request-> getPost('Country');
        $address = $request-> getPost('Address');
        $rooms =  $request-> getPost('Rooms');
        $bathrooms = $request-> getPost('Bathrooms');
        $area = $request-> getPost('Area');
        $gas = $request-> getPost('Gas');
        $transport = $request-> getPost('Transport');
        $location = $request-> getPost('Location');
        $value = $request-> getPost('Value');
        $photos = $request-> getPost('photos');

		return redirect()->to('/addProperty');
		
	}

}
