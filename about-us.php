<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| About Us</title>
<link href="css/Aboutus1.css" rel="stylesheet" type="text/css" media="screen" />
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
<?php include('header.php'); ?>
	<div id="page">
<div class="col-main">
                                            <div class="page-title">
        <h2>About Us</h2>
    </div>
	 <div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Design , Development and Ideas</a>
              </div>
            </div>  
<div id="about-image">

<img src="images/about1.jpg" width="940" height="280"/>
<div id="about-content">
<p>I need to start this article by qualifying what makes an amazing About Us page. The reason for this is that some About Us pages look amazing but have terrible content whilst others look terrible but grab your attention immediately. </P>
<ul>
<li><h4><img src="images/abt.png" width="12" height="12"/>    The definition of a good About Us page</h4></li></ul>
<p>First and foremost an About Us page has to get a point across. Everything else is completely and utterly useless unless the content and the layout is achieving a goal. That goal is to tell the user who you are by showing them what you can do for them or have done for others.</p>

<p>Some of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. </p></br>  <p>       This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.First and foremost an About Us page has to get a point across. Everything else is completely and utterly useless unless the content and the layout is achieving a goal. That goal is to tell the user who you are by showing them what you can do for them or have done for others.</p>
<ul>
<li><h4><img src="images/abt.png" width="12" height="12"/>        The definition of a good About Us page</h4></li></ul>
<p>First and foremost an About Us page has to get a point across. Everything else is completely and utterly useless unless the content and the layout is achieving a goal. That goal is to tell the user who you are by showing them what you can do for them or have done for others.Some of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.</p>



</div>
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