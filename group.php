<?php ob_start();?>
<?php
include_once("admin/connect.php");
session_start();
if(isset($_SESSION['userName'])) {
$leader_email= $_SESSION['userName'];

}

if(isset($_POST['submit1']))
{

   $name_one = $_POST['name1']; 
	$email_one = $_POST['email1']; 
	$phone_one = $_POST['tel1']; 
	
	
	if (isset($_POST['name2']) || ($_POST['email2'])) 
	{
	
	$name_two = $_POST['name2']; 
	$email_two = $_POST['email2']; 
	$phone_two = $_POST['tel2']; 
	$sql32 = "UPDATE members SET member_two_name='$name_two', member_two_email='$email_two' ,member_two_phone='$phone_two' WHERE registrant_email='$leader_email'";
	}
	if (isset($_POST['name3']) || ($_POST['email3']))
	{
	$name_three = $_POST['name3']; 
	$email_three = $_POST['email3']; 
	$phone_three = $_POST['tel4']; 
		$sql33 = "UPDATE members SET member_three_name='$name_three', member_three_email='$email_three' ,member_three_phone='$phone_three' WHERE registrant_email='$leader_email'";
	}
	if (isset($_POST['name4']) || ($_POST['email4']))
	{
	$name_four = $_POST['name4']; 
	$email_four = $_POST['email4']; 
	$phone_four = $_POST['tel4']; 
	$sql34 = "UPDATE members SET member_four_name='$name_four', member_four_email='$email_four' ,member_four_phone='$phone_four' WHERE registrant_email='$leader_email'";
	}
	
	$sql3 = "UPDATE members SET member_one_name='$name_one', member_one_email='$email_one' ,member_one_phone='$phone_one' WHERE registrant_email='$leader_email'";
	$message = $_POST['message'];
	$sql32 = "UPDATE register SET topic='$message' WHERE email='$leader_email'";
	

	$result3=mysql_query($sql32);
	$result3=mysql_query($sql3);
	$result3=mysql_query($sql32);
	$result3=mysql_query($sql33);
	$result3=mysql_query($sql34);
   if(!$result3)
	{
	echo "<br >";
	die('Error: ' . mysql_error($con));
	}
	else{?>
		<script language="javascript" type="text/javascript"> 
							
							window.location = 'index.php'; 
		</script> 
		<?php
	//echo "success";
	//header("location:index.php");
	}
   
   }   
   unset($_SESSION['userName']);
   session_destroy();
?>
<?php ob_flush();?>