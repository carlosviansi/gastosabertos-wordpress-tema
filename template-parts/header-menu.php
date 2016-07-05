<header class="site-header fixed">
	<div class="row">
    <nav class="top-bar" data-topbar role="navigation">

      <ul class="title-area">
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        <a href="/"><li class="name">Gastos Abertos</li></a>
      </ul>
      <section class="top-bar-section">
	<?php $prime_nav_args = array	(	'theme_location' => 'primary',
										'container'      => '',
										'menu_class'               => 'left',
										'walker'         => new Walker_Nav_Primary());
				wp_nav_menu($prime_nav_args);
	?>
		<ul class="right">
        </ul>
      </section>

    </nav>
  </div>
</header>
<div class="site-header-fill"></div>