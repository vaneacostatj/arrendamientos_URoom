<?php

namespace App\Controllers;
use App\Models\PropertyModel;

class controllerAddProperty extends BaseController
{
	public function index()
	{	
		$taskproperty = new PropertyModel();
	
		$resultTasksproperty = $taskproperty->readproperty();

		$data =array(
			"createproperty"=>$resultTasksproperty,
			
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

<<<<<<< HEAD

		//return redirect()->to('/addProperty');
=======
	//	return redirect()->to('/addProperty');
>>>>>>> aa66212956a9c642a5aa25df0fd330012ca61e0b

		$propertyModel->addProperty($document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos);
		return redirect()->to('/public/addProperty');

		
	}

}
