<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
        <title>Hiprojects| Videos</title>
        <link href="css/amazon_scroller.css" rel="stylesheet" type="text/css"></link>
		
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/amazon_scroller.js"></script>
		<link href="css/video_demo.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/shaili.css" /> 
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-cerulean1.css" />
<link rel="stylesheet" href="css/bootstrap-cerulean2.css" />
<link rel="stylesheet" href="css/bootstrap-cerulean22.css" />
<link rel="stylesheet" href="css/header_fotter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <script language="javascript" type="text/javascript">

            $(function() {
                $("#amazon_scroller1").amazon_scroller({
                    scroller_title_show: 'enable',
                    scroller_time_interval: '4000',
                    scroller_window_background_color: "#CCC",
                    scroller_window_padding: '10',
                    scroller_border_size: '1',
                    scroller_border_color: '#000',
                    scroller_images_width: '124',
                    scroller_images_height: '160',
                    scroller_title_size: '12',
                    scroller_title_color: 'black',
                    scroller_show_count: '4',
                    directory: 'images'
                });
                $("#amazon_scroller2").amazon_scroller({
                    scroller_title_show: 'disable',
                    scroller_time_interval: '3000',
                    scroller_window_background_color: "none",
                    scroller_window_padding: '10',
                    scroller_border_size: '0',
                    scroller_border_color: '#CCC',
                    scroller_images_width: '100',
                    scroller_images_height: '80',
                    scroller_title_size: '12',
                    scroller_title_color: 'black',
                    scroller_show_count: '2',
                    directory: 'images'
                });
                $("#amazon_scroller3").amazon_scroller({
                    scroller_title_show: 'enable',
                    scroller_time_interval: '3000',
                    scroller_window_background_color: "none",
                    scroller_window_padding: '10',
                    scroller_border_size: '2',
                    scroller_border_color: '#9C6',
                    scroller_images_width: '124',
                    scroller_images_height: '160',
                    scroller_title_size: '11',
                    scroller_title_color: 'black',
                    scroller_show_count: '3',
                    directory: 'images'
                });
            });
        </script>
      <script type="text/javascript">
$(document).ready(function() {
	var pageTitle = document.title; //HTML page title
	var pageUrl = location.href; //Location of the page	
	//user hovers on the share button	
	$('#share-wrapper li').hover(function() {
		var hoverEl = $(this); //get element
		
		//browsers with width > 699 get button slide effect
		if($(window).width() > 699) { 
			if (hoverEl.hasClass('visible')){
				hoverEl.animate({"margin-left":"-117px"}, "fast").removeClass('visible');
			} else {
				hoverEl.animate({"margin-left":"0px"}, "fast").addClass('visible');
			}
		}
	});		
	//user clicks on a share button
	$('.button-wrap').click(function(event) {
			var shareName = $(this).attr('class').split(' ')[0]; //get the first class name of clicked element
			
			switch (shareName) //switch to different links based on different social name
			{
				case 'facebook':
					var openLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'twitter':
					var openLink = 'http://twitter.com/home?status=' + encodeURIComponent(pageTitle + ' ' + pageUrl);
					break;
				case 'digg':
					var openLink = 'http://www.digg.com/submit?phase=2&amp;url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'stumbleupon':
					var openLink = 'http://www.stumbleupon.com/submit?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'delicious':
					var openLink = 'http://del.icio.us/post?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'google':
					var openLink = 'https://plus.google.com/share?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
					break;
				case 'email':
					var openLink = 'mailto:?subject=' + pageTitle + '&body=Found this useful link for you : ' + pageUrl;
					break;
				
			}		
		//Parameters for the Popup window
		winWidth 	= 650;	
		winHeight	= 400;
		winLeft   	= ($(window).width()  - winWidth)  / 2,
		winTop    	= ($(window).height() - winHeight) / 2,	
		winOptions   = 'width='  + winWidth  + ',height=' + winHeight + ',top='    + winTop    + ',left='   + winLeft;		
		//open Popup window and redirect user to share website.
		window.open(openLink,'Share This Link',winOptions);
		return false;
	});
});
</script>
</head>
<body>	
<div id="share-wrapper">
    <ul class="share-inner-wrp">
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a></li>
        
         <!-- Digg -->
        <li class="digg button-wrap"><a href="#"></a></li>
        
        <!-- Stumbleupon -->
        <li class="stumbleupon button-wrap"><a href="#">Printer</a></li>
      
         <!-- Delicious -->
       
        
        <!-- Google -->
        <li class="google button-wrap"><a href="#">Plus Share</a></li>
        
        <!-- Email -->
         <li class="email1 button-wrap"><a href="#">Email</a></li>
    </ul>
