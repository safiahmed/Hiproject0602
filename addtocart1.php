<?php
require_once 'assets/my-controller.php';
require_once 'assets/auth.php';
$product = new Users();
$data = array();
//var_dump($_SESSION);
$sessval = $_SESSION['cart_session_id'];
$addtocart = $product->addingcart_details($sessval);
if (isset($_POST['price']) && isset($_POST['prod_val'])) {
    echo $_POST['price'];
    echo $_POST['prod_val'];
}
?>	
<script type="text/javascript">
    $(document).ready(function() {
//        cart-text
        var rowCount = $('#shopping-cart-table1 tbody tr').length;//this will show the products in carts
        $(".cart-text").text(rowCount);

        add();//this will calculate total amount of products
        country_delivery();

        $(".remove-click").click(function() { //removing product from cart
            var cart_id_pk = $(this).attr('id');
            var delrow = $(this).parent().closest("tr");
            $.post("assets/controller-links.php", {removecart_val: cart_id_pk}, function(data) {
                if (data == 1) {
                    delrow.remove();
                    sub_total = add();
                    country_delivery();
                    return false;
                }
            });
        });

        $(".sel_prod_qty").on("change", function() {//on change quantity changing all price details
            var u_val = $(this).parent().prev().children().find("input").val();
            var total_price = u_val * $(this).val();
            var cart_id_pk = $(this).attr('id');
            var qty = $(this).val();
            $(this).parent().next().children().find(".prod_val").text(total_price);
            var bfre = $(this).parent();
            var action = "assets/controller-links.php";
            $.ajax({
                url: action,
                type: "POST",
                data: {total_price: total_price, cart_id_pk: cart_id_pk, qty: qty},
                beforeSend: function() {
                    bfre.children(".ajax_remove").html("<img src='images/ajax_remove.gif' />");
                },
                success: function(response) {
                    var sub_total = add();
                    country_delivery();
                    bfre.children(".ajax_remove").html("");
                }
            });
        });

        $(".country_delivery").on("change", function() {//shipping charges
            country_delivery();
        });
    });
    function add() {
        var total_val = 0;
        $('.a-right .prod_val').each(function() {
            total_val += +$(this).text();
        });
        $(".sub_total_price").text(total_val);
        return total_val;
    }
    function country_delivery() {
        var c_val = $(".country_delivery").val();
        var total = $(".sub_total_price").text();
        if (c_val == 1) {
            var p_val = parseInt(c_val) * parseInt(total);
            $("#samount").text("0");
        } else {
            var p_val = parseInt(c_val) + parseInt(total);
            $("#samount").text(c_val);
        }
        $("#pamount").text(p_val);
    }
//    function log_signup() {
//        document.getElementById('light').style.display = 'block';
//        document.getElementById('fade').style.display = 'block'
//        $('.sival').val('');
//        $('#sf-form,#su-form').hide();
//        $('#si-form').show();
//    }
</script>

<a href = "javascript:void(0)" title="Close" class="close"
   onclick = "document.getElementById('replace-cart_det').style.display = 'none';
        document.getElementById('fade').style.display = 'none'">X</a>
