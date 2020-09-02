<div class="carousel slide" data-ride="carousel" id="demo">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		 <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>
		 
		 <?php $num = 0; ?>
		 
		 <?php foreach($slider as $slide): ?>
		 
		 <div class="carousel-item <?php echo ($num == 0) ? 'active' : ''; ?>">
			<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-fluid caro-image"/>
		</div>
		<?php $num++; ?>
		<?php endforeach; ?>
	</div><!-- carousel-inner -->
	
	<a href="#demo" class="carousel-control-prev" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a href="#demo" class="carousel-control-next" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>			  
</div>