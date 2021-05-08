<div class="container">
    <div class="row">


        <?php 
        foreach($createproperty as $item){

                $route = base_url()."/deleteRegister?id={$item->id}";
                $template ="   
                <div class='card' style='width: 18rem;'>
                    <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'> Apto </h5>
                        <p class='card-text'>
                        
                        Document: {$item->document}   City: {$item->city} 
                        Country: {$item->country}     address: {$item->address}  
                        rooms: {$item->rooms}         bathrooms: {$item->bathrooms} 
                        area: {$item->area}           gas: {$item->gas}   
                        transport: {$item->transport} location: {$item->location} 
                        value: {$item->value}      
                        
                        </p>
                        <a href='{$route}' class='btn btn-danger'> Delete </a>
                    </div>
                </div> ";

                echo $template;

                /* echo "<div class='alert alert-primary' role='alert'>
            
                Firstname: {$registerList->firstname} - Lastname: {$registerList->lastname} - Email: {$registerList->email} - Country: {$registerList->country} - State: {$registerList->state} - City: {$registerList->city} - User: {$registerList->user} - Password: {$registerList->password} - Rol: {$registerList->rol} - Zip: {$registerList->zip}

                </div>"; */

            }


        ?>

    </div>
</div>