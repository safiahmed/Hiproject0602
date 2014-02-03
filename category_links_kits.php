<div class="col-left">
	
		<div class="block-layered-nav">
		
			<div class="block-content">
		<dl id="narrow-by-list">
		  <!--<dt class="odd">Sub Category</dt>-->
<!--                    <dd class="odd">
					
							<ol>
			
<?php
//$clientsquery="select * from tbl_subcategory where cat_id_fk='$plaintext_dec' ";
		  //$clientrs=mysql_query($clientsquery);
                  
                  // $rowset= mysql_num_rows($clientrs);
          //if($rowset > 0) {
		   //while($clientdata=mysql_fetch_array($clientrs))
		   //{
		   	
                       
                       
                      
                      //if(($clientdata['subcat_name']!=""))
                           //{
                       
                       //?>
    
        <li> <a href='#'> Cortex M3</a> </li>
    <li> <a href='#'>  ARM7</a> </li>
                           <?php //}
                         
                  // }
                                
         // }
          //if($rowset <= 0 || $rowset ==""){
                  ?>
        <li> <p style="margin: 5px 3px 4px 14px;"> NO SUB CATEGORY FOUND </p></li>
          
          <?php //} ?>
                  
                           
</ol>
								
					</dd>-->
                      
					<dt class="odd">Category</dt>
					 <dd class="odd">
					 <ol>
					<?php
            //$clientsquery = "select  cat_name,cat_id_pk from tbl_category order by cat_id_pk ";
            //$clientrs = mysql_query($clientsquery);
            //while ($clientdata = mysql_fetch_array($clientrs)) {
                ?>
                <?php //include 'encrypt1.php'; ?>
               <!-- <li>
                    <a href="Category.php?id=<?php //echo $ciphertext_base64;?>" target="_parent"><?php //echo $clientdata['cat_name']; ?></a>
                </li> -->
				<li>
                    <a href="Category.php" target="_parent">ARM</a>
                </li> 
                <li>
                    <a href="Category.php" target="_parent"> Android</a>
                </li> 
                <li>
                    <a href="Category.php" target="_parent">Embedded</a>
                </li> 
                <li>
                    <a href="Category.php" target="_parent">Robotics</a>
                </li> 
                <li>
                    <a href="Category.php" target="_parent">Electrical</a>
                </li> 
                <li>
                    <a href="Category.php" target="_parent">Communication</a>
                </li> 
                <li>
                    <a href="Category.php" target="_parent">Automotive</a>
                </li> 
				 <li>
                    <a href="Category.php" target="_parent">Others</a>
                </li> 
            <?php //} ?>		
</ol>
			
								
					</dd>
					
					
					<dt class="odd">Price</dt>
                    <dd class="filter-price odd">
					
			<div class="imagin">
			<p>
	<label for="amount">Range:</label>
		<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;" disabled="disabled" >
	</p>
          <div id="slider-range"></div>
			</div>
								
					</dd>
					
					
					<dt class="last even">Kit Type</dt>
                    <dd class="last even">
					
							<ol>
    <li>
                <a href="#">Do It Yourself Kit</a>
                (128)
    </li>
    <li>
                <a href="#">Project Kit</a>
                (128)
    </li>
    <li>
                <a href="#">Readymade Kit</a>
                (128)
    </li>
</ol>
								
					</dd>
                                            
											
											
											
											
											
											
											
											
											
											
											
											</dl>
		
		<?php 
		//$clientsquery = "select min(prod_org_price) from tbl_product order by prod_id_pk ";
		//$clientrs = mysql_query($clientsquery);
           //while($row3 = mysql_fetch_assoc($clientrs))   
			//{
			//$price=(min($row3));
		
			//}
			
		//?>
		<?php 
		//$clientsquery = "select max(prod_org_price) from tbl_product order by prod_id_pk ";
		//$clientrs = mysql_query($clientsquery);
         //  while($row3 = mysql_fetch_assoc($clientrs))   
			//{
			//$price1=(min($row3));
		//
			//}
			
		?>
			</div>
		</div>
	
	</div>