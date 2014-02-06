<ol class="products-list" id="products-list">
     <?php
    if($product_details != 0){
               foreach ($product_details as $prod) {
                    ?>
                            <li class="item first odd">
                                <a href="#" title="<?php echo $prod['prod_name']; ?>" class="product-image"><img src="<?php echo $prod['prod_thumbimage']; ?>" width="100" height="100" alt="<?php echo $prod['prod_name']; ?>"></a>
                                <div class="product-shop">
                                    <div class="f-fix">
                                        <h2 class="product-name"><a href="#" title="<?php echo $prod['prod_name']; ?>"><?php echo $prod['prod_name']; ?></a></h2>

                                        <div class="desc std">
                                            <?php echo $prod['prod_over_view']; ?>                         
                                        </div>



                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-474">
                                                <span class="price"><span class="WebRupee"> Rs. </span><?php echo $prod['prod_org_price']; ?>.00</span>                </span>

                                        </div>

                                        <p><a href="product-details.php?id=<?php echo $prod['prod_random']; ?>"><input type="image" src="images/view details.png" ></a></p>

                                    </div>
                                </div>
                            </li>
    <?php }}else{
        echo "!--||--No Products found--||--!";
    } ?>
                        </ol>