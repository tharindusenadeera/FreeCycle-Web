<?php
require_once 'header.php';
require_once 'navbar.php';
?>
<section class="main-caro-sec">
    <div id="carousel slide" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="caro-text">
                <h1>
                    <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Freecycle Org..", "Join With Us Today.." ]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
            </div>
            <div class="item active">
                <img src="images/img3.jpg" class="img-responsive" alt="Chania"
                     style="width:100%; height:95vh">
            </div>

            <div class="item">
                <img src="images/img2.jpg" class="img-responsive"
                     alt="Chania" style="width:100%; height:95vh">
            </div>
            <div class="item">
                <img src="images/img1.jpg" class="img-responsive" alt="Flower"
                     style="width:100%; height:95vh">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<?php
require_once 'footer.php';

?>
