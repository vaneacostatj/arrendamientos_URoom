<?php

namespace App\Controllers;
use App\Models\PropertyModel;

class controllerAddProperty extends BaseController
{
	public function index()
	{	
		$taskproperty = new PropertyModel();
		$resulProperty = $taskproperty->readproperty();
		$data = array(
			"property" => $resulProperty,
		);
		echo view('layouts/header');
		echo view('vwProperty', $data);
		echo view('layouts/footer');

	}


	public function viewProperty(){
		
		$session = session();
		echo $session->get('user');

		//if($session->get('user') =! "" || $session->get('user') =! null){
		echo view('layouts/header');
		echo view('addProperty');
		echo view('layouts/footer');
		//};					
	}

	public function urbanProperty(){

		$taskproperty = new PropertyModel();
		$resulProperty = $taskproperty->readproperty();
		$data = array(
			"property" => $resulProperty,
		);
		echo view('layouts/header');
		echo view('urbanProperty',$data);
		echo view('layouts/footer');
	}

	public function ruralProperty(){

		$taskproperty = new PropertyModel();
		$resulProperty = $taskproperty->readproperty();
		$data = array(
			"property" => $resulProperty,
		);
		echo view('layouts/header');
		echo view('ruralProperty',$data);
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
        $area = $request-> getPost('WetArea');
        $gas = $request-> getPost('Gas');
        $transport = $request-> getPost('Transport');
        $location = $request-> getPost('Location');
        $value = $request-> getPost('Value');
        $photos = $request-> getPost('photos');
		$Dwelling = $request-> getPost('Dwelling');
		$Zone = $request-> getPost('Zone');


		$propertyModel->addProperty($document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos, $Dwelling, $Zone);
		return redirect()->to('/public/addProperty');

		
	}

	public function deleteProperty(){
		$propertyModel = new PropertyModel();
		$request = \Config\Services::request();
		$ID= $request->getGet('ID');
		$propertyModel->deleteProperty($ID);
		return redirect()->to('/public/addProperty');

		//echo "ID: {$ID}";
	}

	public function updateProperty(){

		$propertyModel = new PropertyModel();
		$request = \Config\Services::request();
		$ID = $request->getGet('ID');
		$property = $propertyModel->getProperty($ID);
		//var_dump($property);
		echo view('layouts/header');
		echo view('updateProperty', array("property" => $property[0]));
		echo view('layouts/footer');

		//

		
	}

	public function updateEditedProperty()
	{
		$propertyModel = new PropertyModel();
		$request = \Config\Services::request();
		
		$ID = $request->getGet('ID');
		$document = $request-> getPost('Document');
        $city = $request-> getPost('City');
        $country = $request-> getPost('Country');
        $address = $request-> getPost('Address');
        $rooms =  $request-> getPost('Rooms');
        $bathrooms = $request-> getPost('Bathrooms');
        $area = $request-> getPost('WetArea');
        $gas = $request-> getPost('Gas');
        $transport = $request-> getPost('Transport');
        $location = $request-> getPost('Location');
        $value = $request-> getPost('Value');
        $photos = $request-> getPost('photos');
		$Dwelling = $request-> getPost('Dwelling');
		$Zone = $request-> getPost('Zone');

		$propertyModel->updateEditedProperty($ID, $document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos, $Dwelling, $Zone);
		return redirect()->to('/public/addProperty');
	}
}
