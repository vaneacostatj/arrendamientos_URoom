<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    function addProperty(){

        
        $document ="ñkjcknzd";
        $city = "kfkzv";
        $country ="zjsdnfznv";
        $address = "zjkfdbkzv";
        $rooms = 2;
        $bathrooms = 2;
        $area = "zsljg";
        $gas = "zsdkf";
        $transport = "sdgs";
        $location = "zsgzsg";
        $value = 2;
        $photos = "sfgse";
        

        $sql ="INSERT INTO createproperty(Document,City,Country,Address,Rooms,Bathrooms,WetArea,Gas,Transport,Location,Value,photos)VALUES('{$document}','{$city}','{$country}','{$address}',{$rooms},{$bathrooms},'{$area}','{$gas}','{$transport}','{$location}',{$value},'{$photos}')";
        
        $this->db->query($sql);
       
    }

    function readcreateproperty(){
        $sql ="SELECT * FROM createproperty";
        $tasks = $this->db->query($sql);
        return $tasks->getResult();
    }
   

    // ...
}