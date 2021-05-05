<?php


namespace App\Models;

use CodeIgniter\Model;

class modelRegister extends Model
{
    function register($firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip){
        
        $sql ="INSERT INTO userregister(firstname, lastname, email, country, state, city, user, password, rol, zip)VALUES('{$firstname}','{$lastname}','{$email}','{$country}','{$state}','{$city}','{$user}','{$password}','{$rol}','{$zip}')";

        $this->db->query($sql);
       
    }

    function readRegister(){
        $sql ="SELECT * FROM userregister";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }
   
    function deleteRegister($id){
        $sql="DELETE FROM userregister WHERE id={$id}";
        $this->db->query($sql);
    }

    // ...
}












