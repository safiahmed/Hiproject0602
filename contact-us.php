<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Contact Us</title>
<link href="css/contactus.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/bootstrap.css" />
<script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css" />
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
		winHeight	= 450;
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
			<li><a href="service-center.php">Service Center</a></li>
			<li><a href="">Support</a></li>
			<li class="current_page_item"><a href="contact-us.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms"></li>
		</ul>
	</div>
</div>	
</div>
</div>





<div id="page">
<div id="khaja">
    <div id="khajafooter"> 
    	<div class="col_allw200">
        	<div class="topcontent">						
						<h2>Hi Projects</h2>									
			<content>
						<p><b></b> <a style="font-size:15px;font-weight:bold;"></a> <b></p>	
		<p><b>Address</b>:Magnum Technologies No.128, 1st Floor, 19th Cross,8th Main, Opp B.D.A Complex, Vijayanagar, Bengaluru - 560040, Karnataka</p>
			<p><b>Email Id</b>:</p>
<p>Mobile : +91-9886310706</p>
<p><a href="mailto:Amjad.syed@symmetricindia.com?Subject=Hello%20again" target="_top">visit:contact@a.com</a></p>
			</content>					
				</div>
				<div class="bottomcontent">												
					<content>	
					<iframe width="390" height="252"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mangium+Infotech+Pvt+Ltd,+Bangalore,+Karnataka&amp;aq=0&amp;oq=Mangiu&amp;sll=13.033157,77.634277&amp;sspn=0.935192,1.674042&amp;ie=UTF8&amp;hq=Mangium+Infotech+Pvt+Ltd,&amp;hnear=Bangalore,+Bangalore+Urban,+Karnataka&amp;ll=13.019017,77.59225&amp;spn=0.10432,0.006295&amp;t=m&amp;output=embed"></iframe>
</content>				
				</div>
		</div>			
    	<div class="col_allw3008">
        	<div class="top-sidebar">
					<form id="contact-form" name="myemailform" action="assets/controller-links.php" method="post">
			<h2>Get in Touch</h2>
			<h4>Tell us your requirement and we will get back to you at the earliest.</h4>
			<div>
				<label>
					<span>Name: (required)</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="name" required >
				</label>
			</div>
			<div>
				<label>
					<span>Email: (required)</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email" required>
				</label>
			</div>
			<div>
				<label>
					<span>Telephone: (required)</span>
					<input placeholder="Please enter your number" type="tel" tabindex="3" name="tel" required>
				</label>
			</div>
			<div>
				<label>
					<span>Website: (optional)</span>
					<input placeholder="Begin with http://" type="url" tabindex="4" name="website" >
				</label>
			</div>
			
			<div>
				<label>
					<span>Comment: (required)</span>
					<textarea placeholder="Include all Your requirements" tabindex="5" name="message" required></textarea>
				</label>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">Send Email</button>
			</div>
			
			
			
			
			
			
		</form>
				</div>
		</div>		
		<div class="box_strip"></div>
        <div class="cleaner"></div>    
    </div>	 
	</div>

		</div>
			
			
			
	<?php include('footer.php'); ?>	

</div>



   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>


  
</body>
</html>