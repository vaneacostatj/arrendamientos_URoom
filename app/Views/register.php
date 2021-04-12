

<div class="" id="form">
<br><br><br><br><br>
    <div class="container" id="form">
        <form class="row g-3 needs-validation" onsubmit="return validateForm();">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstname" value="" name="firstname">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastname" value="" name="lastname">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="email">@</span>
                    <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" name="email">
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Country</label>
                <select class="form-select" id="country" name="country">
                    <option selected disabled value="">Choose...</option>
                    <option>Colombia</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid country.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="state" name="state">
                    <option selected disabled value="">Choose...</option>
                    <option>Antioquia</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">City</label>
                <select class="form-select" id="city" name="city">
                    <option selected disabled value="">Choose...</option>
                    <option>Envigado</option>
                    <option>Medellín</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">User</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="email">@</span>
                    <input type="text" class="form-control" id="User" aria-describedby="inputGroupPrepend" name="user">
                    <div class="invalid-feedback">
                        Please enter user.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Rol</label>
                <select class="form-select" id="rol" name="rol">
                    <option selected disabled value="">Choose...</option>
                    <option>Host</option>
                    <option>Invited</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip">
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" ;">Submit form</button>
            </div>
        </form>
    </div>
</div>