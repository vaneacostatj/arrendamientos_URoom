<div class="" id="fondoProperty">
<div class="container">
    <div class="row">
    
    <form class="row g-3"  onsubmit="return validateProperty();">
  <div class="col-md-4">    
    <label for="inputDocument" class="form-label">Identification Document</label>
    <input type="text" class="form-control" id="inputDocument">
  </div>
  <div class="col-md-4">    
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputCountry" class="form-label">Country</label>
    <input type="text" class="form-control" id="inputCountry">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-2">
    <label for="inputRooms" class="form-label">Number of Rooms</label>
    <input type="text" class="form-control" id="inputRooms">
  </div>
  <div class="col-md-2">
    <label for="inputBathrooms" class="form-label">Number of Bathrooms</label>
    <input type="text" class="form-control" id="inputBathrooms">
  </div>
  <div class="col-md-3">
    <label for="inputWetArea" class="form-label">Wet Area</label>
    <select id="inputWetArea" class="form-select">
      <option selected>Choose...</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputGas" class="form-label">Gas Network</label>
    <select id="inputGas" class="form-select">
      <option selected>Choose...</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <label for="inputLocation" class="form-label">Location</label>
    <input type="text" class="form-control" id="inputLocation" placeholder="Location">
  </div>
  <div class="col-md-6">
    <label for="inputValue" class="form-label">Value</label>
    <input type="text" class="form-control" id="inputValue">
  </div>
  <div class="mb-3">
  <label for="formFileMultiple" class="form-label">Upload the photos of the property</label>
  <input class="form-control" type="file" id="photos" multiple>
</div>
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