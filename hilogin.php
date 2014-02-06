
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hi Projects | Home</title>
<link href="css/login.css" rel="stylesheet" type="text/css" media="screen" />
   <link href="js/slider.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/shaili.css" /> 
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/bootstrap1.css" />
<script type="text/javascript">
	Cufon.replace('.logo h1', {fontFamily: 'FontSoupGerman'});
	Cufon.replace('.logo span', {fontFamily: 'Gotham Rounded Medium'});
	Cufon.replace('h2 strong', {fontFamily: 'Akzidenz-Grotesk BQ'});
	Cufon.replace('h2 span', {fontFamily: 'Akzidenz-Grotesk BQ'});
</script>
<script type="text/javascript">
    function confirmPass() {
        var pass = document.getElementById("pass").value
        var confPass = document.getElementById("c_pass").value
        if(!pass =="")
		{
		if(pass != confPass) {
            
			document.getElementById('error').innerHTML="wrong password";
          
        }
		else{
			document.getElementById('error').innerHTML="";
		}
		}
		}
</script>


</head>
<body class="bgimage">
<a href="index.php" title="Close" class="close">X</a>
<div class="bgimg">	 
<div class="h395-w1081">
<div class="uppersection">
			
			<div class="logo"><h1>Welcome to hi<a style="font-size:20px; color:#c2c2c1;font-family:Kozuka Gothic;">projects</a>.<a style="font-size:12px;color:#c2c2c1;">in</a></h1>
			<span style="color:#c2c2c1;">' Do It Yourself ' Project kits for engineering students designed by experts.</span>  <br/>
            <span style="color:#c2c2c1;">Accepted by institutes, they are educational, practical, and fun, and you can benefit from it for years to come.</span>
</div>		
		</div>
</div>
	 <div class="h395-w1080">
	 
    <div class="middle_boxes">
				<div class="middle_box1">
					<div class="col_allw3008">
        	<div class="top-sidebar">
			
					<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="sendmail.php" method="post">
			<h2>Register</h2><font color="#FF0000" size="4px">*</font><span style="color:red; margin-top:10px;">Are compulsory fields</span>
			<div class="top-div">
				<label>
					<span class="span_width">Name <font color="#FF0000" size="2px">*</font></span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="name" required >
				</label>
			</div>
			<div class="top-div">
				<label>
					<span class="span_width">College <font color="#FF0000" size="2px">*</font></span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="collage" required >
				</label>
			</div>
			<!--<div>
				<label>
					<span>Branch</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" name="branch" required >
				</label>
			</div>-->
			<div class="top-div">
				<label>
					<span class="span_width">Email <font color="#FF0000" size="2px">*</font></span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="email" required>
				</label>
			</div>
			<div class="top-div">
				<label>
					<span class="span_width">Password <font color="#FF0000" size="2px">*</font></span>
					<input id="pass" placeholder="Please enter the password" type="password" tabindex="2" name="passw"  required>
				</label>
			</div>
			<div class="top-div">
				<label>
				<div class="error_span">
					<span style="margin:0px;">Confirm Password <font color="#FF0000" size="2px">*</font></span><span id="error" style="color:red;margin:0px;"></span>
				</div>
					<input id="c_pass" placeholder="Please re-enter  the password" type="password" tabindex="2" name="c_passw"  onblur="confirmPass()" required>
				</label>
				
			</div>
			<div class="top-div">
				<label>
					<span class="span_width">Mobile <font color="#FF0000" size="2px">*</font></span>
					<input placeholder="Please enter your number" type="tel" tabindex="3" name="tel" required>
				</label>
			</div>
			<!--<div class="top-div">
				
				<label>
					<div class="span_width" style="float: left; margin-right: 5px;">Topics of Interest</div>
					<textarea placeholder="Include all Your requirements" tabindex="5" name="message" required></textarea>
				</label>
			</div>-->
			<!--<div>
				<label>
					<span style="text-align:justify;">Have Your Own Idea? Let us know,Our Experts will be in touch soon</span>
				</label>
			</div>-->
			<div>
				<label>
					<span style="text-align:justify;">Do You Want Our Experts to call you :    &nbsp;&nbsp;&nbsp; <input placeholder=".........................." type="checkbox" tabindex="4" name="check"></span>
					
				</label>
			</div>
			<!--<div>
				<label>
					<span style="text-align:justify;">Facebook/Google Login/Yahoo </span>
				</label>
			</div>-->
			
			<div>
				<label>
					<span style="text-align:justify;">Upload file: ( Formats: PDF / doc / txt ) </span>
					<input placeholder=".........................." type="file" tabindex="4" name="file" >
					
				</label>
			</div>
			
			<div class="top-div">
				<button name="submit" type="submit" id="contact-submit">Submit</button>
			</div>
		</form>
				</div>
		</div>
			
				</div>
				<div class="middle_box2">
	        	<div class="top-sidebar">
					<form id="contact-form" name="myemailform1" action="login.php" method="post">
			<h2>Already Registered? Login</h2><font color="#FF0000" size="4px">*</font><span style="color:red; margin-top:10px;">Are compulsory fields</span>
			
			
			
			<div class="top-div">
				<label>
					<span class="span_width">Email-id <font color="#FF0000" size="2px">*</font></span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" name="login_email" required>
				</label>
			</div>
			<div class="top-div">
				<label>
					<span class="span_width">Password <font color="#FF0000" size="2px">*</font></span>
					<input placeholder="Please enter your number" type="password" tabindex="3" name="login_password" required>
				</label>
			</div>
			<br/>
			
			<div>
				<button type="submit" id="contact-submit" name="login">Submit</button>
			</div>	<br/>
			<div class="forgot" style="font-size:14px;">
				<a>Forgot Your Password?</a>
			</div><br/><br/><br/>
			<div>
			<a href="https://www.facebook.com/pages/Hiprojects/262295280589504"><img src="images/FacebookLogo.png"/></a>
			
			</div>
		</form>
				</div>
            	</div>

										
						
					</div> 
					</div>
					<div style="width:1000px; margin:auto;">
						<div style="width:400px; margin:auto;">
							
						</div>
					</div>

</div>
</body>
</html>
