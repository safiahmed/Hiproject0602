<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
        <title>Hiprojects| Compare Products</title>
        <link href="css/amazon_scroller.css" rel="stylesheet" type="text/css"></link>
		
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/amazon_scroller.js"></script>
		<link href="css/compare.css" rel="stylesheet" type="text/css" media="screen" />
		
<link rel="stylesheet" href="css/shaili.css" /> 
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/header_fotter.css" />
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
<?php include('header.php'); ?>
	<div id="page">
	
<div class="col-main">
<div id="page-head"></div>
   <div class="page-title">
       <h2>Compare products</h2>
    </div>
 
 
<div id="accordion">
  <h3 class="com"><img src="images/abt.png" width="12" height="12"/> Hardware Check List</h3>
  <div>
   <table id="compare">
 <thead>
 <tr><th scope="col" colspan="2" align="left" width="54%" bgcolor="#E9F0F5">Contents</th><th scope="col" width="4%" bgcolor="#E6E6E6">Project Kit</th><th scope="col" width="4%" bgcolor="#E3F1FA">Do Yourself Kit</th><th scope="col" width="5%" bgcolor="#E6E6E6">Ready Made Kit</th></tr>

 </thead>

</table>
<table>
<tr>
<td  class="main-tab" align="center" width="200" height="150"  ><img src="images/4.jpg" width="150" height="110"/></td>
<td align="left" width="450" class="tab">A fully assembled & tested PCB : Supplied in the kit to be used as a stand by, if the project assembled on plain PCB fails to work. It is supplied in DIY kit only and not supplied in project kit.</td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
<td width="80"align="center" class="tab3" bgcolor="#DCECF7"><img src="images/RedX.png" width="20" height="20"/></td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
</tr>
</table>
<div class="more"><a href="#">view more<small>>></small></a></div>
  </div>
 
  <h3 class="com"><img src="images/abt.png" width="12" height="12"/> Hard Copy Check List</h3>
 <div>
   <table id="compare">
 <thead>
 <tr><th scope="col" colspan="2" align="left" width="54%" bgcolor="#E9F0F5">Contents</th><th scope="col" width="4%" bgcolor="#E6E6E6">Project Kit</th><th scope="col" width="4%" bgcolor="#E3F1FA">Do Yourself Kit</th><th scope="col" width="5%" bgcolor="#E6E6E6">Ready Made Kit</th></tr>

 </thead>

</table>
<table>
<tr>
<td  class="main-tab" align="center" width="200" height="150"  ><img src="images/4.jpg" width="150" height="110"/></td>
<td align="left" width="450" class="tab">A fully assembled & tested PCB : Supplied in the kit to be used as a stand by, if the project assembled on plain PCB fails to work. It is supplied in DIY kit only and not supplied in project kit.</td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
<td width="80"align="center" class="tab3" bgcolor="#DCECF7"><img src="images/RedX.png" width="20" height="20"/></td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
</tr>
</table>
<div class="more"><a href="#">view more<small>>></small></a></div>
  </div>
  <h3 class="com"><img src="images/abt.png" width="12" height="12"/> Soft Copy Check list</h3>
 <div>
   <table id="compare">
 <thead>
 <tr><th scope="col" colspan="2" align="left" width="54%" bgcolor="#E9F0F5">Contents</th><th scope="col" width="4%" bgcolor="#E6E6E6">Project Kit</th><th scope="col" width="4%" bgcolor="#E3F1FA">Do Yourself Kit</th><th scope="col" width="5%" bgcolor="#E6E6E6">Ready Made Kit</th></tr>

 </thead>

</table>
<table>
<tr>
<td  class="main-tab" align="center" width="200" height="150"  ><img src="images/4.jpg" width="150" height="110"/></td>
<td align="left" width="450" class="tab">A fully assembled & tested PCB : Supplied in the kit to be used as a stand by, if the project assembled on plain PCB fails to work. It is supplied in DIY kit only and not supplied in project kit.</td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
<td width="80"align="center" class="tab3" bgcolor="#DCECF7"><img src="images/RedX.png" width="20" height="20"/></td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
</tr>
</table>
<div class="more"><a href="#">view more<small>>></small></a></div>
  </div>
  <h3 class="com"><img src="images/abt.png" width="12" height="12"/> Audio-Visuals Check list</h3>
 <div>
   <table id="compare">
 <thead>
 <tr><th scope="col" colspan="2" align="left" width="54%" bgcolor="#E9F0F5">Contents</th><th scope="col" width="4%" bgcolor="#E6E6E6">Project Kit</th><th scope="col" width="4%" bgcolor="#E3F1FA">Do Yourself Kit</th><th scope="col" width="5%" bgcolor="#E6E6E6">Ready Made Kit</th></tr>

 </thead>

</table>
<table>
<tr>
<td  class="main-tab" align="center" width="200" height="150"  ><img src="images/4.jpg" width="150" height="110"/></td>
<td align="left" width="450" class="tab">A fully assembled & tested PCB : Supplied in the kit to be used as a stand by, if the project assembled on plain PCB fails to work. It is supplied in DIY kit only and not supplied in project kit.</td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
<td width="80"align="center" class="tab3" bgcolor="#DCECF7"><img src="images/RedX.png" width="20" height="20"/></td>
<td width="80" align="center" class="tab2" bgcolor="#EDF8FA"><img src="images/i_msg-success.gif"/></td>
</tr>
</table>
<div class="more"><a href="#">view more<small>>></small></a></div>
  </div>

	
			
	
</div>
</div>

</div>
	 <?php include('footer.php'); ?>

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
       
       
        
      
