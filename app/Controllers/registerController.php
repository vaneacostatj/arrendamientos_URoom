<?php
 namespace App\Controllers;
 use App\Models\modelRegister;
 
 class registerController extends BaseController
 {
	 public function index()
	 {	
		 $taskRegister = new modelRegister();
		 $resultTasksRegister = $taskRegister->readRegister();
		 $data =array(
			 "createRegister"=>$resultTasksRegister,
			 
		 );
 
		 echo view('layouts/header');
		 echo view('vwRegister', $data);
		 echo view('layouts/footer');
	 }
 
	 public function viewRegister(){
		 echo view('layouts/header');
		 echo view('register');
		 echo view('layouts/footer');
	 }
 
 
	 public function createReg(){
 
		 $request = \Config\Services::request();
		 $modelRegister = new modelRegister();
 
		 $firstname = $request-> getPost('firstname');
		 $lastname = $request-> getPost('lastname');
		 $email = $request-> getPost('email');
		 $country = $request-> getPost('country');
		 $state =  $request-> getPost('state');
		 $city = $request-> getPost('city');
		 $user = $request-> getPost('user');
		 $password = $request-> getPost('password');
		 $rol = $request-> getPost('rol');
		 $zip = $request-> getPost('zip');

		 
		 $modelRegister->register($firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip);
		 return redirect()->to('/public/register');
 
		 
	 }

	 public function deleteRegister(){
		$ModelRegister = new modelRegister();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$ModelRegister->deleteRegister($id);
		return redirect()->to('/public/register');
		//echo "ID: {$id}";
	}

	public function updateRegister(){
		$ModelRegister = new modelRegister();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$ModelUpdate = $ModelRegister->getRegister($id);
		echo view('layouts/header');
		echo view('vwUpdate', array("ModelUpdate" => $ModelUpdate[0]));
		echo view('layouts/footer');
		//var_dump($ModelUpdate);
	}

	public function updateEdit(){

		 
		$request = \Config\Services::request();
		$modelRegister = new modelRegister();
		$id = $request-> getGet('id');
		$firstname = $request-> getPost('firstname');
		$lastname = $request-> getPost('lastname');
		$email = $request-> getPost('email');
		$country = $request-> getPost('country');
		$state =  $request-> getPost('state');
		$city = $request-> getPost('city');
		$user = $request-> getPost('user');
		$password = $request-> getPost('password');
		$rol = $request-> getPost('rol');
		$zip = $request-> getPost('zip');
	
		$modelRegister->updateRegister($id, $firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip);
		return redirect()->to('/public/register'); 

	}



	public function readHost(){
		$session = session();
		echo $session->get('user');
		echo $session->get('rol');

		$request = \Config\Services::request();
		$modelRegister = new modelRegister();
		$user = $request-> getGet('user');
		$password = $request-> getGet('password');
		$rol = $request-> getGet('rol');
		$modelRegister->readRegister($user, $password, $rol);

		if($session->get('user') != "" || $session->get('user') != null && $password->get('pass') != "" || $password->get('pass') != null){

			if($session->get('user') == $modelRegister->user || $password->get('pass') == $modelRegister->password){

				if($modelRegister->rol == 'Admin'){

					echo view('layouts/header');
					echo view('vwHost');
					echo view('layouts/footer');
				}
				else
					if($modelRegister->rol == 'Host'){

						echo view('layouts/header');
						echo view('vwHost');
						echo view('layouts/footer');
					}
					else
						if($modelRegister->rol == 'Invited'){

							echo view('layouts/header');
							echo view('vwHost');
							echo view('layouts/footer');
						}
			}	
		}
		else{
			echo "You don't have access to continue";
		}
	}	
}
  