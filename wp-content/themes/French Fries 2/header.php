<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<?php wp_head(); ?>

	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory'); ?>/images/favicon.png">

	<title><!-- PLACE WEBSITE TITLE HERE--></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<!-- Load any Bootsrap JS files before calling jQuery.noConflict()  -->
		<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
			<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>
		<script>
		// Put jQuery 1.10.2 into noConflict mode.
		var $jq1 = jQuery.noConflict(true);
		</script>

	<!-- This can be before or after the above -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.scrollTo-1.4.2-min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/animate.css">
	<link href="<?php bloginfo('template_directory');?>/css/hover.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/common.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style7.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style3.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/font-awesome-4.1.0/css/font-awesome.min.css">

	<script type="text/javascript">
	$(document).ready(function(){

		$('#nav-main').localScroll(800);

		$('#nav').localScroll(800);

		$('#nav1').localScroll(200);
		$('#nav2').localScroll(200);
		$('#nav3').localScroll(200);

		//$('#nav4').localScroll(200);
		$('#nav5').localScroll(200);

		$('#navbacktotop').localScroll(200);
		
		//.parallax(xPosition, speedFactor, outerHeight) options:
		//xPosition - Horizontal position of the element
		//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
		//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
		$('#intro').parallax("50%", 0.1);
		$('#second').parallax("50%", 0.1);
		$('.bg').parallax("50%", 0.1);
		$('#third').parallax("50%", 0.1);

	})
	</script>

</head>
<body>

	<div id="container">

   <!-- START HEADER -->
   <!--
   <div id="header">

   		<div class="row">
          <div class="container">
               <div class="col-md-12">

               	
                  <nav class="navbar navbar-default" role="navigation"> 
                    <div class="navbar-header"> 
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                      </button> 
                      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
                    </div> 
                    <div class="collapse navbar-collapse navbar-ex1-collapse"> 
                      <?php /* Primary navigation */
                        wp_nav_menu( array(
                          'menu' => 'primary_navigation',
                          'depth' => 2,
                          'container' => false,
                          'menu_class' => 'nav navbar-nav',
                          'walker' => new wp_bootstrap_navwalker())
                        );
                      ?>
                    </div>
                  </nav>
                
               
               </div>
          </div>     
	   	</div>


   </div>
	-->

   <!-- END HEADER -->

   <script>
   	$("div.circle-container").on("mouseover",function() {
	    alert("hello");
	});
   </script>