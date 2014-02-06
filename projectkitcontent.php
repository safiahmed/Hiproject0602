<?php
if (!isset($_SESSION['cart_session_id'])) {
    $_SESSION['cart_session_id'] = (rand(10, 100000000000));
}
echo var_dump($_SESSION);
?>
<input type="hidden" class="prod_val" value="<?php echo $prod_id; ?>" />
<input type="hidden" class="sess_val" value="<?php echo $_SESSION['cart_session_id']; ?>" />
<div class="project_kit">
    <div id="attrib_wrap">
        <div class="row_top">
            <div class="kith">Kit Content</div>
            <div class="kit_heading">

            </div>
            <div class="kit_heading_middle">
                <h2>Silver Package</h2>
                <div class="price2" id="attr_price1"><span class="WebRupee"> Rs. </span><?php echo $spprice; ?>
                <input type="hidden" class="sess_val" value="<?php echo $spprice; ?>" />
                </div>
            </div>

            <div class="kit_heading_middle">
                <h2>Gold Package</h2>
                <div class="price2" id="attr_price2"><span class="WebRupee"> Rs. </span><?php echo $gpprice; ?>
                <input type="hidden" class="sess_val" value="<?php echo $gpprice; ?>" />
                </div>
            </div>
            <div class="kit_heading_middle">
                <h2>Diamond Package</h2>
                <div class="price2" id="attr_price3"><span class="WebRupee"> Rs. </span><?php echo $dpprice; ?>
                <input type="hidden" class="sess_val" value="<?php echo $dpprice; ?>" />
                </div>
            </div>

            <div class="clear"></div>
        </div>
        <div class="row_middle">
            <div class="clist"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <?php foreach ($productkittype_details as $prod) { ?>
                            <tr>
                                <td width="72%"><strong><?php echo $prod['content_name']; ?></strong></td>
                                <th scope="col" width="28%"><?php echo $prod['content_type']; ?></th>
                            </tr>


                        <?php } ?>
                    </tbody></table>

                <div class="call" style="color:#000;padding-top:0px;"><font size="1px" color="#0095FE">Detailed Kit content</font><br><a style="cursor:hand;" href="" target="_blank"><img style="width:110px;" src="images/chcyan.jpg" alt=""></a></div>
            </div>


            <div class="chklist_g brdr">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tbody class="for-col1">
                        <?php
//                        print_r($productkittypesp_details);
                        foreach ($productkittypesp_details as $prod) {
                            if ($prod['sp'] == 0) {
                                ?>
                                <tr>
                                    <td style="padding-bottom: 0px;"><img src="images/wrong.png" width="8" height="8"></td>
                                </tr>
                                <?php
                            } else {
                                ?>
                                <tr>
                                    <td style="padding-bottom: 0px;"><img src="images/right.png"></td>
                                </tr>

                            <?php }
                        }
                        ?>

                    </tbody></table>
                <div class="buybtn"><a href="#register" alt="1" class="cart-click"><img src="images/buyblue.png"></a></div>
            </div>
            <div class="chklist_green brdr">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <?php
                        //print_r($productkittypesp_details);
                        foreach ($productkittypegp_details as $prod) {
                            if ($prod['gp'] == 0) {
                                ?>
                                <tr>
                                    <td style="padding-bottom: 0px;"><img src="images/wrong.png" width="8" height="8"></td>
                                </tr>
                                <?php
                            } else {
                                ?>
                                <tr>
                                    <td style="padding-bottom: 0px;"><img src="images/right.png"></td>
                                </tr>

                            <?php }
                        }
                        ?>
                    </tbody></table>
                <div class="buybtn"><a href="#register" alt="2" class="cart-click"><img src="images/b2.jpg" sfnoicon="1"></a></div>
            </div>
            <div class="chklist_g">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tbody>
                        <?php
                        //print_r($productkittypesp_details);
                        foreach ($productkittypedp_details as $prod) {
                            if ($prod['dp'] == 0) {
                                ?>
                                <tr>
                                    <td style="padding-bottom: 0px;"><img src="images/wrong.png" width="8" height="8"></td>
                                </tr>
                                <?php
                            } else {
                                ?>
                                <tr>
                                    <td style="padding-bottom: 0px;"><img src="images/right.png"></td>
                                </tr>

    <?php }
}
?>

                    </tbody></table>
                <div class="buybtn"><a href="#register" alt="3" class="cart-click"><img src="images/buyblue.png"></a></div>
                <input type="hidden" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
            </div>

            <div class="clear"></div>
        </div>
    </div>




</div>
