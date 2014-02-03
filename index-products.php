<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();
$pro_details = $product->index_product_details($data);
$productoffer = $product->index_productoffer_details($data);
//print_r($productoffer);
?>
<div class="middle_boxes">
<?php
foreach ($pro_details as $prod) {
    ?>
        <div class="middle_box1">
            <div class="content">
               
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="blog-post">
                            <div class="ImageWrapper">
                                <img class="img-responsive" src="<?php echo $prod['prod_thumbimage'] ?>" alt="">
                                <div class="ImageOverlayH"></div>
                                <div class="Button StyleMg">
                                    <span class="WhiteRounded"> <a href="<?php echo $prod['prod_thumbimage'] ?>" rel="lightbox" title="Double click for full size... (unless you have a large monitor)"><i class="fa fa-search"></i></a>
                                    </span>
                                    <span class="WhiteRounded"><a href=""><i class="fa fa-link"></i></a>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="#"><span><?php echo $prod['prod_name']; ?></span></a>
                    <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $prod['prod_org_price'] . ".00"; ?></div>
                    <a href="product-details.php?id=<?php echo $prod['prod_random']; ?>"><input type="image" src="images/view details.png" /></a>
                </div>
            </div>
<?php } ?>


    </div>
    <div style="clear: both"></div>