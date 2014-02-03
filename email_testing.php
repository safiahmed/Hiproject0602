<?php ob_start();?>
<?php
include "connect.php";
if(isset($_POST['submit']))
{

	$sql="SELECT sub_email FROM tbl_subscribers WHERE sub_email='$_POST[email]'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);

	if($count){
	?>
		<script language="javascript" type="text/javascript"> 
						window.location = 'email_exists.php'; 
					
							
		</script> 
		<?php
 
	
	
	}
	else {
	?>
	<?php
	     $field_name = 'HiProjects'; 
					//$field_today = 'todays Special'; 
					//$field_tel = $_POST['mps-tel']; 
					//$field_pcode = $_POST['mps-pcode']; 
					//$field_chooseemail = $_POST['mps-choose-email']; 
					//$field_choosetel = $_POST['mps-choose-tel']; 
					//$field_time = $_POST['mps-time']; 
					//$field_message = $_POST['mps-message']; 
					//$to = 'gani.sani2@gmail.com'; 
					$subject = 'Message from Hiprojects'; 
					$from = 'ganesh@mangium.com';
					 
					//$body_message .= 'Todays Special: '"\n"; 
					//$body_message .= 'Telephone: '.$field_tel."\n"; 
					//$body_message .= 'Postcode: '.$field_pcode."\n"; 
					//$body_message .= 'Contact by Email: '.$field_chooseemail."\n"; 
					$body_message= 'Contact by Tel:'; 
					//$body_message .= 'Best time to call: '.$field_time."\n"; 
					//$body_message .= 'Message: '.$field_message; 

					$headers = 'From: '.$from."\r\n"; 
					//$headers .= 'Reply-To: '.$field_email."\r\n"; 
					 $host = "smtp.mangium.com";
					 $username = "ganesh@mangium.com";
					 $password = "man67ium";
					 
					 
					 $email = '$_POST[email]';
					 
					 $headers = array ('From' => $from,
					   'To' => $email,
					   'Subject' => $subject);
					 $smtp = @Mail::factory('smtp',
					   array ('host' => $host,
						 'auth' => true,
						 'username' => $username,
						 'password' => $password));
					 
					 $mail_status = @$smtp->send($email, $headers, $body_message);
					 if ($count % 5 == 0) {
						sleep(5); // this will wait 5 secs every 5 emails sent, and then continue the while loop
					}
					$count++;

	if ($mail_status) { ?> 
						<script language="javascript" type="text/javascript"> 
							alert('Thank you for the message. We will contact you within 24 Hours.'); 
							window.location = 'admin_add_today_special.php'; 
						</script> 
					<?php 
					} 
					else { ?> 
						<script language="javascript" type="text/javascript"> 
							alert('Message failed. Please, send an email to dmcgowan@sky.com'); 
							window.location = 'admin_add_today_special.php'; 
						</script> 
					<?php 
					} 
					
					
	
	
	
	
	
	
	
	
	
	
	
	
	$date = date('m/d/Y h:i:s', time());
						$insert="INSERT INTO tbl_subscribers (sub_email,date)
			VALUES ('$_POST[email]','$date')";
$result = mysql_query($insert) or die("Query failed : " . mysql_error());
header("Location:subscribe.php");  ?>
		<?php
	}
	}



?>
<?php ob_flush();?>