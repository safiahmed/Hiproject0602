<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hi Projects | Innerpage</title>
<link href="css/innerlogin.css" rel="stylesheet" type="text/css" media="screen" />
   <link href="js/slider.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/shaili.css" /> 
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/bootstrap.css" />
<script type="text/javascript">
	Cufon.replace('.logo h1', {fontFamily: 'FontSoupGerman'});
	Cufon.replace('.logo span', {fontFamily: 'Gotham Rounded Medium'});
	Cufon.replace('h2 strong', {fontFamily: 'Akzidenz-Grotesk BQ'});
	Cufon.replace('h2 span', {fontFamily: 'Akzidenz-Grotesk BQ'});
</script>
</head>
<body>
<?php ob_start();?>	
<?php
include_once("admin/connect.php");
session_start();
if(isset($_SESSION['userName'])) {
$leader_email= $_SESSION['userName'];
}

$catgryquery="SELECT * FROM members WHERE  registrant_email = '$leader_email'";
$queryrs=mysql_query($catgryquery);
								//echo ($queryrs);
$editdata = mysql_fetch_array($queryrs);
?>
<?php ob_flush();?>
<div class="h395-w1081">
<div class="uppersection">
			<div ><!--start of submit button-->
							<a href="logout.php"><button name="log_out" type="button" class="logout" >logout</button></a>
			</div>	<!--end of submitt -->
			<div class="logo"><h1>Welcome to hi<a style="font-size:20px; color:#c2c2c1;font-family:Kozuka Gothic;">projects</a>.<a style="font-size:12px;color:#c2c2c1;">in</a></h1>
			<span style="color:#c2c2c1;">' Do It Yourself ' Project kits for engineering students designed by experts.</span>  <br/>
            <span style="color:#c2c2c1;">Accepted by institutes, they are educational, practical, and fun, and you can benefit from it for years to come.</span>
</div>	
			
		</div>
