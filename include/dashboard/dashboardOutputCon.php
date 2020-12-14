<!-- Dashboard Output Container -->
<div class="row dash_OutputCon pt-2 pb-4">
    <div class="col-md-12">

        <!-- Dashboard Header -->
        <div class="row">
            <div class="col-md-12">
                <?php
                /*
                * Dashboard Header Title
                *
                * Nav variable NOT SET
                */
                if (!isset($_GET['nav'])) {
                    echo "<h4>Account</h4>";
                }
                else {
                    /*
                    * Nav variable IS SET
                    *
                    * nav == account
                    */
                    if ($_GET['nav'] == "account") {
                        echo "<h4>Account</h4>";
                    }
                    /*
                    * nav == users
                    */
                    else if ($_GET['nav'] == "users") {
                        echo "<h4>Users Dashboard</h4>";
                    }
                    /*
                    * nav == product
                    */
                    else if ($_GET['nav'] == "product") {
                        echo "<h4>Product Dashboard</h4>";
                    }
                    /*
                    * nav == analytics
                    */
                    else if ($_GET['nav'] == "analytics") {
                        echo "<h4>Analytics Dashboard</h4>";
                    }
                    /*
                    * ELSE user is trying to navigate to hidden pages? Just show their account 
                    */
                    else {
                        echo "<h4>Account</h4>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- Dashboard Item Container -->
        <div class="row">
            
            <!-- Dashboard Item -->
            <div class="col-md-12">
                Dashboard Item
            </div>

        </div>
        
    </div>
</div>