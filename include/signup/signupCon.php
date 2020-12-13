<?php
    if(isset($_POST['signup'])) {
        $firstName = $_POST['signupfirstName'];
        $lastName = $_POST['signuplastName'];
        $email = $_POST['signupEmail'];
        $pass = $_POST['signupPassword'];
        $pass2 = $_POST['signupPassword2'];

        echo $firstName + " " + $lastName + " " + $email;
    }
?>
<!-- Sign in Centered Box -->
<div class="row signUpBox">
    
    <!-- Left Side -->
    <div class="d-sm-block col-md-6">
        <p>left side</p>
        Make left side not appear for small screens
    </div>

    <!-- Right Side - Sign Up-->
    <div class="d-sm-block col-md-6">
        <!-- Sign up form -->
        <form>
            <div class="signupcontainer">

                <div class="row">
                    <div class="col">
                        <h1>Sign Up</h1>
                        <hr class="mb-3">
                        <label for="firstName"><b>First Name</b></label>
                        <input class="form-control" type="text" name="signupfirstName" required>

                        <label for="lastName"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="signuplastName" required>

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
    </div>
</div>