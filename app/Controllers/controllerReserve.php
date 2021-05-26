<?php

namespace App\Controllers;
use App\Models\modelReserve;

class controllerReserve extends BaseController
{
	public function index()
	{
		$modelReserve = new modelReserve();
		$resultReserve = $modelReserve->readReserve();
		$data = array(
			"reserve" => $resultReserve,
		);
		echo view('layouts/header2');
		echo view('vwReserve', $data);
		echo view('layouts/footer');
	}

    public function addReserve(){
        $modelReserve = new modelReserve();
        $request = \Config\Services::request();

        $firstname = $request-> getPost('firstname');
        $lastname = $request-> getPost('lastname');
        $property_code = $request-> getPost('property_code');
        $arrival_date = $request-> getPost('arrival_date');
        $user = $request-> getPost('user');
        $night_value = $request-> getPost('night_value');
        $number_of_people = $request-> getPost('number_of_people');
        $departure_date = $request-> getPost('departure_date');

        $modelReserve->addProperty($firstname, $lastname, $property_code, $arrival_date, $user, $night_value, $number_of_people, $departure_date);
		return redirect()->to('/public/vwReserve');

    }

    public function deleteReserve(){
        $modelReserve = new modelReserve();
		$request = \Config\Services::request();
		$ID= $request->getGet('ID');
		$modelReserve->deleteReserve($ID);
		return redirect()->to('/public/vwReserve');
    }

}