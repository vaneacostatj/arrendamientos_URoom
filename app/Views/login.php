<?php
$session = session();

$User = $session->user;
$Pass = $session->password;

$user = $getLog->user;
$pass = $getLog->password;
$rol = $getLog->rol;

$loginAdmin = base_url()."/public/readAdmin?user={$user}";
$loginHost = base_url()."/public/readHost?user={$user}";
$loginInvited = base_url()."/public/readInvited?user={$user}";
/* echo $User;
echo $pass; */

if ($User == $user && $Pass == $pass) {

  if ($rol == 'Admin') {

    
    $template="
    <div class='container'>
    <div class='row'>
    </br>
    <p></p>
    <a href='{$loginAdmin}' class='btn btn-outline-dark'>CLOSE</a>
    <img src='https://www.eltiempo.com/files/image_640_428/uploads/2020/08/20/5f3f145e08e51.png' class='card-img-top' alt='...'>
    </div>
    </div>
    
    ";
    echo $template;
    
    
  } else {
    if ($rol == 'Host') {

      $template="
      <div class='container'>
      <div class='row'>
      </br>
      <p></p>
      <a href='{$loginHost}' class='btn btn-outline-dark'>CLOSE</a>
      <img src='https://www.eltiempo.com/files/image_640_428/uploads/2020/08/20/5f3f145e08e51.png' class='card-img-top' alt='...'>
      </div>
      </div>
      
      ";
      echo $template;
    
    } else {
      $template="
      <div class='container'>
      <div class='row'>
      </br>
      <p></p>
      <a href='{$loginInvited}' class='btn btn-outline-dark'>CLOSE</a>
      <img src='https://www.eltiempo.com/files/image_640_428/uploads/2020/08/20/5f3f145e08e51.png' class='card-img-top' alt='...'>
      </div>
      </div>
      
      ";
      echo $template;
      
    }
  }
}
