<!-- Dashboard Item Headings -->
<div class="row py-2">

    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-2 border-right">
        <b>User ID</b>
    </div>
    
    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-3 border-right">
        <b>Full Name</b>
    </div>
    
    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-3 border-right">
        <b>Email</b>
    </div>
    
    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-2 border-right">
        <b>User Type</b>
    </div>
    
    <!-- -->
    <div class="col-xs-12 col-sm-12 col-md-2">
        <b>Store</b>
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
        $getUsersQuery = "SELECT * FROM users";
        
    }
    else if ($_COOKIE['userType'] == "1") {
        
        /*
        * If userType == 1 == BeautyBuy Customer Service
        */
        $getUsersQuery = "SELECT * FROM users WHERE `u_type`!='0'";

    }
    else if ($_COOKIE['userType'] == "3") {
        
        /*
        * If userType == 3 == STORE OWNER
        * Store employee users
        * Customer users !!!!!!!!!!!!!!!!!!!!!!!!!!!
        */
        // Query to find Store employee information, doesn't need store id because it's redundant
        $getUsersQuery = "SELECT `u_id`, `u_fname`, `u_lname`, `u_email`, `u_type` FROM users WHERE `s_id`='{$_COOKIE['userStore']}'";
        
        // Needs a purchase history table to query users who purchased their items

    }
    else if ($_COOKIE['userType'] == "4") {
        
        /*
        * If userType == 4 == STORE Customer Service
        * Should probably show order history for that user? !!!!!!!!!!!!!!!!!!!!!!!!!!!
        */
        $getUsersQuery = "SELECT `u_id`, `u_fname`, `u_lname`, `u_email`, `u_type` FROM users WHERE `s_id`='{$_COOKIE['userStore']}'";

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



$getUsersResult = $conn->query($getUsersQuery);

if($getUsersResult->num_rows > 0) {
    
    $jsonarray = array();

    $userCounter = 0;
    $userItemBG = "";

    while($row = $getUsersResult->fetch_assoc()) {

        /* assembling the data into a JSON array */
        array_push($jsonarray, $row);

        if (($userCounter % 2) == 0) {
            $userItemBG = " dash_ItemEven";
        } else {
            $userItemBG = " dash_ItemOdd";
        }
?>

        <div class="row py-2<?php echo $userItemBG; ?>">
                    
            <!-- -->
            <div class="col-xs-12 col-sm-12 col-md-2 border-right">
            <?php
                echo $row['u_id'];
            ?>
            </div>
            
            <!-- -->
            <div class="col-xs-12 col-sm-12 col-md-3 border-right">
            <?php
                echo $row['u_fname'] . " " . $row['u_lname'];
            ?>
            </div>
            
            <!-- -->
            <div class="col-xs-12 col-sm-12 col-md-3 border-right">
            <?php
                echo $row['u_email'];
            ?>
            </div>
            
            <!-- -->
            <div class="col-xs-12 col-sm-12 col-md-2 border-right">
            <?php
                echo $row['u_type'];
            ?>
            </div>
            
            <!-- -->
            <div class="col-xs-12 col-sm-12 col-md-2">
            <?php
                echo $row['s_id'];
            ?>
            </div>
            
            <!-- -->
            <!-- <div class="col-md-12 pt-2">
                <div class="row justify-content-end pr-4">
                    Delete Edit
                </div>
            </div> -->

        </div>

<?php   
    
    $userCounter++;
    } // while loop ends
    
    $conn->close();
}
else {
    echo "<p>Nothing to return, sorry!</p>";
}
?>