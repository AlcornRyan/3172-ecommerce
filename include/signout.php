<?php
// if Sign Out is pressed
if (isset($_GET['page'])) {
    if ($_GET['page'] == "signout") {
        
        // Reset all cookies
        setcookie("id", "{$userid}", time() - 3600);
        setcookie("firstName", "{$firstName}", time() - 3600);
        setcookie("lastName", "{$lastName}", time() - 3600);
        setcookie("username", "{$myUsername}", time() - 3600);
        setcookie("password", "{$myPassword}", time() - 3600);
        setcookie("userPhone", "{$userPhone}", time() - 3600);
        setcookie("userEmail", "{$userEmail}", time() - 3600);
        setcookie("userType", "{$userType}", time() - 3600);
        setcookie("userStore", "{$userStore}", time() - 3600);
        setcookie("loggedIn", "true", time() - 3600);

        session_destroy();

        // redirect to index.php
        header("location: index.php");
        
    }
}
?>