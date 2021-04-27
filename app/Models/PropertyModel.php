<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    function addProperty(){

        //$document = $_POST['Document'];
        //$city = $_POST['City'];
        //$country = $_POST['Country'];
        //$address = $_POST['Address'];
        //$rooms = $_POST['Rooms'];
        //$bathrooms = $_POST['Bathrooms'];
        //$area = $_POST['Area'];
        //$gas = $_POST['Gas'];
       // $transport = $_POST['Transport'];
        //$location = $_POST['Location'];
        //$value = $_POST['Value'];
       // $photos = $_POST['photos'];
       

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