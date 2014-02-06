<?php ob_start();?>
<?php
if(isset($_POST['login']))
{

	include_once("admin/connect.php");
	
	$myemail=$_POST['login_email']; 
	$mypassword=$_POST['login_password']; 

	
// To protect MySQL injection (more detail about MySQL injection)
	$myemail = stripslashes($myemail);
	$mypassword = stripslashes($mypassword);
	$myemail = mysql_real_escape_string($myemail);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM register WHERE email='$myemail' and password='$mypassword'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myemail and $mypassword, table row must be 1 row
	if($count){
	session_start();
	$_SESSION['userName'] = $myemail;
    //echo "<br/>";
	//echo "login success";
	?>
		<script language="javascript" type="text/javascript"> 
						window.location = 'innerpage.php'; 
						alert('Login successful'); 
							
		</script> 
		<?php
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	//session_register("myemail");
	//session_register("mypassword"); 
	
	//header("location:innerpage.php");
	}
	else {
	//echo "<br />";
	//echo "Wrong Username or Password";
	?>
		<script language="javascript" type="text/javascript"> 
						//window.location = 'index.php'; 
						alert('wrong username or password'); 
						window.location = 'hilogin.php';
		</script> 
		<?php
	}
}
?>
<?php ob_flush();?>