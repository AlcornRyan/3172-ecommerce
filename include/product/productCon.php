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
?>

<div class="row">
    
    <!-- Product Images -->
    <div class="col-sm-12 col-md-6 p-0">
    <?php

         /* Product Image Variables and checking if image exists in DB or not */
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

        // Product Image Container
        require_once('productImage.php');

    ?>
    </div>

    <!-- Product Information -->
    <div class="col-sm-12 col-md-6 p-0">
    <?php

        /* Product Detail Variables and checking if image exists in DB or not */
        $p_DT_One = $row['p_detail_title_1'];
        $p_DD_One = $row['p_detail_desc_1'];
        
        if ($p_DT_One == "" || $p_DD_One == "") {
            $p_DT_One = "";
            $p_DD_One = "";
        }

        $p_DT_Two = $row['p_detail_title_2'];
        $p_DD_Two = $row['p_detail_desc_2'];
        
        if ($p_DT_Two == "" || $p_DD_Two == "") {
            $p_DT_Two = "";
            $p_DD_Two = "";
        }

        $p_DT_Three = $row['p_detail_title_3'];
        $p_DD_Three = $row['p_detail_desc_3'];
        
        if ($p_DT_Three == "" || $p_DD_Three == "") {
            $p_DT_Three = "";
            $p_DD_Three = "";
        }

        $p_DT_Four = $row['p_detail_title_4'];
        $p_DD_Four = $row['p_detail_desc_4'];
        
        if ($p_DT_Four == "" || $p_DD_Four == "") {
            $p_DT_Four = "";
            $p_DD_Four = "";
        }


        $p_DT_Five = $row['p_detail_title_5'];
        $p_DD_Five = $row['p_detail_desc_5'];
        
        if ($p_DT_Five == "" || $p_DD_Five == "") {
            $p_DT_Five = "";
            $p_DD_Five = "";
        }


        $p_DT_Six = $row['p_detail_title_6'];
        $p_DD_Six = $row['p_detail_desc_6'];
        
        if ($p_DT_Six == "" || $p_DD_Six == "") {
            $p_DT_Six = "";
            $p_DD_Six = "";
        }


        $p_DT_Seven = $row['p_detail_title_7'];
        $p_DD_Seven = $row['p_detail_desc_7'];
        
        if ($p_DT_Seven == "" || $p_DD_Seven == "") {
            $p_DT_Seven = "";
            $p_DD_Seven = "";
        }


        // Product Image Container
        require_once('productDetails.php');

    ?>
    </div>

</div>

<?php   
    } // while loop ends
}
else {
    echo "<p>Nothing to return, sorry!</p>";
}
?>
