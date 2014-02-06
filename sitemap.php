<?php //include 'connect.php';  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Sitemap</title>
<link href="css/delars.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
<link rel="stylesheet" href="css/shaili.css" /> 
<link rel="stylesheet" href="css/bootstrap-cerulean22.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/header_fotter.css" />


  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/bootstrap-sitemap.js"></script>
  <script src="js/bootstrap-sitemap1.js"></script>
   
                <script src="Js/mrova-feedback-form.js" type="text/javascript"></script>
                <link rel="stylesheet" href="css/mrova-feedback-form.css" type="text/css"/>
  <style type="text/css">
	  body {
		
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
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
		<script type="text/javascript">
			$(document).ready(function(){
				//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
				//Vertical Sliding
				$('.boxgrid.slidedown').hover(function(){
					$(".cover", this).stop().animate({top:'-260px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
				});
				//Horizontal Sliding
				$('.boxgrid.slideright').hover(function(){
					$(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});
				//Diagnal Sliding
				$('.boxgrid.thecombo').hover(function(){
					$(".cover", this).stop().animate({top:'260px', left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
				});
				//Partial Sliding (Only show some of background)
				$('.boxgrid.peek').hover(function(){
					$(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
				});
				//Full Caption Sliding (Hidden to Visible)
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
				});
				//Caption Sliding (Partially Hidden to Visible)
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
				});
			});
		</script>
<style>
 #gallery_01 img{border:1px solid white;
 width:97px;
 padding-top:17px;}
 
 
 /*Change the colour*/

</style>
</head>
<body>	



  <script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>
  <style>
  .ui-tabs-vertical { width: 79em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 25em;border-right:1px solid rgba(128, 128, 128, 0.31); height:250px; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 61%; border-bottom-width: 1px !important;  margin: 0 -1px .2em 97px;color:red; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; color:gray;}
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0;  border-right-width: 1px; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; margin-left:406px;margin-top:-58px; width: 73em;}
  </style>
</head>
<body>
<div id="share-wrapper">
    <ul class="share-inner-wrp">
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a></li>
        
        
    </ul>
</div>

 <?php include'feedback.php '; ?>
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

<?php include 'main-login.php ';?>


<div id="menu">
		<ul id="main">        
			<li  id="home_leftline"><a href="index.php">Home</a></li>
			<li><a href="our-expertise.php">Our Expertise</a></li>
			<li><a href="project-kits.php">Project Kits</a></li>
			<li><a href="LearningMaterial.php">Learning Material</a></li>
			<li><a href="videos.php">Videos</a></li>
			<li><a href="service-center.php">Service Center</a></li>
			<li><a href="">Support</a></li>
			<li><a href="Contactus.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms"></li>
		</ul>
	</div>
</div>	
</div>
</div>
<div id="page">
	<div class="col2-left-layout1">
	
</div>		
	<div class="col-main">
	<div id="breadcrumb">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li>/</li>
                                            <li><a href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
	<div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Sitemap</a>
              </div>
            </div>  
		
		</div>

<div id="tabs">
<h2 style="margin-top:8px;margin-left:95px;margin-bottom:10px;">Main Category</h2>  <ul>
    <li><a href="#tabs-1">Electrical</a></li>
    <li><a href="#tabs-2">Robotics</a></li>
    <li><a href="#tabs-3">Embedded</a></li>
  </ul>
  <div id="tabs-1">
    <h2>Category details</h2>
	<p>Main category</p>
	<div id="main-name">
	Electrical
	</div>
	<p>sub category</p>
	<div class="sub-name">
	</div>
	<div class="sub-name">
	</div>
	<div class="sub-name">
	</div>
  </div>
  <div id="tabs-2">
   <h2>Category details</h2>
	<p>Main category</p>
	<div id="main-name">
	Robotics
	</div>
	<p>sub category</p>
	<div class="sub-name">
	</div>
	<div class="sub-name">
	</div>
	<div class="sub-name">
	</div>
  </div>
  <div id="tabs-3">
   <h2>Category details</h2>
	<p>Main category</p>
	<div id="main-name">
	Embedded
	</div>
	<p>sub category</p>
	<div class="sub-name">
	</div>
	<div class="sub-name">
	</div>
	<div class="sub-name">
	</div>
  </div>
</div>
</div>
  <?php include('footer.php'); ?>
 
</body>
</html>