<div class="container-fluid Browse">
    <div class="row pt-2 px-2">

        <!-- -->
        <div class="col-sm-12 col-md-3 pt-2 pl-md-4 pr-md-4">
        <?php

            // Browse Sort Container
            require_once('browse/browseSort.php');
        
        ?>
        </div>

        <!-- -->
        <div class="col-sm-12 col-md-9 pt-2">
        <?php

            // Browse Category Banner Container
            require_once('browse/browse-categoryBanner.php');

            // Browse Items Container
            require_once('browse/browseCon.php');

        ?>
        </div>

    </div>
</div>