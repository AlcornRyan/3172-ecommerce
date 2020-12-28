<?php
$thisProductID = "";

if (isset($_GET['productID'])) {
    $thisProductID = $_GET['productID'];
} else {
    $thisProductID = 1;
}
/*
* Loop through all products
*/
$getProductsQuery = $getProductsQuery = "SELECT * FROM products WHERE p_id='$thisProductID'";

?>

<?php

$getProductsResult = $conn->query($getProductsQuery);

if($getProductsResult->num_rows > 0) {
    
    $jsonarray = array();

    while($row = $getProductsResult->fetch_assoc()) {

        /* assembling the data into a JSON array */
        array_push($jsonarray, $row);

        $pImgOne = $row['p_img_1'];
        $pImgTwo = $row['p_img_2'];
        $pImgThree = $row['p_img_3'];

        if ($pImgOne == "0") {
            $pImgOne = "";
        }
        if ($pImgTwo == "0") {
            $pImgTwo = "";
        }
        if ($pImgThree == "0") {
            $pImgThree = "";
        }
?>

<div class="container-fluid product_Details">
    <div class="row">
        <div class="col-md-12">
            
            <!--  -->
            <div class="my-2 product_DetailsCon">

                <!-- Product Name, Description, ID, Ratings -->
                <div class="row prod_TitleDescCon">
                    <div class="col-md-12">
                        <h4><?php echo $row['p_desc'] . " <span class='font-weight-normal'>by " .  $row['p_name']; ?></span></h6>
                        <p>Item ID: <?php echo $row['p_id'] + 375265249; ?></p>
                        <p><?php echo $row['p_rating']; ?> Reviews</p>
                    </div>
                </div>
                
                <!-- Product Price, Quantity, Add to cart, Love item -->
                <div class="row mt-5 prod_TitleDescCon">
                    <div class="col-md-12">
                        <?php
                        if ($row['p_salePrice'] > 0) {
                        ?>
                            <h5>On Sale!</h5>
                            <h6><span class="text-danger">$<?php echo $row['p_salePrice'] . "</span> <s>$" . $row['p_price']; ?></s></h6>
                        <?php
                        } else {
                        ?>
                            <h6>$<?php echo $row['p_price']; ?></h6>
                        <?php
                        }
                        ?>
                        <button type="submit" name="addProductToCart" class="btn btn-primary mt-1">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="row my-5 prod_TitleDescCon w-75">
                    <div class="col-md-12">
                        <h6><u>Additional Product Details</u></h6>
                        
                        <h6 class="pt-1 mb-1"><?php echo $p_DT_One; ?></h6>
                        <p><?php echo $p_DD_One; ?></p>
                        
                        <h6 class="pt-3 mb-1"><?php echo $p_DT_Two; ?></h6>
                        <p><?php echo $p_DD_Two; ?></p>
                        
                        <h6 class="pt-3 mb-1"><?php echo $p_DT_Three; ?></h6>
                        <p><?php echo $p_DD_Three; ?></p>
                        
                        <h6 class="pt-3 mb-1"><?php echo $p_DT_Four; ?></h6>
                        <p><?php echo $p_DD_Four; ?></p>
                        
                        <h6 class="pt-3 mb-1"><?php echo $p_DT_Five; ?></h6>
                        <p><?php echo $p_DD_Five; ?></p>
                        
                        <h6 class="pt-3 mb-1"><?php echo $p_DT_Six; ?></h6>
                        <p><?php echo $p_DD_Six; ?></p>
                        
                        <h6 class="pt-3 mb-1"><?php echo $p_DT_Seven; ?></h6>
                        <p><?php echo $p_DD_Seven; ?></p>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php   
    } // while loop ends
    $conn->close();
}
else {
    echo "<p>Nothing to return, sorry!</p>";
}
?>
