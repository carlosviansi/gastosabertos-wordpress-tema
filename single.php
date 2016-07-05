<?php get_header(); ?>
<div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<?php while ( have_posts() ) : the_post(); ?>
		<article class="blog-post" itemscope itemtype="http://schema.org/BlogPosting">
	    <header class="blog-post-header">
		  	<div class="blog-post-title with-cover ">
			  	<div class="row">
				  	<h1 itemprop="name headline"><?php the_title();?></h1>
			  	</div>
		  	</div>
		    <div class="blog-post-cover">
			    <?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'post-thumbnail' );$thumb_url = $thumb['0'];?>
		       	<img src="<?php if(has_post_thumbnail()){ echo $thumb_url;}else{echo get_template_directory_uri() . '/img/photo.jpg'; }?>" alt="">
		    </div>
	      <div class="row">
	        <div class="blog-post-info">
	          <time class="blog-post-date" datetime="<?php // ?>"><?php the_date(); ?></time>
	          <div class="blog-post-tags">  <?php the_tags('<span class="title">Tags</span> ', ', ', ''); ?> </div>
	        </div>
	      </div>
	    </header>
	    <div class="row">
	
	      <div class="content blog-post-content" itemprop="articleBody">
	        <div class="social-share">
	          <div class="fb-share-button" data-href="{{ post.permalink }}" data-layout="button"></div>
	          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweetar</a>
	            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	        </div>
	        <?php the_content(); ?>
	      </div>
	
	      <div class="blog-post-categories">
		      
	        <span class="title">Categorias</span> <?php the_category(', ', '', $post->id);?>
	      </div>
	
	      	<?php 	$authorname = get_the_author_meta('first_name');
		      		$authorbio =  get_the_author_meta('description');?>
	      <div class="content blog-post-author">
	        <div class="avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), '64', '64'); ?>
	         
	        </div>
	        <div class="info">
	          <span class="title">Sobre o autor</span> <?php echo $authorname. ' ' .get_the_author_meta('last_name');?><br>
	          <p><?php echo $authorbio;?></p>
	          <a class="website" href="http://gastosabertos.org">Website</a>
	        </div>
	      </div>
	     
	<?php endwhile;?>
	    </div>
	  	</article>

<?php get_footer(); ?>