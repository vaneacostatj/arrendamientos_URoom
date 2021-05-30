<?php

namespace App\Controllers;
use App\Models\modelReserve;

class controllerReserve extends BaseController
{
	public function index()
	{
        $session = session();

        if ($session->user != "" || $session->user != null && $session->password != "" || $session->password != null){
            $modelReserve = new modelReserve();		
			
		    $resultReserve = $modelReserve->readReserve();
		    $data = array(
			    "reserve" => $resultReserve,
		    );
		    echo view('layouts/header2');
		    echo view('vwReserve', $data);
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

    public function addReserve(){
        $modelReserve = new modelReserve();
        $request =\Config\Services::request();

        $firstname = $request->getPost('firstname');
        $lastname = $request->getPost('lastname');
        $property_code = $request->getPost('property_code');
        $arrival_date = $request->getPost('arrival_date');
        $user = $request->getPost('user');
        $night_value = $request->getPost('night_value');
        $number_of_people = $request->getPost('number_of_people');
        $departure_date = $request->getPost('departure_date');

        $modelReserve->reserve($firstname, $lastname, $property_code, $arrival_date, $user, $night_value, $number_of_people, $departure_date);
		return redirect()->to('/public/login');
		/* echo "entro"; */

    }

    public function deleteReserve(){
        $modelReserve = new modelReserve();
		$request = \Config\Services::request();
		$id= $request->getGet('id');
		//var_dump($id);
		$modelReserve->deleteReserve($id);
		return redirect()->to('/public/vwReserve');
    }

}