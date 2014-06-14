<?php get_header(); ?>

<script>
	function myFunction()
	{
		$('a.perk-links').click(function(e)
		{
		    e.preventDefault();
		});

		var box = $('#perks-desc-default');
		var box1 = $('#perks-desc-container1'); 
		var box2 = $('#perks-desc-container2'); 
		var box3 = $('#perks-desc-container3'); 
		var box4 = $('#perks-desc-container4');  
  		var boxes = $('.perks-desc-containers');

		$('#perk1').on('click', function () {
		  box.addClass('hide');  
		  boxes.addClass('hide');	
		  box1.removeClass('hide');
		  
		  setTimeout(function () {  
		      box1.fadeIn(); 
		    }, 500); 
		  boxes.fadeOut();
		});

		$('#perk2').on('click', function () {
		  box.addClass('hide');    
		  boxes.addClass('hide');
		  box2.removeClass('hide');
		  
		  setTimeout(function () {  
		      box2.fadeIn(); 
		    }, 500); 
		  boxes.fadeOut();
		});

		$('#perk3').on('click', function () { 
		  box.addClass('hide');   
		  boxes.addClass('hide');
		  box3.removeClass('hide');
		  
		  setTimeout(function () {  
		      box3.fadeIn(); 
		    }, 500); 
		  boxes.fadeOut();
		});

		$('#perk4').on('click', function () {  
		box.addClass('hide');  
		  boxes.addClass('hide');
		  box4.removeClass('hide');
		  
		  setTimeout(function () {  
		      box4.fadeIn(); 
		    }, 500); 
		  boxes.fadeOut();
		});
	}
	$(document).ready(myFunction);


