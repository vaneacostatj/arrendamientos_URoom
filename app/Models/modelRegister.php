<?php

namespace App\Models;

use CodeIgniter\Model;

class modelRegister extends Model
{
    function register($fistname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip){
        
        $sql ="INSERT INTO userregister(fistname, lastname, email, country, state, city, user, password, rol, zip)VALUES('{$fistname}','{$lastname}','{$email}','{$country}',{$state},{$city},'{$user}','{$password}','{$rol}','{$zip}')";
        
        $this->db->query($sql);
       
    }

    function readRegister(){
        $sql ="SELECT * FROM userregister";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }
   

}