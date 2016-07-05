<?php get_template_part('template-parts/blog', 'header'); ?>
	<div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
	
	<?php 
		if(is_page('blog')){
			// chamar a query post para a categoria blog
			$blog_args = array( 'category_name' => 'blog' );
			
		}
		elseif (is_page('historias')){
			// chamar a query post para a categoria blog
			$blog_args = array( 'category_name' => 'historia' );
		}
		$the_query = new WP_Query( $blog_args );
		if ($the_query->have_posts() ) { ?>
	
	<div class="content section">
    	<div class="content-highlights posts">
			<div class="row">
				<div class=" <?php if (is_page('historias')){ ?> posts-containerx <?php }else { ?>posts-container <?php } ?>">
					<div class="row" data-equalizer="posts">
	   
<?php        			
							while ($the_query->have_posts() ) {
											$the_query->the_post();?>
												<div data-equalizer-watch="posts" class="content-preview-container">
													<a href="<?php the_permalink(); ?>" class="content-preview post" title="<?php the_title(); ?>">
										                <div class="content-preview-cover" style="<?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'post-thumbnail' );$thumb_url = $thumb['0'];?>background-image: url( '<?php echo $thumb_url; ?>');">
														</div>
										                <div class="content-preview-header">
										                  	<div class="title">
										                    	<?php 	
											                    	
											                    	
											                    		the_titlesmall('', '...', true, '50'); ?>
										                  	</div>
														  	<div class"content-preview-info">
										                    <?php echo get_the_date(); ?>
										                  	</div>
										                </div>
										            </a>
										            <div class="social-share">
										               	<div class="fb-share-button" data-href="<?php the_permalink()?>" data-layout="button"></div>
												   		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweetar</a>
												   		<script>	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
													   				p=/^http:/.test(d.location)?'http':'https';
													   				if(!d.getElementById(id)){js=d.createElement(s);
														   			js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
														   			fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
														</script>
										            </div>    <!-- Fim da div.social-share -->
													<div>
									                	<div class="content-preview-excerpt">
										                	<?php the_excerptforblog('', '...',true,'200'); ?>
														  	<div class="content-preview-readmore"><a href="<?php the_permalink()?>">Saiba mais</a></div>
									                	</div>
									              	</div>
												</div> <!-- Fim da div.content-preview-container -->
						<?php } // end while
		
		} // end if	?>
					</div> <!-- fim da div.row -->
				</div> <!-- fim da div.post-container -->
				<?php if (is_page('blog')) { ?>
				<div class="blog-navigation">
			          <h3>Tags:</h3>
			          <ul class="blog-tags">
				        <?php
					        
					        function wp_get_all_tags( $args = '' ) {

																	  $tags = get_terms('post_tag');
																	  foreach ( $tags as $key => $tag ) {
																	      if ( 'edit' == 'view' )
																	          $link = get_edit_tag_link( $tag->term_id, 'post_tag' );
																	      else
																	          $link = get_term_link( intval($tag->term_id), 'post_tag' );
																	      if ( is_wp_error( $link ) )
																	          return false;
																	
																	      $tags[ $key ]->link = $link;
																	      $tags[ $key ]->id = $tag->term_id;
																	      $tags[ $key ]->name = $tag->name;
																	    echo ' <li><a href="'. $link .'">' . $tag->name . '</a></li>';
																	      }
																	  return $tags;
																	}
										wp_get_all_tags()
				        ?>
			            
			            
			          </ul>
		        </div> 
		        <?php } // end if statement checking if is post category = blog ?>
      		</div> <!-- fim da div.row -->
    	</div><!-- fim da div.content-highlights.posts -->
  	</div><!-- fim da div.content.section -->