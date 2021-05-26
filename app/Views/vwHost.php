<div class="class" id="fondoHome">
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
    <div class='col-sm-4 '>
    <div class='card text-dark bg-light'>
      <div class='card-body'>
          <div class='col-sm-12'>
          <div class='card'>
            <div class='card-body'>
            <img src='https://www.pngkey.com/png/detail/69-694700_profile-nuevo-usuario-icono.png' class='card-img-top' alt='...'>
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
      </div>
   ";
        echo $template;
    
        $photos = $getLogProp->photos;
        $Dwelling = $getLogProp->Dwelling;
        $Country = $getLogProp->Country;
        $City = $getLogProp->City;
        $Location = $getLogProp->Location;
        $IDprop = $getLogProp->ID;

        $deleteRoute = base_url() . "/public/deleteProperty?ID={$IDprop}";
        $updateRoute = base_url() . "/public/updateProperty?ID={$IDprop}";
        $addProperty = base_url() . "/public/addProperty/viewProperty";
        
        $template2 = "
        <div class='col-sm-6'>
          <div class='card text-dark bg-light'>
                  <div class='card-body'>
                    <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                      <div class='card' style='width: 18rem;'>
                       <img src='{$photos}' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$Dwelling}</h5>
                            <p class='card-text'>
                            País: {$Country}
                            City: {$City}</br>
                            Location: {$Location}</br>
                            Value: {$Location}
                        
                            </p>
                            <a href='{$deleteRoute}' class='btn btn-danger'>delete</a>
                            <a href='{$updateRoute}' class='btn btn-primary'>Update</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
            <a href='{$addProperty}' class='btn btn-outline-dark'>Add Property</a>
            <a href='{$Reserve}' class='btn btn-outline-dark'>Reserve</a>
          </div>
          </div>";

        echo $template2;


 
 $template3 = "
 <div class='p-5'>
 <table class='table table-dark table-striped'>
 <thead>
   <tr>
     <th scope='col'>#</th>
     <th scope='col'>First</th>
     <th scope='col'>Last</th>
     <th scope='col'>Handle</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <th scope='row'>1</th>
     <td>Mark</td>
     <td>Otto</td>
     <td>@mdo</td>
   </tr>
   <tr>
     <th scope='row'>2</th>
     <td>Jacob</td>
     <td>Thornton</td>
     <td>@fat</td>
   </tr>
   <tr>
     <th scope='row'>3</th>
     <td colspan='2'>Larry the Bird</td>
     <td>@twitter</td>
   </tr>
 </tbody>
</table>
</div>
</div>";
   
           
echo $template3;

?>
  
 </div>




  <?php // prueba ----------------------------------------------------------
/* foreach($getLogProp as $item){

  $deleteRoute = base_url() . "/public/deleteProperty?ID={$item->ID}";
  $updateRoute = base_url() . "/public/updateProperty?ID={$item->ID}";
  $addProperty = base_url() . "/public/addProperty/viewProperty";
  
  
  
  $template2 = "
  <div class='col-sm-6'>
  <div class='card'>
          <div class='card-body'>
            <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
              <div class='card' style='width: 18rem;'>
               <img src='{$item->photos}' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>{$item->Dwelling}</h5>
                    <p class='card-text'>
                    País: {$item->Country}
                    City: {$item->City}</br>
                    Location: {$item->Location}</br>
                    Value: {$item->Value}
                
                    </p>
                    <a href='{$deleteRoute}' class='btn btn-danger'>delete</a>
                    <a href='{$updateRoute}' class='btn btn-primary'>Update</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    
    <a href='{$addProperty}' class='btn btn-outline-dark'>Add Property</a>
    <a href='{$Reserve}' class='btn btn-outline-dark'>Reserve</a>
  </div>";
  
  echo $template2;
  }
 */
  ?>