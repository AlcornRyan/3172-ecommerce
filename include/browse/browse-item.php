<?php
/*
* Loop through all products
*/

$getProductsQuery = $getProductsQuery = "SELECT * FROM products $sortCategoryQuery $sortPriceQuery $sortItemsPerPageQuery";


?>

<?php

$getProductsResult = $conn->query($getProductsQuery);

if($getProductsResult->num_rows > 0) {
    
    $jsonarray = array();

    while($row = $getProductsResult->fetch_assoc()) {

        /* assembling the data into a JSON array */
        array_push($jsonarray, $row);
?>

        <!-- Product -->
        <div class="col-md-3">
            <div class="row p-md-2">
                <div class="col-md-12 card_Container">
                    <a href="index.php?page=product&productID=<?php echo $row['p_id']; ?>">

                        <!-- Item Image -->
                        <div class="row">
                            <div class="col-md-12 card_Image">
                                <img src="<?php echo $row['p_img_1']; ?>" />
                            </div>
                        </div>

                        <!-- Item Title -->
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="card_Title"><?php echo $row['p_name']; ?></h6>
                                <p class="card_Title"><?php echo $row['p_desc']; ?></p>
                            </div>
                        </div>

                        <!-- Item Price + Action Items -->
                        <!-- Add to cart, price -->
                        <div class="row">
                            <div class="col-md-12 pt-md-1">
                                <h6>
                                <?php
                                if ($row['p_salePrice'] == 0) {
                                    echo "$" . $row['p_price'];
                                } else {
                                    echo "$" . $row['p_salePrice'];
                                }
                                ?>
                                </h6>
                            </div>
                        </div>

                    </a>
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
