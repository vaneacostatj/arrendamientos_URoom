<?php


namespace App\Models;

use CodeIgniter\Model;

class modelReserve extends Model
{
    function reserve($firstname, $lastname, $property_code, $arrival_date, $user, $night_value, $number_of_people, $departure_date){
        
        $sql ="INSERT INTO reserve(firstname, lastname,
         property_code, arrival_date, user, night_value, number_of_people, departure_date)VALUES('{$firstname}','{$lastname}','{$property_code}','{$arrival_date}','{$user}','{$night_value}','{$number_of_people}','{$departure_date}')";

        $this->db->query($sql);
       
    }

    function readReserve(){
        $sql ="SELECT * FROM reserve";
        $reserveList = $this->db->query($sql);
        return $reserveList->getResult();
    }
   
    function deleteReserve($id){
        $sql="DELETE FROM reserve WHERE id={$id}";
        $this->db->query($sql);
    }

    function getReserve($user){
        $sql ="SELECT * FROM reserve WHERE user LIKE '{$user}%'";
        $reserveList = $this->db->query($sql);
        return $reserveList->getResult();
    }

}