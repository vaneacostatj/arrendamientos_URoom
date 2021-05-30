

<br>
<div class="container">
    <div class="row">
    <div class='p-5'>
        <table class='table table-dark table-striped'>
        <thead>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>First Name</th>
            <th scope='col'>Last Name</th>
            <th scope='col'>Arrival Date</th>
            <th scope='col'>Departure Date</th>
            <th scope='col'>Amount to be Paid</th>
            <th scope='col'></th>
        </tr>
        </thead>
        <tbody>
       
 

        <?php 
        foreach($reserve as $item){
                $total = $item->night_value * $item->number_of_people;
                $deleteRoute = base_url()."/public/deleteReserve?id={$item->id}";
                $template ="  
                <tr> 
                <th scope='row'>{$item->id}</th>              
                <td>{$item->firstname}</td>
                <td>{$item->lastname}</td>
                <td>{$item->arrival_date}</td>
                <td>{$item->departure_date}</td>
                <td>{$total}</td>
                <td><a href='{$deleteRoute}' class='btn btn-outline-danger'>Delete</a></td>
                </tr>";
            

                echo $template;

                /* echo "<div class='alert alert-primary' role='alert'>
            
                Firstname: {$registerList->firstname} - Lastname: {$registerList->lastname} - Email: {$registerList->email} - Country: {$registerList->country} - State: {$registerList->state} - City: {$registerList->city} - User: {$registerList->user} - Password: {$registerList->password} - Rol: {$registerList->rol} - Zip: {$registerList->zip}

                </div>"; */

            }


        ?>
           

            </tbody>
            </table>
            </div>
            </div>
    </div>
</div>


<?php ?>


