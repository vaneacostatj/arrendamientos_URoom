<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    function addProperty($document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos, $Dwelling, $Zone){
        
        $sql ="INSERT INTO createproperty(Document,City,Country,Address,Rooms,Bathrooms,WetArea,Gas,Transport,Location,Value,photos,Dwelling,Zone)VALUES('{$document}','{$city}','{$country}','{$address}',{$rooms},{$bathrooms},'{$area}','{$gas}','{$transport}','{$location}',{$value},'{$photos}','{$Dwelling}','{$Zone}')";
        
        $this->db->query($sql);
       
    }

    function readproperty(){
        $sql ="SELECT * FROM createproperty";
        $property = $this->db->query($sql);
        return $property->getResult();
    }
   
    function deleteProperty($id){
        $sql="DELETE FROM createproperty WHERE ID={$id}";
        $this->db->query($sql);
    }

    // ...
}