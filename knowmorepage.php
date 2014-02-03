<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Home</title>
<link href="css/knowmore.css" rel="stylesheet" type="text/css" media="screen" />
<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
<link rel="stylesheet" href="css/shaili.css" /> 
<link rel="stylesheet" href="css/bootstrap.css" />
<script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
<link href="css/charisma-app.css" rel="stylesheet">
		<!--jquery for zoom-->
		
		<script src='js/jquery-1.8.3.min.js'></script>
		<script src='js/jquery.elevatezoom.js'></script>
		<script src='js/jquery.elevateZoom-3.0.8.min.js'></script>
		<!-- end-->

		<!--zoom effect css-->
			<style>
 #gallery_01 img{border:1px solid white;
 width:97px;
}
 
 
 /*Change the colour*/
 .active img{border:1px dotted #333 !important;}

</style>
<!--end of css-->
</head>
<body>	
  <script type="text/javascript">
	
        $(document).ready(function () {
		$(".project_kit").hide();
            $("#OpenDialog").click(function () {
			$(".project_kit").show();
                $("#dialog").dialog({modal: true, height: 590, width: 1005 });
            });
        });
    </script>
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

<div id="mrova-img-control" style="margin-top: -84px; top: 50%;"></div>
<div id="wrapper">

<?php include('header.php'); ?>
<!--<div id="Header_wrapper"> 
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
			<li><a href="#"><img src="images/mycart (2).png"></a></li>
			<li><a href="#"><img src="images/mycart (1).png"></a></li>
		
			
		
		</ul>
	</div>
</div>


<div id="menu">
		<ul id="main">        
			<li class="current_page_item" id="home_leftline"><a href="index.php">Home</a></li>
			<li><a href="Aboutus.php">Our Expertise</a></li>
			<li><a href="Category.php">Project Kits</a></li>
			<li><a href="LearningMaterial.php">Learning Material</a></li>
			<li><a href="Videos.php">Videos</a></li>
			<li><a href="DealersNetwork.php">Dealers Network</a></li>
			<li><a href="Support.php">Support</a></li>
			<li><a href="Contactus.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms"></li>
		</ul>
	</div>
</div>-->	
<div id="page">
	<div class="col2-left-layout1">
	<div class="main_home">
	
		<div id="breadcrumb">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li>/</li>
      <li><a href="Category.php">Category</a></li>
     <li>/</li>
	<li><a href="#">Auto Intensity Control Of Street Lights</a></li>
    </ul>
  </div>
		
		</div>
</div>		
	<div class="col-main">
	
			
		<div class="product-view">
		
			
<!--<img id="zoom_01" src='images/small/image1.png' data-zoom-image="images/large/image1.jpg"/>
<img id="zoom_02" src='images/small/image2.png' data-zoom-image="images/large/image2.jpg"/>-->



<!-- zoom effect-->
<img id="zoom_03" src='images/small/1.jpg' data-zoom-image="images/large/2 Rx (1).jpg"/>
<div id="gallery_01" style="margin-top:24px;">
 
   <a href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/1.jpg" data-zoom-image="images/large/2 Rx (1).jpg" >
<img src="images/thumb/2 Rx (1) copy.jpg" width="100"></a> 

     <a href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/2.jpg"  data-zoom-image="images/large/2 Rx (2).jpg" >
<img src="images/thumb/2 Rx (2) copy.jpg" width="100"></a> 

     <a href="#" class="elevatezoom-gallery active"  data-update="" data-image="images/small/3.jpg" data-zoom-image="images/large/2 Rx (3).jpg">
<img src="images/thumb/2 Rx (3) copy.jpg" width="100"></a> 



</div>

<script>
$("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true}); 

$("#zoom_03").bind("click", function(e) {  
  var ez =   $('#zoom_03').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>
	<!--end-->		
			
			
</div>
		
		<div  class="product-shop">
            <div class="product-name">
                <h1>Auto Intensity Control Of Street Lights</h1>
            </div>
				<div class="ratings">
                    <div class="rating-box">
                <div class="rating" style="width:80%"></div>
            </div>
                <p class="rating-links">
            <a href="#review">3 Review(s)</a>
            <span class="separator">|</span>
            <a href="#addyourreview">Add Your Review</a>
        </p>
    </div>
	<div class="price-box">Model No: <span style="color:#E72E1E;">180</span></div>
	

							
<div class="short-description">
                    
                    <div class="std"><span>Quick Overview: </span> Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis. </div>
 </div>		
							
		
		 
		    <div id="dialog" title="Dialog Title">
			<center>
    	<div class="project_kit">
				<div id="attrib_wrap">
					<div class="row_top">
					<div class="kith">Kit Content</div>
					<div class="kit_heading">
					
					</div>

					<div class="kit_heading_middle">
				
					<h1>Silver Package</h1>
					<div class="price2" id="attr_price2"><span class="WebRupee"> Rs. </span>15199</div>
					</div>
					<div class="kit_heading_middle">
					<h1>Gold Package</h1>
					<div class="price2" id="attr_price2"><span class="WebRupee"> Rs. </span>15199</div>
					</div>
					<div class="kit_heading_middle">
					<h1>Diamond Package</h1>
					<div class="price2" id="attr_price2"><span class="WebRupee"> Rs. </span>15199</div>
					</div>
					<div class="clear"></div>
					</div>
					<div class="row_middle">
<div class="clist"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td>&nbsp;</td>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td width="72%"><strong>A fully assembled &amp; tested PCB</strong></td>
    <th scope="col" width="28%">Hardware</th>
  </tr>
  <tr>
    <td><strong>Plain PCB</strong></td>
    <th scope="col">Hardware</th>
  </tr>
  <tr>
    <td><strong>A set of solderable components</strong></td>
    <th scope="col">Hardware</th>
  </tr>
  <tr>
    <td><strong>A set of detachable components</strong></td>
    <th scope="col">Hardware</th>
  </tr>
  <tr>
    <td><strong>Pre-Programmed microcontroller</strong></td>
    <th scope="col">Hardware</th>
  </tr>

  <tr>
    <td><strong>Readymade project</strong></td>
    <th scope="col">Hardware</th>
  </tr>
  <tr>
    <td><strong>Abstract, Circuit diagram</strong></td>
    <th scope="col">Soft Copy</th>
  </tr>
  
  <tr>
    <td class="av"><strong>Audio-Visuals</strong></td>
     <th scope="col" style="border-bottom:1px solid #dadada;">Soft Copy</th>
    </tr>
</tbody></table>

<div class="call" style="color:#000;padding-top:0px;"><font size="1px" color="#0095FE">Detailed Kit content</font><br><a style="cursor:hand;" href="" target="_blank"><img style="width:110px;" src="images/chcyan.jpg" alt=""></a></div>
</div>


<div class="chklist_g brdr">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tbody class="for-col1"><tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><img src="images/wrong.png" width="8" height="8"></td>
  </tr>
  <tr>
    <td><img src="images/right.png"></td>
  </tr>
   <tr>
    <td><img src="images/right.png"></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
 
</tbody></table>
<div class="buybtn"><a href="Shoppingcart.php" onclick=""><img src="images/buyblue.png"></a></div>
</div>
<div class="chklist_green brdr">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
   <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png"></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png" alt=""></td>
  </tr>

  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  

</tbody></table>
<div class="buybtn"><a href="Shoppingcart.php" onclick=""><img src="images/b2.jpg" sfnoicon="1"></a></div>
</div>
<div class="chklist_g">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 
  <tbody><tr>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/wrong.png"></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  <tr>
    <td><img src="images/right.png" alt=""></td>
  </tr>
  
</tbody></table>
<div class="buybtn"><a href="Shoppingcart.php"  onclick=""><img src="images/buyblue.png"></a></div>
<input type="hidden" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
</div>

<div class="clear"></div>
</div>
			</div>
			
			
			

			</div>
			</center>
	</div>
		</div>
		</div>
		
	<div class="project_kit1">
	<div class="border-class">
			
			</div>
				<div id="attrib_wrap1">
				
						<div id="breadcrumb1">
	<ul>
		<div id="idian">
		<li><img src="images/16.png"/></li>
		<li <span style="color:#bf6008;">Project Information</span> </li>
		<li class="divider" >>></li>
      <li ><a href="#product">Product Description</a></li>
      
     </div>
   
    </ul>
  </div>
					
			</div>
			<div class="border-class">
			
			</div>
			
			
			<div class="box-content">
						<div class="block-title1">
										<div id="breadcrumb1">
	<ul>
		<div id="idian">
		<li><img src="images/16.png"/></li>
		<li> <span style="color:#bf6008;">Recommended Combos</span></strong></span> </li>
     
     </div>
   
    </ul>
  </div>
       
    </div>
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#Video">Combo1</a></li>
					<li><a href="#combo2">Combo2</a></li>
					<li><a href="#Video">Combo3</a></li>
							
				</ul>
						 
					<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="Video">
								<table>
									<tbody><tr>
										<td width="180" id="cart-tab"><a href="#"><img src="images/6.jpg" width="150">Auto Intensity Control Of Street Lights
										</a><p><span class="cart-price">
        
										<span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
										</span></p>
										</td>
							
										<td width="15px" id="cart-tab" class="plus"> +</td>
							
							
							
										<td width="180" id="cart-tab">
										<a href="#"></a><a href="#"><img src="images/5.jpg" width="150">Auto Intensity Control Of Street Lights
										</a><p><a href="#"></a><span class="cart-price">
        
										<span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
										</span></p>

										</td>
                              </tr>
							</tbody></table>
							<div class="combooffer">
									<span style="font-size: 17px;"> Combo offer
									<strike> <span class="WebRupee">Rs</span>2,000</span></strike><br/>
							        <span class="price"><span class="WebRupee"> Rs.</span>1,700</span>
							  
							  </div>
							</div>
							<div class="tab-pane" id="combo2">
								<div class="tab-pane active" id="Video">
								<table>
							<tbody><tr>
							<td width="100" id="cart-tab"><a href="#"><img src="images/6.jpg" width="150">Auto Intensity Control Of Street Lights
									</a><p><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
        </span></p>
		         

							</td>
							
							<td width="15px" id="cart-tab" class="plus"> +</td>
								<td width="100" id="cart-tab"><a href="#"><img src="images/6.jpg" width="150">Auto Intensity Control Of Street Lights
									</a><p><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
        </span></p>
		         

							</td>
							
							<td width="15px" id="cart-tab" class="plus"> +</td>
							
							
							<td width="100" id="cart-tab"><a href="#"></a><a href="#"><img src="images/5.jpg" width="150">Auto Intensity Control Of Street Lights
							</a><p><a href="#"></a><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
        </span></p>

							</td>
                              
							  
							  
							  
							  
						

							</tr>
							</tbody></table>
							<div class="combooffer">
							 <span style="font-size: 17px;"> Combo offer
							 <strike> <span class="WebRupee">Rs</span>2,000</span></strike><br/>
							                     <span class="price"><span class="WebRupee"> Rs.</span>1,700</span>
							  
							  </div>
							</div>
							</div>
							
							
							
							
						</div>
					</div>
					<div class="border-class">
			
			</div>
					<div class="access">
					<div class="block-title2">
					<div id="breadcrumb1">
	<ul>
		<div id="idian">
		<li><img src="images/16.png"/></li>
		<li> <span style="color:#bf6008;">Supported accessories for this category</span></strong></span> </li>
     
     </div>
   
    </ul>
  </div>
					
					</div>
					<div class="access_content">
						<table>
							<tbody><tr>
							<td width="190px" id="cart-tab"><a href="#"><img src="images/5.jpg" width="170px" height="100px">Auto Intensity Control Of Street Lights
									</a><p><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
        </span></p>
		         

							</td>
							
							
							
							
							
							<td width="190px" id="cart-tab"><a href="#"></a><a href="#"><img src="images/5.jpg" width="170px" height="100px">Auto Intensity Control Of Street Lights
							</a><p><a href="#"></a><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
        </span></p>

							</td>
                              <td width="190px" id="cart-tab"><a href="#"></a><a href="#"><img src="images/6.jpg" width="170px" height="100px">Auto Intensity Control Of Street Lights
							</a><p><a href="#"></a><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>1,000</span>            
        </span></p>

							</td>
							  
							  
							  
							  
						

							</tr>
							</tbody></table>
					 
					</div>
					
					
					
					</div>
					<div class="border-class">
			
					</div>
					
					<div id="product">
					</div>
					<div class="product_desc" >
					<div class="block-title3">
									<div id="breadcrumb1">
	<ul>
		<div id="idian">
		<li><img src="images/16.png"/></li>
		<li> <span style="color:#bf6008;">Project Description</span> </li>
     
     </div>
   
    </ul>
  </div>
					</div>
					
					<div class="box-content">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#Video1">Video</a></li>
							<li><a href="#Project_Abstract">Project Abstract</a></li>
							<li><a href="#Block_Diagram">Block Diagram</a></li>
							<li><a href="#Project_Review">Project's Review</a></li>
							<li><a href="#Download_Abstract">Download Abstract</a></li>
							
						</ul>
						 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="Video1">
								<h3>Video <small>small text</small></h3>
								<p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/DwySQ3rmRcE" frameborder="0" width="320" height="215"></iframe></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
							</div>
							<div class="tab-pane" id="Project_Abstract">
								<h3>Project Abstract <small>small text</small></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
							</div>
							<div class="tab-pane" id="Block_Diagram">
								<h3>Block Diagram <small>small text</small></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
							</div>
							<div class="tab-pane" id="Project_Review">
								<h3>Project's Review <small>small text</small></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
							</div>
							<div class="tab-pane" id="Download_Abstract">
								<h3>Download Abstract <small>small text</small></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
							</div>
							
						</div>
					</div>
					
					</div>
					
					<div id="addyourreview">
					</div>
					<div class="reviers" >
					<div class="block-title3">
				<div id="breadcrumb1">
	<ul>
		<div id="idian">
		<li><img src="images/16.png"/></li>
		<li> <span style="color:#bf6008;">Help others! Write Hi Projects review</span> </li>
     
     </div>
   
    </ul>
  </div>
					</div>
					
				

									
						</div>
					
					<div id="write_review">
					
						<div class="write">
							<form>
							<table id="login-tab"><tbody><tr>
							<td width="80" align="right;">Name</td><td width="20">:</td><td><input type="text"/></td></tr>
                           <tr> <td width="80" align="right;">Email</td><td>:</td><td><input type="text"/></td></tr>
  							<tr><td width="80" align="right;">Review Title</td><td>:</td><td><input type="text"/></td></tr>
							<tr><td width="80" align="right;" >Your Rating</td><td>:</td><td><div class="raty" style="padding-bottom: 8px;">  <?php echo $_POST['score']; ?></div></td></tr>
							<tr><td width="80" align="right;">Your Review</td><td>:</td><td><textarea></textarea></td></tr>
							
							<tr><td></td><td></td><td><div id="continue-button"><button name="submit" type="submit" id="contact-submit" tabindex="26">Send</button></div></td></tr>
							</tbody></table>
							</form>
							</div>
                                            
						</div>
						<div class="border-class">
			
					</div>
					<div id="review">
					</div>
					<div class="block-title3">

			<div id="breadcrumb2">
	<ul>
		<div id="idian">
		<li><img src="images/16.png"/></li>
		<li> <span style="color:#bf6008;">Reviews</span> </li>
     
     </div>
   
    </ul>
  </div>
					</div>
					
					<!--<div class="unit">
                        <div class="pp-big-star">3.9</div>
                  
					<div class="unit tpadding10 lpadding10 " style="float:right">
                        <span class="fk-font-11">Average Rating</span><br>
                                                    <span class="fk-font-11">Based on 132 ratings</span><br>
                                                
                                                            <div class="line tmargin5">
                                    <a class="fk-underline" data-tracking-id="certified" href="">
                                        Read certified buyer reviews</a>
                                </div>

                              </div>
                                            </div>-->
								
											
						
						<div class="customer_reviews" >
							
							<div class="review_list">
							
							  <div class="fk_reviews">
							  
							  <div class="unit size1of5 section1">
							  <div class="rating-box1">
									<div class="rating" style="width:80%"></div>
							</div>
							  
							  <div class="line">

                               <a class="" profile_name="" href="#">
                                    Rohit Sharma</a>
                                
                            </div>
							<div class="date line fk-font-small">

                                09 December 13         
							</div>
							  
							  
							  </div>
							  
							  <div class="comment_list">
							  <div class="line fk-font-normal bmargin5 dark-gray">
                            <strong>Auto Intensity Control Of Street Lights</strong>
                            </div>
							  <p class="line bmargin10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi<br>
 </p>
							  </div>
							  
							  </div>
							  
							  
							  
							
							</div>
						<div class="review_list">
							
							  <div class="fk_reviews">
							  
							  <div class="unit1 size1of5 section1">
							  <div class="rating-box1">
									<div class="rating" style="width:80%"></div>
							</div>
							  
							  <div class="line">

                               <a class="" profile_name="" href="#">
                                    Rohit Sharma</a>
                                
                            </div>
							<div class="date line fk-font-small">

                                09 December 13         
							</div>
							  
							  
							  </div>
							  
							  <div class="comment_list">
							  <div class="line fk-font-normal bmargin5 dark-gray">
                            <strong>
                                Auto Intensity Control Of Street Lights                            </strong>
                            </div>
							  <p class="line bmargin10">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi<br>
 </p>
							  </div>
							  
							  </div>
							  
							  
							  
							
							</div>
					
						
						</div>
				
			
					
			</div>
<div class="col-right sidebar">
<div class="block block-related">
<div class="mrp">
<ol class="mrp_buy_list">
	<li><span>MRP</span><span class="price"><span class="WebRupee"> Rs. </span>8,799</span> </li>
	<li>OFFER: 1400 2% <li>
	<li><a id="OpenDialog" href="#"><img src="images/b2.jpg"></a><li>
	<li><img src="images/icon-add-to-wishlist2.png"/><a href="mywishlistnew.php"> Add Your Wishlist</a></li>
</div>
<div class="block block-related1">
<div class="block-title">
        <strong><span style="color:#FFF;">Similar Products</span></strong>
    </div>
	<ol class="mini-products-list" id="block-related">
                    <li class="item odd">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/5.jpg" width="75" height="75" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                 <span class="regular-price" id="product-price-438-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>8,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    <li class="item even">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/6.jpg" width="75" height="75" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-530-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>8,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    
                    
                </ol>
</div>
<div class="block block-related2">
<div class="block-title">
        <strong><span style="color:#FFF;">More Product to Sale</span></strong>
    </div>
	<ol class="mini-products-list" id="block-related">
                    <li class="item odd">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/5.jpg" width="75" height="75" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-438-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>8,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    <li class="item even">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/6.jpg" width="75" height="75" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-530-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>8,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    
                    
                </ol>
</div>
<!--<div class="block-title">
        <strong><span>Related Products</span></strong>
    </div>

<div class="block-content">
        
        <ol class="mini-products-list" id="block-related">
                    <li class="item odd">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/image2.jpg" width="75" height="119" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-438-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>8,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    <li class="item even">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/image2.jpg" width="75" height="119" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-530-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>8,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    <li class="item odd">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/image2.jpg" width="75" height="119" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-558-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>9,799</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                    <li class="item last even">
               
                <div class="product">
                    <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="images/image2.jpg" width="75" height="119" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                    <div class="product-details">
                        <p class="product-name"><a href="#">Lorem ipsum dolor sit amet, quisque lacinia nisi in neque.</a></p>
                        <div class="wapper-related">
						

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-393-related">
                    <span class="price"><span class="WebRupee"> Rs. </span>11,899</span>                </span>
                        
        </div>

                       
						 						</div>
                    </div>
                </div>
            </li>
                </ol>
       
    </div>-->
		
	</div>
	</div>		
	</div>
							
						
				
</div>	

<?php include('footer.php'); ?>
	<!--<div id="footer_wrapper">
    <div id="footer"> 
    	<div class="col_allw300">
        	<h3>E-Commerce</h3>
            <ul class="footer_list">
            	<li class="datalist">Platform Overview</li>
                <li class="datalist">Technology</li>
                <li class="datalist">Shopping Experience</li>
                <li class="datalist">Store Management</li>
				<li class="datalist">Analytics & Reporting</li>                		
            </ul>
        </div>
    	<div class="col_allw300">
        	<h3>Comapany</h3>
            <ul class="footer_list">
                <li class="datalist">About</li>            
            	<li class="datalist">Careers</li>
				<li class="datalist">Contact</li>
								<li class="datalist">Blog</li>

            </ul>
        </div>
		<div class="col_allw300">
        	<h3>Follow Us</h3>
            <ul class="footer_list">
                <li class="datalist">Newsletter</li>            
            	<li class="datalist"><a href="#">Linkedin</li>
                <li class="datalist"><a href="#">Facebook</li>
                <li class="datalist"><a href="#">Twitter</li>
               
            </ul>
        </div>
    	       <div class="col_allw300">
        	<h3>Get Started</h3>
            <ul class="footer_list">
                <li class="datalist">Get A Quote</li>            
            	<li class="datalist"><a href="#" target="_parent">Talk to our sales team-</a></li>               
                <li class="datalist"><a href="#" target="_parent">contact@projectsguide.com </a></li>
				
            </ul>
        </div>
    
        <div class="cleaner"></div>
    
    </div>

  <div id="footer_menu">
    <div id="footer2"> 
    	<div class="col_allw300_menu">    
        	<h3>Project Guide</h3>
		
            <ul class="footer_list_menu">
    <li><a href="Terms.php">Policies :Terms & Conditions |</a></li>
                <li><a href="Terms.php">Privacy Policy  |</a></li>   			        		
            </ul>   
    </div>
	
   </div>
    <div id="footer2"> 
    	<div class="col_allw300_menu">        
            <ul class="footer_list_menu">
            	
                <li><a href="Aboutus.php">About Us  |</a></li>
                <li><a href="FAQ.php">FAQ |</a></li>
				<li><a href="Testimonials.php">Testimonials |</a></li>     
                <li><a href="Careers.php">Careers  |</a></li>
				<li><a href="feedback.php">Feedback  |</a></li> 
                <li><a href="Sitemap.php">Sitemap |</a></li>
				<li><a href="Contactus.php">Contact Us |</a></li>    
                				        		
            </ul>   

    </div>
	<div id="copyright">    	
            Copyright ©2013 Projects Guide.com 
    </div>
   </div>
</div>
</div>-->

</div>



   <span>
	<a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
<span>


    	<script>
 $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true}); 

		$("#zoom_03").bind("click", function(e) {  
		var ez =   $('#zoom_03').data('elevateZoom');	
		$.fancybox(ez.getGalleryList());
		return false;
		});
  
  </script>
	<!-- external javascript
	================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	
  
</body>
</html>