</script>

		<div class="row">
			<div class="container" style="min-height: 100px; padding-top: 25px;">
				<img id="logo" src="<?php echo bloginfo('template_directory'); ?>/images/logo.png">

			    <nav id="main-navigation" class="collapse navbar-collapse" role="navigation">
			      <?php
			        wp_nav_menu(array('menu' => 'Main Nav Menu'));
			      ?>
			    </nav>
  </div>
			</div>
		</div>

		<div class="row">
				<div id="left-side-bottom" class="perks-container col-md-6 col-sm-12 col-xs-12" style="text-align: justify;">
					<h2>Who we are. What we do</h2>
					<h3>A web designer + a front end and back end code slinger</h3>
					<p>We are not just an ordinary developer and designer duo. We create websites that are out of the norm
						. We think outside the box. We analyze, innovate and create simple yet beautiful designs, we write 
						elegant and efficient  codes, and we turn them into a unique website.</p>
				</div>
				<div id="right-side-bottom" class="perks-container col-md-6 col-sm-12 col-xs-12">
					<h1>THE TEAM</h1>
					<div id="mem1" class="member-desc col-md-6">
						<img class="img-responsive" src="<?php echo bloginfo('template_directory');?>/images/member1.png">
						<h4> Mhariell A. Mosqueriola </h4>
						<p>Computer Science graduate. I am a freelance designer who started from pencil and paper,
						paints and paint brushes to lines, shapes and colors of Adobe Photoshop.</p>
					</div>
					<div id="mem2" class="member-desc col-md-6">
						<img class="img-responsive" src="<?php echo bloginfo('template_directory');?>/images/member2.png">
						<h4> Juan Miguel G. Alvarez </h4>
						<p>
							Computer Science graduate. I am a freelance website developer,
						I've been working with HTML5, PHP, CSS and JQUERY for 2 years and have done 4 projects in the business.</p>
					</div>
					<!--
					<a href="#">
					<h3  id="top-sub" >PRICE LOW. QUALITY, HIGH.</h3>
					<h3 id="bottom-sub">TAKE ADVANTAGE.</h3>
					</a>
					-->
				</div>
		</div>

		<div id="featured-projects-section" class="row main-featured-projects-container">
			<div class="container">
				<div class="featured-projects-container col-md-3 col-sm-12 col-xs-12">
					<h2>PAST/PRESENT WORKS</h2>
					<p>
						We've worked on these projects in the past and we are still honing our skills with various projects.
					</p>
				</div>
				<div class="featured-projects-container col-md-3 col-sm-12 col-xs-12">
					<a href="http://ofad.ust.edu.ph" target="_blank"><img title="UST Office for Admissions" src="<?php echo bloginfo('template_directory');?>/images/image elements/project1.png">
						</br><span>University of Santo Tomas Office For Admissions</span>
					</a>
				</div>
				<div class="featured-projects-container col-md-3 col-xs-12">
					<a href="#"><img title="UST Faculty of Engineering (ongoing)" src="<?php echo bloginfo('template_directory');?>/images/image elements/project2.png">
						</br><span>University of Santo Tomas Faculty of Engineering (On Going)</span>
					</a>
				</div>
				<div class="featured-projects-container col-md-3 col-xs-12">
					<a href="http://www.p2ro.com.ph" target="_blank"><img title="P2RO Inc." src="<?php echo bloginfo('template_directory');?>/images/image elements/project3.png">
						</br><span>P2RO Incorporated</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row main-perks-container">
			<div class="container" style="padding: 0px;">
				<script>
				echo $this->Html->link($this->Html->tag('span', 'buck') . $this->Html->image('images/image elements/perks1.png', array('alt' => 'Buck')), array('controller' => 'Bucks', 'action' => 'view', 6), array('class' => 'menu', 'escape' => false));
				</script>
				<div class="perks-container col-md-2 col-sm-12 col-xs-12">
					<h3>OUR GUARANTEE</h3>
					<p>
						These are the things we guarantee for your website.
					</p>
				</div>
				<div class="perks-container col-md-2 col-sm-12 col-xs-12">
					<a href="#" id="perk-link1" class="perk-links">
					<div id="perk1" class="perk-divs">
					</div>
					</a>
				</div>
				<div class="perks-container col-md-2 col-sm-12 col-xs-12">
					<a href="#" id="perk-link2" class="perk-links">
					<div id="perk2" class="perk-divs" ></div>
					</a>
				</div>
				<div class="perks-container col-md-2 col-sm-12 col-xs-12">
					<a href="#" id="perk-link3" class="perk-links">
					<div id="perk3" class="perk-divs"></div>
					</a>
				</div>
				<div class="perks-container col-md-2 col-sm-12 col-xs-12">
					<a href="#" id="perk-link4" class="perk-links">
					<div id="perk4" class="perk-divs"></div>
					</a>
				</div>
				<div class="perks-container col-md-2 col-sm-12 col-xs-12" style="border-left: 2px solid gray;">
					<div id="perks-desc-default">
					<h4>SELECT ONE OF THE BUTTONS</h4>
					<p>To view what's in store for you</p>
					</div>

					<div class="perks-desc-containers" id="perks-desc-container1">
					<h4>WORTH EVERY PENNY</h4>
					<p>We guarantee that our clients get their money's worth. Every centavo will go where they should be going.</p>
					</div>
					<div class="perks-desc-containers" id="perks-desc-container2">
					<h4>HASSLE FREE</h4>
					<p>We guarantee that we will handle everything.</p>
					</div>
					<div class="perks-desc-containers" id="perks-desc-container3">
					<h4>FAST AND EFFICIENT</h4>
					<p>We guarantee that you will have a website up and running before you can say WOW!</p>
					</div>
					<div class="perks-desc-containers" id="perks-desc-container4">
					<h4>EYE CATCHING</h4>
					<p>We guarantee that our design will make your customers come back to your website everytime</p>
					</div>
				</div>
				
			</div>
		</div>
		<div id="featured-section" class="row" style="border:1px solid #000;height: 500px; text-align: center;">
			<h1 style="margin-top: 200px;">
				QUALITY WEBSITES AT FRACTION OF THE TIME
			</h1>
			<h5>
				WE DON'T JUST MAKE WEBSITES, WE CREATE WEB-SIGHTS 
			</h5>
		</div>

		

		

		

<?php get_footer(); ?>
