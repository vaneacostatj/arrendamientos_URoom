
<br>
<div class="container">
    <div class="row">


        <?php 
        foreach($createRegister as $item){

                $deleteRoute = base_url()."/public/deleteRegister?id={$item->id}";
                $updateRoute = base_url()."/public/updateRegister?id={$item->id}";
                $template ="   

                <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                    <div class='card' style='width: 18rem;'>
                        <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'> {$item->firstname} </h5>
                            <p class='card-text'>
                            
                            Firstname: {$item->firstname}       Lastname: {$item->lastname} 
                            Email: {$item->email}               Country: {$item->country} 
                            State: {$item->state}               City: {$item->city} 
                            User: {$item->user}                 Rol: {$item->rol} 
                            Zip: {$item->zip}       
                            
                            </p>
                            <a href='{$deleteRoute}' class='btn btn-danger'> Delete </a>
                            <a href='{$updateRoute}' class='btn btn-warning'> Update</a>
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


