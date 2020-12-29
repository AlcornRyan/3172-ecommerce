<!-- Dashboard Product Headings -->
<div class="row py-2">

    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-2 border-right">
        <b>Product ID</b>
    </div>
    
    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-10">
        <b>Product Information</b>
    </div>

</div>

<?php
/*
* Loop through all users
*/
$getUsersQuery = "";

/*
* Check userType to change query based on what the user privileges are 
*/
if (isset($_COOKIE['userType'])) {
    
    if ($_COOKIE['userType'] == "0") {
        /*
        * If userType == 0 == ADMIN
        */
        $getUsersQuery = "SELECT * FROM products";
        
    }
    else if ($_COOKIE['userType'] == "2") {
        
        /*
        * If userType == 2 == BeautyBuy Manager / Sales / Marketing
        */

    }
    else if ($_COOKIE['userType'] == "3") {
        
        $userStoreNumber = $_COOKIE['userStore'];

        /*
        * If userType == 3 == STORE OWNER
        */
        $getUsersQuery = "SELECT * FROM products WHERE s_id='$userStoreNumber'";

    }
    else if ($_COOKIE['userType'] == "5") {
        
        /*
        * If userType == 4 == STORE Manager / Sales / Marketing
        */

    }
    else {
        
        /*
        * ELSE User should not have access
        */
        echo "asdasdasd";
        $getUsersQuery = "";

    }
} else {
    echo "not set??";
}



$getProductResult = $conn->query($getUsersQuery);

if($getProductResult->num_rows > 0) {
    
    $jsonarray = array();

    $productCounter = 0;
    $dashItemBG = "";

    while($row = $getProductResult->fetch_assoc()) {

        /* assembling the data into a JSON array */
        array_push($jsonarray, $row);

        if (($productCounter % 2) == 0) {
            $dashItemBG = " dash_ItemEven";
        } else {
            $dashItemBG = " dash_ItemOdd";
        }
?>

        <div class="row py-2<?php echo $dashItemBG; ?>">
                    
            <!-- Product ID -->
            <div class="col-xs-12 col-sm-12 col-md-2 border-right">
            <?php
                echo $row['p_id'];
            ?>
            </div>
            
            <!-- Product Information -->
            <div class="col-xs-12 col-sm-12 col-md-10">
                
                <!-- Row 1 -->
                <div class="row">
                    
                    <!-- Product Name -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <h5><?php echo $row['p_name']; ?></h5>
                    </div>

                    <!-- Store ID -->
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <p class="float-right">Store: <?php echo $row['s_id']; ?></p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row">

                    <!-- Product Description -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <p><?php echo $row['p_desc']; ?></p>
                    </div>

                    <!-- Product Price -->
                    <div class="col-xs-12 col-sm-12 col-md-4">
                    <?php
                        /*
                        * salePrice is NOT SET, show normal price
                        */
                        if ($row['p_salePrice'] == 0) {
                        ?>
                            <p class="float-right"><b>$<?php echo $row['p_price']; ?></b></p>
                        <?php
                        }
                        /*
                        * salePrice IS SET, show sale price (in red text)
                        */
                        else {
                        ?>
                            <p class="float-right"><b>Price:</b> <b class="text-danger">$<?php echo $row['p_salePrice'] . " <s class='text-dark'>$" . $row['p_price'] . "</s>"; ?></b></p>
                        <?php
                        }
                    ?>
                        
                    </div>
                    
                </div>

                <!-- Row 3 -->
                <div class="row"> 
                    
                    <!-- Product Inventory -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <p>Inventory: <?php echo $row['p_inventory']; ?></p>
                    </div>
                    
                    <!-- Product Rating -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <p class="float-right">Rating: <?php echo $row['p_rating']; ?></p>
                    </div>

                </div>

                <!-- Row 4 -->
                <div class="row"> 
                    
                    <!-- Product Images -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                    <?php
                    if ($row['p_img_1'] != '0') {
                        echo "<img class='dash_productImg border mr-3' src='" . $row['p_img_1'] . "' />";
                    }
                    if ($row['p_img_2'] != '0') {
                        echo "<img class='dash_productImg border mr-3' src='" . $row['p_img_2'] . "' />";
                    }
                    if ($row['p_img_3'] != '0') {
                        echo "<img class='dash_productImg border' src='" . $row['p_img_3'] . "' />";
                    }
                    ?>
                    </div>
                    
                    <!-- Product Rating -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <br/><br/><br/>
                        <a class="float-right dash_viewItem" href="index.php?page=product&productID=<?php echo $row['p_id']; ?>">View Product</a>
                    </div>

                </div>

            </div>

        </div>

<?php   
    
    $productCounter++;
    } // while loop ends
    
    $conn->close();
}
else {
    echo "<p>No products to return, sorry!</p>";
}
?>