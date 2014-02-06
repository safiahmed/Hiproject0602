<?php
include './assets/auth.php';
include './assets/my-controller.php';
$dash = new Users();
if (isset($_POST['orderid'])) {
    $orderid = $_POST['orderid'];
    $summary = $dash->view_ordersummary($orderid);
}
?>
<div class="order-details">
    <!-- Order summary block -->
    <div class="lastUnit padding5">
        <div class="line summary-section">
            <div class="unit size3of5">
                <div class="summary-inner">
                    <h2>Customer Information</h2>

                    <ul>
                        <li>
                            <?php echo $summary['name']; ?>  
                        </li>

                        <li>
                            <div class="line">
                                <label>Email ID:  </label>
                                <?php echo $summary['email']; ?>                     
                            </div>
                        </li>
                        <li>
                            <label>Mobile:</label>  <?php echo $summary['mobile']; ?> 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="unit size3of5">
                <div class="summary-inner">
                    <h2>Order Summary</h2>
                    <ul>
                        <li>
                            <?php echo $summary['prod_qty']; ?> Item      
                        </li>
                        <li>
                            <div class="line">
                                <label>Order ID:  </label>
                                <?php echo $summary['order_no']; ?>                 
                            </div>
                        </li>
                        <li>
                            <label>Date:</label>  <?php echo $summary['order_date']; ?>  
                        </li>
                        <li>
                            <label>Original Price:</label>  <?php echo $summary['prod_org_price']; ?>  
                        </li>
                        <li class="last">
                            <div>
                                <label>Total:</label>
                                <strong>Rs. <span class="fk-font-verybig"><?php echo $summary['prod_tot_price']; ?>          </span></strong>
                            </div>

                            <!-- Display EMI details -->
                            <div class="order-status tpadding10">
                                <span class="fk-inline-block successmsg"></span>
                                <span class="status"><?php
                                    if ($summary['order_status'] == 1) {
                                        echo 'Delivered';
                                    } else {
                                        echo 'Pending';
                                    }
                                    ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lastUnit">
                <div class="summary-inner">
                    <h2>Shipping Address</h2>
                    <ul>
                        <li class="first">      <?php echo $summary['ship_company']; ?>    
                        </li>
                        <li>
                            <?php echo $summary['ship_streetaddress']; ?>    <br/>
                            <?php echo $summary['ship_city']; ?> <br/>
                            <?php echo $summary['ship_state']; ?> <br/>
                            <?php echo $summary['ship_country']; ?> <br/>
                            <?php echo $summary['zip']; ?> <br/>
                        </li>
                        <li class="last">
                            <?php echo $summary['mobile']; ?>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
