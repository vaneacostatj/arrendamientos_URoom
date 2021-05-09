<?php 

namespace App\Controllers;
use App\Models\loginModel;

class controllerLogin extends BaseController
{
	public function index()
	{	
		$loginModel = new loginModel();
	
		$resultLoginModel = $loginModel->readLogin();

		$data =array(
			"createlogin"=>$resultLoginModel,
			
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
		//$getLogin=document.getElementById(login).value;
        $loginModel = new loginModel();
        $request = \config\services::request();
        $user = $request->getGet('user');
        $email = $request->getGet('email');
        $password = $request->getGet('password');
        $rol = $request->getGet('rol');

		$loginModel->register($email, $user, $password, $rol);
		return redirect()->to('/public/login');

		/* if(user == "" || email == "" || password == ""){
			echo"The fields must be required";
		}
		else
		if(rol == Invited){
			return redirect()->to('/public/');
		}
		else
		if(rol == Host){
			return redirect()->to('/public/');
		}
		else
		if(rol == Admin){
			return redirect()->to('/public/');
		} */
        
    }


}

