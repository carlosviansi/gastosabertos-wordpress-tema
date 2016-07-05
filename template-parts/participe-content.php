<div class="row">
	
	<?php   while ( have_posts() ) : the_post();?>
    
    <div class="content " id="participe">
      	
      	<?php the_content();?>
    
    </div>
    
    <?php   endwhile; ?>		

</div>