<?php
    /*
    *  If signupbtn is set
    */
    if (isset($_POST['signupbtn'])) {
        
        /*
        *  Sanitize input
        */
        $myFName = validateData($_POST['su_fname']);
        $myLName = validateData($_POST['su_lname']);
        $myEmail = validateData($_POST['su_email']);
        $myPassword = validateData($_POST['su_pswd']);
        $myRePassword = validateData($_POST['su_re_pswd']);

        /*
         *  If passwords are not the same, return error
        */
        if ($myPassword == $myRePassword) { // Passwords match, continue
            
            

        } else {
            header("location: index.php?signup=true&error=pswd_not_matching");
        }
        
    }


?>