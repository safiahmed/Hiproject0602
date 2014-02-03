
<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();
$product_details=$product->index_subproductcategory_name($cat_id3);
?>



<div id="grid-view">
    <?php
    if($product_details != 0){
                foreach ($product_details as $prod) {
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
                                               <!-- <img src="#" alt="">-->	
            <a href="#"><span><?php echo $prod['prod_name']; ?></span></a>
            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $prod['prod_org_price']; ?>.00</div>
            <a href="product-details.php?id=<?php echo $prod['prod_random']; ?>"><input type="image" src="images/view details.png" ></a></a>
        </div>
    </div>
                <?php } 
    }else{
        echo "!--||--No Products found--||--!";
    }
    
    ?>
</div>