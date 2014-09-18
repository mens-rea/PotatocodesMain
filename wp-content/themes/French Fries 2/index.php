<?php get_header(); ?>
  
  <?php 
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']); 
  if(stripos($ua,'android') !== false) { 


  }
  else{
  ?>

  <div id="spnr" class="cover">
  <div class="spinner"></div>
  </div>

  <?php 
  }
  ?>

   <!-- START BODY -->

   <div id="body">

      <ul id="nav-main" class="hidden-xs">
        <li><a id="firstrightnav" class="activeLinkClass" href="#intro" title="Welcome"><img src="<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png"alt="Link" /></a></li>
        <li><a id="secondrightnav" href="#second" title="About Us"><img src="<?php bloginfo('template_directory'); ?>/images/nav.png" alt="Link" /></a></li>
        <li><a id="thirdrightnav" href="#third" title="Our Guarantee"><img src="<?php bloginfo('template_directory'); ?>/images/nav.png" alt="Link" /></a></li>
        <li><a id="fifthrightnav" href="#fifth" title="University of Santo Tomas - Office for Admissions"><img src="<?php bloginfo('template_directory'); ?>/images/nav.png" alt="Link" /></a></li>
        <li><a id="sixthrightnav" href="#sixth" title="University of Santo Tomas - Faculty of Engineering"><img src="<?php bloginfo('template_directory'); ?>/images/nav.png" alt="Link" /></a></li>
        <li><a id="eightrightnav" href="#eight" title="University of Santo Tomas - Computer Science Department"><img src="<?php bloginfo('template_directory'); ?>/images/nav.png" alt="Link" /></a></li>
      </ul>
          
      <div class="par-sections" id="intro">
            <!-- FIRST SECTION -->

            <div class="row">
              <div class="container">
                <div class="col-md-12" style="min-height: 900px;">

                      <div id="main" class="main">
                        <figure>

                          <div id="main-logo-draw" class="drawings mac">

                           <?php 
                              $ua = strtolower($_SERVER['HTTP_USER_AGENT']); 
                              if(stripos($ua,'android') !== false) { 
                                ?>
                                 <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="iMac Illustration"  height="200"/>
                              
                                <?php
                              }
                              else{
                              ?>
                              <img  id="logoimage" class="illustration" src="<?php bloginfo('template_directory');?>/images/logo.png" alt="iMac Illustration"  height="200"/>
                              <svg class="line-drawing" id="mac"preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                                <path d="m 59.30876,2.30872 c 0,0 -30.74232,-2.97288 -42.61303,32.46502 c 0,0 6.74232,6.97288 38.61303,26.46502 c 0,0 -50,5 -50,2 c 0,0 -2,10 -4,35" />
                                <path d="m 59.30876,2.30872 c 0,0 7.74232,-2.97288 24.61303,10.46502 c 0,0 25.74232,25.97288 25.11303,65.46502 c 0,0 -23.74232,14.97288 -49.61303,14.46502 c 0,0 25.74232,20.97288 50.61303,18.46502" />
                                <path d="m 59.30876,198.30872 c 0,0 25.74232,1.97288 35.61303,-27.46502 c 0,0 -8.74232,0.57288 -36.61303,-10.46502 c 0,0 25.74232,-5.97288 45.61303,-15.46502 c 0,0 9.74232,-25.97288 6.61303,-36.46502" />
                                <path d="m 59.30876,198.30872 c 0,0 -47.74232,1.97288 -55.61303,-62.46502 c 0,0 20.74232,2.97288 46.61303,-7.46502 c 0,0 -24.74232,-5.97288 -82.61303,-53.46502" />
                              </svg>

                              <?php 
                              }
                           ?>
                            

                            <div id="slide-content1" class="slide-content" style="text-align: center;">
                                <h1 class="hidden-xs" style="font-size: 70px; font-family: 'Nexa'; font-weight: 600; letter-spacing: -4px;">Potatocodes</h1>
                                <h1 class="hidden-sm hidden-md hidden-lg" style="font-size: 50px; font-family: 'Nexa'; font-weight: 600; letter-spacing: -4px;">Potatocodes</h1>
                                <h2>We don't just make websites, </br>we create dreams.</h2>
                                <div class="tri-labels"><span style="color: #af1f26; font-weight: bold;">DESIGNERS</span> . <span style="color: #1694cb; font-weight: bold;">CODERS</span> . <span style="color: #fbad1d; font-weight: bold;">POTATOES</span></div>
                                <span id="nav1" class="nav"><a id="firstlink" href="#second" title="Next Section" style="text-decoration: none;"><img src="<?php bloginfo('template_directory'); ?>/images/arrow.png" class="img-responsive forever-pulse" style="height: 30px; margin: 0 auto;"></a></span>
                            </div>

                          </div>

                        </figure>
                      </div>      

                </div>
              <div>
            </div>

      </div> <!-- First Section -->
            
      <div class="par-sections" id="second" style="padding-top: 50px;">
       
        <!-- SECOND SECTION -->
        <div id="header3" style="z-index: 999; overflow: hidden; background-color: white; opacity: 0.9; padding-bottom: 0px;">
          <div class="row">
            <div class="container">
              <div class="col-md-12">

                        <nav id="navbar1" class="navbar navbar-default" role="navigation" style="margin-bottom: 0px;"> 
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
                        
              </div> <!-- ANOMALY 1: REMOVE THIS CLOSING DIV -->
            </div>     
          </div>
        </div>


        <div class="row">
            <div class="container">
              <div class="col-md-12" style="min-height: 900px;">
                    
                <img src="<?php bloginfo('template_directory'); ?>/images/speech-balloon.png">
                <h1 style="margin-top: 10px;">Potatocodes Facts</h1>

                <div class="col-md-12 col-lg-6" style="text-align: left; font-weight: 300; font-size: 1.5em; padding-top: 30px;">
                     
                  <h1 class="about-typography hidden-xs">
                    <span class="wow animate slideInLeft">WE <span style="color: #af1f26;">CODE</span></span></br>
                    <span class="wow animate slideInLeft second-about">WE <span style="color: #1694cb;">DESIGN</span></span></br>
                    <span class="wow animate slideInLeft third-about">WE <span style="color: #fbad1d;">POTATE</span></span></br>
                  </h1>

                  <h1 class="about-typography-small hidden-sm hidden-md hidden-lg">
                    <span class="wow animate slideInLeft">WE <span style="color: #af1f26;">CODE</span></span></br>
                    <span class="wow animate slideInLeft second-about">WE <span style="color: #1694cb;">DESIGN</span></span></br>
                    <span class="wow animate slideInLeft third-about">WE <span style="color: #fbad1d;">POTATE</span></span></br>
                  </h1>
                </div>

                <div class="col-md-12 col-lg-6 wow animate fadeIn" style="text-align: center;">
                      <img class="hidden-xs" style="margin-top: 40px; height: 370px;" src="<?php bloginfo('template_directory'); ?>/images/PotatoSlice.jpg" />
                      <img class="hidden-md hidden-sm hidden-lg img-responsive" src="<?php bloginfo('template_directory'); ?>/images/PotatoSlice.jpg" />
                </div>

                <div class="col-md-12" style="margin-top: 20px; margin-bottom: 50px;">
                  <span id="nav2" class="nav">
                    <a href="#third" class="forever-pulse" title="Next Section" style="color: #333333; text-decoration: none; padding: 5px 10px;">
                      WHAT'S IN IT FOR YOU?
                    </a>
                  </span>
                </div>

              </div>
            <div>
        </div>    

          <!-- ANOMALY 2: ADD DIV HERE -->

      </div><!-- Second Section --> 
            
      <div class="par-sections" id="third">

        <div class="row">
          <div class="container">
            <div class="col-md-12" style="min-height: 900px; text-align: center;">

              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="hidden-md hidden-sm" style="margin: 0 auto; width: 60%;">
                  <h1 style="font-family: 'Bebas Neue'; font-size: 4.3em; float: left; width: auto; margin-right: 10px; padding-top: 10px;">
                    <span style="margin-top: 20px;">THE PERKS OF </span>
                  </h1>
                  <img class="img-responsive" style="float: left;" src="<?php bloginfo('template_directory'); ?>/images/potatolover.png">
                </div>

                <div class="hidden-lg hidden-xs hidden-sm" style="margin: 0 auto; width: 80%; padding-left: 5em;">
                  <h1 style="font-family: 'Bebas Neue'; font-size: 4.3em; float: left; width: auto; margin-right: 10px; padding-top: 10px;">
                    <span style="margin-top: 20px;">THE PERKS OF </span>
                  </h1>
                  <img class="img-responsive" style="float: left;" src="<?php bloginfo('template_directory'); ?>/images/potatolover.png">
                </div>

                <div class="hidden-lg hidden-xs hidden-md" style="margin: 0 auto; width: 100%;">
                  <h1 style="font-family: 'Bebas Neue'; font-size: 4.3em; float: left; width: auto; margin-right: 10px; padding-top: 10px;">
                    <span style="margin-top: 20px;">THE PERKS OF </span>
                  </h1>
                  <img class="img-responsive" style="float: left;" src="<?php bloginfo('template_directory'); ?>/images/potatolover.png">
                </div>
              </div>

              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top: 25px;">
                <div class="col-md-1"></div>

                  <div class="col-md-2 guarantee-holder" onclick="gclick1();">
                    <div class="main-box-container-container">
                      <div id="guarantee1" class="main-box-container">
                        <div class="box-container6" class="box-container">
                          <img class="box6 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g3.png"/>
                        </div>
                        <div class="box-container7" class="box-container">
                          <img class="box7 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g3hover.png"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 hidden-md hidden-sm hidden-lg small-guarantees-content">         
                      <h2>MINDBLOWING ANIMATIONS</h2>
                      <p class='light-font animated fadeIn wow' id='guarantee-text'>
                        Presenting information in a clean and easy to remember way, while making it easy for your audience to sit back, relax and feast on the informational goodness.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-2 guarantee-holder" onclick="gclick2();">
                    <div class="main-box-container-container">
                      <div id="guarantee2" class="main-box-container">
                        <div class="box-container6" class="box-container">
                          <img class="box6 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g1.png"/>
                        </div>
                        <div class="box-container7" class="box-container">
                          <img class="box7 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g1hover.png"/>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 hidden-md hidden-sm hidden-lg small-guarantees-content">
                      <h2>CLEAR INFORMATION</h2>
                      <p class='light-font animated fadeIn wow' id='guarantee-text'>
                        Using the latest css3, html5 and jquery technologies, we will design for you that zoom and zing that every exceptional website needs.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-2 guarantee-holder" onclick="gclick3();">
                    <div class="main-box-container-container">
                      <div id="guarantee3" class="main-box-container">
                        <div class="box-container6" class="box-container">
                          <img class="box6 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g4.png"/>
                        </div>
                        <div class="box-container7" class="box-container">
                          <img class="box7 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g4hover.png"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 hidden-md hidden-sm hidden-lg small-guarantees-content">
                      <h2>USER-FRIENDLY WEBSITES</h2>
                      <p class='light-font animated fadeIn wow' id='guarantee-text'>
                        You can easily change the content of your website anytime in the future. An awesome ass-kicking manual and  tutorial will be sure to send you on your way.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-2 guarantee-holder" onclick="gclick4();">
                    <div class="main-box-container-container">
                      <div id="guarantee4" class="main-box-container">
                        <div class="box-container6" class="box-container">
                          <img class="box6 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g2.png"/>
                        </div>
                        <div class="box-container7" class="box-container">
                          <img class="box7 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g2hover.png"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 hidden-md hidden-sm hidden-lg small-guarantees-content">
                      <h2>HASSLE FREE INTERACTION</h2>
                      <p class='light-font animated fadeIn wow' id='guarantee-text'>
                        You can sit back and enjoy, watch us build your website from the ground up to the great online hotspot it will become.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-2 guarantee-holder" onclick="gclick5();">
                    <div class="main-box-container-container">
                      <div id="guarantee5" class="main-box-container">
                        <div class="box-container6" class="box-container">
                          <img class="box6 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g5.png"/>
                        </div>
                        <div class="box-container7" class="box-container">
                          <img class="box7 img-responsive" src="<?php bloginfo('template_directory'); ?>/images/g5hover.png"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 hidden-md hidden-sm hidden-lg small-guarantees-content">
                      <h2>SPEED AND EFFICIENCY</h2>
                      <p class='light-font animated fadeIn wow' id='guarantee-text'>
                        We will construct your website faster than you can say Potato... well not really, but we still work fast and we will be sure to produce jaw-dropping results.
                      </p>
                    </div>
                  </div>

                <div class="col-md-1"></div>
              </div>

              <div class="col-md-12" style="margin-top: 20px; min-height: 150px;">
                
                <div class="col-md-2"></div>

                  <div class="col-md-8 hidden-xs" id="guarantee-content">
                    <h2 id="guarantee-title"></h2>
                    <p class="light-font animated fadeIn wow" id="guarantee-text">Click the icons above to view the perks of having a <span style="color: #fbad1d; font-size: 20px;">potatocoded website.</span></p>
                  </div>
                <div class="col-md-2"></div>

              </div>

              <div class="col-md-12" style=" padding-top: 10px; overflow: hidden;">
                
                <div class="col-md-3"></div>

                  <div class="col-md-6">
                    
                    <div class="col-xs-6 col-md-6">
                      <h3>GOT A PROJECT?</h3>
                    </div>

                    <div class="col-xs-6 col-md-6">
                      <a href="<?php bloginfo('url'); ?>/contact">
                        <div class="bubble-left" style="float: left; width: auto; background-color: #39a6ce; padding: 5px 5px; margin-top: 10px;">
                          <img class="img-responsive shout-image" src="<?php bloginfo('template_directory') ?>/images/shout.png">
                        </div>
                      </a>
                    </div>

                  </div>

                <div class="col-md-3"></div>

              </div>

              <div class="col-md-12" style="margin-top: 40px; margin-bottom: 50px;"><span id="nav3" class="nav"><a href="#fifth" class="forever-pulse" title="Next Section" style="color: white; text-decoration: none; font-family: 'Open Sans'; font-size: 1.2em; padding: 5px 10px;">CHECK OUR WORK</a></span></div>
           
            </div>
          <div>
        </div>       

      </div> <!-- Third Section -->


      <!-- PORTFOLIO SECTION -->

      <div class="par-sections port-sections" id="fifth"  style="padding-top: 10px;">
        
        <!-- FIRST PORT -->

        <div class="row">
          <div class="container">
            <div class="col-md-12" style="min-height: 500px; padding-bottom: 200px;">                
             
                <img src="<?php bloginfo('template_directory'); ?>/images/portfolio-case.png" style="height: 100px; margin-top: 40px;">      
                <h1>OUR WORKS</h1>

                <?php 
                  query_posts("post_type=portfolio"); 
                  if (have_posts()) : while (have_posts()) : the_post();
                  $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>

                      <div class="col-md-6 portfolio-holder">
                        <a class="port-active-region" href="http://engineering.ust.edu.ph" target="_blank">
                          <div style="overflow: hidden; padding-bottom: 10px; min-height: 250px;">
                            <img class="img-responsive" src="<?php echo $featured_img; ?>" />
                          </div>
                          <h3 class="port-title">
                              <?php echo the_title(); ?>   
                          </h3>
                        </a>
                      </div>

                <?php 
                  endwhile;
                  endif;
                  wp_reset_query();
                ?>
               
            </div>
          <div>
        </div>    

        <span id="navbacktotop">
                <a href="#intro">
                  <div>
                    <div style="height: 50px; width: 50px; border-radius: 100%; background-color: #1694cb; overflow: hidden; margin: 0 auto;">
                      <i class="fa fa-arrow-up" style="font-size: 2em; color: white; margin-top: 10px;"></i>
                    </div>
                    Back to Top
                  </div>
                </a>
        </span>

      </div> <!--First Port-->

   </div>
    <!-- END BODY -->

<?php get_footer(); ?>