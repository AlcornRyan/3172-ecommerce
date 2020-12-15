<!-- Dashboard Output Container -->
<div class="row dash_OutputCon pt-2 pb-4">
    <div class="col-md-12">
        <div class="container-fluid">
        
            <!-- Dashboard Header -->
            <div class="row dash_Header">
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
                            echo "<h4 class='float-left'>Product Dashboard</h4><a class='btn btn-success text-white float-right dash_addItem' href='#' role='button'>+ Add product</a>";
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
                <?php
                    /*
                    * nav IS SET 
                    */
                    if (isset($_GET['nav'])) {
                        /*
                        * nav == account 
                        */
                        if ($_GET['nav'] == "account") {
                            // Dashboard Account Item
                            echo "Account item";
                        }
                        /*
                        * nav == users 
                        */
                        else if ($_GET['nav'] == "users") {
                            // Dashboard Users Item
                            require_once('dashUserItem.php');
                        }
                        /*
                        * nav == product 
                        */
                        else if ($_GET['nav'] == "product") {
                            // Dashboard Product Item
                            require_once('dashProductItem.php');
                        }
                        /*
                        * nav == analytics 
                        */
                        else if ($_GET['nav'] == "analytics") {
                            // Dashboard Analytics Item
                            echo "Analytics item";
                        }
                        /*
                        * nav == Something that it shouldn't be 
                        */
                        else {
                            // Dashboard Account Item
                            echo "Account item";
                        }
                    }
                    /*
                    * nav NOT SET 
                    */
                    else {
                        // Dashboard Account Item
                        echo "Nav not set";
                    }
                ?>
                </div>

            </div>

        </div>
    </div>
</div>