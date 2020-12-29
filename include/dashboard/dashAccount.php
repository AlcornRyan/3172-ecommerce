<?php
/*
* Loop through all products
*/
$getMyInfoQuery = "SELECT * FROM users WHERE u_id={$_COOKIE['id']}";

$getMyInfoResult = $conn->query($getMyInfoQuery);

if($getMyInfoResult->num_rows > 0) {
    
    $jsonarray = array();

    while($row = $getMyInfoResult->fetch_assoc()) {

        /* assembling the data into a JSON array */
        array_push($jsonarray, $row);
?>

<!-- User Account -->
<div class="row">
    <!-- -->
    <div class="col-md-12 p-2 pl-4">
        
        <!-- User ID -->
        <div class="row mb-2">
            <div class="col-md-12">
                User ID: <?php echo $row['u_id']; ?>
            </div>
        </div>
        
        <!-- First Name -->
        <div class="row mb-2">
            <div class="col-md-12">
                First Name: <?php echo $row['u_fname']; ?>
            </div>
        </div>
        
        <!-- Last Name -->
        <div class="row mb-2">
            <div class="col-md-12">
                Last Name: <?php echo $row['u_lname']; ?>
            </div>
        </div>
        
        <!-- Email -->
        <div class="row mb-2">
            <div class="col-md-12">
                Email: <?php echo $row['u_email']; ?>
            </div>
        </div>

    </div>
</div>

<!-- Store Information of User -->
<div class="row">
    <div class="col-md-12">
        
        <!-- Store -->
        <div class="row mt-5 mb-2">
            <div class="col-md-12 border-bottom">
                <h4>Store Information</h4>
            </div>
        </div>
        
        <!-- User ID -->
        <div class="row mb-2">
            <div class="col-md-12">
                Store Name: Kérastase
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
