<?php
require_once './assets/my-controller.php';
$product=new Users();
$data=array();
$pro_details=$product->index_product_details($data);
$productoffer=$product->index_productoffer_details($data);
//print_r($productoffer);


?>
<div class="middle_boxes">
    <?php
    foreach ($pro_details as $prod)
{
    ?>
    <div class="middle_box1">
        <div class="content">
            <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                <img src="<?php echo $prod['prod_thumbimage']; ?>" alt="" />
                <div class="mask">
                    <a data-zl-popup="link" href="javascript:;">
                        <i class="icon-link"></i>
                    </a>
                    <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $prod['prod_thumbimage']; ?>">
                        <i class="icon-search"></i>
                    </a>
                </div>
            </div>
            <a href="#"><span><?php echo $prod['prod_name']; ?></span></a>
            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $prod['prod_org_price'].".00"; ?></div>
            <a href="product-details.php?id=<?php echo $prod['prod_random']; ?>"><input type="image" src="images/view details.png" /></a>
        </div>
    </div>
<?php } ?>

       
</div>
    <div style="clear: both"></div>