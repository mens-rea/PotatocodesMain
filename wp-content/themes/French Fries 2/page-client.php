<?php
/*
Template Name: Client Page
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

   <div id="header2" class="" style="position: fixed; top: 0; left: 0; right: 0; text-align: center; background-color: #af1f26;">
   		
   		<h6 style="margin: 0 auto;"><img src="<?php bloginfo('template_directory'); ?>/images/click-me.png"></h6>
   		<nav id="bt-menu" class="bt-menu">

				<a href="#" class="bt-menu-trigger"><div class="logo-holder"><img class="img-responsive" style="height:60px; margin: 0 auto; margin-top: 5px;" src="<?php bloginfo('template_directory'); ?>/images/logo.png"></div></a>
				<ul>
					<li style="display: none;"></li>
					<li><a href="<?php bloginfo('url'); ?>" class="bt-icon hidden-xs" style="color:white;">Home</a><a href="<?php bloginfo('url'); ?>" class="fa fa-home hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
          <li><a href="<?php bloginfo('url'); ?>/about" class="bt-icon hidden-xs" style="color:white;">About</a><a href="<?php bloginfo('url'); ?>/about" class="fa fa-question hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
          <li><a href="<?php bloginfo('url'); ?>/clients" class="bt-icon hidden-xs" style="color:white;">Clients</a><a href="<?php bloginfo('url'); ?>/clients" class="fa fa-folder-open-o hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
          <li><a href="<?php bloginfo('url'); ?>/contact" class="bt-icon hidden-xs" style="color:white;">Contacts</a><a href="<?php bloginfo('url'); ?>/contact" class="fa fa-phone hidden-md hidden-lg" style="margin-top: 45px;"></a></li>
					<li style="display: none;"></li>
				</ul>
		</nav>

   </div>

   <div id="body" style="background-color: #f5f5f5;">

   			<div class="row">
              <div class="container">
                <div class="col-md-12 contact-page-wrapper" style="text-align: center;">

					        <h1 style="font-family: 'Proxima Nova'; ">Our Clients</h1>

                  <p style="font-family: 'Open Sans'; font-size: 1.5em;">We establish a close relationship with our clients, we ensure that the project will deliver the intended message to the target audience. Providing manuals and training for the clients to be able to update their websites independently.</p>

                  <div class="client-container" style="padding-top: 20px;">
                    <div class="col-md-6 clients-img-container">
                      <div class="whitify-clients-sections">
                        <img src="<?php bloginfo('template_directory'); ?>/images/clients/UST.png">
                      </div>
                      <div class="gray-overlay"><h2>UNIVERSITY OF SANTO TOMAS</h2></div>
                    </div>

                    <div class="col-md-6 clients-img-container">
                      <div class="whitify-clients-sections">
                        <img src="<?php bloginfo('template_directory'); ?>/images/clients/UST-Engg2.png">
                      </div>
                      <div class="gray-overlay"><h2>UST FACULTY OF ENGINEERING</h2></div>
                    </div>

                    <div class="col-md-6 clients-img-container">
                      <div class="whitify-clients-sections">
                        <img src="<?php bloginfo('template_directory'); ?>/images/clients/UST-Med2.png">
                      </div>
                      <div class="gray-overlay"><h2>UST FACULTY OF MEDICINE</h2></div>
                    </div>

                    <div class="col-md-6 clients-img-container">
                      <div class="whitify-clients-sections">
                        <img src="<?php bloginfo('template_directory'); ?>/images/clients/P2RO2.png">
                      </div>
                      <div class="gray-overlay"><h2>P2RO INCORPORATED</h2></div>
                    </div>
                  </div>


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