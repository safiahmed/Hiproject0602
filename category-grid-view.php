
<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();
$product_details=$product->index_productcategory_name($cat_id_index);
?>



<div id="grid-view">
    <?php
    if($product_details != 0){
                foreach ($product_details as $prod) {
                    ?>
    <div class="middle_box1">
        <div class="content">
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