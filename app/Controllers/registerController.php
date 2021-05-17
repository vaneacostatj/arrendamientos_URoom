<?php

namespace App\Controllers;

use App\Models\modelRegister;

class registerController extends BaseController
{
	public function index()
	{
		$taskRegister = new modelRegister();
		$resultTasksRegister = $taskRegister->readRegister();
		$data = array(
			"createRegister" => $resultTasksRegister,

		);

		echo view('layouts/header');
		echo view('vwRegister', $data);
		echo view('layouts/footer');
	}

	public function viewRegister()
	{
		echo view('layouts/header');
		echo view('register');
		echo view('layouts/footer');
	}


	public function createReg()
	{

		$request = \Config\Services::request();
		$modelRegister = new modelRegister();

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


		$modelRegister->register($firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip);
		return redirect()->to('/public/register');
	}

	public function deleteRegister()
	{
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
		$modelRegister = new modelRegister();
	
		$getLog = $modelRegister->getLog($session->user);
		echo view('layouts/header');
		echo view('vwHost',array("getLog" => $getLog[0]));
		echo view('layouts/footer');
	}

	public function readInvited()
	{
		$session = session();
		$modelRegister = new modelRegister();

		$modelRegister->userregister();
		$getLog = $modelRegister->getLog($session->user);

		echo view('layouts/header');
		echo view('vwHost',array("getLog" => $getLog[0]));
		echo view('layouts/footer');
	}

	public function readAdmin()
	{
		$session = session();
		$modelRegister = new modelRegister();

		$modelRegister->userregister();
		$getLog = $modelRegister->getLog($session->user);

		echo view('layouts/header');
		echo view('readAdmin',array("getLog" => $getLog[0]));
		echo view('layouts/footer');
	}

	public function readLogin()
	{
		$session = session();
		$modelRegister = new modelRegister();
		$User = $session->user;
		$getLog = $modelRegister->getLog($User);

		echo view('layouts/header');
		echo view('login',array("getLog" => $getLog[0]));
		echo view('layouts/footer');
		//var_dump($getLog);
	}
}
