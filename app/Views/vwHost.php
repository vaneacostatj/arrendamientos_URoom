<div class="class" id="fondoUSER">
</br></br>
    <div class='container'>
    <div class='row'>
    <div class='row'>
     
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
    
    $template="
    <div class='col-sm-4'>
    <div class='card'>
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
              <a href='---' class='btn btn-outline-dark'>Update</a>
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

$deleteRoute = base_url()."/public/deleteProperty?ID={$IDprop}";
$updateRoute = base_url()."/public/updateProperty?ID={$IDprop}";
$addProperty = base_url()."/public/addProperty/viewProperty";
$template2="
        <div class='col-sm-6'>
        <div class='card'>
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
          </div>";

            echo $template2;

?>
      
    </div>
    </div>
    </div>
    </br>

 <?php // prueba ----------------------------------------------------------?>       
