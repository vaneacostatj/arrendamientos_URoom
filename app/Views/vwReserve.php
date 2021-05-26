

<br>
<div class="container">
    <div class="row">


        <?php 
        foreach($reserve as $item){

                $deleteRoute = base_url()."/public/deleteReserve?id={$item->id}";
                $template ="   

                <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                    <div class='card' style='width: 18rem;'>
                        <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'> {$item->firstname} </h5>
                            <p class='card-text'>
                            
                            Firstname: {$item->firstname}                   Lastname: {$item->lastname} 
                            property_code: {$item->property_code}           arrival_date: {$item->arrival_date} 
                            user: {$item->user}                             night_value: {$item->night_value} 
                            number_of_people: {$item->number_of_people}     departure_date: {$item->departure_date}       
                            
                            </p>
                            <a href='{$deleteRoute}' class='btn btn-danger'> Delete </a>
                        </div>
                    </div> 
                    </br>
                 </div> ";


                echo $template;

                /* echo "<div class='alert alert-primary' role='alert'>
            
                Firstname: {$registerList->firstname} - Lastname: {$registerList->lastname} - Email: {$registerList->email} - Country: {$registerList->country} - State: {$registerList->state} - City: {$registerList->city} - User: {$registerList->user} - Password: {$registerList->password} - Rol: {$registerList->rol} - Zip: {$registerList->zip}

                </div>"; */

            }


        ?>

    </div>
</div>


<?php ?>


