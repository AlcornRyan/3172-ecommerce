<div class="container-fluid">

    <!-- Slideshow -->
        <div class="col-md-12 px-0 mx-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <!-- Slideshow Images -->
                <div class="carousel-inner slideshowContainer">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="images/Banner1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/Banner2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/Banner3.jpg" alt="Third slide">
                    </div>
                </div>

                <!-- Previous Button -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Next Button -->
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>

    <?php

    // Featured Items Container
    require_once('landing/featuredCon.php');
    
    // Trending Items Container
    require_once('landing/trendingCon.php');

    ?>


</div>