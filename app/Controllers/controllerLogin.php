<?php 

namespace App\Controllers;
/* use App\Models\loginModel; */


class controllerLogin extends BaseController
{

	public function index(){
		$session = session();
		$session->destroy();
		echo view('layouts/header');
		echo view('Home');
		echo view('layouts/footer');
	}

    public function loginTask(){

		$request = \Config\Services::request();
		$user = $request->getPost('userlog');
		$password = $request->getPost('pass');
		//$rol = $request-> getPost('rol');
		

		$session = session();
		$newdata = [
			'user'  => $user,
			'rol'  => 'Admin',			
		];
		$session->set($newdata);
		return redirect()->to('/public/readHost');
		/* echo($password);
		echo($user); */
		//var_dump($session);


		/* 
		

		if($user == "" || $user == null){
			echo"The fields must be required";
		}
		else{
			if($user == $resultLogin->user && $password == $resultLogin->password){
				$newdata = [
					'
				];
				$session->set($newdata);
				return redirect()->to('/public/hostView');

			}
		} */
    }
}
