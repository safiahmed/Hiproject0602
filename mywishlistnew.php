<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Home</title>
<link href="css/knowmore1.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
<link rel="stylesheet" href="css/shaili.css" /> 
<link rel="stylesheet" href="css/bootstrap-cerulean1.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
<link href="css/charisma-app1.css" rel="stylesheet">
		<script src='js/jquery-1.8.3.min.js'></script>
		<script src='js/jquery.elevatezoom.js'></script>
		<script src='js/jquery.elevateZoom-3.0.8.min.js'></script>

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
 .active img{border:1px dotted #333 !important;}
</style>
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

<div id="mrova-img-control" style="margin-top: -84px; top: 50%;"></div>
<div id="wrapper">
<div id="page">
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
			<li><a href="#">Our Expertise</a></li>
			<li><a href="category.php">Project Kits</a></li>
			<li><a href="#">Learning Material</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Dealers Network</a></li>
			<li><a href="#">Support</a></li>
			<li><a href="Contactus.php">Contact </a></li>
			<li><input type="search" placeholder="Enter Search terms"></li>
		</ul>
	</div>

	</div>
	<div class="col2-left-layout1">
	
</div>		
	<div class="col-main">
	
			<div id="message_view">
			
			<div class="page-title title-buttons">
        <h1>Shopping Cart</h1> 
					</div>
			
			</div>
		
		</div>
	<div class="project_kit">
				
			
			<div class="box-content">
						<ul class="nav nav-tabs" id="myTab">
							<li><a href="#Project_Abstract">My Wishlist</a></li>
							<li class="active"><a href="#Video">My Shopping Cart</a></li>
							
							
						</ul>
						 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane" id="Video">
							<div id="proceed"><button type="submit" title="Update Shopping Cart" id="newbutton"><span><span>Proceed to Checkout</span></span></button></div>
							<p><font color="white">jjkhj</font></p>
							   <div id="for-table">        <table id="shopping-cart-table" class="data-table cart-table" border="1">
                <colgroup><col width="1">
				<col width="1">
                <col>
                
                                        <col width="1">
                                        <col width="1">
                            <col width="1">
                                        <col width="1">

                            </colgroup><thead>
                    <tr class="newheader1" bgcolor="#d5d4d2" height="30px;">
                       
                        <th rowspan="1" width="500" align="center" >Item Description</th>
                        <th rowspan="1" width="140" align="center"><span class="nobr">Unit Price</span></th>
						<th rowspan="1" width="140" align="center"><span class="nobr">Avalibility</span></th>
						<th rowspan="1" width="160" align="center"><span class="nobr">Expected Delivery</span></th>
                        
                        						<!--<th rowspan="1" class="a-center" width="100">Edit</th>-->
                       
                        
                    </tr>
                                    </thead>
                
                <tbody>
                                    <tr class="first last odd">
	<td class="cart-table-img" style="padding: 10px 40px;"><p><a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis" class="product-image"><img src="images/sample.png" width="100" height="100" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis"></a>
	<div id="rem" >Auto Intensity Control Of Street Lights</p>
		<p><a href="#">Move to cart</a> | <a href="#">Remove</p></a></div></td>

    <td align="center">
        <h2 class="product-name">
		<span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span>
                </h2>
                
                                                </td>
    
    	<!--<td class="a-center">
                <a href="#" title="Edit item parameters">Edit</a>
            </td>-->
        <td class="a-right" align="center">
                    
Out of stock

            </td>
            <td class="a-center" align="center">
			In 3-5 buisness days
    </td>
        
           
</tr>
                     </tbody>
            </table></div>

							<div id="cart">
							<!--<h3><p><img src="images/cart.png"/>your shopping cart is empty.</h3></p>
							<p>You can add product to your cart by browsing through our collection of electronics.</p>
							<p>Go to &nbsp;<a href="#">Home Page</a></p>-->
							<p></p>
							<p><span style="color:rgb(138, 134, 134);font-size:16px;">Product Sellers</span></p>
							<hr>
							</div>
							<table>
							<tr>
							<td width="180" id="cart-tab"><a href="#"><img src="images/image1.png" width="150"/>Auto Intensity Control Of Street Lights
									</a><p><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span></p>

							</td>
							<td width="180" id="cart-tab"><a href="#"><a href="#"><img src="images/image1.png" width="150"/>Auto Intensity Control Of Street Lights
							<p></a><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span></p>

							</td>
                              <td width="180" id="cart-tab"><a href="#"><img src="images/image1.png" width="150"/>Auto Intensity Control Of Street Lights
							  </a><p><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span></p>
</td>
							<td width="180" id="cart-tab"><a href="#"><img src="images/image1.png" width="150"/>Auto Intensity Control Of Street Lightssss
							</a><p><span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span></p>
</td>

							</tr>
							</table>
							</div>
							<div class="tab-pane active" id="Project_Abstract">
							<form action="#" method="post">
        <fieldset>
            <table id="shopping-cart-table" class="data-table cart-table" border="1">
                <colgroup><col width="1">
				<col width="1">
                <col>
                
                                        <col width="1">
                                        <col width="1">
                            <col width="1">
                                        <col width="1">

                            </colgroup><thead>
                    <tr class="newheader1" bgcolor="#d5d4d2" height="30px;">
                       
                        <th rowspan="1" width="500" align="center" >Item Description</th>
                        <th rowspan="1" width="140" align="center"><span class="nobr">Unit Price</span></th>
						<th rowspan="1" width="140" align="center"><span class="nobr">Avalibility</span></th>
						<th rowspan="1" width="160" align="center"><span class="nobr">Expected Delivery</span></th>
                        
                        						<!--<th rowspan="1" class="a-center" width="100">Edit</th>-->
                       
                        
                    </tr>
                                    </thead>
                
                <tbody>
                                    <tr class="first last odd">
	<td class="cart-table-img" style="padding: 10px 40px;"><p><a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis" class="product-image"><img src="images/sample.png" width="100" height="100" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis"></a>
	<div id="rem" >Auto Intensity Control Of Street Lights</p>
		<p><a href="#Video">Move to cart</a> | <a href="#">Remove</p></a></div></td>

    <td align="center">
        <h2 class="product-name">
		<span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span>
                </h2>
                
                                                </td>
    
    	<!--<td class="a-center">
                <a href="#" title="Edit item parameters">Edit</a>
            </td>-->
        <td class="a-right" align="center">
                    
Out of stock

            </td>
            <td class="a-center" align="center">
			In 3-5 buisness days
    </td>
        
           
</tr>
  <tr class="first last odd">
	<td class="cart-table-img" style="padding: 10px 40px;"><p><a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis" class="product-image"><img src="images/sample.png" width="100" height="100" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis"></a>
	<div id="rem" >Auto Intensity Control Of Street Lights</p>
	<p><a href="#video">Move to cart</a> | <a href="#">Remove</p></a></div></td>
    <td align="center">
        <h2 class="product-name">
		<span class="cart-price">
        
                   <span class="price"><span class="WebRupee"> Rs.</span>12,599</span>            
        </span>
                </h2>
                
                                                </td>
    
    	<!--<td class="a-center">
                <a href="#" title="Edit item parameters">Edit</a>
            </td>-->
        <td class="a-right" align="center">
                    
Out of stock

            </td align="center">
            <td class="a-center" align="center">
			In 3-5 buisness days
    </td>
        
           
</tr>
                                </tbody>
            </table>
         
        </fieldset>
    </form>

							</div>
							
							
							
							
						</div>
					</div>

			</div>
	<div id="footer_wrapper">
    <div id="footer"> 
    	<div class="col_allw300">
        	<h3>E-Commerce</h3>
            <ul class="footer_list">
            	<li class="datalist">Platform Overview</li>
                <li href="datalist">Technology</a></li>
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
</div>
  <div id="footer_menu">
    <div id="footer2"> 
    	<div class="col_allw300_menu">    
        	<h3>Project Guide</h3>
		
            <ul class="footer_list_menu">
    <li><a href="Terms.html">Policies :Terms & Conditions |</a></li>
                <li><a href="#">Privacy Policy  |</a></li>   			        		
            </ul>   
    </div>
	
   </div>
    <div id="footer2"> 
    	<div class="col_allw300_menu">        
            <ul class="footer_list_menu">
            	
                <li><a href="Aboutus1.html">About Us  |</a></li>
                <li><a href="contact_us.php">FAQ |</a></li>
				<li><a href="terms of use.php">Testimonials |</a></li>     
                <li><a href="contact_us.php">Careers  |</a></li>
				<li><a href="terms of use.php">Feedback  |</a></li> 
                <li><a href="contact_us.php">Sitemap |</a></li>
				<li><a href="Contactus.php">Contact Us |</a></li>    
                				        		
            </ul>   

    </div>
	<div id="copyright">    	
            Copyright ©2013 Projects Guide.com 
    </div>
   </div>
</div>
</div>

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

	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-butt on.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->

	

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
</body>
</html>
