<?php


namespace App\Models;

use CodeIgniter\Model;

class modelRegister extends Model
{
    function userregister($firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip){
        
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

    function getRegister($id){
        $sql ="SELECT * FROM userregister WHERE id={$id}";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }

    function updateRegister($id, $firstname, $lastname, $email, $country, $state, $city, $user, $password, $rol, $zip){
        $sql = "UPDATE userregister set firstname='{$firstname}', lastname='{$lastname}', email='{$email}', country='{$country}', state='{$state}', city='{$city}', user='{$user}', password='{$password}', rol='{$rol}', zip='{$zip}' WHERE id={$id}";

        $this->db->query($sql);
    }

    function getLog($user){
        $sql ="SELECT * FROM userregister WHERE user LIKE '{$user}%'";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }
}








