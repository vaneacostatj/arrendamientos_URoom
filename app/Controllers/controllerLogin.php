<?php 

namespace App\Controllers;
use App\Models\loginModel;

class controllerLogin extends BaseController
{
	public function index()
	{	
		$tasklogin = new loginModel();
	
		$resultTaskslogin = $tasklogin->readlogin();

		$data =array(
			"createlogin"=>$resultTaskslogin,
			
		);

		echo view('layouts/header');
		echo view('vwLogin', $data);
		echo view('layouts/footer');
	}

	public function viewLogin(){
		echo view('layouts/header');
		echo view('login');
		echo view('layouts/footer');
	}

    public function loginTask(){
        $loginTask = new loginModel();
        $request = \config\services::request();
        $id = $request->getGet('id');
        
    }


		public function create(){

		$request = \Config\Services::request();
		$propertyModel = new loginModel();

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



		/* $loginModel->addLogin($document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos);
		return redirect()->to('/public/addLogin'); */

		
	}

}