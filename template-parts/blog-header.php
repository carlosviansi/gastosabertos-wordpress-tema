<header class="blog-post-header">
	<?php if(is_page('blog')){
			// chamar a query post para a categoria blog
			$s_blog_args = array( 'category_name' => 'blog', 'posts_per_page' => 1 );
			
		}
		elseif (is_page('historias')){
			// chamar a query post para a categoria blog
			$s_blog_args = array( 'category_name' => 'historia', 'posts_per_page' => 1 );
		} 
		$the_s_query = new WP_Query( $s_blog_args );
		if ($the_s_query->have_posts() ) : while ($the_s_query->have_posts()) : $the_s_query->the_post()?>
      
      <div class="blog-post-title with-cover">
        <div class="row">
	        <a href="<?php the_permalink();?>">
            	<h1><?php the_title();?></h1>
	        </a>
	        <p>
		        <a href="<?php the_permalink();?>">
			        <?php the_excerptforblog('', '...',true,'200'); ?>
	        	</a>
	        </p>
        </div>
      </div>
      <?php  endwhile; endif;?>
      <div class="blog-post-cover">
        <img src="<?php echo get_template_directory_uri();?>/img/blog/photo.jpg" alt="">
      </div>
</header><!-- end od header.blog-post-header -->