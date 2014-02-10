<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <?php include('meta.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Blog</title>
<link href="css/blog2.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/header_fotter.css" />
<script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
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

   <?php include('header.php'); ?>


	<div id="page">
<div class="col-main">
                                            <div class="page-title">
      
    </div>
<div id="blog-content">
<div id="banner"><img src="images/blog-banner.jpg" width="700" height="300"/></div>
<div id="calender"><img src="images/calendar.png" width="70" height="70"/></div>
<div id="content"><h3>Examples of Great Blog Content</h3>
<hr>
</div>
<div id="main-blog"><p>The topic of blogging seems to come up a lot in our social media training workshops. The benefits of a quality blog are obvious – fresh content is good for your readers and your rankings. Blogs are easy to set up and even easier to update. We often tell people that if they can use Microsoft Word… they can update a blog.

As easy as they are to set up, they can be difficult to maintain. A good blog is filled with relevant, timely content that is updated on a regular basis. New bloggers often start out with a bang but then fizzle out when they realize that creating content can be challenging.

Let’s look at a couple of good blogs</p><br>
<p>What’s the secret to this blog? Notice how each post includes some sort of image or video. Notice the quality of the images and videos. Notice how the posts are kept short and they rely on the images and videos to help tell the story.You might not like this site but you have to admire it from a blogging perspective. You don’t become one of the most popular pop culture/celebrity websites in the world by accident. TMZ is really good at hooking the reader with a fun and informative title and then providing all of the information without using the “Read More” function. Their posts are short and to the point.</p></div>

</div>
<div id="blog-right"><div class="patch"><span>Recent Post</span></div><ul>
<li><a href="#">The topic of blogging seems to come up a lot in our social media training workshops.</a></li>
<li><hr></li>
<li><a href="#">The topic of blogging seems to come up a lot in our social media training workshops.</a></li>
<li><hr></li>

<li><a href="#">The topic of blogging seems to come up a lot in our social media training workshops.</a></li></ul></div>
<div id="blog-right1"><div class="patch"><span>Archives</span></div>
<ul>
<li><a href="#">June 15</a></li>
<li><hr></li>
<li><a href="#">Jannuary 29</a></li>
<li><hr></li>

<li><a href="#">September 12</a></li><li><hr></li>
<li><a href="#">April 11</a></li><li><hr></li>
<li><a href="#">December 11</a></li></ul></div>
<div id="blog-right2"><div class="patch"><span>Recent Comments</span></div>
<ul>
<li><a href="#">The topic of blogging seems to come up a lot in our social media training workshops.</a></li>
<li><hr></li>
<li><a href="#">The topic of blogging seems to come up a lot in our social media training workshops.</a></li>
<li><hr></li>

<li><a href="#">The topic of blogging seems to come up a lot in our social media training workshops.</a></li></ul></div>

		</div>
		

			
	</div>
		
			
	 <?php include('footer.php'); ?>		
	

</div>



   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>


  
</body>
</html>