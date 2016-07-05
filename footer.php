		</div>
		<footer class="site-footer">
			<div class="row">
			    <div>
			      <div class="row">
			        <div class="logo">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/logo_footer.png" alt="Gastos Abertos">
			        </div>
			        <div class="coordinator">
			          <p>É um projeto coordenado pela</p>
			          <img src="<?php echo get_template_directory_uri(); ?>/img/okbr_logo.png?v=1" alt="Open Knowledge Brasil">
			        </div>
			        
			      </div>
			    </div>
			    <div class="twitter-widget">
			      <?php get_template_part('template-parts/twitter', 'widget'); ?>
			    </div>
			</div>
			<div style="background-color:#fff">
				<div class="row">
					<div class="support">
				          <p>Apoio</p>
				          <img src="<?php echo get_template_directory_uri(); ?>/img/google_logo.png" alt="Google">
				          <img src="<?php echo get_template_directory_uri(); ?>/img/appcivico-logo-p-footer.png" alt="Appcívico" style="margin: 0 0 0 60px; height:62px">
				    </div>
				</div>
			</div>
		</footer>
			<?php wp_footer(); ?>
			<script>
			      if (window.location.host == 'p.gastosabertos.org') {
			        $('.page-wrap').addClass('site-preview');
			      }
	    	</script>
  </body>
</html>
