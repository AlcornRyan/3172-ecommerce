<div class="container-fluid pr-md-0 product_Image">
    <div class="row">
        <div class="col-md-12">
            
            <!-- Larger Image -->
            <div class="my-2 product_ImageCon">
                <img src="<?php echo $row['p_img_1']; ?>" class="productImg_Large" />
            </div>

            <!-- Image Selector -->
            <div class="mb-2 productImageSelectorCon">
                <div class="row">

                    <!-- Image One -->
                    <div class="col-md-4">
                        <?php 
                        if ($pImgOne != "") {
                        ?>
                        <img src="<?php echo $pImgOne; ?>" class="productImg_Small" />
                        <?php
                        }
                        ?>
                    </div>

                    <!-- Image Two -->
                    <div class="col-md-4">
                        <?php 
                        if ($pImgTwo != "") {
                        ?>
                        <img src="<?php echo $pImgTwo; ?>" class="productImg_Small" />
                        <?php
                        }
                        ?>
                    </div>

                    <!-- Image Three -->
                    <div class="col-md-4">
                        <?php 
                        if ($pImgThree != "") {
                        ?>
                        <img src="<?php echo $pImgThree; ?>" class="productImg_Small" />
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>