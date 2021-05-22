<?php

namespace App\Controllers;

use App\Models\modelRegister;
use App\Models\PropertyModel;

class registerController extends BaseController
 {
	 public function index()
	 {	
		$session = session();
		$session->start();
		 $taskRegister = new modelRegister();
		 $resultTasksRegister = $taskRegister->readRegister();
		 $data =array(
			 "createRegister"=>$resultTasksRegister,
			 
		 );
 
		 echo view('layouts/header2');
		 echo view('vwRegister', $data);
		 echo view('layouts/footer');
	 }
 
	 public function viewRegister(){
		 echo view('layouts/header');
		 echo view('register');
		 echo view('layouts/footer');
	 }
 
 
	 public function createReg(){

 		$session = session();
		 $session->start();
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

	public function updateRegister()
	{
		$ModelRegister = new modelRegister();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$ModelUpdate = $ModelRegister->getRegister($id);
		echo view('layouts/header');
		echo view('vwUpdate', array("ModelUpdate" => $ModelUpdate[0]));
		echo view('layouts/footer');
		//var_dump($ModelUpdate);
	}

	public function updateEdit()
	{

		$session = session();
		$session->start();
		$request = \Config\Services::request();
		$modelRegister = new modelRegister();
		$id = $request->getGet('id');
		$firstname = $request->getPost('firstname');
		$lastname = $request->getPost('lastname');
		$email = $request->getPost('email');
		$country = $request->getPost('country');
		$state =  $request->getPost('state');
		$city = $request->getPost('city');
		$user = $request->getPost('user');
		$password = $request->getPost('password');
		$rol = $request->getPost('rol');
		$zip = $request->getPost('zip');

		$modelRegister->updateRegister($id, $firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip);
		return redirect()->to('/public/register');
	}


	public function readHost()
	{
		$session = session();
		$session->start();
		$request = \Config\Services::request();	
		$user = $request->getGet('user');
		$modelRegister = new modelRegister();
		$PropertyModel= new PropertyModel();

		$getLog = $modelRegister->getLog($user);
		$getLogProp = $PropertyModel->getLogProp($user);
		echo view('layouts/header2');
		echo view('vwHost',array("getLog" => $getLog[0], "getLogProp" => $getLogProp[0]));
		echo view('layouts/footer');
	}

	public function readInvited()
	{
		$session = session();
		$session->start();
		$request = \Config\Services::request();	
		$user = $request->getGet('user');
		$modelRegister = new modelRegister();

		$getLog = $modelRegister->getLog($user);

		echo view('layouts/header2');
		echo view('vwInvited',array("getLog" => $getLog[0]));
		echo view('layouts/footer');
	}

	public function readAdmin()
	{
		$session = session();
		$session->start();
		$request = \Config\Services::request();	
		$user = $request->getGet('user');
		$modelRegister = new modelRegister();

		$getLog = $modelRegister->getLog($user);
		//var_dump ($getLog);

		echo view('layouts/header2');
		echo view('vwAdmin',array("getLog" => $getLog[0]));
		echo view('layouts/footer');
	}

	public function readLogin()
	{
		$session = session();
		$session->start();
		$modelRegister = new modelRegister();
		$User = $session->user;
		$getLog = $modelRegister->getLog($User);

		echo view('layouts/header2');
		echo view('login',array("getLog" => $getLog[0], ));
		echo view('layouts/footer');
		//var_dump($getLog);
	}
}
