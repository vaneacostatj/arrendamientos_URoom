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
		 return redirect()->to('/register');
 
		 
	 }

	 public function deleteRegister(){
		$modelRegister = new modelRegister();
		$request = \Config\Services::request();
		$id= $request->getGet('id');
		$modelRegister->deleteRegister($id);
		return redirect()->to('/public/register');

		//echo "ID: {$id}";
	}
}
  