<div class="main-container1 col1-layout1">
    <div class="loading_cart">
        <img src="images/loading.gif" />
    </div>

    <div class="main1">
        <div class="col-main1">
            <!--<div class="page-title1 title-buttons1">-->
            <h2>Shopping Cart</h2> 
        </div>
        <div class="cart1">
            <fieldset>
                <table id="shopping-cart-table1" class="data-table cart-table1">
                    <colgroup><col width="1">
                        <col width="1">
                        <col width="1">
                        <col width="1">
                        <col width="1">
                        <col width="1">
                    </colgroup><thead>
                        <tr class="newheader1">
                            <th rowspan="1" width="100">Item Description</th>
                            <th rowspan="1" width="100"><span class="nobr">Product Name</span></th>

                                                <!--<th rowspan="1" class="a-center" width="100">Edit</th>-->
                            <th class="a-center" colspan="1" width="90"><span class="nobr">Unit Price</span></th>
                            <th rowspan="1" class="a-center">Qty</th>
                            <th class="a-center last" colspan="1">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($addtocart as $prod) {
                            $cart_id_pk = $prod['cart_id_pk'];
                            $qty = $prod['qty'];
                            // print_r($cart_id_pk);
                            ?>
                            <tr class="odd">
                                <td class="cart-table-img" style="padding: 10px 40px;">
                                    <a href="#" title="" class="product-image">
                                        <img src="<?php echo $prod['prod_thumbimage']; ?>" width="100" height="100" alt="">
                                    </a>
                                </td>
                                <td>
                                    <h2 class="product-name5">
                                        <p><?php echo $prod['prod_name']; ?></p>
                                        <a href="">Move to wishlist </a>|
                                        <a href="javascript:void(0);" id="<?php echo $cart_id_pk; ?>" class="remove-click">Remove</a>
                                    </h2>

                                </td>
                                <td class="a-right">
                                    <span class="cart-price">
                                        <span class="price">
                                            <span class="WebRupee aaa"> Rs.</span><span><?php echo $prod['unit_price']; ?></span>
                                            <input type="hidden" class="unit_price" value="<?php echo $prod['unit_price']; ?>" />
                                        </span>            
                                    </span>
                                </td>
                                <td class="a-center">
                                    <select class="sel_prod_qty" id="<?php echo $cart_id_pk; ?>">
                                        <option <?php if($qty == 1){echo "selected=selected";} ?>>1</option>
                                        <option <?php if($qty == 2){echo "selected=selected";} ?>>2</option>
                                        <option <?php if($qty == 3){echo "selected=selected";} ?>>3</option>
                                        <option <?php if($qty == 4){echo "selected=selected";} ?>>4</option>
                                    </select>
                                    <div class="ajax_remove"></div>
                                </td>
                                <td class="a-right last">
                                    <span class="cart-price">
                                        <span class="price">
                                            <span class="WebRupee"> Rs. </span>
                                            <span class="prod_val"><?php echo $prod['prod_price']; ?>
                                                <!--<input class="abcd" type="hidden" value="<?php // echo $prod['unit_price'];              ?>" />-->
                                            </span>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
    <div class="cart_total">
        <div id="cart_total_left">
            <div class="cart-total-summary">Cart Summary (<span class="cart-text"></span> Item(s))<br>
            <!--<span class="promo-text">(You can use your Promo Codes during Payment)</span>-->
            </div><br>
            <div style="clear: both;"></div>
            <table style="margin-left: 8px;" width="300" height="50" >
                <tr class="first last">
                    <td colspan="30" width="">
                        <table id="shop">
                            <tr>
                                <td style="padding-right: 29px;" >Delivery country</td>
                                <td>
                                    <select class="country_delivery">
                                        <option selected="selected" value="1">India</option>
                                        <option value="100">Sri Lanka</option>
                                        <option value="200">China</option>
                                        <option value="300">Pakistan</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div id="cart_total_right">
            <div class="cart-total-payment-text">
                <table class="table_cart_total">
                    <tbody>
                        <tr>
                            <td>Sub Total</td>
                            <td>:</td>
                            <td><span class="sub_total_price"></span></td>
                        </tr>
                        <tr>
                            <td>Shipping Charges</td>
                            <td>:</td>
                            <td>
                                <span class="total-text">
                                    <span class="WebRupee"> Rs. </span><span id="samount"></span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>Payable Amount</td>
                            <td>:</td>
                            <td>
                                <span class="WebRupee"> Rs. </span><span id="pamount"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="checkout-cart" class="cart-payment-outer">
            <div class="payment-button-outer">
                <div class="proceed-button">
                    <span>
                        <a href="Proceed-to-payment.php">Proceed to Payment</a>
                    </span>
                </div>
                <div class="continue-button" onclick="">
                    <span>
                        <a href="category-view.php">Add more item(s) to cart</a>
                    </span></div>
            </div>
        </div>
    </div>
</div>
</div>