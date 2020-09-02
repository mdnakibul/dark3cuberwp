<!-- Calling Header -->
<?php get_header(); ?>

    <!-- Carousel -->
    <section class="carouselArea">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php get_template_part('slider'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Team  -->
    <section class="team">
        <div class="container">
            <div class="row">
                <h2>Cursus penati saccum ut curabitur nulla.</h2>
            </div>
			<div class="row" style="justify-content: center;">
				<?php $member = new WP_Query(
					array('post_type'=>'team',)
				); 
				while($member->have_posts()) : $member->the_post();?>
				<div class="member">
                    <?php the_post_thumbnail();?>
                    <p class="description">
                        <a href="#">» Link Text Goes Here</a>
                    </p>
                </div>
				
				
				<?php endwhile;
			?>
			</div>
            <!-- <div class="row" style="justify-content: center;">
                <div class="member">
                    <img src="http://localhost/dark3cuber/wp-content/uploads/2020/08/team.jpg" alt="" class="">
                    <p class="description">
                            <a href="#">» Link Text Goes Here</a>
                    </p>
                </div>
                <div class="member">
                    <img src="http://localhost/dark3cuber/wp-content/uploads/2020/08/team.jpg" alt="" class="">
                    <p class="description">
                            <a href="#">» Link Text Goes Here</a>
                    </p>
                </div>
                <div class="member">
                    <img src="http://localhost/dark3cuber/wp-content/uploads/2020/08/team.jpg" alt="" class="">
                    <p class="description">
                            <a href="#">» Link Text Goes Here</a>
                    </p>
                </div>
                <div class="member">
                    <img src="http://localhost/dark3cuber/wp-content/uploads/2020/08/team.jpg" alt="" class="">
                    <p class="description">
                            <a href="#">» Link Text Goes Here</a>
                    </p>
                </div>
                <div class="member">
                    <img src="http://localhost/dark3cuber\wp-content\uploads\2020\08\team.jpg" class="img-fluid">
                    <p class="description">
                           <a href="#">» Link Text Goes Here</a> 
                    </p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Blog Start -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <?php get_template_part('content'); ?>
            </div>
        </div>
    </section>
    <!-- Blog End  -->
<?php get_footer(); ?>
