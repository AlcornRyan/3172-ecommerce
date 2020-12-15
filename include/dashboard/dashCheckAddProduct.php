<?php
    /*
    *  If addProdBtn IS SET
    */
    if (isset($_POST['addProdBtn'])) {
        
        /*
        *  Sanitize input
        */
        // Product Information
        $prodName = validateProductData($_POST['prod_Name']);
        $prodDesc = validateProductData($_POST['prod_Desc']);
        $prodCategory = validateProductData($_POST['prod_Category']);
        $prodPrice = validateProductData($_POST['prod_Price']);
        $prodInventory = validateProductData($_POST['prod_Inventory']);

        // Product Images
        $prodImg1 = validateProductData($_POST['prod_Imag1']);
        $prodImg2 = validateProductData($_POST['prod_Imag2']);
        $prodImg3 = validateProductData($_POST['prod_Imag3']);


        // Product Details (Title & Description)
        $prodDetailTitle1 = validateProductData($_POST['prod_DetailTitle1']);
        $prodDetailDesc1 = validateProductData($_POST['prod_DetailDesc1']);

        $prodDetailTitle2 = validateProductData($_POST['prod_DetailTitle2']);
        $prodDetailDesc2 = validateProductData($_POST['prod_DetailDesc2']);

        $prodDetailTitle3 = validateProductData($_POST['prod_DetailTitle3']);
        $prodDetailDesc3 = validateProductData($_POST['prod_DetailDesc3']);

        $prodDetailTitle4 = validateProductData($_POST['prod_DetailTitle4']);
        $prodDetailDesc4 = validateProductData($_POST['prod_DetailDesc4']);

        $prodDetailTitle5 = validateProductData($_POST['prod_DetailTitle5']);
        $prodDetailDesc5 = validateProductData($_POST['prod_DetailDesc5']);

        $prodDetailTitle6 = validateProductData($_POST['prod_DetailTitle6']);
        $prodDetailDesc6 = validateProductData($_POST['prod_DetailDesc6']);

        $prodDetailTitle7 = validateProductData($_POST['prod_DetailTitle7']);
        $prodDetailDesc7 = validateProductData($_POST['prod_DetailDesc7']);

          
        /*
        * Inserting sign up information into products table
        */
        $insertUsersQuery = "INSERT into products (`s_id`, `p_name`, `p_desc`, `p_category`, `p_price`, `p_inventory`, `p_img_1`, `p_img_2`, `p_img_3`, `p_detail_title_1`, `p_detail_desc_1`, `p_detail_title_2`, `p_detail_desc_2`, `p_detail_title_3`, `p_detail_desc_3`, `p_detail_title_4`, `p_detail_desc_4`, `p_detail_title_5`, `p_detail_desc_5`, `p_detail_title_6`, `p_detail_desc_6`, `p_detail_title_7`, `p_detail_desc_7`) values('{$_COOKIE['userStore']}', '{$prodName}', '{$prodDesc}', '{$prodCategory}', '{$prodPrice}', '{$prodInventory}', '{$prodImg1}', '{$prodImg2}', '{$prodImg3}', '{$prodDetailTitle1}', '{$prodDetailDesc1}', '{$prodDetailTitle2}', '{$prodDetailDesc2}', '{$prodDetailTitle3}', '{$prodDetailDesc3}', '{$prodDetailTitle4}', '{$prodDetailDesc4}', '{$prodDetailTitle5}', '{$prodDetailDesc5}', '{$prodDetailTitle6}', '{$prodDetailDesc6}', '{$prodDetailTitle7}', '{$prodDetailDesc7}')";

        if (!$conn->query($insertUsersQuery)) {
            die ("Nooooooooo!" . $conn->error);
        }
        
    }
?>