</div>
	 <div class="h395-w1080">
		
		<div class="middle_boxes">
		<div class="box">
			<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">
		
				<div class="middle_box1">
				<div class="top-sidebar">
				<!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">-->
			<h2>1.Group member</h2>
			<div>
				<label>
					<span>Name</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="name1" required value="<?php echo $editdata[2]; ?>" >
				</label>
			</div>
			
			<div>
				<label>
					<span>Email</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email1" required value="<?php echo $editdata[3]; ?>">
				</label>
			</div>
			<div>
				<label>
					<span>Phone</span>
					<input placeholder="Please enter your number" type="tel" tabindex="3" name="tel1" required value="<?php echo $editdata[4]; ?>">
				</label>
			</div>
			
			
			<!--<div>
				<button name="submit1" type="submit">Submit</button>
			</div>-->
		<!--</form>-->
		</div>
				</div>
				
				<div class="middle_box2">
					<div class="top-sidebar">
			<!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">-->
			<h2>2.Group member</h2>
			<div>
				<label>
					<span>Name</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="name2" value="<?php echo $editdata[5]; ?>">
				</label>
			</div>
			
			<div>
				<label>
					<span>Email</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email2" value="<?php echo $editdata[6]; ?>">
				</label>
			</div>
			<div>
				<label>
					<span>Phone</span>
					<input placeholder="Please enter your number" type="tel" tabindex="3" name="tel2" value="<?php echo $editdata[7]; ?>">
				</label>
			</div>
			
			
			<!--<div>
				<button name="submit2" type="submit" >Submit</button>
			</div>-->
		<!--</form>-->
		</div>
            	</div>
				
					<div>	
							
								</div>	
							
				
			<div class="middle_box3">
					<div class="top-sidebar">
			<!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="sendmail.php" method="post">-->
			<h2>3.Group member</h2>
			<div>
				<label>
					<span>Name</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="name3" value="<?php echo $editdata[8]; ?>">
				</label>
			</div>
			
			<div>
				<label>
					<span>Email</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email3" value="<?php echo $editdata[9]; ?>">
				</label>
			</div>
			<div>
				<label>
					<span>Phone</span>
					<input placeholder="Please enter your number" type="tel" tabindex="3" name="tel3" value="<?php echo $editdata[10]; ?>">
				</label>
			</div>
			
			
			<!--<div>
				<button name="submit" type="submit" id="contact-submit">Submit</button>
			</div>-->
		<!--</form>-->
		</div>
				</div>
				<div class="middle_box4">
					<div class="top-sidebar">
		<!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="sendmail.php" method="post">-->
			<h2>4.Group member</h2>
			<div>
				<label>
					<span>Name</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="name4" value="<?php echo $editdata[11]; ?>">
				</label>
			</div>
			
			<div>
				<label>
					<span>Email</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email4" value="<?php echo $editdata[12]; ?>">
				</label>
			</div>
			<div>
				<label>
					<span>Phone</span>
					<input placeholder="Please enter your number" type="tel" tabindex="3" name="tel4" value="<?php echo $editdata[13]; ?>">
				</label>
			</div>
			
			
			<!--<div>
				<button name="submit" type="submit" id="contact-submit">Submit</button>
			</div>-->
		<!--</form>-->
		</div>
            	</div>
				
					<div>	
							
								</div>	
							
					<div><!--start of submit button-->
							<button name="submit1" type="submit" >Submit</button>
					</div>	<!--end of submitt -->
				</div>
		<div class="middle_box5">
		<h1>	</h1>
		<div class="top-sidebar">
				
			<h2>Referral Program</h2>
			<p class="justify">Get Attractive gifts on referring Batch's</p>
						<p class="justify">Limited offer</p>

			<table id="customers">
				<tr>
				  <th>Refer</th>
				  <th>Get</th>

				</tr>
				<tr>
				<td>2 Projects</td>
				<td>Pen Drive</td>

				</tr>
				<tr class="alt">
				<td>5 Projects</td>
				<td>Bluetooth Headset</td>

				</tr>
				<tr>
				<td>10 Projects</td>
				<td>Mobile</td>

				</tr>
				<tr class="alt">
				<td>15 Projects</td>
				<td>Smart Phone</td>

				</tr>
				<tr>
				<td>20 Projects</td>
				<td>Android Tablet</td>

				</tr>
				<tr class="alt">
				<td>25 Projects</td>
				<td>Laptop</td>
				</tr>
				</table>			
						
				
				
				
			</div>
		</div>
			<div class="middle_box5">
			
			<h1>	</h1>
			<div class="top-sidebar">
			<h2>Topics of Interest</h2>
			<div class="top-div" style="339px">
				
				<label>
					<!--<div class="span_width" style="float: left; margin-right: 5px; font-size:13px;"><b>Topics of Interest</b></div>-->
					<textarea placeholder="Include all Your requirements" tabindex="5" name="message" required></textarea>
				</label>
			</div>
			<div>
				<label>
					<span style="text-align:justify;font-size:13px;">Have Your Own Idea? Let us know,Our Experts will be in touch soon</span>
				</label>
			</div>
			<br/><br/><br/>
				<p class="justify"><span style="text-align:justify;font-size:13px; margin:10px 0px; color:red;"><b>For Bulk orders Please Contact on:<br/>+91-7353762496</b></span>
					</p>
			</div>
			</form>
			</div>
			
		</div>
   </div>
  <div id="footer_menu">
    <div id="footer2"> 
    	<div class="col_allw300_menu">        
            <ul class="footer_list_menu">
            <li class="current_page_item" ><a href="index.html"></a></li>
             				        		
            </ul>   		
    </div>
	<div id="copyright_wrapper">
	<div id="copyright">    	
            Copyright &copy; 2013 Hi Projects ,All rights reserved   
    </div>
	</div>
	<div class="sidebar">
	 <a href="#"><img src="images/socialbutton.jpg" title="linkdin" alt="linkdin" /></a>					
                    <a href="#"><img src="images/socialbutton2.jpg" title="facebook" alt="facebook" /></a>	
					
	</div>
	<div id="POWERED">
	<div id="POWERED2">    	
     Powered by <a href="http://www.mangium.com/website/index.php">Mangium</a>
    </div>
	</div>
   </div>   
</div>
</body>
</html>
