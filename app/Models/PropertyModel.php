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
   
    function deleteProperty($ID){
        $sql="DELETE FROM createproperty WHERE ID={$ID}";
        $this->db->query($sql);
    }

    function updateEditedProperty($ID,$document, $city, $country, $address, $rooms, $bathrooms, $area, $gas, $transport, $location, $value, $photos, $Dwelling, $Zone){
        $sql = "UPDATE createproperty set Document='{$document}', City='{$city}', Country='{$country}', Address='{$address}', Rooms={$rooms}, Bathrooms={$bathrooms}, WetArea='{$area}', Gas='{$gas}', Transport='{$transport}', Location='{$location}', Value={$value}, photos='{$photos}', Dwelling='{$Dwelling}', Zone='{$Zone}' WHERE ID={$ID}";
        $this->db->query($sql);
    }

    function getProperty($ID){
        $sql = "SELECT * FROM createproperty WHERE id={$ID}";
        $property = $this->db->query($sql);
        return $property->getResult();
    }

    function getLogProp($User){
        $sql ="SELECT * FROM createproperty WHERE Document LIKE '{$User}%'";
        $registerList = $this->db->query($sql);
        return $registerList->getResult();
    }
}