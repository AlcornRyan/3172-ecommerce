<!-- Sign in Centered Box -->
<div class="row signInBox">
    
    <!-- Left Side -->
    <div class="col-md-6 si_leftCon d-none d-md-block">
        <img src="images/login.svg" />
    </div>

    <!-- Right Side - Sign-in-->
    <div class="col-sm-12 col-md-6">
        <div class="signInCon">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    
                    <!-- Signin Form -->
                    <form class="justify-content-center" method="POST" action="index.php">

                        <!-- Form Title -->
                        <h1>Sign-in</h1>
                        <hr class="mb-3">

                        <!-- Email -->
                        <div class="form-group">
                            <label for="signinEmail"><b>Email</b></label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                        
                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        
                        <!-- Signin Button -->   
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg" name="signinbtn">Sign in</button>
                        </div> 

                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</div>