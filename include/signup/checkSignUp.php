<?php
    /*
    *  If signupbtn is set
    *  TODO: Could also check if email already exists before insersting
    *  TODO: Encrypt password
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
            
            /*
            * Inserting sign up information into users table
            */
            $insertUsersQuery = "INSERT into users (`u_fname`, `u_lname`, `u_email`, `u_type`, `u_store`) values('{$myFName}', '{$myLName}', '{$myEmail}', '0', '0')";

            if (!$conn->query($insertUsersQuery)) {
                die ("Nooooooooo!" . $conn->error);
            }


            /*
            * Insert sign up information into login table
            */
            $insertLoginQuery = "INSERT into login (`login_email`, `login_pswd`) values('{$myEmail}', '{$myPassword}')";

            if (!$conn->query($insertLoginQuery)) {
                die ("Nooooooooo!" . $conn->error);
            }


            /*
            * Get u_id from users and insert it into the login table
            */
            $loginIDQuery = "SELECT u_id FROM users WHERE u_email='$myEmail'";

            $result = $conn->query($loginIDQuery);

            $resultArray = array();

            if (mysqli_num_rows($result) != 0) { // if success, go to index.php
                        
                /*
                *  Fetches a single row because email is unique
                */
                while ($row = $result->fetch_assoc()) {
                    array_push($resultArray, $row);
                }
            
                /*
                *  u_id from users table
                */
                $userID = $resultArray[0]['u_id'];


                /*
                * Update login_user_id column into login table
                */
                $updateLoginQuery = "UPDATE login set `login_user_id`='{$userID}' where `login_email`='{$myEmail}'";

                if (!$conn->query($updateLoginQuery)) {
                    die ("line 73 error!" . $conn->error);
                }
                else { // Successful sign up, redirect user to sign in page!!
                    header("location: index.php?page=signin&signup=success");
                }


            }

        } else { // Passwords don't match, return to signup page with error code
            header("location: index.php?signup=true&error=pswd_not_matching");
        }
        
    }
?>