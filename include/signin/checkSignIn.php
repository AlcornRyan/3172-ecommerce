<?php
    /*
    *  If submitbtn is set
    */
    if (isset($_POST['submitbtn'])) {

        /*
        *  Sanitize input
        */
        $myEmail = validateData($_POST['email']);
        $myPassword = validateData($_POST['password']);

        /*
        *  Query login table for username & password
        */
		$loginIDQuery = "SELECT login_user_id FROM login WHERE login_email='$myEmail' AND login_pswd='$myPassword'";

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
            *  login user id of user
            */
			$userID = $resultArray[0]['login_user_id'];
              
            /*
            *  query users table for login user id of..
            */
            $findUserInfoQuery = "SELECT * FROM users WHERE u_id='$userID'";

			$newResult = $conn->query($findUserInfoQuery);

			$userInfoArray = array();

			if (mysqli_num_rows($newResult) != 0) {

                /*
                *  Fetches a single row becuase u_id is unique
                */
				while ($row = $newResult->fetch_assoc()) {
					array_push($userInfoArray, $row);
				}

                /*
                *  FirstName and lastName set to values from table
                */
				$userid = $userInfoArray[0]['u_id'];
				$firstName = $userInfoArray[0]['u_fname'];
				$lastName = $userInfoArray[0]['u_lname'];
				$userPhone = $userInfoArray[0]['u_phone'];
				$userEmail = $userInfoArray[0]['u_email'];
				$userType = $userInfoArray[0]['u_type'];
				$userStore = $userInfoArray[0]['u_store'];

                /*
                *  Set cookie for user information
                *  Awful practice to store password a cookie, will change in M4!!
                *  Cookies can be edited, will look at this in M4!!
                */
				setcookie("id", "{$userid}", time()+2*24*60*60);
				setcookie("firstName", "{$firstName}", time()+2*24*60*60);
				setcookie("lastName", "{$lastName}", time()+2*24*60*60);
				setcookie("username", "{$myUsername}", time()+2*24*60*60);
				setcookie("password", "{$myPassword}", time()+2*24*60*60);
				setcookie("userPhone", "{$userPhone}", time()+2*24*60*60);
				setcookie("userEmail", "{$userEmail}", time()+2*24*60*60);
				setcookie("userType", "{$userType}", time()+2*24*60*60);
				setcookie("userStore", "{$userStore}", time()+2*24*60*60);
				setcookie("loggedIn", "true", time()+2*24*60*60);

                /*
                *  Set session variables
                */
				$_SESSION["s_userID"] = "$userid";
				$_SESSION["s_Fullname"] = "$firstName" . " " . "$lastName";
				$_SESSION["s_Username"] = "$myUsername";
				$_SESSION["s_Store"] = "$userStore";
				$_SESSION["loggedIn"] = "true";

				if ($userType == "0") {
					$_SESSION["s_Type"] = null;
				} else {
					$_SESSION["s_Type"] = "$userType";
				}
				

                /*
                *  Login successful, Redirect to index.php
                */
				header("location: index.php");

			} else {
				header("location: index.php?login=true&error=2");
			}
       } else {
        header("location: index.php?login=true&error=1");
       }
    }


?>