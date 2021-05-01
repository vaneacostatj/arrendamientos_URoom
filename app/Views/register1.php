<div class="form" id="form">
<br><br><br><br><br>
    <div class="container" id="form2">
        <form class="row g-3 needs-validation" action="<?php echo base_url();?>/createReg" method="POST" id="form-validate">
            <div class="col-md-4 grupo-input">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control form-input" id="firstname" value="" name="firstname" placeholder="Enter your name" title="Only letters and blanks">
                <div class="valid-feedback">
                  
                </div>
            </div>
            <div class="col-md-4">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastname" value="" name="lastname" placeholder="Enter your lastname" title="Only letters and blanks">
                <div class="valid-feedback">
                   
                </div>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <div class="has-validation">
                    <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" name="email" placeholder="Enter your mail" title="Email required">
                    <div class="invalid-feedback">
                     
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" name="country"  title="Enter your Country" >
                    <option selected disabled value="">Choose...</option>
                    <option>Colombia</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid country.
                </div>
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select class="form-select" id="state" name="state" title="Enter your State" >
                    <option selected disabled value="">Choose...</option>
                    <option>Antioquia</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-4">
                <label for="city" class="form-label">City</label>
                <select class="form-select" id="city" name="city" title="Enter your City" >
                    <option selected disabled value="">Choose...</option>
                    <option>Envigado</option>
                    <option>Medellín</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4">
                <label for="user" class="form-label">User</label>
                <div class="has-validation">
                    <input type="text" class="form-control" id="user" aria-describedby="inputGroupPrepend" name="user" placeholder="Enter your user" title="Only letters and blanks">
                    <div class="invalid-feedback">
                        Please enter user.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" title="Password is required">
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4">
                <label for="rol" class="form-label">Rol</label>
                <select class="form-select" id="rol" name="rol" placeholder="Select your role" title="The choose is required">
                    <option selected disabled value="">Choose...</option>
                    <option>Host</option>
                    <option>Invited</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter your zip" title="Only four numbers">
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <!-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="check" id="check" title="You must agree before submitting">
                    <label class="form-check-label" for="check">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div> -->
            <div class="col-12 enviar">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div> -->

