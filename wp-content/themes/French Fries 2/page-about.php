<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

		

<div id="header" class="hidden-xs hidden-sm hidden-md hidden-lg hidden-xl">
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

   <div id="header2" class="" style="position: fixed; background-color: #fbad1d; top: 0; left: 0; right: 0; text-align: center;">
   		
   		<h6 style="margin: 0 auto;"><img src="<?php bloginfo('template_directory'); ?>/images/click-me.png"></h6>
   		<nav id="bt-menu" class="bt-menu">

				<a href="#" class="bt-menu-trigger"><div class="logo-holder"><img class="img-responsive" style="height:60px; margin: 0 auto; margin-top: 5px;" src="<?php bloginfo('template_directory'); ?>/images/logo.png"></div></a>
				<ul>
					<li style="display: none;"></li>
					<li><a href="<?php bloginfo('url'); ?>" class="bt-icon hidden-xs">Home</a><a href="<?php bloginfo('url'); ?>" class="fa fa-home hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
          <li><a href="<?php bloginfo('url'); ?>/about" class="bt-icon hidden-xs">About</a><a href="<?php bloginfo('url'); ?>/about" class="fa fa-question hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
          <li><a href="<?php bloginfo('url'); ?>/clients" class="bt-icon hidden-xs">Clients</a><a href="<?php bloginfo('url'); ?>/clients" class="fa fa-folder-open-o hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
          <li><a href="<?php bloginfo('url'); ?>/contact" class="bt-icon hidden-xs">Contacts</a><a href="<?php bloginfo('url'); ?>/contact" class="fa fa-phone hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
					<li style="display: none;"></li>
				</ul>
		</nav>

   </div>

   <div id="body" style="background-color: white;">

   			<div class="row">
              <div class="container">
                <div class="col-md-12 about-page-wrapper" style="text-align: center;">

                    <!--<h1 style="margin: 0px; margin-top: 30px; font-family: 'Bebas Neue'; font-size: 6em;">HOW <span style="color:#fbad1d;">WE</span> DO IT?</h1>
                    <h1 style="margin: 0px; font-family: 'Bebas Neue'; font-size: 4em;">JUST ONE WAY</h1>
                    <h1 style="margin: 0px; font-family: 'Bebas Neue'; font-size: 4em;">THE <span style="color:#fbad1d;">POTATO</span> WAY</h1>-->

                    <div class="col-md-12 text-center">
                      <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/abouttitle.png" style=" margin: 0 auto; margin-top: 80px;">
                    </div>

                    <div class="col-md-12 how-container">
                      <div class="col-md-4 how-inner">
                        <div class="how-title"><h3>RESPONSIVE </br>WEBSITES </h3><img src="<?php bloginfo('template_directory'); ?>/images/responsive.png" style="height: 50px;"></div>
                        <p style="font-size: 1.2em; margin-top: 10px;">We create websites that will fit into any screen resolution, from the
                          biggest screen monitors to the smallest smartphone.</p>
                      </div>
                      <div class="col-md-4 how-inner">
                         <div class="how-title"><h3>EASY TO </br>UPDATE </h3><img src="<?php bloginfo('template_directory'); ?>/images/update.png" style="height: 50px;"></div>
                        <p style="font-size: 1.2em; margin-top: 10px;">Training and manuals will be provided</br> 
                          for you to be able to update and
                          change your website anytime.</p>
                      </div>
                      <div class="col-md-4 how-inner">
                         <div class="how-title"><h3>GREAT SUPPPORT AND</br> MANAGEMENT </h3><img src="<?php bloginfo('template_directory'); ?>/images/stars.png" style="height: 50px;"></div>
                        <p style="font-size: 1.2em; margin-top: 10px;">Personal interactions which will guarantee that you get the most out of
                          your website.</p>
                      </div>
                    </div>

                    <a href="<?php bloginfo('template_directory');?>/images/BUSINESSPERMITS.pdf" target="_blank"><div class="col-md-12" style="margin-top: 40px;">
                      <img src="<?php bloginfo('template_directory'); ?>/images/certified.png" style="float:right;">
                      <p style="float:right; text-align: right;">We are a duly registered business in manila.</br> Here are our certificates.</p>
                    </div></a>

                </div>
              <div>
        </div>

   </div>

   <div id="footer" style="background-color: #333333; color: white;">
   	<div class="row">
   		<div class="container">
   			<div class="col-md-12">
   				<h6 class="footer-copyright">COPYRIGHT @ POTATOCODES 2014</h6>
   			</div>
   		</div>
   	</div>
   </div>
<?php get_footer(); ?>