<div class="" id="fondoProperty">
<div class="container">
    <div class="row">
    
    <form class="row g-3" action="<?php echo base_url().'/public/create'?>" method="POST"  onsubmit="return validateProperty();">
  <div class="col-md-4">    
    <label for="inputDocument" class="form-label">Identification Document</label>
    <input type="text" class="form-control" name="Document" id="inputDocument">
  </div>
  <div class="col-md-4">    
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="City" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputCountry" class="form-label">Country</label>
    <input type="text" class="form-control" name="Country" id="inputCountry">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="Address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-2">
    <label for="inputRooms" class="form-label">Number of Rooms</label>
    <input type="text" class="form-control" name="Rooms" id="inputRooms">
  </div>
  <div class="col-md-2">
    <label for="inputBathrooms" class="form-label">Number of Bathrooms</label>
    <input type="text" class="form-control" name="Bathrooms" id="inputBathrooms">
  </div>
  <div class="col-md-3">
    <label for="inputWetArea" class="form-label">Wet Area</label>
    <select id="inputWetArea" name="Area" class="form-select">
      <option selected>Choose...</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputGas" class="form-label">Gas Network</label>
    <select id="inputGas" name="Gas" class="form-select">
      <option selected>Choose...</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  <div class="col-md-2">
  <label for="inputTransport" class="form-label">Public Transport</label>
    <select id="inputTransport" name="Transport" class="form-select">
      <option selected>Choose...</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputLocation" class="form-label">Location</label>
    <input type="text" class="form-control" name="Location" id="inputLocation" placeholder="Location">
  </div>
  <div class="col-md-3">
    <label for="inputValue" class="form-label">Value</label>
    <input type="text" class="form-control" name="Value" id="inputValue">
  </div>
  <div class="col-md-3">
    <label for="inputphotos" class="form-label">Upload the photos of the property</label>
    <input type="text" class="form-control" name="photos" id="photos">
  </div>
  <div class="col-md-3">
    <label for="inputWetArea" class="form-label">Type of Dwelling</label>
    <select id="inputDwelling" name="Dwelling" class="form-select">
      <option selected>Choose...</option>
      <option>Apartment</option>
      <option>Home</option>
      <option>Studio Apartment</option>
      <option>Coworking</option>
      <option>Farm House</option>
      <option>Bedrooms</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputWetArea" class="form-label">Zone</label>
    <select id="inputZone" name="Zone" class="form-select">
      <option selected>Choose...</option>
      <option>Rural</option>
      <option>Urban</option>
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
    <button type="submit" class="btn btn-dark">Resgister</button>
  </div>
</form>

    </div>
</div>
</div>