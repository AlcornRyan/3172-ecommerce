<?php
/*
* If user is not logged in, re-direct to sign in page with error message
*/
if (!isset($_COOKIE['loggedIn'])) {
    header('location: index.php?error=dashboard&reason=notloggedin');
}
?>
<div class="container-fluid Dashboard">
    <div class="row pt-2 px-2">

        <!-- Dashboard Sort and Nav -->
        <div class="col-sm-12 col-md-3 pt-2 pl-md-4 pr-md-4">
        <?php

            // Dashboard Navigation Bar
            require_once('dashboard/dashboardNav.php');
            
            // Dashboard Sort Bar
            require_once('dashboard/dashboardSort.php');
        
        ?>
        </div>

        <!-- Dashboard Output -->
        <div class="col-sm-12 col-md-9 pt-2 pl-4 pr-4">
        <?php

            // Dashboard Output Container
            require_once('dashboard/dashboardOutputCon.php');

        ?>
        </div>

    </div>
</div>