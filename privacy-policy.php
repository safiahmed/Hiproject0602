<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Privacy & Policy</title>
<link href="css/privacypolicy.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/header_fotter.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
<script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
<div id="share-wrapper">
    <ul class="share-inner-wrp">
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a></li>
        
        
    </ul>
</div>

<div id="mrova-img-control" style="margin-top: -84px; top: 50%;"></div>
<div id="wrapper">
<?php include('header.php'); ?>

<div id="page">
<div class="col-main">
                                            <div class="page-title">
        <h1>Privacy Policy</h1>
    </div>
<div class="std"><table class="mater-black" style="font-size: 12px;
font-family: verdana;
line-height: 190%;" border="0" cellspacing="3" cellpadding="3" align="center" bgcolor="#E5E5E5">
<tbody height="300">
<tr>
<td bgcolor="#FFFFFF" style="color:rgb(32, 110, 172);">
<p align="justify"><strong><img src="images/abt.png" alt="" width="16" height="16">This website belongs to:</strong><br><strong>HiProjects</strong> <strong>Pvt. Ltd</strong>, 105, Liberty Plaza, Himayatnagar, Bangalore-500 029<span class="Apple-converted-space">,Karnataka, India.</span><strong>Contact Number</strong>: +91 99591 78000</p>
</td>
</tr>
<tr>
<td class="mater-black" style="color:gray; text-decoration: none;" bgcolor="#FFFFFF">
<div align="justify">By accessing this Site, certain information about you like systems and programs used, time spent, IP addresses along with other similar information, may be stored on our servers. Your unique identifying information like name, address etc. may be used for statistical, internal administrative and/or other purposes. We will not disclose, sell, share or in any way reveal your information to any other third party. We are committed to protecting the information we collect. We have appropriate security measures in place to protect against the loss, misuse or alteration of information that we have collected from you.
The content of the pages of this website is for your general information and use only. It is subject to change without notice.The content of the pages of this website is for your general information and use only. It is subject to change without notice.</div>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
</tbody>
<tbody>
<tr>
<td bgcolor="#FFFFFF" style="color:rgb(32, 110, 172);">
<p align="justify"><strong><img src="images/abt.png" alt="" width="16" height="16">This website belongs to:</strong><br><strong>HiProjects</strong> <strong>Pvt. Ltd</strong>, 105, Liberty Plaza, Himayatnagar, Bangalore-500 029<span class="Apple-converted-space">,Karnataka, India.</span><strong>Contact Number</strong>: +91 99591 78000</p>
</td>
</tr>
<tr>
<td class="mater-black" style="color:gray; text-decoration: none;" bgcolor="#FFFFFF">
<div align="justify">By accessing this Site, certain information about you like systems and programs used, time spent, IP addresses along with other similar information, may be stored on our servers. Your unique identifying information like name, address etc. may be used for statistical, internal administrative and/or other purposes. We will not disclose, sell, share or in any way reveal your information to any other third party. We are committed to protecting the information we collect. We have appropriate security measures in place to protect against the loss, misuse or alteration of information that we have collected from you.</div>
</td>
</tr>
<tr><td>&nbsp;</td></tr>

</tbody>
<tbody>


</tbody>
</table></div>                </div>

		</div>
			
	  <?php include('footer.php'); ?>				
	

</div>



   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    	<script src="Js/bootstrap.js"></script>
    	<script type="text/javascript">
  	$(document).ready(function(){ // Ready Function Start
        		$("#myCarousel").carousel({interval:2000});
        		
        	});//Ready Function End
  </script>
  
</body>
</html>