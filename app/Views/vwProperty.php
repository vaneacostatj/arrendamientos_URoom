<?php 
    foreach($property as $item){

        echo "<div class='alert alert-primary' role='alert'> Document: {$item->document} - City {$item->city} - Country {$item->country} - address {$item->address} - rooms {$item->rooms} - bathrooms {$item->bathrooms} - area {$item->area} - gas {$item->gas} - transport {$item->transport} - location {$item->location} - value {$item->value} - photos {$item->photos} </div>" ;

    }


?>