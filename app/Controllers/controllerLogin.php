<?php 

namespace App\Controllers;
use App\Models\loginModel;

class controllerLogin extends BaseController
{
	public function index()
	{	

		echo view('layouts/header');
		echo view('login');
		echo view('layouts/footer');
/* 		$tasklogin = new loginModel();
	
		$resultTaskslogin = $tasklogin->readlogin();

		$data =array(
			"createlogin"=>$resultTaskslogin,
			
		);

		echo view('layouts/header');
		echo view('vwLogin', $data);
		echo view('layouts/footer'); */
	}

	public function signIn(){

		$taskLogin = new loginModel();	
		$request = \Config\Services::request();
		$resultLogin = $taskLogin->readLogin();
		
		$email = $request-> getPost('email');
		$password = $request-> getPost('password');

		if($resultLogin->email == $email && $resultLogin->password == $password){

		$session = SESSION();
		$newdata = [
			'username'  => $resultLogin->user,
			'email'     => $resultLogin->email,
			'rol' => $resultLogin->rol
		];
		$session->set($newdata);
		return redirect()->to('/public/addProperty');
	};
	}

    

}