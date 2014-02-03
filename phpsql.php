 <!--index.php-->
 
  
  
  <?php   
	 
	 include "connect.php";
	 
	 $cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,8";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	 
	$sql="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat=mysql_query($sql);
	 while($data = mysql_fetch_array($cat))
	 {
		$displayData1 = $data['prod_thumbimage'];
		$displayData2 = $data['prod_name'];
		$displayData3 = $data['prod_org_price'];				
	}
	$cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,7";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	
	$sql1="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat1=mysql_query($sql1);
	 while($data = mysql_fetch_array($cat1))
	 {
		$displayData4 = $data['prod_thumbimage'];
		$displayData5 = $data['prod_name'];
		$displayData6 = $data['prod_org_price'];				
	}
$cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,6";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	
	$sql1="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat1=mysql_query($sql1);
	 while($data = mysql_fetch_array($cat1))
	 {
		$displayData7 = $data['prod_thumbimage'];
		$displayData8 = $data['prod_name'];
		$displayData9 = $data['prod_org_price'];				
	}
	$cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,5";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	
	$sql1="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat1=mysql_query($sql1);
	 while($data = mysql_fetch_array($cat1))
	 {
		$displayData10 = $data['prod_thumbimage'];
		$displayData11 = $data['prod_name'];
		$displayData12 = $data['prod_org_price'];				
	}
	$cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,4";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	
	$sql1="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat1=mysql_query($sql1);
	 while($data = mysql_fetch_array($cat1))
	 {
		$displayData13 = $data['prod_thumbimage'];
		$displayData14 = $data['prod_name'];
		$displayData15 = $data['prod_org_price'];				
	}
	$cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,3";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	
	$sql1="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat1=mysql_query($sql1);
	 while($data = mysql_fetch_array($cat1))
	 {
		$displayData16 = $data['prod_thumbimage'];
		$displayData17 = $data['prod_name'];
		$displayData18 = $data['prod_org_price'];				
	}
	$cat_id="SELECT  cat_id_pk FROM tbl_category ORDER BY cat_id_pk desc limit 0,2";
	 $cat3=mysql_query($cat_id);
	  while($data = mysql_fetch_array($cat3))
	 {
		$display = $data['cat_id_pk'];
	}	
	
	$sql1="SELECT * FROM tbl_product WHERE cat_id_fk='$display' ORDER BY prod_id_pk desc limit 0,1";
	$cat1=mysql_query($sql1);
	 while($data = mysql_fetch_array($cat1))
	 {
		$displayData19 = $data['prod_thumbimage'];
		$displayData20 = $data['prod_name'];
		$displayData21 = $data['prod_org_price'];				
	}
		 
		
?>	 

<!--index page end-->

<!--Category page-->






<!--End of category-->