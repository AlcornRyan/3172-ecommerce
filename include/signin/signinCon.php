<!-- Sign in Centered Box -->
<div class="row signInBox">
    
    <!-- Left Side -->
    <div class="d-sm-block col-md-6">
        <form>
            <div class="signupcontainer">

                <div class="row">
                    <div class="col">
                        <h1>Sign Up</h1>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstName" required>

                        <label for="lastName"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastName" required>

                        <label for="signupEmail"><b>Email Address</b></label>
                        <input class="form-control" type="email" name="signupEmail" required>

                        <label for="signupPassword"><b>Password</b></label>
                        <input class="form-control" type="password" name="signupPassword" required>

                        <label for="signupPassword2"><b>Re-enter Password</b></label>
                        <input class="form-control" type="password" name="signupPassword2" required>
                        
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="signUp" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
        <p>left side</p>
        Make left side not appear for small screens
    </div>

    <!-- Right Side - Sign-in-->
    <div class="col-sm-12 col-md-6">
        <form>
            <div class="signincontainer">

                <div class="row justify-content-start">
                    <div class="col-sm">
                        <h1>Sign-in</h1>

                        <hr class="mb-3">
                        <label for="signinEmail"><b>Email</b></label>
                        <input class="form-control" type="email" name="signinEmail" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" name="signinPassword" required>
                        <label for="rememberMe"><b>Remember me</b></label>
                        <input type="checkbox" class="form-check-input" name="rememberMe" value="">
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="signIn" value="Sign-in">
                    </div>
                </div>
            </div>
            right side - Sign in
        </form>
    </div>

</div>