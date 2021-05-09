<div class="" id="fondoProperty">
<?php
//var_dump($property);
?>
<div class="container">
    <div class="row">
    
    <form class="row g-3" action="<?php echo base_url()?>/public/updateEdid-Property?ID=<?php echo $property->ID ?>" method="POST"  onsubmit="return validateProperty();">
  <div class="col-md-4">    
    <label for="inputDocument" class="form-label">User</label>
    <input type="text" value="<?php echo $property->Document ?>" class="form-control" name="Document" id="inputDocument">
  </div>
  <div class="col-md-4">    
    <label for="inputCity" class="form-label">City</label>
    <input type="text" value="<?php echo $property->City ?>" class="form-control" name="City" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputCountry" class="form-label">Country</label>
    <input type="text" value="<?php echo $property->Country ?>" class="form-control" name="Country" id="inputCountry">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" value="<?php echo $property->Address ?>" class="form-control" name="Address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-2">
    <label for="inputRooms" class="form-label">Number of Rooms</label>
    <input type="text" value="<?php echo $property->Rooms ?>"  class="form-control" name="Rooms" id="inputRooms">
  </div>
  <div class="col-md-2">
    <label for="inputBathrooms" class="form-label">Number of Bathrooms</label>
    <input type="text" value="<?php echo $property->Bathrooms ?>" class="form-control" name="Bathrooms" id="inputBathrooms">
  </div>
  <div class="col-md-3">
    <label for="inputWetArea" class="form-label">Wet Area</label>
    <select class="form-select" aria-label="Default select example" id="inputWetArea" name="Area" >
        <option selected><?php echo $property->WetArea ?></option>
        <option  value="Yes">Yes</option>
        <option  value="No">No</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputGas" class="form-label">Gas Network</label>
    <select class="form-select" aria-label="Default select example" id="inputGas" name="Gas" >
        <option selected><?php echo $property->Gas ?></option>
        <option  value="Yes">Yes</option>
        <option  value="No">No</option>
    </select>
  </div>
  <div class="col-md-2">
  <label for="inputTransport" class="form-label">Public Transport</label>
  <select class="form-select" aria-label="Default select example" id="inputTransport" name="Transport">
        <option selected><?php echo $property->Transport ?></option>
        <option  value="Yes">Yes</option>
        <option  value="No">No</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputLocation" class="form-label">Location</label>
    <input type="text" value="<?php echo $property->Location ?>" class="form-control" name="Location" id="inputLocation" placeholder="Location">
  </div>
  <div class="col-md-3">
    <label for="inputValue" class="form-label">Value</label>
    <input type="text" value="<?php echo $property->Value ?>" class="form-control" name="Value" id="inputValue">
  </div>
  <div class="col-md-3">
    <label for="inputphotos" class="form-label">Upload the photos of the property</label>
    <input type="text" value="<?php echo $property->photos ?>" class="form-control" name="photos" id="photos">
  </div>
  <div class="col-md-3">
  <label for="inputWetArea" class="form-label">Type of Dwelling</label>
      <select class="form-select" aria-label="Default select example" id="inputDwelling" name="Dwelling">
        <option selected ><?php echo $property->Dwelling ?></option>
        <option  value="Apartment">Apartment</option>
        <option  value="Home">Home</option>
        <option  value="Studio Apartment">Studio Apartment</option>
        <option  value="Coworking">Coworking</option>
        <option  value="Farm House">Farm House</option>
        <option  value="Bedrooms1">Bedrooms</option>
      </select>
  </div>
  <div class="col-md-3">
    <label for="inputWetArea" class="form-label">Zone</label>
    <select class="form-select" aria-label="Default select example" id="inputZone" name="Zone">
        <option selected><?php echo $property->Zone ?></option>
        <option  value="Rural">Rural</option>
        <option  value="Urban">Urban</option>
    </select>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Update</button>
  </div>
</form>

    </div>
</div>
</div>