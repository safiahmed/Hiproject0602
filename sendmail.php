<?php ob_start();?>

<?php
include_once("admin/connect.php");
		
	if (isset($_POST['email'])){
	$myemail=$_POST['email']; 
	$myemail = stripslashes($myemail);
	$email=mysql_real_escape_string($myemail);
	$sql = "SELECT * FROM register WHERE email='$myemail'";
	$select=mysql_query($sql) or die("fail");
	$row = mysql_num_rows($select);
	if ($row >0) {?>
		<script language="javascript" type="text/javascript"> 
							alert('email already exits'); 
							window.location = 'hilogin.php'; 
		</script> 
		<?php
   
	exit();
}
else{ 
}
}
if(isset($_POST['submit']))
{
		//mail
		
		$field_name = $_POST['name']; 
		$from_email = $_POST['email'];
		$collage = $_POST['collage'];
		//$branch = $_POST['branch'];
		$mobile = $_POST['tel'];
		
       	$subject = 'Welcome To Hiprojects '.$field_name; 
		$from = 'Hiprojects';
						
		$body_message = '<table border="0" cellpadding="0" cellspacing="0" align="center" width="600"><tr>';
		$body_message .= '<td width="20"></td>';				
		$body_message .= '<td width="560"><br /><br />';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 14px; color: red; margin-bottom:20px;"><b>Welcome To Hiprojects</b></p>';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px;  margin-bottom:20px;">You have been successfully registered</p>';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px;  margin-bottom:20px;"><b>we have project kits for engineering students designed by experts. Accepted by institutes, they are educational, practical, and fun, and you can benefit from it for years to come.';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px; color: brown; margin-bottom:20px;">Why choose us</p>';
		$body_message .= '<ul><li style="font-family: Trebuchet MS; font-size: 13px; color: brown; margin-bottom:20px;">We have wide range of projects</li><li style="font-family: Trebuchet MS; font-size: 13px; color: brown; margin-bottom:20px;">Design by experts</li><li style="font-family: Trebuchet MS; font-size: 13px; color: brown; margin-bottom:20px;">We work on emerging technology</li></ul>';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 12px; color: brown; margin-bottom:20px;">With Regards</p>'."<br /><br />";
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 11px; color: brown; margin-bottom:20px;">Hiprojects Team</p>'."<br />";
		$body_message .= '</td></tr>'; 
		$body_message .='<td width="20"></td>';
		$body_message.='</table>';
		$headers = 'From: '.$from."\r\n"; 
		$headers .= "Reply-To: ".$from_email. "\r\n";
		$headers .= "BCC:support@mangium.com\r\n";
	    $headers .= "MIME-Version:1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					$our_subject = 'Message from the Hiprojects register'.$field_name; 
					$from = $from_email;
					$to = 'info@hiprojects.in';
					
					$our_message = '<p><b>Dear Sir / Madam this is my Registeration detail </b></p>'."<br /><br />";
					$our_message .= '<table border="0" cellpadding="4" cellspacing="4"><tr>';
					$our_message .='<td> From:</td><td>'.$field_name.'</td></tr>';
					$our_message .='<tr>';
					$our_message .='<td>Phone Number:</td><td>'.$mobile.'</td></tr>';
					$our_message .='<tr>';
					$our_message .='<td>Email:</td><td>'.$from_email.'</td></tr>';
					$our_message .='<tr>';
					$our_message .='<td>Collage:</td><td>'.$subject.'</td></tr>';
					$our_message .='<tr>';
					$our_message .='<td></td><td>'.'</td></tr>';
					$our_message .='<tr>';
					$our_message .='<td>Thanks & Regards</td></tr>';
					$our_message .='<tr>';
					$our_message .='<td>'.$field_name.'</td></tr>';
					$our_message .='</table>';
						
					$our_headers = "From: " . "register@hiprojects.in" . "\r\n";
					$our_headers .= "Reply-To: ".$from_email. "\r\n";
					$our_headers .= "BCC:support@mangium.com\r\n";
					$our_headers .= "MIME-Version:1.0\r\n";
					$our_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					
					
					
	if ($_FILES["file"]["size"] < 1024000)
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "<br />";
			//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		}
		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo "<br/>";
			//echo $_FILES["file"]["name"] . " already exists. ";
			
		}
		else
		{
			$rand = rand(0000, 1000);
			$file = $rand.$_FILES["file"]["name"];
			$a = move_uploaded_file($_FILES["file"]["tmp_name"],
			"admin/upload/" . $rand.$_FILES["file"]["name"]);
			if($a)
			{
				//echo "success";
				if($_FILES["file"]["name"]!=NULL)
				{	
									
					$link="admin/upload/".$rand.$_FILES["file"]["name"];									
									
				}				
				else
				{
					$link="--NIL--";
				}
			}
			else 
				{
				//echo "upload fail";
				}
			
		}
    }
	else
	{
		echo "<br />";
		echo "Invalid file";
		$link="--NIL--";
	}
	if(isset($_POST['check']))
	{
		$check = "Yes";
	}
	else
	{
		$check = "No";	
	}
	$date = date('d/m/Y h:i:s', time());
	$sql="INSERT INTO register(name,collage,email,date,password,mobile,file,contact)VALUES('$_POST[name]','$_POST[collage]','$_POST[email]','$date','$_POST[passw]','$_POST[tel]','$link','$check')";
	$result=mysql_query($sql);
	if(!$result)
	{
	echo "<br />";
	die('Error: ' . mysql_error($conn));
	}
	else 
	{	
		
		$sql1="INSERT INTO members(registrant_email)VALUES('$_POST[email]')";
		session_start();
		$_SESSION['userName'] = $_POST['email'];
		$result1=mysql_query($sql1);
		$response=mail($from_email, $subject, $body_message, $headers);
		if($response){
			$response1=mail($to, $our_subject, $our_message, $our_headers);
			if($response1){?>
							<script language="javascript" type="text/javascript"> 
							alert('You have successfully registered'); 
							window.location = 'innerpage.php'; 
							</script>
		<?php
		}
		}	
		if(!$result1){
		//echo "<br />";
		die('Error: ' . mysql_error($conn));
		?>
		<script language="javascript" type="text/javascript"> 
						window.location = 'innerpage.php'; 
						alert('successfully registered'); 
							
		</script> 
		<?php
		//echo "successful";
		header("location:innerpage.php");
	}
	}
}

?>
<?php ob_flush();?>