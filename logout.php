<?php 
if(!isset($_SESSION))
{
  session_start();
}
  //session_destroy();
  //if(isset($_SESSION['user']))
  //{
  
  unset($_SESSION['userName']);
  session_destroy();
  //}
  header("Location:index.php");
  exit;
?>