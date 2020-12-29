<?php
                        
$sortCategory = "all";
$sortCategoryQuery = "";

if (isset($_GET['category'])) {

    $sortCategory = $_GET['category'];

    if ($sortCategory == "all") {
        $sortCategoryQuery = "";
    } else {
        $sortCategoryQuery = "WHERE p_category='$sortCategory'";
    }
}

$sortPrice = "all";
$sortPriceQuery = "";

if (isset($_GET['price'])) {
    $sortPrice = $_GET['price'];

    if ($sortPrice == "all") {

        $sortPriceQuery = "";

    } else if ($sortPrice == "LF") {

        $sortPriceQuery = "ORDER BY CASE WHEN `p_salePrice` = 0 THEN `p_price` ELSE `p_salePrice` END ASC";

    } else if ($sortPrice == "HF") {

        $sortPriceQuery = "ORDER BY CASE WHEN `p_salePrice` = 0 THEN `p_price` ELSE `p_salePrice` END DESC";

    } else if ($sortPrice == "LT10") {

        $sortPriceQuery = "";

    } else if ($sortPrice == "LT25") {

        $sortPriceQuery = "";

    } else if ($sortPrice == "LT50") {

        $sortPriceQuery = "";

    } else {

        $sortPriceQuery = "";

    }
}

$sortItemsPerPage = 20;
$sortItemsPerPageQuery = "";

if (isset($_GET['itemsPerPage'])) {
    $sortItemsPerPage = $_GET['itemsPerPage'];

    if ($sortPrice == "all") {
        $sortItemsPerPageQuery = "LIMIT 20";
    } else {
        $sortItemsPerPage = $_GET['itemsPerPage'];
        $sortItemsPerPageQuery = "LIMIT $sortItemsPerPage";
    }
}

$currentURL = "index.php?page=browse&category={$sortCategory}&price={$sortPrice}&itemsPerPage={$sortItemsPerPage}";

?>

<!-- Sort Container -->
<div class="row browse_SortBar pb-3">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="container-fluid">
            
            <!-- Sort Title -->
            <div class="row borderBottom pt-2 mb-2">
                <div class="col-xs-12">
                    <h4>Filter items by:</h4>
                </div>
            </div>

            <!--
            Sort By:
            Categories
            -->
            <div class="row mt-1 pb-2">
                
                <div class="col-sm-10 col-md-10 p-0">
                    <h5 class=>Categories</h5>
                </div>
                
                <div class="col-sm-2 col-md-2 p-0">
                    <a class="float-right" data-toggle="collapse" href="#collapseSortCategory" role="button" aria-expanded="false" aria-controls="collapseSortCategory">&#11206;</a>
                </div>

                <!-- Category sort options - (COLLAPSABLE) -->
                <div class="col-sm-12 col-md-12 pt-1 sortOptionsCon collapse show" id="collapseSortCategory">
                    
                    <div class="row">
                        <a href="index.php?page=browse&category=all&price=<?php echo $sortPrice; ?>&itemsPerPage=<?php echo $sortItemsPerPage; ?>">All</a>
                    </div>

                    <?php
                    /*
                    * Loop through all products
                    */
                    $getProductsQuery = $getProductsQuery = "SELECT p_category FROM products GROUP BY(p_category)";

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
                            <a href="index.php?page=browse&category=<?php echo $row['p_category']; ?>&price=<?php echo $sortPrice; ?>&itemsPerPage=<?php echo $sortItemsPerPage; ?>"><?php echo $row['p_category']; ?></a>
                        </div>

                    <?php   
                        
                        } // while loop ends
                        
                    }
                    else {
                        echo "<p>Error finding categories!</p>";
                    }
                    ?>

                </div>
            
            </div>

            <!-- 
            Sort By:
            Price
             -->
             <div class="row mt-1 pb-2">
                
                <div class="col-sm-10 col-md-10 p-0">
                    <h5 class=>Price</h5>
                </div> 
                
                <div class="col-sm-2 col-md-2 p-0">
                    <a class="float-right" data-toggle="collapse" href="#collapseSortPrice" role="button" aria-expanded="false" aria-controls="collapseSortPrice">&#11206;</a>
                </div>

                <!-- Category sort options - (COLLAPSABLE) -->
                <div class="col-sm-12 col-md-12 pt-1 sortOptionsCon collapse show" id="collapseSortPrice">
                    
                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=all&itemsPerPage=<?php echo $sortItemsPerPage; ?>">All</a>
                    </div>
                    
                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=LF&itemsPerPage=<?php echo $sortItemsPerPage; ?>">Lowest First</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=HF&itemsPerPage=<?php echo $sortItemsPerPage; ?>">Highest First</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=LT10&itemsPerPage=<?php echo $sortItemsPerPage; ?>">Less than $10</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=LT25&itemsPerPage=<?php echo $sortItemsPerPage; ?>">Less than $25</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=LT50&itemsPerPage=<?php echo $sortItemsPerPage; ?>">Less than $50</a>
                    </div>

                </div>
            
            </div>

            <!-- 
            Display:
            X # of results per page
            -->
            <div class="row mt-1 pb-2">
                
                <div class="col-sm-10 col-md-10 p-0">
                    <h5 class=>Items per page</h5>
                </div> 
                
                <div class="col-sm-2 col-md-2 p-0">
                    <a class="float-right" data-toggle="collapse" href="#collapseSortPrice" role="button" aria-expanded="false" aria-controls="collapseSortPrice">&#11206;</a>
                </div>

                <!-- Category sort options - (COLLAPSABLE) -->
                <div class="col-sm-12 col-md-12 pt-1 sortOptionsCon collapse show" id="collapseSortPrice">
                    
                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=<?php echo $sortPrice; ?>&itemsPerPage=4">4</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=<?php echo $sortPrice; ?>&itemsPerPage=8">8</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=<?php echo $sortPrice; ?>&itemsPerPage=12">12</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=<?php echo $sortPrice; ?>&itemsPerPage=20">20</a>
                    </div>

                    <!-- -->
                    <div class="row">
                        <a href="index.php?page=browse&category=<?php echo $sortCategory; ?>&price=<?php echo $sortPrice; ?>&itemsPerPage=40">40</a>
                    </div>

                </div>

            </div>
            
        
        </div>
    </div>
</div>