<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Terms & conditions</title>
<link href="css/offer.css" rel="stylesheet" type="text/css" media="screen" />
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
<div id="share-wrapper">
    <ul class="share-inner-wrp">
        <!-- Facebook -->
        <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>
        
        <!-- Twitter -->
        <li class="twitter button-wrap"><a href="#">Tweet</a></li>
        
         
    </ul>
</div>

<?php include'feedback.php'; ?>
<div id="wrapper">

   <?php include('header.php'); ?>


<div id="page">
<div class="col-main">
                                            <div class="page-title">
        <h1>We offer</h1>
    </div>
<div class="std">
<table class="mater-black" style="width: 100%;" border="0" cellspacing="2" cellpadding="4">
<tbody>
<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px"></td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>Free shipping</strong></td>
</tr>
<tr>
<td width="5%">&nbsp;</td>
<td width="95%">&nbsp;</td>
</tr>
<tr>
<td width="4%"><img src="images/abt.png" alt="" width="16" height="16"></td>
<td width="95%">
<div align="justify" style="color:gray">We just want to see you smiling!</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td></td>
<td>
<div align="justify" style="color:gray">So we give you a reason to be happy. We ship your orders absolutely free. In other words you don’t have to pay anything towards shipping and handling charges.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td id="view"><a href="#">More details<small>>></small></a>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px"></td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>Trusted Service and support</strong></td>
</tr>
<tr>
<td width="5%">&nbsp;</td>
<td width="95%">&nbsp;</td>
</tr>
<tr>
<td width="4%"><img src="images/abt.png" alt="" width="16" height="16"></td>
<td width="95%">
<div align="justify" style="color:gray">We just want to see you smiling!</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td></td>
<td>
<div align="justify" style="color:gray">So we give you a reason to be happy. We ship your orders absolutely free. In other words you don’t have to pay anything towards shipping and handling charges.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td id="view"><a href="#">More details<small>>></small></a>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px"></td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>100 % Money back guarantee</strong></td>
</tr>
<tr>
<td width="5%">&nbsp;</td>
<td width="95%">&nbsp;</td>
</tr>
<tr>
<td width="4%"><img src="images/abt.png" alt="" width="16" height="16"></td>
<td width="95%">
<div align="justify" style="color:gray">We just want to see you smiling!</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td></td>
<td>
<div align="justify" style="color:gray">So we give you a reason to be happy. We ship your orders absolutely free. In other words you don’t have to pay anything towards shipping and handling charges.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td id="view"><a href="#">More details<small>>></small></a>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px"></td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>Easy returns</strong></td>
</tr>
<tr>
<td width="5%">&nbsp;</td>
<td width="95%">&nbsp;</td>
</tr>
<tr>
<td width="4%"><img src="images/abt.png" alt="" width="16" height="16"></td>
<td width="95%">
<div align="justify" style="color:gray">We just want to see you smiling!</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td></td>
<td>
<div align="justify" style="color:gray">So we give you a reason to be happy. We ship your orders absolutely free. In other words you don’t have to pay anything towards shipping and handling charges.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td id="view"><a href="#">More details<small>>></small></a>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>





</tbody>
</table>
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