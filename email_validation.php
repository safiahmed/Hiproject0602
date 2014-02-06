<?php ob_start();?>
<?php
include "../admin/connect.php";
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
	     // $name=$_POST["name"];
					$email=$_POST['email'];
					
					
					//$tel=$_POST["tel"];
					//$website=$_POST["website"];
					//$messg=$_POST["message"];
					
					$to = '$email';
                    $cc=  'contact@hiprojects.in';	
					$Bcc='support@mangium.com';
					//$subject = 'Contact Details '.$name; 
					$subject = 'Welcome To Hiprojects ';
					$from_email = 'hiprojects2013@gmail.com';            //info@hiprojects.in//
					$from='hiprojects';
					
					
					$body_message = '<table border="0" cellpadding="0" cellspacing="0" align="center" width="600"><tr>';
		            $body_message .= '<td width="20"></td>';				
		            $body_message .= '<td width="560"><br /><br />';
					$body_message .= '<p style="font-family: Trebuchet MS; font-size: 20px; color: red; margin-bottom:20px;"><b>Welcome To Hiprojects</b></p>';
					$body_message .= '<p style="font-family: Trebuchet MS; font-size: 18px;color:grey;  margin-bottom:20px;">Please click below link for Subscription</p>';
					$body_message .= '<a href="subscription_confirmed.php?email=$email" style="background-color:#336699;font-family: Trebuchet MS; font-size:16px;color:white;text-decoration:none;padding:2.5px;">Yes Subscribe Me</a>';
					$body_message .= '<p style="font-family: Trebuchet MS; font-size: 14px;color:grey;  margin-bottom:20px;">If you received this email by mistake, simply delete it.</p>';
					$body_message .= '<p style="font-family: Trebuchet MS; font-size: 14px;color:grey;  margin-bottom:20px;">For questions about this list, please contact: info@hiprojects.in</p>';
				
					$body_message .='</tr>';				
					
					
					
					//$body_message .= '<td>Email:</td><td>'.$email.'</td></tr>'; 
					//$body_message .='<tr>';
					//$body_message .= '<td>Telephone:</td><td>'.$tel.'</td></tr>'; 
					//$body_message .= '<tr>';
					//$body_message .= '<td>website:</td><td>'.$website.'</td></tr>';
					//$body_message .= 'Best time to call: '.$field_time."\n"; 
					//$body_message .= 'Message: '.$field_message; 
			         //$body_message .='<tr>';
					// $body_message .='<td> Thanks & Regards</td></tr>';
					// $body_message .='<tr>';
					// $body_message .='<td>'.$from.'</td></tr>';
			         $body_message.='</table>';
					 $headers = 'From: '.$from_email."\r\n"; 
					 $headers .= "Reply-To: ".$to. "\r\n";
		             $headers .= "Cc:".$cc."\r\n";
					 $headers .= "Cc:".$Bcc."\r\n";
	                 $headers .= "MIME-Version:1.0\r\n";
		             $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					
		             $response= mail($to, $subject, $body_message,$headers);
					if($response){?>
					<script language="javascript" type="text/javascript"> 
							alert('$email'); 
							window.location = 'subscribe.php'; 
							</script>
					 <?php
					 }
$date = date('m/d/Y h:i:s', time());


						$insert="INSERT INTO tbl_subscribers (sub_email,date)
			VALUES ('$_POST[email]','$date')";
$result = mysql_query($insert) or die("Query failed : " . mysql_error());
 ?>
		<?php
	}
}


?>
<?php ob_flush();?>