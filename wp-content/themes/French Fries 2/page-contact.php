<?php
/*
Template Name: Contact Page
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

   <div id="header2" class="" style="position: fixed; top: 0; left: 0; right: 0; text-align: center; background-color:  #1694cb;">
   		
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

   <div id="body">
   			<div class="row">
              <div class="container">
                <div class="col-md-12 contact-page-wrapper" style="text-align: center;">

							<div style="margin: 0 auto; width: 350px; padding-left: 25px; margin-top: 40px;">
							<h1 style="font-family: 'Bebas Neue'; font-size: 4.9em; text-align: left; line-height: 0.8em; color: black;">
								NEED TOUCH?</br>
								CONTACT US <img src="<?php bloginfo('template_directory'); ?>/images/and.png" height="30px"/></br>
								BE <span style="color: #fbad1d;">POTATOED</span>
							</h1>
							</div>


                	<ul class="ch-grid" style="margin-top: 30px;">
						<li>
							<div class="ch-item">				
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-paper-plane-o contact-logo" style="font-size: 7.5em;"></i></div>
									<div class="ch-info-back">
										<h3>EMAIL</h3>
										<p>info@potatocodes.com</p>
									</div>	
								</div>
							</div>
						</li>
						<li>
							<div class="ch-item">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"><i class="fa fa-mobile"></i></div>
									<div class="ch-info-back">
										<h3>PHONE</h3>
										<p>GLOBE - +639178802238</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="ch-item">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"><i class="fa fa-twitter"></i></div>
									<div class="ch-info-back">
										<h3>TWITTER</h3>
										<p><a href="#">Follow Us</a></p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="ch-item">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"><i class="fa fa-facebook"></i></div>
									<div class="ch-info-back">
										<h3>FACEBOOK</h3>
										<p><a target="_blank" href="https://www.facebook.com/potatocodes?fref=ts">Like Us</a></p>
									</div>
								</div>
							</div>
						</li>
					</ul>

                  </div>
                <div>
              </div>
   


   </div>

   <!-- <div id="footer" style="background-color: #333333; color: white;"> -->
   <div id="footer">
   	<div class="row">
   		<div class="container">
   			<div class="text-center col-md-12">
   				<h6 class="footer-copyright">© 2014 Potatocodes</h6>
   			</div>
   		</div>
   	</div>
   </div>
<?php get_footer(); ?>