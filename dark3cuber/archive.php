<!-- Calling Header -->
<?php get_header(); ?>

    
    <!-- Blog Start -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <?php
				if(have_posts()):
					while(have_posts()): the_post();?>
						<div class="col-md-4">
							<div class="blog-item">
								<a href="<?php the_permalink(); ?>" class="post-title">
									<h2><?php the_title(); ?></h2>
								</a>
								<div class="featured-image">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
								</div>
								<div class="post_meta">
									<span style="color:white">Posted By :</span> <?php the_author_posts_link(); ?> | 
									<span style="color:white">Posted On :</span> <span style="color:#f35425"><?php the_time('M d,Y'); ?></span>| 
									<span style="color:white">Posted In :</span> <span style="color:#f35425"><?php the_category(' , '); ?></span>| 
								</div>
								<img src="./img/blog.jpg" alt="">
								<p>
									<?php the_excerpt(); ?>
								</p>
								
							</div>
						</div>
					<?php 
					endwhile;
				else : echo 'No Post Found';
				endif;
					
				?>
            </div>
        </div>
    </section>
    <!-- Blog End  -->

