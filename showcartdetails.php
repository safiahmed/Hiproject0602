<div id="order_review">
    <h2>Order Review</h2>
</div>
<div id="cart5">
<form action="#" method="post">
    <fieldset>
        <table id="shopping-cart-table" class="data-table cart-table">
          <thead>
                                                <tr class="newheader1">
                                                    <th rowspan="1" width="500">Product</th>
                                                    <th rowspan="1" width="500">Product Name</th>


                    <!--<th rowspan="1" class="a-center" width="100">Edit</th>-->
                                  <th class="a-center" colspan="1" width="90"><span class="nobr">Unit Price</span></th>
                                                    <th rowspan="1" class="a-center" >Quantity</th>
                                                    <th class="a-center last" colspan="1" width="20">Amount</th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php //print_r($successdata);
                                             if(!empty($successdata)){
                                             foreach ($successdata as $details){
                                                 ?>
                                                <tr class="first last odd">
                                                    <td>
                                                        <img src="<?php echo $details['prod_thumbimage']; ?>" width="150" height="100" /></td>
                                                    <td>
                                                        <h2 class="product-name">
                                                            <p><?php echo $details['prod_name'];?></p>
                                                            <!--<a href="#"><?php //echo $details['unit_price'];?></a>-->
                                                        </h2>

                                                    </td>

<!--<td class="a-center">
<a href="#" title="Edit item parameters">Edit</a>
</td>-->
                                                    <td class="a-right">
                   <?php echo $details['unit_price'];?>
                                                          </td>
                                                    <td class="a-center ">
                                                        <select id="pdtqty">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </td>
                                                    <td class="a-right last">
                                                     <?php echo $details['prod_org_price'];?></span>            
                                                   
                                                    </td>


                                                </tr>
                                             <?php } ?>
                                            </tbody>
                                            </table>
                                            <table style="margin-top:-1px;" width="960px" height="100px" id="newtab">
                                                <tr class="first last">
                                                    <td colspan="50" class="a-right last" style="padding:8px 0px 8px 10px;">
                                               <!--<p style="margin-right:620px;font-size:14px;color:#ab280d">Do you have a promo code?<font color="black">click here</font></p>-->
                                                        <div id="cash">
                                                            <table cellspacing="5">
                                                                <tr>
                                                                    <td width="180px" align="right">Total Amount</td><td width="32">&nbsp;</td><td align="right"><span class="price"><span class="WebRupee"> Rs. </span>12,599</span></td></tr>
                                                                <tr id="cash-tab"><td width="140" align="right">Payable Amount</td><td width="20">&nbsp;</td><td align="right"><span class="price"><span class="WebRupee"> Rs. </span>12,599</span></td></tr></table></div>


                                                    </td>
                                                </tr>

                                            </table>
        
                                            </fieldset>
                                            </form>
                                                                                <div style="float:right; padding-right: 89px; margin-top: -29px;">
                                                                                    <a href="payment_register.php"><img src="images/proceed to ppayment.png"/></a>
                                                                                </div>  </div>
<script><?php } ?>
$(document).ready(function(){
    alert(1);
   
});
</script>                                
                                    
                                    
                                                                                                                                                                                                                               
                                                             