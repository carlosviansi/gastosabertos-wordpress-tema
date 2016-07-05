<div class="slider  owl-carousel owl-theme row">
	<?php $slider_query = new WP_Query( 'category_name=slider-home&posts_per_page=3' );
	if ( have_posts() ) : while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
	<div class="slide-<?php echo get_the_ID();?> slide" >
	  	<div class="h-slider-img-wrap">
		    <a href="<?php echo the_permalink();?>"  class="large-8 large-offset-2 columns">
		       	<img src="<?php echo get_field('imagem_no_slider'); ?>" width="1513" height="324">
		    </a>
	  	</div>
  	</div>
  	<?php endwhile; endif; ?>
</div>