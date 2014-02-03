<div class="border-class" style="border:1px solid #ddd; margin-top: 12px;margin-left: -45px;background:#ddd">
    <form>
        <table id="login-tab"><tr>
                <td width="80" align="right;">Name<font color="red">*</font></td><td width="20">:</td><td><input type="text" disabled="disabled" value="<?php echo $name; ?>"></input></td></tr>
            <tr> <td width="80" align="right;">Email<font color="red">*</font></td><td>:</td><td><input type="text" disabled="disabled" value="<?php echo $email; ?>"></input></td></tr>
            <tr><td width="80" align="right;">Number<font color="red">*</font></td><td>:</td><td><input type="text" disabled="disabled" value="<?php echo $mobile; ?>"></input></td></tr>
            <input type="hidden" id="paymentsessionid" value="<?php echo $_SESSION['reg_id']; ?>"

        </table>
    </form>
</div>
</br></br></br></br>
<div id="shipping-tab2" >
    <h3 style="float:left;padding-top: 10px;">Address:</h3>
    <div id="recent">

        <address>

            <strong><?php echo $address; ?></strong>

            <abbr title="Phone">P:</abbr> <?php echo $mobile; ?>
        </address>
        <a href="#" class="shipaddress"><img src="images/ship to this address.png"/></a>

    </div>
</div>
</div>

<form action="assets/controller-links.php" method="post">
    <div id="cart2">
        <h3 style="margin-left:53px;margin-bottom: 27px;">Select one of the shipping address <span style="font-size:30px;color:gray;"> OR </span> Enter new shipping address</h3>
        <table>
            <tr><td width="90" align="right">First Name:</td><td width="20"><font color="red">*</font>
                </td>
                <td><input type="text" name="name" required></input></td></tr>
            <tr><td width="120" align="right">Shipping Address:</td><td width="20"><font color="red">*</font></td>
                <td><textarea name="address" required></textarea></td></tr>

            <tr><td width="90" align="right">City:</td><td width="20"><font color="red">*</font></td>
                <td><input type="text" name="city" required></input></td></tr>
            <tr><td width="90" align="right">State:</td><td width="20"><font color="red">*</font></td>
                <td><select id="sel" name="state" required>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Andhra Pradesh</option>
                        <option>Delhi</option>
                        <option>West Bengal</option>
                    </select></td></tr>
            <tr><td width="90" align="right">Pin Code:</td><td width="20"><font color="red">*</font></td>
                <td><input type="text" name="pincode" required></input></td></tr>
            <tr><td width="90" align="right" >Mobile:</td><td width="20"><font color="red">*</font> </td>
                <td><input type="text" name="mobile" required></input></td></tr>
            <tr><td width="90" align="right">Land Line:</td><td width="20"><font color="red">*</font></td>
                <td><input type="text" name="tel" required></input></td></tr>
            <tr><td width="90" align="right">Country:</td><td width="20"><font color="red">*</font></td>
                <td><select id="bill" name="bill" required>
                        <option>India</option>
                        <option>Srilanka</option>
                        <option>Cannada</option>
                        <option>USA</option>
                        <option>Italy</option>
                    </select></td></tr>
            <tr><td></td><td></td><td><button  name="continue"><img src="images/continue.png" id="show"/></button></td></tr>
        </table>
    </div>
</form>

</div>


</div>

</div>

<div class="cart" style="margin-left:79px;" id="order">
    <div id="order_review">
        <h2>Order Review</h2>
    </div>
    <div id="cart5">
        <form action="#" method="post">
            <fieldset>
                <table id="shopping-cart-table" class="data-table cart-table">
                    <colgroup><col width="1">
                        <col width="1">
                        <col>

                        <col width="1">
                        <col width="1">
                        <col width="1">
                        <col width="1">

                    </colgroup><thead>
                        <tr class="newheader1">

                            <th rowspan="1" width="500">Item Description</th>


<!--<th rowspan="1" class="a-center" width="100">Edit</th>-->
                            <th class="a-center" colspan="1" width="90"><span class="nobr">Unit Price</span></th>
                            <th rowspan="1" class="a-center" >Qty</th>
                            <th class="a-center last" colspan="1" width="20">Price</th>


                        </tr>
                    </thead>

                    <tbody>
                        <tr class="first last odd">
                            <td>
                                <h2 class="product-name">
                                    <p>Auto Intensity Control Of Street Lights</p>
                                    <a href="#">Auto Intensity Control Of Street Lights</a>
                                </h2>

                            </td>

<!--<td class="a-center">
<a href="#" title="Edit item parameters">Edit</a>
</td>-->
                            <td class="a-right">
                                <span class="cart-price">

                                    <span class="price">12599</span>            
                                </span>


                            </td>
                            <td class="a-center">
                                <select id="qty"><option>1</option><option>2</option><option>3</option><option>4</option></select>
                            </td>
                            <td class="a-right last">
                                <span class="cart-price">

                                    <span class="price"><span class="WebRupee"> Rs. </span>12,599</span>            
                                </span>
                            </td>


                        </tr>
                        <tr class="first last odd" id="footer-table">
                            <td>
                                <h2 class="product-name">
                                    <p>Auto Intensity Control Of Street Lights</p>
                                    <a href="#">Auto Intensity Control Of Street Lights</a>
                                </h2>

                            </td>

<!--<td class="a-center">
<a href="#" title="Edit item parameters">Edit</a>
</td>-->
                            <td class="a-right">
                                <span class="cart-price">

                                    <span class="price">12599</span>            
                                </span>


                            </td>
                            <td class="a-center">
                                <select id="qty"><option>1<option/><option>2</option><option>3</option><option>4</option></select>
                            </td>
                            <td class="a-right last">
                                <span class="cart-price">

                                    <span class="price"><span class="WebRupee"> Rs. </span>12,599</span>            
                                </span>
                            </td>


                        </tr>
                    </tbody>
                </table>
                <table style="margin-top:-1px;" width="960px" height="100px" id="newtab">
                    <tr class="first last">
                        <td colspan="50" class="a-right last" style="padding:8px 0px 8px 10px;">
                                                <!--<p style="margin-right:620px;font-size:14px;color:#ab280d">Do you have a promo code?<font color="black">click here</font></p>-->
                            <div id="cash">
                                <table cellspacing="5"><tr><td width="180px" align="right">Totol Amount</td><td width="32">&nbsp;</td><td align="right"><span class="price"><span class="WebRupee"> Rs. </span>12,599</span></td></tr>
                                    <tr id="cash-tab"><td width="140" align="right">Payable Amount</td><td width="20">&nbsp;</td><td align="right"><span class="price"><span class="WebRupee"> Rs. </span>12,599</span></td></tr></table></div>


                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
        <div style="float:right; padding-right: 89px; margin-top: -29px;">
            <a href="payment_register.php"><img src="images/proceed to ppayment.png"/></a>
        </div>
        <div class="cart-collaterals">
            <div class="col2-set">
                <div class="col-1">
                </div>
                <div class="col-2">
                    <form id="discount-coupon-form" action="#" method="post">

                    </form>



                    <form action="#" method="post" id="shipping-zip-form">

                    </form>

                </div>
            </div></div>
    </div>
</div>


