<?php 
    foreach($register as $item){

        echo "<div class='alert alert-primary' role='alert'> Firstname: {$item->firstname} - Lastname: {$item->lastname} - Email: {$item->email} - Country: {$item->country} - State: {$item->state} - City: {$item->city} - User: {$item->user} - Password: {$item->password} - Rol: {$item->rol} - Zip: {$item->zip} </div>";

    }


?>