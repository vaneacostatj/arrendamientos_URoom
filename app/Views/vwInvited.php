
 <div class="" id="fondoHome">
</br></br>
     
     <?php
     
      
        // var_dump($getLogProp);
        /*   var_dump($getLog);
          var_dump($getLogProp);	 */ 
          $Firstname = $getLog->firstname;       
          $Lastname = $getLog->lastname; 
          $Email = $getLog->email;               
          $Country = $getLog->country; 
          $State = $getLog->state;               
          $City = $getLog->city; 
          $User = $getLog->user;                 
          $Rol = $getLog->rol; 
          $Zip = $getLog->zip;   
          $id = $getLog->id;
      
          $Reserve = base_url()."/public/indexReservas?user={$User}";
          $updateRoute = base_url()."/public/updateRegister?id={$id}";
          
          $template="
          <div class='container'>
          <div class='row'>
          <div class='text-dark bg-light col-sm-4'>
           
              <div class='card-body'>
                <div class='col-sm-12'>
                  <div class='card'>
                    <div class='card-body'>
                    <img src='https://www.pngkey.com/png/detail/69-694700_profile-nuevo-usuario-icono.png' class='card-img-top' alt='...'>
                    </br>
                      <h5 class='card-title'>{$Rol}</h5>
                      <p class='card-text'>{$Firstname} {$Lastname}</br>
                      Email: {$Email} </br>
                      {$City}, {$Country}, {$State}</br>
                      Zip: {$Zip}             
                      </p>
                      <a href='{$updateRoute}' class='btn btn-outline-dark'>Update</a>
                    </div>
                  </div>
                </div>              
              </div>
          </div>
          <div class='col-sm-8'>
           
              <div class='card-body'>
                <div class='col-sm-12'>
                  <div class='card'>
                    <div class='card-body'>
                    <div class='d-md-flex flex-md-equal w-100 my-md-3 ps-md-3'>
                    
                    <div class='bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden'>
                    <div class='my-3 py-3'>
                      <h2 class='display-5'>Glamping la Fortuna</h2>
                      </br>
                      <p class='card-text'>tranquility, privacy and romance in one place.</p>
                      </br>
                    </div>
                    <div class='bg-dark shadow-sm mx-auto' style='width: 80%; height: 300px; border-radius: 21px 21px 0 0;'>
                    <img src='https://i.imgur.com/MPQmgNR.jpg' class='img-fluid' >
                    </div>
                  </div>
                  <div class='bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden'>
                  <div class='my-3 py-3'>
                      <h2 class='display-5'>Termales San Vicente</h2>
                      <p class='lead'>The most natural hot springs in Colombia.</p>
                    </div>
                    <div class='bg-dark shadow-sm mx-auto' style='width: 80%; height: 300px; border-radius: 21px 21px 0 0;'>
                    <img src='https://i.imgur.com/KtYIIno.jpg' class='img-fluid' >
                    
                    </div></div>

                    </div>
                  
                      <a href='{$Reserve}' class='btn btn-outline-dark'>See More</a>
                    </div>
                  </div>
                </div>
          
            </div>
          </div>
          </div>
          </div>";
              echo $template;


              $total = $getReserve->night_value * $getReserve->number_of_people;
 
              $template3 = "
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope='row'>1</th>
                  <td>{$getReserve->firstname}</td>
                  <td>{$getReserve->lastname}</td>
                  <td>{$getReserve->arrival_date}</td>
                  <td>{$getReserve->departure_date}</td>
                  <td>{$total}</td>
                </tr>
                <tr>
                  <th scope='row'>2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
             
              </tbody>
             </table>
             </div>
             </div>";

             echo $template3;

            ?>
       
    </div>

 