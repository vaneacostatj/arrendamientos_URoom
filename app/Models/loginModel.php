<?php


namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    /* function getlogin($user, $password){
        
        $sql ="GET FROM userregister(user, password)VALUES('{$user}','{$password}')";

        $this->db->query($sql);
       
    } */

    function readLogin(){
        $sql ="SELECT * FROM userregister";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }
   

    // ...
}