<?php

namespace App\Controllers;

use App\Models\modelRegister;


class controllerLogin extends BaseController
{

	public function index()
	{
		$session = session();
		$session->destroy();
		echo view('layouts/header');
		echo view('loginError');
		echo view('layouts/footer');
	}

	public function loginTask()
	{
		$request = \Config\Services::request();
		$user = $request->getPost('userlog');
		$password = $request->getPost('pass');

		if ($user != "" || $user != null && $password != "" || $password != null) {

			$session = session();
			$newdata = [
				'user'  => $user,
				'password'  => $password,		
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
