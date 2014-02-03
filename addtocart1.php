<?php
require_once 'assets/my-controller.php';
require_once 'assets/auth.php';
$product = new Users();
$data = array();
var_dump($_SESSION);
$sessval=$_SESSION['cart_session_id'];
$addtocart=$product->addingcart_details($sessval);
echo $_POST['price'];
if(isset($_POST['price']) && isset($_POST['prod_val'])){
    echo $_POST['price'];
    echo $_POST['prod_val'];
}
echo $_SESSION['cart_session_id'];
?>	
<script type="text/javascript">
    $(document).ready(function() {

        $(".remove-click").click(function() {
            var cart_id_pk = $(this).attr('id');
            var delrow = $(this).parent().closest("tr");
            $.post("assets/controller-links.php", {removecart_val: cart_id_pk}, function(data) {
                if (data == 1) {
                    delrow.remove();
                    return false;
                }
            });


        });

    });
</script>

<a href="#close" title="Close" class="close1">X</a>

<div class="main-container1 col1-layout1">
    <div class="main1">
        <div class="col-main1">
            <div class="cart1">

                <div class="page-title1 title-buttons1">
                    <h1>Shopping Cart</h1> 
                </div>


                <form action="#" method="post">
                    <fieldset>
                        <table id="shopping-cart-table1" class="data-table cart-table1">
                            <colgroup><col width="1">
                                <col width="1">
                                <col>

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
                                    // print_r($cart_id_pk);
                                    ?>
                                    <tr class="odd">
                                        <td class="cart-table-img" style="padding: 10px 40px;"><a href="#" title="" class="product-image"><img src="<?php echo $prod['prod_thumbimage']; ?>" width="100" height="100" alt=""></a></td>
                                        <td>
                                            <h2 class="product-name5">
                                                <p><?php echo $prod['prod_name']; ?></p>
                                                <a href="">Move to wishlist </a>|<a href="#register"  id="<?php echo $cart_id_pk; ?>" class="remove-click">Remove</a>
                                            </h2>

                                        </td>

            <!--<td class="a-center">
                    <a href="#" title="Edit item parameters">Edit</a>
                </td>-->
                                        <td class="a-right">
                                            <span class="cart-price">

                                                <span class="price"><span class="WebRupee"> Rs.</span><?php echo $prod['unit_price']; ?></span>            
                                            </span>


                                        </td>
                                        <td class="a-center">
                                            <input name="cart[14699][qty]" value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                                        </td>
                                        <td class="a-right last">
                                            <span class="cart-price">

                                                <span class="price"><span class="WebRupee"> Rs. </span><?php echo $prod['unit_price']; ?></span>            
                                            </span>
                                        </td>

                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>

                        <div class="cart-total-outer"><div class="cart-total-summary">Cart Summary (<span class="cart-text">1 Item(s)</span>)<br><span class="promo-text">(You can use your Promo Codes during Payment)</span></div><div class="cart-total-payment-text" align="right"><span class="fnt14">Shipping Charges: <span class="total-text">Rs 0</span></span><br>Payable Amount: <span class="total-text">Rs 7974</span></div>
                            <table style="margin-top:6px;padding-left: 8px;" width="300" height="50" >
                                <tr class="first last">
                                    <td colspan="50" width="">
                                        <table id="shop">



                                            <tr><td style="padding-right: 29px;" >Delivery country</td><td><select><option selected="selected">India</option>
                                                        <option>Srilanka</option>
                                                        <option>canada</option>
                                                        <option>Pakistan</option>
                                                    </select></tr>



                                        </table></p>


                                    </td>


                                </tr>
                            </table></div>
                        <div id="checkout-cart" class="cart-payment-outer" style="background-color:#fff"><div class="payment-button-outer"><div class="proceed-button"><span><a href="Proceed-to-payment.php">Proceed to Payment</a></span></div><div class="continue-button" onclick=""><span><a href="category-view.php">Add more item(s) to cart</a></span></div></div></div>
                    </fieldset>
                </form>
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

    </div>
</div>


