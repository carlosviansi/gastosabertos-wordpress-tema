<?php get_header();
		if (is_front_page() && is_home()) {  ?>
			<section class="top-features">
				<?php get_template_part('template-parts/top', 'slider');?>
				<?php get_template_part('template-parts/top', 'features');  ?>
			</section>
<?php	}elseif (is_home()){ get_template_part('template-parts/blog', 'header'); } ?>
<?php 	get_template_part('template-parts/artigos', 'content');  
?>
<?php if (is_front_page() && is_home()){ 	get_template_part('template-parts/home', 'about');
											get_template_part('template-parts/home', 'acompanhe');
	 } ?>
<?php get_footer(); ?>