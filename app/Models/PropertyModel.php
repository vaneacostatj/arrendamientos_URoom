<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    function addProperty($document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos){
        
        $sql ="INSERT INTO createproperty(Document,City,Country,Address,Rooms,Bathrooms,WetArea,Gas,Transport,Location,Value,photos)VALUES('{$document}','{$city}','{$country}','{$address}',{$rooms},{$bathrooms},'{$area}','{$gas}','{$transport}','{$location}',{$value},'{$photos}')";
        
        $this->db->query($sql);
       
    }

    function readproperty(){
        $sql ="SELECT * FROM createproperty";
        $propertyList = $this->db->query($sql);
        return $propertyList->getResult();
    }
   

    // ...
}