<?php
/*
* If submit btn is pressed, show successfully added box with link to go back to store or add another product.
*
* Else return to page with error message.
*/
?>
<form method="POST" action="index.php?page=dashboard&nav=addProduct">

    <!-- Product Information -->
    <div class="row p-2 mb-1 border-bottom">

        <div class="col-xs-12 col-sm-12 col-md-6">
            
            <h5 class="mt-2"><b>Product Information</b></h5>
            
            <!-- Product Information Container -->
            <div class="row form-group">
                
                <!-- Name -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                    <label for="prod_Name">Product Name</label>
                    <input type="text" class="form-control" id="prod_Name" maxlength="128" placeholder="Enter product name">
                </div>
                
                <!-- Description -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="prod_Desc">Product Description</label>
                    <input type="text" class="form-control" id="prod_Desc" maxlength="256" placeholder="Enter product description">
                </div>
                
                <!-- Category -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="exampleFormControlSelect1">Product Category</label>
                    <select class="form-control" id="prod_Category">
                        <option selected>Select a Category</option>
                        <option value="shampoo">Shampoo</option>
                        <option value="conditioner">Conditioner</option>
                        <option value="hairspray">Hairspray</option>
                        <option value="scalp_scrub">Scalp Scrub</option>
                        <option value="hair_oil">Hair Oil</option>
                    </select>
                </div>
                
                <!-- Price -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="prod_Price">Product Price</label>
                    <input type="text" class="form-control" id="prod_Price" maxlength="7" placeholder="Enter price of product (ex. 37.55)">
                </div>
                
                <!-- Inventory -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="prod_Inventory">Product Inventory</label>
                    <input type="text" class="form-control" id="prod_Inventory" maxlength="7" placeholder="Enter number of products you have to sell">
                </div>

            </div>
        </div>

        <!-- Product Images -->
        <div class="col-xs-12 col-sm-12 col-md-6">
            
            <h5 class="mt-2"><b>Product Images</b></h5>
            
            <!-- Product Information Container -->
            <div class="row form-group">
                
                <!-- Image One -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                    <label for="prod_Imag1">Image One</label>
                    <input type="text" class="form-control" id="prod_Imag1" maxlength="128" placeholder="URL of first image">
                </div>
                
                <!-- Image Two -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="prod_Imag2">Image Two</label>
                    <input type="text" class="form-control" id="prod_Imag2" maxlength="128" placeholder="URL of second image">
                </div>
                
                <!-- Image Three -->
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <label for="prod_Imag3">Image Three</label>
                    <input type="text" class="form-control" id="prod_Imag3" maxlength="128" placeholder="URL of third image">
                </div>

            </div>
        </div>

    </div>
      

    <!-- Product Details -->
    <div class="row p-2 mb-1 border-bottom">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <h5 class="mt-2"><b>Product Details</b></h5>
            
            <!-- Product Details Container -->
            <div class="row form-group">
                
                <!-- Detail Title One -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-1">
                    <label for="prod_DetailTitle1">Detail Title One</label>
                    <input type="text" class="form-control" id="prod_DetailTitle1" maxlength="50" placeholder="Title of first product detail">
                </div>
                
                <!-- Detail Description One -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                    <label for="prod_DetailDesc1">Detail Description One</label>
                    <input type="text" class="form-control" id="prod_DetailDesc1" maxlength="1024" placeholder="Description of first product detail">
                </div>
                
                <!-- Detail Title Two -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailTitle2">Detail Title Two</label>
                    <input type="text" class="form-control" id="prod_DetailTitle2" maxlength="50" placeholder="Title of second product detail">
                </div>
                
                <!-- Detail Description Two -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailDesc2">Detail Description Two</label>
                    <input type="text" class="form-control" id="prod_DetailDesc2" maxlength="1024" placeholder="Description of second product detail">
                </div>
                
                <!-- Detail Title Three -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailTitle3">Detail Title Three</label>
                    <input type="text" class="form-control" id="prod_DetailTitle3" maxlength="50" placeholder="Title of third product detail">
                </div>
                
                <!-- Detail Description Three -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailDesc3">Detail Description Three</label>
                    <input type="text" class="form-control" id="prod_DetailDesc3" maxlength="1024" placeholder="Description of third product detail">
                </div>
                
                <!-- Detail Title Four -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailTitle4">Detail Title Four</label>
                    <input type="text" class="form-control" id="prod_DetailTitle4" maxlength="50" placeholder="Title of fourth product detail">
                </div>
                
                <!-- Detail Description Four -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailDesc4">Detail Description Four</label>
                    <input type="text" class="form-control" id="prod_DetailDesc4" maxlength="1024" placeholder="Description of fourth product detail">
                </div>
                
                <!-- Detail Title Five -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailTitle5">Detail Title Five</label>
                    <input type="text" class="form-control" id="prod_DetailTitle5" maxlength="50" placeholder="Title of fifth product detail">
                </div>
                
                <!-- Detail Description Five -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailDesc5">Detail Description Five</label>
                    <input type="text" class="form-control" id="prod_DetailDesc5" maxlength="1024" placeholder="Description of fifth product detail">
                </div>
                
                <!-- Detail Title Six -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailTitle6">Detail Title Six</label>
                    <input type="text" class="form-control" id="prod_DetailTitle6" maxlength="50" placeholder="Title of sixth product detail">
                </div>
                
                <!-- Detail Description Six -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailDesc6">Detail Description Six</label>
                    <input type="text" class="form-control" id="prod_DetailDesc6" maxlength="1024" placeholder="Description of sixth product detail">
                </div>
                
                <!-- Detail Title Seven -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailTitle7">Detail Title Seven</label>
                    <input type="text" class="form-control" id="prod_DetailTitle7" maxlength="50" placeholder="Title of seventh product detail">
                </div>
                
                <!-- Detail Description Seven -->
                <div class="col-xs-12 col-sm-12 col-md-6 mt-4">
                    <label for="prod_DetailDesc7">Detail Description Seven</label>
                    <input type="text" class="form-control" id="prod_DetailDesc7" maxlength="1024" placeholder="Description of seventh product detail">
                </div>

            </div>
        </div>
    </div>

    <!-- -->
    <div class="row p-2 mb-1 text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
            <button type="submit" name="submitAddProduct" class="btn btn-lg btn-primary">Add Product</button>
        </div>
    </div>

</form>