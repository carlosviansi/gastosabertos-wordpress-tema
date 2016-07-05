<?php get_header();
		if (is_front_page() && is_home()) {  ?>
			<section class="top-features">
				<?php get_template_part('template-parts/top', 'slider');?>
				
				<?php get_template_part('template-parts/top', 'features');  ?>
			</section>
<?php	}elseif (is_home()){ get_template_part('template-parts/blog', 'header'); 
	
		}elseif (is_page('participe')){ get_template_part('template-parts/participe', 'header'); 
			
		}elseif (is_page('historias') || is_page('blog')){ get_template_part('template-parts/blog', 'content');
			
		}elseif (is_page('contratos')){ get_template_part('template-parts/contratos', 'header'); get_template_part('template-parts/contratos', 'content');
		
		}elseif (is_page('orcamento')){ get_template_part('template-parts/orcamento', 'header'); get_template_part('template-parts/orcamento', 'content');
		
		}elseif (is_page('api')){ get_template_part('template-parts/api', 'header'); get_template_part('template-parts/api', 'content');
			
		}elseif (is_page('sobre')){ get_template_part('template-parts/sobre', 'header'); get_template_part('template-parts/sobre', 'content');}
		?>

<?php if (is_front_page() && is_home()) { get_template_part('template-parts/artigos', 'content');
	 
	 }elseif(is_page('participe')){ get_template_part('template-parts/participe', 'content');} ?>
<?php if (is_front_page() && is_home()){ get_template_part('template-parts/home', 'about'); } ?>

<?php get_footer(); ?>