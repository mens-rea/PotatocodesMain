	</div>

	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/svganimations.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/borderMenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.custom.79639.js"></script> 
	<script src="<?php bloginfo('template_directory');?>/js/modernizr.custom.js"></script>
	<script>
	
	new WOW().init();

	
	$(window).load(function(){    
	    $("#spnr").remove();
	});

	//PARALLAX ANIMATIONS
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


	//GUARANTEE ANIMATION
	function gclick1(){
		$("#guarantee-content").fadeOut(function() {
		  $(this).html("<h2>MINDBLOWING ANIMATIONS</h2><p class='light-font animated fadeIn wow' id='guarantee-text'>Presenting information in a clean and easy to remember way, while making it easy for your audience to sit back, relax and feast on the informational goodness.</span></p>").fadeIn('xfast');
		});
	}
	function gclick2(){
		$("#guarantee-content").fadeOut(function() {
		  $(this).html("<h2>CLEAR INFORMATION</h2><p class='light-font animated fadeIn wow' id='guarantee-text'>Using the latest css3, html5 and jquery technologies, we will design for you that zoom and zing that every exceptional website needs.</span></p>").fadeIn('xfast');
		});
	}
	function gclick3(){
		$("#guarantee-content").fadeOut(function() {
		  $(this).html("<h2>USER-FRIENDLY WEBSITES</h2><p class='light-font animated fadeIn wow' id='guarantee-text'>You can easily change the content of your website anytime in the future. An awesome ass-kicking manual and  tutorial will be sure to send you on your way.</span></p>").fadeIn('xfast');
		});
	}
	function gclick4(){
		$("#guarantee-content").fadeOut(function() {
		  $(this).html("<h2>HASSLE FREE INTERACTION</h2><p class='light-font animated fadeIn wow' id='guarantee-text'>You can sit back and enjoy, watch us build your website from the ground up to the great online hotspot it will become.</span></p>").fadeIn('xfast');
		});
	}
	function gclick5(){
		$("#guarantee-content").fadeOut(function() {
		  $(this).html("<h2>SPEED AND EFFICIENCY</h2><p class='light-font animated fadeIn wow' id='guarantee-text'>We will construct your website faster than you can say Potato... well not really, but we still work fast and we will be sure to produce jaw-dropping results.</span></p>").fadeIn('xfast');
		});
	}

	function normalize(){
		$("#guarantee1 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g3.png');
		$("#guarantee2 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g1.png');
		$("#guarantee3 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g4.png');
		$("#guarantee4 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g2.png');
		$("#guarantee5 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g5.png');
	}

	$('#guarantee1').click(function(){
		normalize();
		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/g3.png";
		$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/g3.png');
	   	$("#guarantee1 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g3hover.png');
	});
	$('#guarantee2').click(function(){
		normalize();
		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/g1.png";
		$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/g1.png');
	   	$("#guarantee2 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g1hover.png');
	});
	$('#guarantee3').click(function(){
		normalize();
		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/g4.png";
		$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/g4.png');
	   	$("#guarantee3 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g4hover.png');
	});
	$('#guarantee4').click(function(){
		normalize();
		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/g2.png";
		$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/g2.png');
	   	$("#guarantee4 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g2hover.png');
	});
	$('#guarantee5').click(function(){
		normalize();
		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/g5.png";
		$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/g5.png');
	   	$("#guarantee5 .box-container6 .box6").attr('src', '<?php bloginfo('template_directory'); ?>/images/g5hover.png');
	});



	// SCROLLING FUNCTIONS
	$(window).scroll(function() {
	    var height = $(window).scrollTop();

	    if(height<920){
	   		$('.activeLinkClass').removeClass('activeLinkClass');
	   	   	$('#firstrightnav').addClass('activeLinkClass');
	   	   	var oldSrc = "<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png";
	   
		   	$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		   	$('#firstrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png');

		   	$('#header3').removeClass('stickToTop');
		   	$('#navbacktotop').removeClass('backtotopfixed');
	    }
	    else if(height>920 && height<1840){
	    	$('.activeLinkClass').removeClass('activeLinkClass');
	   		$('#secondrightnav').addClass('activeLinkClass');

	   		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png";
	   
		   $('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		   $('#secondrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png');

		   var oldSrc2 = "<?php bloginfo('template_directory'); ?>/images/YOUAREHEREwhite.png";
	   
		   $('img[src="' + oldSrc2 + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');

		   $('#header3').addClass('stickToTop');
		   $('#navbacktotop').addClass('backtotopfixed');
	    }
	    else if(height>1840&&height<2790){
	    	$('.activeLinkClass').removeClass('activeLinkClass');
	   		$('#thirdrightnav').addClass('activeLinkClass');

	   		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png";
	   
		   $('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		   $('#thirdrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHEREwhite.png');

		   $('#header3').addClass('stickToTop');
		    $('#navbacktotop').addClass('backtotopfixed');
	    }
	    else if(height>2790&&height<3590){
	    	$('.activeLinkClass').removeClass('activeLinkClass');
	   		$('#fifthrightnav').addClass('activeLinkClass');

	   		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png";
	   
		   $('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		   $('#fifthrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png');

		   var oldSrc2 = "<?php bloginfo('template_directory'); ?>/images/YOUAREHEREwhite.png";
	   
		   $('img[src="' + oldSrc2 + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		   $('#fifthrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png');

		   $('#header3').addClass('stickToTop');
		    $('#navbacktotop').addClass('backtotopfixed');
	    }
	    else if(height>3590&&height<4490){
	    	$('.activeLinkClass').removeClass('activeLinkClass');
	   		$('#sixthrightnav').addClass('activeLinkClass');

	   		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png";
	   
		   $('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		   $('#sixthrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png');

		   $('#header3').addClass('stickToTop');
		    $('#navbacktotop').addClass('backtotopfixed');
	    }
	    else if(height>4490&&height<5300){
	    	$('.activeLinkClass').removeClass('activeLinkClass');
	   		$('#eightrightnav').addClass('activeLinkClass');

	   		var oldSrc = "<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png";
	   
			$('img[src="' + oldSrc + '"]').attr('src', '<?php bloginfo('template_directory'); ?>/images/nav.png');
		    $('#eightrightnav').children().attr('src', '<?php bloginfo('template_directory'); ?>/images/YOUAREHERE.png');

			$('#header3').addClass('stickToTop');
		    $('#navbacktotop').addClass('backtotopfixed');
	    }
	});


	</script>

</body>
</html>

<?php wp_footer(); ?>