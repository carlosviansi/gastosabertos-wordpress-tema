<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <meta name="google-site-verification" content="acuKRhq17S_L0nDfBk1iu3PpPAVbHFjweigkCF-tzWw" />
	    <title><?php wp_title(); ?></title>
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600,400italic' rel='stylesheet'>
	    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
	    <?php wp_head(); ?>
	    <?php  if(is_page('contratos')):?>
	    	<style type="text/css">
				    table { color: black; }
				    tr:hover { background: initial !important; }
				    tr.odd:hover { background: #f6f6f6 !important; }
				    td .filter {
				      color: #6eaa5c;
				      cursor: pointer;
				    }
				    tr.objeto td {
				      border-top: 1px solid gray !important;
				    }
  			</style>
  			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.dataTables.css">
  		<?php endif; ?>
  </head>
  <body>
      <div class="page-wrap">
	      <?php get_template_part('template-parts/header', 'menu'); ?>
