<div class="content section">
    <div class="content-highlights posts subsection">
        <div class="row" data-equalizer="posts">
          	<span class="title">Posts Recentes:</span>
		  	
		  	<?php 
			  	$postagens_query = new WP_Query( 'category_name=blog&posts_per_page=8' );
			  	if ( have_posts() ) : while ( $postagens_query->have_posts() ) : $postagens_query->the_post(); ?>
		  	<div data-equalizer-watch="posts" class="content-preview-container">
	          <a href="<?php the_permalink(); ?>" class="content-preview post" title="<?php the_title(); ?>">
	            <div class="content-preview-cover" style="<?php if ( has_post_thumbnail() ) {  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'post-thumbnail' );$thumb_url = $thumb['0'];?>background-image: url(<?php echo $thumb_url; ?>) <?php }else{ ?> background-image: url(<?php echo get_template_directory_uri(); ?>/img/photo.jpg)<?php }?>">
	            </div>
	            <div class="content-preview-header">
	              <div class="title">
	                <?php the_titlesmall('', '...', true, '30'); ?>
	              </div>
	              <div class"content-preview-info">
	                <?php the_date(); ?> | <?php the_author(); ?>
	              </div>
	            </div>
	          </a>
	          	<div>
		           <div class="content-preview-excerpt">
		              <?php the_excerptforblog('', '...',true,'100'); ?>
		              <div class="content-preview-readmore"><a href="<?php the_permalink(); ?>">Saiba mais</a></div>
		        </div>
	          </div> <!-- End of div.content-preview-container -->
        </div> <!-- End of div.row -->
        <?php endwhile;
	        endif;
        ?>

    </div><!-- End of div.content-highlights -->
    <div class="content-highlights posts subsection">
        <div class="row" data-equalizer="posts">
          	<span class="title">Historias Recentes:</span>
          	<?php 	$historias_query = new WP_Query( 'category_name=historia&posts_per_page=8' );
	          		if ( have_posts() ) : while ($historias_query->have_posts() ) : $historias_query->the_post(); ?>
	          		<div data-equalizer-watch="posts" class="content-preview-container">
	          <a href="<?php the_permalink(); ?>" class="content-preview post" title="<?php the_title(); ?>">
	            <div class="content-preview-cover" style="<?php if ( has_post_thumbnail() ) {  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'post-thumbnail' );$thumb_url = $thumb['0'];?>background-image: url(<?php echo $thumb_url; ?>) <?php }else{ ?> background-image: url(<?php echo get_template_directory_uri(); ?>/img/photo.jpg)<?php }?>">
	            </div>
	            <div class="content-preview-header">
	              <div class="title">
	                <?php the_titlesmall('', '...', true, '30'); ?>
	              </div>
	              <div class"content-preview-info">
	                <?php the_date(); ?> | <?php the_author(); ?>
	              </div>
	            </div>
	          </a>
	          	<div>
		           <div class="content-preview-excerpt">
		              <?php the_excerptforblog('', '...',true,'100'); ?>
		              <div class="content-preview-readmore"><a href="<?php the_permalink(); ?>">Saiba mais</a></div>
		        </div>
	          </div> <!-- End of div.content-preview-container -->
        </div> <!-- End of div.row -->
        <?php endwhile;
	        endif;
        ?>

        </div>
    </div>
</div><!-- End of div.content.section -->
<hr/>
</div>