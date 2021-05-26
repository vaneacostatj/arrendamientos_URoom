</br></br>

<div class="container">
    <div class="row">


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.imgur.com/GOw5CqO.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.imgur.com/8hLeguo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.imgur.com/jaMcADC.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</br></br></br>
<?php
/* var_dump($getLogProp);
var_dump($getLog); */


$Email = $getLog->email;               
$Country = $getLog->country; 
$State = $getLog->state;               
$City = $getLog->city; 
$User = $getLog->user;                 
$Rol = $getLog->rol; 
$Zip = $getLog->zip;   
$id = $getLog->id;

$City = $getLogProp->City;
$Dwelling = $getLogProp->Dwelling;
$Country = $getLogProp->Country;
$Address = $getLogProp->Address;
$Rooms = $getLogProp->Rooms;
$Bathrooms = $getLogProp->Bathrooms;
$Area = $getLogProp->WetArea;
$Gas = $getLogProp->Gas;
$Transport = $getLogProp->Transport;
$Location = $getLogProp->Location;
$Value = $getLogProp->Value;
$Zone = $getLogProp->Zone;
$IDprop = $getLogProp->ID;

$template="
<div class='card mb-3'>
 
 <div class='card-body'>
   <h5 class='card-title text-center'>features</h5>
   <p class='card-text text-center'> City: &nbsp {$City}  &nbsp&nbsp&nbsp&nbsp Country: &nbsp {$Country} &nbsp&nbsp&nbsp&nbsp Address: &nbsp {$Address} &nbsp&nbsp&nbsp&nbsp Number of Rooms: &nbsp {$Rooms} &nbsp&nbsp&nbsp&nbsp Number of Bathrooms: &nbsp {$Bathrooms} &nbsp&nbsp&nbsp&nbsp Wet Area: &nbsp {$Area} &nbsp&nbsp&nbsp&nbsp   </p>
   
    <p class='card-text text-center'> Gas Network: &nbsp {$Gas} &nbsp&nbsp&nbsp&nbsp Public Transport: &nbsp {$Transport} &nbsp&nbsp&nbsp&nbsp Location: &nbsp {$Location} &nbsp&nbsp&nbsp&nbsp Value: &nbsp {$Value} &nbsp&nbsp&nbsp&nbsp Type of Dwelling: &nbsp {$Dwelling} &nbsp&nbsp&nbsp&nbsp Zone: &nbsp {$Zone} &nbsp&nbsp&nbsp&nbsp    </p>
   <p class='card-text text-center'><small class='text-muted'>24 hour service</small></p>
 </div>
</div>
";

echo $template;
?>
<form class="row g-3">
<div class="row">
  <div class="col-md-3">
       <label for="inputCity" class="form-label">First Name</label>
    <input type="text" class="form-control" disabled value="<?php echo $getLog->firstname; ?>" aria-label="Firstname">
  </div>
  <div class="col-md-3">
       <label for="inputCity" class="form-label">Last Name</label>
    <input type="text" class="form-control" disabled value="<?php echo $getLog->lastname; ?>"  aria-label="Lastname">
  </div>
  <div class="col-md-3">
       <label for="inputCity" class="form-label">Property Code</label>
    <input type="text" class="form-control" disabled value="<?php echo $getLogProp->ID; ?>"  aria-label="IDprop">
  </div>
  <div class="col-md-3">
       <label for="inputCity" class="form-label">Arrival Date</label>
    <input type="date" class="form-control" value=""  aria-label="date">
  </div>
</div>
<div class="row">
  <div class="col-md-3">
       <label for="inputCity" class="form-label">User</label>
    <input type="text" class="form-control" disabled value="<?php echo $getLog->user; ?>" aria-label="Firstname">
  </div>
  <div class="col-md-3">
       <label for="inputCity" class="form-label">Night Value</label>
    <input type="text" class="form-control" disabled value="<?php echo $getLogProp->Value; ?>"  aria-label="Lastname">
  </div>
  <div class="col-md-3">
       <label for="inputCity" class="form-label">number of people</label>
    <input type="text" class="form-control" value=""  aria-label="IDprop">
  </div>
  <div class="col-md-3">
       <label for="inputCity" class="form-label">departure date</label>
    <input type="date" class="form-control" value=""  aria-label="date">
  </div>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm Reservation</button>
  </div>
</form>
</div>
</div>
