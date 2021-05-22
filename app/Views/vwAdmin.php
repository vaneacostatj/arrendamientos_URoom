
<div class="class" id="">
<?php 
	//var_dump($getLogProp);
   // var_dump($getLog->rol);	 
    //echo $prueba = $getLog->lastname;
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
    $updateRoute = base_url()."/public/updateRegister?id={$id}";
    $addProperty = base_url()."/public/addProperty/viewProperty";
    $addUser = base_url()."/public/register/viewRegister";
    $users = base_url()."/public/register";
    $properties = base_url()."/public/addProperty";
    
    $template="
    </br></br>
    <div class='container'>
    <div class='row'>
    <div class='row'>
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
              <a href='{$updateRoute}' class='btn btn-outline-dark'>Update</a>
            </div>
          </div>
        </div>
      
          </div>
        </div>
      </div>
      <div class='col-sm-8'>
        <div class='card'>
          <div class='card-body'>
     <?php // prueba ----------------------------------------------------------?>       
    
          <div class='row'>
      <div class='col-sm-6'>
        <div class='card'>
          <div class='card-body'>
          <img src='https://image.flaticon.com/icons/png/512/17/17115.png' class='card-img-top' alt='...'>
            <a href='{$users}' class='btn btn-outline-dark'>Users</a>
          </div>
        </div>
      </div>
      <div class='col-sm-6'>
        <div class='card'>
          <div class='card-body'>
          <img src='https://www.seekpng.com/png/full/364-3649848_family-apartment-comments-apartment-icon-black-png.png' class='card-img-top' alt='...'>
            <a href='{$properties}' class='btn btn-outline-dark'>Properties</a>
          </div>
        </div>
      </div>
    </div>
    
    <?php // prueba ----------------------------------------------------------?>  
    </br></br>
    <a href='{$addProperty}' class='btn btn-outline-dark'>Add Property</a>
    <a href='{$addUser}' class='btn btn-outline-dark'>Add User</a>
    
    
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </br>
";
echo $template;
?>
</div>
