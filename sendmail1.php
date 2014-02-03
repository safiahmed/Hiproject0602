<?php
$con=mysql_connect("localhost","root","");

if(!$con)
{
	echo "not connected succesfully";
}
else
	//echo "connected";
	echo '<br>';
	$connect=mysql_select_db("magnum_hiprojects");
	//echo "database selected";

if(isset($_POST['submit']))
{
        $field_name = $_POST['name']; 
        $from_email = $_POST['email'];

		/*require_once "Mail.php";
		$field_name = $_POST['name']; 
		$to = $_POST['email']; 
		
        $cc=  'support@mangium.com';				
		$subject = 'Welcome To Hiprojects '.$field_name; 
		$from = 'Hiprojects';
		
			
		
		$body_message = '<table border="0" cellpadding="0" cellspacing="0" align="center" width="600"><tr>';
		$body_message .= '<td width="20"></td>';				
		$body_message .= '<td width="560"><br /><br />';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 14px; color: red; margin-bottom:20px;"><b>Welcome To Hiprojects</b></p>';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 11px;  margin-bottom:20px;">You have successfully registered</p>';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 11px;  margin-bottom:20px;"><b>we have project kits for engineering students designed by experts. Accepted by institutes, they are educational, practical, and fun, and you can benefit from it for years to come.';
		$body_message .= '<p style="font-family: Trebuchet MS; font-size: 11px; color: brown; margin-bottom:20px;">Why choose us</p>';
		$body_message .= '<ul><li>We have wide range of projects</li><li>Design by experts</li><li>We work on emerging technology</li></ul>';
		$body_message .= 'With Regards'."<br /><br />";
		$body_message .= 'Hiprojects Team'."<br />";
		$body_message .= '</td></tr>'; 
		$body_message .='<td width="20"></td>';
		$body_message.='</table>';
		$headers = 'From: '.$from."\r\n"; 
		$headers .= "Reply-To: ".$to. "\r\n";
		$headers .= "Cc:".$cc."\r\n";
	    $headers .= "MIME-Version:1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		*/


		

	//if ($_FILES["file"]["size"] < 20000)
	//{
		//if ($_FILES["file"]["error"] > 0)
		//{
		//	echo "<br />";
		//	//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		//}
 
	

		//if (file_exists("upload/" . $_FILES["file"]["name"]))
		//{
			//echo "<br/>";
			//echo $_FILES["file"]["name"] . " already exists. ";
			
		//}
		//else
		//{
		//	$a = move_uploaded_file($_FILES["file"]["tmp_name"],
		//	"upload/" . $_FILES["file"]["name"]);
		//	if($a){echo "success";}else {echo "upload fail";}
		//	echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	//		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	//		echo "Type: " . $_FILES["file"]["type"] . "<br>";
	//		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
//	//	}
  //  }
//	else
	//{
	//	echo "<br />";
	//	echo "Invalid file";
	//}
//	if($_FILES["file"]["name"]!=NULL)
	//	{	
										
	//	$link="upload/".$_FILES["file"]["name"];									
									
	//	}
								
	//else
//{
	////	$link="--NIL--";
	//}
	//	if(isset($_POST['check']))
	//{
	//$check = "Yes";
	//}
	//else
	//{
	//$check = "No";	
	//}
	//$date = date('m/d/Y h:i:s', time());
	
	//----------------------------------------------------------------//
	  	  if (isset($_POST['active3']))
										{
											//echo $_POST['active'];
											$inactive1=$_POST['active3'];
											
												if($inactive1=='inactive1')
												{
													$activeval1=1;
													//echo ($activeval);
												}
												elseif($inactive1=='inactive2')
												{
													$activeval1=2;
													//echo ($activeval);
												}
												elseif($inactive1=='inactive3')
												{
													$activeval1=3;
													//echo ($activeval);
												}
												elseif($inactive1=='inactive4')
												{
													$activeval1=4;
													//echo ($activeval);
												}
												elseif($inactive1=='inactive5')
												{
													$activeval1=5;
													//echo ($activeval);
												}
												
	  				 					}

                                          //-------------------------------------------------//
										   if (isset($_POST['active1']))
										{
											//echo $_POST['active1'];
											$inactive21=$_POST['active1'];
												if($inactive21=='inactive21')
												{
													$activeval2=1;
													//echo ($activeval);
												}
												elseif($inactive21=='inactive22')
												{
													$activeval2=2;
													//echo ($activeval);
												}
												elseif($inactive21=='inactive23')
												{
													$activeval2=3;
													//echo ($activeval);
												}
												elseif($inactive21=='inactive24')
												{
													$activeval2=4;
													//echo ($activeval);
												}
												elseif($inactive21=='inactive25')
												{
													$activeval2=5;
													//echo ($activeval);
												}
												
	  				 					}
										  
										//------------------------------------//
										 if (isset($_POST['active2']))
										{
											//echo $_POST['active'];
											$inactive31=$_POST['active2'];
												if($inactive31=='inactive31')
												{
													$activeval3=1;
													//echo ($activeval);
												}
												elseif($inactive31=='inactive32')
												{
													$activeval3=2;
													//echo ($activeval);
												}
												elseif($inactive31=='inactive33')
												{
													$activeval3=3;
													//echo ($activeval);
												}
												elseif($inactive31=='inactive34')
												{
													$activeval3=4;
													//echo ($activeval);
												}
												elseif($inactive31=='inactive35')
												{
													$activeval3=5;
													//echo ($activeval);
												}
												
	  				 					}
                                       
                                        //------------------------------------//									   
										  
										  
										  
										  
										  
										//  if (isset($_POST['active']))
										//{
											//echo $_POST['active'];
											//$active=$_POST['active'];
												//if($active=='active')
												//{
												//	$activeval=1;
													//echo ($activeval);
												//}
												//elseif($active=='inactive')
												//{
												//	$activeval=0;
													//echo ($activeval);
												//}
	  				 					//}

							
										//-----------------------------//
										 if (isset($_POST['active4']))
										{
											//echo $_POST['active'];
											$inactive41=$_POST['active4'];
												if($inactive41=='inactive41')
												{
													$activeval4='feedback';
													//echo ($activeval);
												}
												elseif($inactive41=='inactive42')
												{
													$activeval4='Complaint';
													//echo ($activeval);
												}
												elseif($inactive41=='inactive43')
												{
													$activeval4='Query';
													//echo ($activeval);
												}
												elseif($inactive41=='inactive44')
												{
													$activeval4='Rating';
													//echo ($activeval);
												}
												

	  				 					}
                                       
										//-----------------------------//
                             	 
								
								
								
				$testi_by1=trim(strip_tags($_POST['name']));
				$testi_by=trim(strip_tags($_POST['email']));
				$testi_matter=trim(strip_tags($_POST['message']));
				$testi_by2=trim(strip_tags($_POST['project']));
				$testi_by3=trim(strip_tags($_POST['college_name']));
				$testi_by4=trim(strip_tags($_POST['advice_message']));
				
	            $insert="insert into tbl_feedback(feed_name,feed_collegename,feed_email,proj_name,options,feed_message,advice_message,price_review,quality_review,value_review) values('".$testi_by1."','".$testi_by3."','".$testi_by."','".$testi_by2."','".$activeval4."','".$testi_matter."','".$testi_by4."','".$activeval1."','".$activeval2."','".$activeval3."')";
                $result = mysql_query($insert) or die("Query failed : " . mysql_error());
               // echo $result;
	//-----------------------------------------------------------------//
	
	
	
	
	if(!$result)
	{
	echo "<br />";
	die('Error: ' . mysql_error($con));
	}
	else 
	{
			
		//$response=mail($to, $subject, $body_message, $headers);
		/*$from = 'anshul@mangium.com';
		$host = "smtp.mangium.com";
 $username = "anshul@mangium.com";
 $password = "man67ium";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail_status = $smtp->send($to, $headers, $body_message);?>
	       <?php if($mail_status)
	          {
			  ?>
					<script language="javascript" type="text/javascript"> 
							alert('Thank you for the message. We will contact you within 24 Hours.'); 
							//window.location = 'index.php'; 
						</script> 
			  <?php } 
			  
		echo "successful";*/	

        $our_subject = 'HiProjects'; 
 $from = 'info@hiprojects.in';

 
 $our_headers = "From: " . "hiprojects.in" . "\r\n";
 $our_headers .= "BCC:support@mangium.com\r\n";
 $our_headers .= "MIME-Version:1.0\r\n";
 $our_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
 
 $our_message = 'Dear'.$field_name."<br />";
 $our_message .= 'Thanks for your Feedback'."<br />";
 //$our_message .= 'We will contact you soon with details'."<br />";
 $our_message .= 'With Regards'."<br /><br />";
 $our_message .= 'HiProjects Team'."<br />";
 $response1=mail($from_email, $our_subject, $our_message, $our_headers);?>
   
 <?php  if($response1)
	          {?>
			 
					<script language="javascript" type="text/javascript"> 
							alert('Thank you for the feedback'); 
							window.location = 'feedback.php'; 
						</script> 
			   <?php } 
			  

		
	}
}
?>