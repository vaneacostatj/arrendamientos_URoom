<?php


namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    function loginTask($id, $user, $email, $password, $rol){
        
        //$route = base_url()."/public/register?rol={$item->rol}";
        $sql ="SELECT FROM userregister(user, password)VALUES('{$user}','{$email}', '{$password}', '{$rol}')";
        $loginList = $this->db->query($sql);
        return $loginList->getResult();
    }       
        

    function readLogin(){
        $sql ="SELECT * FROM userregister";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }
}