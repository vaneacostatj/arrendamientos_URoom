<?php

namespace App\Controllers;
use App\Models\PropertyModel;
use App\Models\modelRegister;

class controllerAddProperty extends BaseController
{
	public function index()
	{	
		$session = session();

		if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){
			$taskproperty = new PropertyModel();
			$resulProperty = $taskproperty->readproperty();
			$data = array("property" => $resulProperty,);
			echo view('layouts/header2');
			echo view('vwProperty', $data);
			echo view('layouts/footer');
		}
		else{
			$loginError = base_url()."/public/";
			echo view('layouts/header2');

			$template="
			<div class='container'>
			  <div class='row'>
			  <img src='https://i.imgur.com/nV7u85w.jpg'>    
			  <a href='{$loginError}'  class='btn btn-outline-dark' >Try again</a>  
			  </div>
			</div>
			";
			echo $template;
			echo view('layouts/footer');
		 }

	}

	public function indexReservas()
	{	
		$session = session();

		if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){

			$request = \Config\Services::request();	
			$user = $request->getGet('user');
			$modelRegister = new modelRegister();
			$PropertyModel= new PropertyModel();

			$getLog = $modelRegister->getLog($user);
			$resulProperty = $PropertyModel->readproperty();
		
			echo view('layouts/header2');
			echo view('indexReservas', array("getLog" => $getLog[0],"property" => $resulProperty));
			echo view('layouts/footer');
		}
		else{
			$loginError = base_url()."/public/";
			echo view('layouts/header2');

			$template="
			<div class='container'>
			  <div class='row'>
			  <img src='https://i.imgur.com/nV7u85w.jpg'>    
			  <a href='{$loginError}'  class='btn btn-outline-dark' >Try again</a>  
			  </div>
			</div>
			";
			echo $template;
			echo view('layouts/footer');
		 }

	}


	public function viewProperty(){
		$session = session();

		if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){
			echo view('layouts/header2');
			echo view('addProperty');
			echo view('layouts/footer');
		}	
		else{
			$loginError = base_url()."/public/";
			echo view('layouts/header2');

			$template="
			<div class='container'>
			  <div class='row'>
			  <img src='https://i.imgur.com/nV7u85w.jpg'>    
			  <a href='{$loginError}'  class='btn btn-outline-dark' >Try again</a>  
			  </div>
			</div>
			";
			echo $template;
			echo view('layouts/footer');
		 }				
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


	public function urban(){
		
		$session = session();

		if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){
			$taskproperty = new PropertyModel();
			$resulProperty = $taskproperty->readproperty();
			$data = array(
				"property" => $resulProperty,
			);
			echo view('layouts/header2');
			echo view('urban',$data);
			echo view('layouts/footer');
		}
		else{
			$loginError = base_url()."/public/";
			echo view('layouts/header2');

			$template="
			<div class='container'>
			  <div class='row'>
			  <img src='https://i.imgur.com/nV7u85w.jpg'>    
			  <a href='{$loginError}'  class='btn btn-outline-dark' >Try again</a>  
			  </div>
			</div>
			";
			echo $template;
			echo view('layouts/footer');
		 }
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


	public function rural(){

		$session = session();

		if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){
			$taskproperty = new PropertyModel();
			$resulProperty = $taskproperty->readproperty();
			$data = array(
				"property" => $resulProperty,
			);
			echo view('layouts/header2');
			echo view('rural',$data);
			echo view('layouts/footer');
		}
		else{
			$loginError = base_url()."/public/";
			echo view('layouts/header2');

			$template="
			<div class='container'>
			  <div class='row'>
			  <img src='https://i.imgur.com/nV7u85w.jpg'>    
			  <a href='{$loginError}'  class='btn btn-outline-dark' >Try again</a>  
			  </div>
			</div>
			";
			echo $template;
			echo view('layouts/footer');
		 }
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
		return redirect()->to('/public/login');

		
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
		$session = session();

		if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){
			$propertyModel = new PropertyModel();
			$request = \Config\Services::request();
			$ID = $request->getGet('ID');
			$property = $propertyModel->getProperty($ID);
			//var_dump($property);
			echo view('layouts/header2');
			echo view('updateProperty', array("property" => $property[0]));
			echo view('layouts/footer');
		}//	
		else{
			$loginError = base_url()."/public/";
			echo view('layouts/header2');

			$template="
			<div class='container'>
			  <div class='row'>
			  <img src='https://i.imgur.com/nV7u85w.jpg'>    
			  <a href='{$loginError}'  class='btn btn-outline-dark' >Try again</a>  
			  </div>
			</div>
			";
			echo $template;
			echo view('layouts/footer');
		 }
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
		return redirect()->to('/public/login');
	}
}
