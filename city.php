


<?php 

 //include "admin/connect.php";
//echo "text";
//$state = $_POST['state'];

?>
<script type="text/javascript" src='js/jquery1.7.js'></script>
<div id="city">
City : <select id="city1"><option>---select---</option>
		<option>Bangalore</option>
<?php	  //$query="SELECT DISTINCT city FROM address where state='".$state."'";
          //$result=mysql_query($query);
		  
          //while($row = mysql_fetch_array($result))
            //{
          //echo "<option value='".$row['city']."'>".$row['city']."</option>";
           // }
          //echo $selectedvalue;
?>
</select></div>

<script>
$(document).ready(function(){

	$('#city1').change(function(){
	
	var city= $(this).val();
	
		$('#address').load('address.php',{city:city});		
	});
});
</script>




