<?php
require_once './assets/my-controller.php';
$faq=new Users();
$data=array();
$faq_details=$faq->FAQ_details($data);
//print_r($faq_details);exit;
?>

 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| FAQ</title>
<link href="css/FAQ.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/shaili.css" /> 
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


<div id="wrapper">
 <?php include('header.php'); ?>
	<div id="page">
<div class="col-main">
   <div class="page-title">
      <h2>FAQ</h2>
    </div>
<img src="images/faq.jpg" width="922"/>
<?php
$fsize=sizeof($faq_details);
if($fsize!=0){

    foreach ($faq_details as $prod)
{
    ?>
<div class="std">
<div class="question">
<?php echo $prod['faq_question']; ?>
</div>
<div class="answer">
<?php echo $prod['faq_answers']; ?>

</div><br/>
	
</div>
<?php }
}else{
    echo "Sorry No data found....";
}
?>
		</div>
		
	
			
	

</div>
<?php include('footer.php'); ?>	
</div>

   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>


		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    	<script src="Js/bootstrap.js"></script>
    	<script type="text/javascript">
  	$(document).ready(function(){ // Ready Function Start
        		$("#myCarousel").carousel({interval:2000});
        		
        	});//Ready Function End
  </script>
  
</body>
</html>