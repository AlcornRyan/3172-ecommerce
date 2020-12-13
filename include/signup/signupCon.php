<!-- Sign in Centered Box -->
<div class="row signUpBox">
    
    <!-- Left Side -->
    <div class="d-sm-block col-md-6">
        
    </div>

    <!-- Right Side - Sign Up-->
    <div class="col-sm-12 col-md-6">
        <div class="signUpCon">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
    
                    <!-- Sign up form -->
                    <form class="justify-content-center" method="POST" action="index.php">

                        <!-- Form Title -->
                        <h1>Sign-up</h1>
                        <hr class="mb-3">

                        <!-- First Name -->
                        <div class="form-group">
                            <label for="firstName"><b>First Name</b></label>
                            <input class="form-control" type="text" name="signupfirstName" required>
                        </div>
                        
                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="lastName"><b>Last Name</b></label>
                            <input class="form-control" type="text" name="signuplastName" required>
                        </div>
                        
                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="signupEmail"><b>Email Address</b></label>
                            <input class="form-control" type="email" name="signupEmail" required>
                        </div>
                        
                        <!-- Password -->
                        <div class="form-group">
                            <label for="signupPassword"><b>Password</b></label>
                            <input class="form-control" type="password" name="signupPassword" required>
                        </div>
                        
                        <!-- Re-enter Password -->
                        <div class="form-group">
                            <label for="signupPassword2"><b>Re-enter Password</b></label>
                            <input class="form-control" type="password" name="signupPassword2" required>
                        </div>
                        
                        <!-- Signup Button -->
                        <div class="form-group text-center">
                            <input class="btn btn-primary" type="submit" name="signUp" value="Sign Up">
                        </div>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>