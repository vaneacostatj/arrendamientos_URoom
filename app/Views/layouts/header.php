<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/fondos.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
 <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">URoom</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url().'/public'; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'/public/register/viewRegister'; ?>">Register</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Zone
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url().'/public/ruralProperty'; ?>">Rural</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url().'/public/urbanProperty'; ?>">Urban</a></li>
            </ul>
          </li>
          
        </ul>
       
          <form class="row g-3" method="POST" id="login" action="<?php echo base_url().'/public/signIn'?>">
            <div class="col-auto">
              <label for="userlog" class="visually-hidden">User</label>
              <input type="text" class="form-control" id="userlog" name="userlog" placeholder="User">

            </div>
            <div class="col-auto">
              <label for="pass" class="visually-hidden">Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-warning">Login</button>
            </div>
          </form>
      
      </div>
    </div>
  </nav>