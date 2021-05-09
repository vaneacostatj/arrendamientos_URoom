
<?php
 //var_dump($ModelUpdate);
?>
<div id="formReg">

    <div class="container">
        <div class="row">

            <form class="row g-3 needs-validation" id="" action="<?php echo base_url();?>/public/updateEdit?id=<?php echo $ModelUpdate->id?>" method="POST" >
            <div class="col-md-4 grupo-input">
                    <label for="firstname" class="form-label">First name</label>
                    <input type="text" class="form-control form-input" id="firstname" value="<?php echo $ModelUpdate->firstname; ?>" name="firstname" placeholder="Enter your name" title="Only letters and blanks">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="lastname" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastname" value="<?php echo $ModelUpdate->lastname; ?>" name="lastname" placeholder="Enter your lastname" title="Only letters and blanks">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="has-validation">
                        <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" value="<?php echo $ModelUpdate->email; ?>" name="email" placeholder="Enter your mail" title="Email required">
                        <div class="invalid-feedback">
                            Please enter your email.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" name="country"  title="Enter your Country" >
                        <option selected value=""><?php echo $ModelUpdate->country; ?></option>
                        <option>Colombia</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid country.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state"  name="state" title="Enter your State" >
                        <option selected value=""><?php echo $ModelUpdate->state; ?></option>
                        <option>Antioquia</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="city" class="form-label">City</label>
                    <select class="form-select" id="city"  name="city" title="Enter your City" >
                        <option selected value=""><?php echo $ModelUpdate->city; ?></option>
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
                        <input type="text" class="form-control" id="user" aria-describedby="inputGroupPrepend" value="<?php echo $ModelUpdate->user; ?>" name="user" placeholder="Enter your user" title="Only letters and blanks">
                        <div class="invalid-feedback">
                            Please enter user.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" value="<?php echo $ModelUpdate->password; ?>" name="password" placeholder="Enter your password" title="Password is required">
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="rol" class="form-label">Role</label>
                    <select class="form-select" id="rol" name="rol" placeholder="Select your role" title="The choose is required">
                        <option selected value=""><?php echo $ModelUpdate->rol; ?></option>
                        <option>Host</option>
                        <option>Invited</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" value="<?php echo $ModelUpdate->zip; ?>" name="zip" placeholder="Enter your zip" title="Only four numbers">
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-warning" type="submit">Update form</button>
                </div>
            </form>
    </div>
    </div>

</div>