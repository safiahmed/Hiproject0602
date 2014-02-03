<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Learning Materials</title>
<link href="css/learningMaterial.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/shaili.css" /> 
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-cerulean1.css" />
<link rel="stylesheet" href="css/bootstrap-cerulean2.css" />
<link rel="stylesheet" href="css/bootstrap-cerulean22.css" />
<script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="css/header_fotter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="Js/mrova-feedback-form.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/mrova-feedback-form.css" type="text/css"/>
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
<?php include'feedback.php '; ?>
<div id="share-wrapper">
    <ul class="share-inner-wrp">
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a></li>
        
         
    </ul>
</div>
<div id="header_image">
<div id="container">
<div id="Header_wrapper"> 
<div class="hanechitra2">
</div>


<div class="hanechitra3">
	<div id="innerlogo">
	<ul>        
			<li><a href="#"><img src="images/flike.png"></a></li>
			
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
			<li class="current_page_item"><a href="LearningMaterial.php">Learning Material</a></li>
			
			<li><a href="service-center.php">Service Center</a></li>
			<li><a href="">Support</a></li>
			<li><a href="contact-us.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms" style=" height: 20px;"></li>
		</ul>
	</div>
</div>	
</div>
</div>


	<div id="page">
<div class="col-main">
           <div id="breadcrumb">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li>/</li>
                                            <li><a href="#">Learning Materials</a></li>
                                        </ul>
            </div>
 <div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Learning Materials</a>
              </div>
            </div>                               
<div id="learning">
<img src="images/learning.jpg" width="919" height="300"/></div>

		<div id="extrawrapper1">
	Big News... from Karen Hewitt at Learning Materials Workshop
	
	</div>
		<div id="learning-content">
		<div id="top-content">
	<p> A wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreement (see: products). My other designs may be licensed in the near future or will become part of history - even "collector's items."

I will continue to distribute Reggio Children Publications through my web site. As a free lance designer and consultant, I plan to create new open-ended toys, present workshops for teachers, and follow my passion and commitment as an advocate for the importance of play and creativity in the lives of young children. (more)</p>
		</p><p>The impulse to construct, to take apart and to build again is universal among young children and continues throughout our lifetime. Learning Materials Workshop supports this active approach to learning with a series of high-quality block sets that invite children and builders of all ages to explore, to invent, to represent, to design, and to test their theories about the physical and social world and the world of their imagination. Playing, learning, and creating are lifelong pursuits.</p>
			<div id="first-image-content"><div class="image"><img src="images/learning1.jpg" width="250" height="200"/></div>
	<div class="image-des"><p>A wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreement (see: products). My other designs may be licensed in the near future or will become part of history - even "collector's items."A wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreement (see: products).A wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreementA wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreementA wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreement My other designs may be licensed in the near future or will become part of history - even "collector's items."
		</p></div></div>
		<div id="second-image-content"><div class="image-des1"><p>A wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreement (see: products). My other designs may be licensed in the near future or will become part of history - even "collector's items."A wonderful toy company based in Seattle, Washington, will be producing and selling seven of my award-winning toys under a licensing agreement (see: products). My other designs may be licensed in the near future or will become part of history - even "collector's items."
		</p></div><div class="image1"><img src="images/learning2.jpg" width="250" height="200"/></div>
		</div></div>
	
	</div>	

	</div>
</div>

<?php include('footer.php'); ?>


   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>


  
</body>
</html>