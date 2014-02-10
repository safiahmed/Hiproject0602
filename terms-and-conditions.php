<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <?php include('meta.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiprojects| Terms & Conditions</title>
<link href="css/terms.css" rel="stylesheet" type="text/css" media="screen" />
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

<?php include'feedback.php '; ?>
<div id="wrapper">

   <?php include('header.php'); ?>


<div id="page">
<div class="col-main">
                                            <div class="page-title">
        <h1>Terms and Conditions</h1>
    </div>
<div class="std">
<table class="mater-black" style="width: 100%;" border="0" cellspacing="2" cellpadding="5">
<tbody>
<tr>
<td colspan="2">
<div align="justify" style="color:gray">Unless otherwise explicitly agreed in writing, the conditions as set out below apply to each and every transaction for the sale of goods and materials and/or design services by Edgefx to a purchaser of Goods and/or Services.&nbsp; <br> <br> These conditions shall apply to all orders placed with Edgefx by the purchaser. Acceptance by Edgefx of any order is conditional upon acceptance by the Purchaser of these conditions which shall override all other terms and conditions inconsistent herewith, whether expressed, implied or otherwise including terms, conditions or stipulations contained in the Purchaser's purchase order or other form of writing or otherwise stipulated by the Purchaser and with are at variance with or additional to these conditions. The same shall not be binding upon Edgefx unless specifically accepted and signed by Edgefx.</div>
<div align="justify">&nbsp;</div>
</td>
</tr>
<tr>
<td width="5%"><img src="images/abt.png" alt="" width="16" height="16"></td>
<td width="93%">
<div align="justify" style="color:gray">Risk of loss due to damage or destruction of Edgefx’s Products shall be the responsibility of the Purchaser after delivery to the carrier for shipment. Edgefx will select the shipper unless Purchaser requests a reasonable alternative. All orders are subject to acceptance by Edgefx.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td>
<div align="justify" style="color:gray">Purchaser shall not, at any time, directly or indirectly, use any intellectual Property of Edgefx, or engage or attempt to engage or assist any other Person to use any intellectual Property of Edgefx. Purchaser specifically undertakes and agrees that Purchaser shall not (and shall ensure that its Affiliates do not), “reverse engineer”, adapt, or modify the Products, the Spares or any parts thereof or their components, or make any attempts to do so whether for its own benefit or that of any third party, or assist any third party in doing the same, and hereby expressly waives any rights that it may have under applicable law in this regard.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td>
<div align="justify" style="color:gray">It is agreed and understood that all right, title and interest in and to the Trademarks are and shall at all times remain the exclusive property of Edgefx.</div>
</td>
</tr>
<tr>
<td colspan="2">
<div align="justify">&nbsp;</div>
<div align="justify" style="color:gray">Purchaser shall have no claims or rights in respect of any trademark and/or trade name / brand name owned, possessed or used by Edgefx including the Trademarks, or the goodwill associated therewith, and Purchaser hereby agrees and acknowledges that it does not and shall not acquire any rights in respect thereof.</div>
<div align="justify">&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<table class="mater-black" style="width: 100%;" border="0" cellspacing="2" cellpadding="4">
<tbody>
<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px">1.</td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>Indemnification</strong></td>
</tr>
<tr>
<td width="5%">&nbsp;</td>
<td width="95%">&nbsp;</td>
</tr>
<tr>
<td width="4%"><img src="images/abt.png" alt="" width="16" height="16"></td>
<td width="95%">
<div align="justify" style="color:gray">Purchaser agrees to protect Edgefx and hold Edgefx harmless from any loss or claim arising out of the negligence of Purchaser in the installation, use of Edgefx’s Products.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td>
<div align="justify" style="color:gray">“Confidential Information” as used in this shall mean any and all technical and non-technical information including but not limited to legal and non-legal opinions, financial details, patent, copyright, trade secret, and proprietary information, techniques, sketches, drawings, models, inventions, know-how, processes, apparatus, equipment, algorithms, software, software programs, software source documents, Application Program Interface (API), designs, drawings, sketches and formulae related to the products and services of Edgefx, and includes, without limitation, their respective information concerning development, design details and specifications, engineering, information and documentation.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td>
<div align="justify" style="color:gray">Governing Law: This contract shall be construed and interpreted in accordance with the laws of Republic of India and the courts of Hyderabad, India hall have exclusive and sole jurisdiction over this Agreement.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td>
<div align="justify" style="color:gray">Acceptance of a purchase order by Edgefx cannot be construed or implied to create an obligation on Edgefx's part to accept, subsequent purchase orders for any of the goods and/or services.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px">2.</td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>Price</strong></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td>
<div align="justify" style="color:gray">The prices of the Goods or Services are the prices contained in Edgefx non-binding quotation or is the current list price as displayed on the web site. However this price is exclusive of Taxes, delivery, packaging, carriage, insurance, custom duties which may be charged.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td style="color:gray">
<div align="justify" style="color:gray">Edgefx reserves the right to adjust the price at any time.<br> For all international users of Edgefx pricing should be strictly be in USD/EURO/GBP. If checked out in<span class="WebRupee"> Rs. </span>the order is invalid. <br clear="left"> &nbsp;</div>
</td>
</tr>
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td bgcolor="#FFFFFF">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#f0f0f0" style="color:rgb(32, 110, 172);text-align:center;" height="30px">3.</td>
<td style="text-align: left;color:rgb(32, 110, 172);" bgcolor="#f0f0f0"><strong>Delivery</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td style="color:gray">
<div align="justify">Delivery charges are applicable at actual cost to all orders unless picked up directly from one of our premises. Delivery occurs when the Goods are handed over to the Purchaser or carrier company or delivery representative. Delivery dates quoted are approximate only and Edgefx will not be liable for any delay in the delivery of the Goods.</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><img src="images/abt.png" alt="" width="16" height="16"></td>
<td style="color:gray">
<div align="justify" >If the Purchaser fails to take delivery of the Goods or fails to give adequate delivery instructions &amp; it returns to Edgefx then Edgefx reserves rights to decide whether to resend parcel or not.<br> Any claim by the Purchaser for non or incorrect delivery must be advised to Edgefx within 10 days of receipt of the goods.</div>
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