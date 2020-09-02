<?php
/* Template Name: Carousel Template*/
?>

<!-- Calling Header -->
<?php get_header(); ?>


    <!-- Carousel -->
    <section class="carouselArea">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="demo">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/nature-1.jpg" alt="" class="caro-image" />
                                <div class="carousel-caption ">
                                    <h2>1. Indonectetus facilis leo nibh</h2>
                                    <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus  semper. Anterdu m
                                        s dui urna consequam ac nisl nullam ligula vestassa.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/nature-2.jpg" alt="" class="caro-image" />
                                <div class="carousel-caption ">
                                    <h2>2. Indonectetus facilis leo nibh</h2>
                                    <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus  semper. Anterdu m
                                        s dui urna consequam ac nisl nullam ligula vestassa.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/nature-3.jpg" alt="" class="caro-image" />
                                <div class="carousel-caption ">
                                    <h2>3. Indonectetus facilis leo nibh</h2>
                                    <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus  semper. Anterdu m
                                        s dui urna consequam ac nisl nullam ligula vestassa.</p>
                                </div>
                            </div>				
                        </div><!-- carousel-inner -->
                        
                        <a href="#demo" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#demo" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>			  
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Blog End  -->
<?php get_footer(); ?>
