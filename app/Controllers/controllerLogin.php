<?php

namespace App\Controllers;

use App\Models\modelRegister;


class controllerLogin extends BaseController
{

	public function exit()
	{
		$session = session();
		$session->destroy();
		$data = base_url()."/public/";
		return redirect()->to($data);
	}

	public function loginTask()
	{
		$request = \Config\Services::request();
		$user = $request->getPost('userlog');
		$password = $request->getPost('pass');

		$modelRegister = new modelRegister();
		$getLog = $modelRegister->getLog($user);

		$Firstname = $getLog->firstname;       
		$Lastname = $getLog->lastname; 
		$Email = $getLog->email;               
		$Country = $getLog->country; 
		$State = $getLog->state;               
		$City = $getLog->city; 		                 
		$Rol = $getLog->rol; 
		$Zip = $getLog->zip;   
		$id = $getLog->id;
		

		if ($user != "" || $user != null && $password != "" || $password != null) {

			$session = session();
			$newdata = [
				'firstname'=>$Firstname,       
				'lastname'=>$Lastname,  
				'email'=>$Email,                
				'country'=>$Country, 
				'state'=>$State,               
				'city'=>$City,  
				'user'=>$user,                  
				'rol'=>$Rol, 
				'zip'=>$Zip,   
				'id'=>$id, 
				'password'=>$password,				
			];
			$session->set($newdata);
			return redirect()->to('/public/login');
		} else {

			//$message="You don't have access to continue";
			echo view('layouts/header');
			echo "<script>alert(alert())</script>";
			echo view('layouts/footer');
			//return redirect()->to('/public/Home');
		}
	}
}