</div>
<div id="wrapper">
<div id="header_image">
<div id="container">
<div id="Header_wrapper"> 
<div class="hanechitra2">
</div>


<div class="hanechitra3">
	<div id="innerlogo">
	<ul>        
			<li><a href="#"><img src="images/flike.png"></a></li>
			<li><a href="#"><img src="images/tweet.png"></a></li>
			<li><a href="#"><img src="images/pin.png"></a></li>
			<li><a href="#"><img src="images/share.png"></a></li>
			<li><a href="#"><img src="images/inshare.png"></a></li>
		</ul>
	
	
	</div>
</div>

<div class="hanechitra4">

<div id="upperlogo">
	<ul>    
	
			<li><a href="#"><img src="images/register.png"></a></li>    
			<li><a href="hilogin.php"><img src="images/mycart (2).png"></a></li>
			<li><a href="#"><img src="images/mycart (1).png" style="margin-top:-3px"></a></li>
		
			
		
		</ul>
	</div>
</div>


<div id="menu">
		<ul id="main">        
			<li  id="home_leftline"><a href="index.php">Home</a></li>
			<li><a href="our-expertise.php">Our Expertise</a></li>
			<li><a href="project-kits.php">Project Kits</a></li>
			<li><a href="LearningMaterial.php">Learning Material</a></li>
			<li class="current_page_item"><a href="videos.php">Videos</a></li>
			<li><a href="service-center.php">Service Center</a></li>
			<li><a href="">Support</a></li>
			<li><a href="contact-us.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms"></li>
		</ul>
	</div>
</div>	
</div>
</div>

	<div id="page">
	
<div class="col-main">
<div id="page-head"></div>
<div id="breadcrumb">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li>/</li>
                                            <li><a href="#">Videos</a></li>
                                        </ul>
                                    </div>
<div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Videos</a>
              </div>
            </div>  
<div id="video"><p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="956" height="300"></iframe></p></div>
<div class="std">
<div class="question">
LCDK onboard emulator
</div>
<div class="answer">
<p>LCDK is an easy-to-use development tool for beginners and experienced users alike for creating low power and low cost solutions for biometric, analytics, audio and communication based applications. At $195, the LCDK offers everything you need to get started with your projects. L138/C6748 development kit is part of single core DSP value line series. The kit includes either a TMS320C6748 DSP or an OMAPL138 application processor with 456 MHz C674x Fixed/Floating point core. It has On-chip RTC, DDR2 running at 150 MHz, NAND FLASH and SD/MMC Slot, USB Serial Port, Fast Ethernet Port, B Host port (USB 1.1), USB OTG port (USB 2.0), SATA Port , VGA port, LCD Port (Beagleboard XM connectors), three AUDIO Ports, Composite IN (RCA Jack) and Leopard Imaging Camera Sensor Input.
</p>

</div>
<div id="video_play">
<div class="video1">
<iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="300" height="250"></iframe>
</div>
<div class="video2">
<iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="300" height="250"></iframe>
</div>
<div class="video3">
<iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="300" height="250"></iframe>
</div>
<div class="video1">
<iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="300" height="250"></iframe>
</div>
<div class="video2">
<iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="300" height="250"></iframe>
</div>
<div class="video3">
<iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="300" height="250"></iframe>
</div>
</div>
</div>
  
       
       
      
 		</div>
		
	
			
	
</div>

 <?php include('footer.php'); ?>
</div>
	

   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>

    	<script src="Js/bootstrap.js"></script>
    	<script type="text/javascript">
  	$(document).ready(function(){ // Ready Function Start
        		$("#myCarousel").carousel({interval:2000});
        		
        	});//Ready Function End
  </script>
  
</body>
</html>     
       
       
        
      
