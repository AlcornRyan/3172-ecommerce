<!-- Sort Container -->
<div class="row dash_NavBar pb-3 mb-3">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="container-fluid">
            
            <!-- -->
            <div class="row">
                <h4>Dashboard Navigation</h4>
            </div>

            <!-- Account Link -->
            <div class="row dash_NavOptions">
                <div class="col-md-12 p-0">
                    <a href="index.php?page=dashboard&nav=account">Account Information</a>
                </div>
            </div>

            <?php
            /*
            * If user type == 0, user is ADMIN : SHOW ALL OPTIONS
            * If user type == 3, user is STORE OWNER : SHOW ALL OPTIONS
            */
            if (isset($_COOKIE['userType'])) {
                if ($_COOKIE['userType'] == 0 || $_COOKIE['userType'] == 3) {
                ?>

                    <!-- User Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=users">User Dashboard</a>
                        </div>
                    </div>

                    <!-- Product Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=product">Product Dashboard</a>
                        </div>
                    </div>

                    <!-- Analytics Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=analytics">Analytics Dashboard</a>
                        </div>
                    </div>

                <?php
                }
                /*
                * If user type == 1, user is BeautyBuy CUSTOMER SERVICE : SHOW USERS & PRODUCTS
                * If user type == 4, user is Store CUSTOMER SERVICE EMPLOYEE : SHOW USERS & PRODUCTS
                */
                else if ($_COOKIE['userType'] == 1 || $_COOKIE['userType'] == 4) {
                ?>

                    <!-- User Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=users">User Dashboard</a>
                        </div>
                    </div>

                    <!-- Product Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=product">Product Dashboard</a>
                        </div>
                    </div>

                <?php
                }
                /*
                * If user type == 1, user is BeautyBuy MANAGER / SALES / MARKETING : SHOW PRODUCTS & ANALYTICS
                * If user type == 4, user is Store MANAGER / SALES / MARKETING EMPLOYEE : SHOW PRODUCTS & ANALYTICS
                */
                else if ($_COOKIE['userType'] == 2 || $_COOKIE['userType'] == 5) {
                ?>

                    <!-- Product Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=product">Product Dashboard</a>
                        </div>
                    </div>

                    <!-- Analytics Dashboard Link -->
                    <div class="row dash_NavOptions">
                        <div class="col-md-12 p-0">
                            <a href="index.php?page=dashboard&nav=analytics">Analytics Dashboard</a>
                        </div>
                    </div>

                <?php
                }
                
            } 
            ?>
        
        </div>
    </div>
</div>