<?php

namespace App\Controllers;
use App\Models\PropertyModel;

class controllerAddProperty extends BaseController
{
	public function index()
	{	
		$taskproperty = new PropertyModel();
		$resultTasksproperty = $taskproperty->readproperty();
		$data = array(
			"createproperty" => $resultTasksproperty,
		);
		echo view('layouts/header');
		echo view('vwProperty', $data);
		echo view('layouts/footer');

	}

	public function viewProperty(){
		echo view('layouts/header');
		echo view('addProperty');
		echo view('layouts/footer');
	}


	public function create(){

		$request = \Config\Services::request();
		$propertyModel = new PropertyModel();

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



		$propertyModel->addProperty($document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos);
		return redirect()->to('/public/addProperty');

		
	}

	public function deleteProperty(){
		$propertyModel = new PropertyModel();
		$request = \Config\Services::request();
		$id= $request->getGet('ID');
		$propertyModel->deleteProperty($id);
		return redirect()->to('/public/addProperty');

		//echo "ID: {$id}";
	}
}
