<?php 
//require_once './assets/my-controller.php';
if(!isset($_SESSION['cart_session_id'])){
    $val_cart = 0;
}else{
    $cart_det = new Users();
    $val_cart = $cart_det->count_cart_val();
//    echo $val_cart;
}
?>
<style>
    .cart-val{position: absolute;z-index: 10;margin: 8px 0 0 23px;color: white;}
    .cart-img{z-index: 9;}
</style>
<div id="header_image">
    <div id="container">
        <div id="Header_wrapper"> 
            <div class="hanechitra2">
            </div>
            <?php
            if (!isset($_SESSION['reg_id'])) {
                ?>
                <div class="hanechitra4">
                    <div id="innerlogo">
                        <ul>               
                            <li><a href="#"><img src="images/flike.png"></a></li>
                            <li>
                                <a href = "javascript:void(0)" onclick = "log_signup()">
                                    <img src="images/login register.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php include('index_login_signup.php'); ?>
                <?php
            } else {
                ?>
                <div class="hanechitra3">
                    <div id="innerlogo">
                        <ul>            
                            <li>Hi <?php echo $_SESSION['email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href="account-information.php">my account</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <!--<li><a href="#"><img src="images/flike.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>-->
                            <li><a href="logout.php">logout</a></li>
                        </ul>
                    </div>
                </div>
                <?php
            }
            ?>
            <div id="menu">
                <ul id="main">        
                    <li <?php if (strpos($page, 'index')) echo "class='current_page_item'"; ?>><a href="index.php">Home</a></li>
                    <li <?php if (strpos($page, 'our-expertise')) echo "class='current_page_item'"; ?>><a href="our-expertise.php">Our Expertise</a></li>
                    <li <?php if (strpos($page, 'project-kits')) echo "class='current_page_item'"; ?>><a href="project-kits.php">Project Kits</a></li>
                    <li <?php if (strpos($page, 'LearningMaterial')) echo "class='current_page_item'"; ?>><a href="LearningMaterial.php">Learning Material</a></li>
                    <li <?php if (strpos($page, 'service-center')) echo "class='current_page_item'"; ?>><a href="service-center.php">Service Center</a></li>
                    <li <?php if (strpos($page, 'contact-us')) echo "class='current_page_item'"; ?>><a href="contact-us.php">Contact </a></li>
                    <li><input type="search" placeholder="Enter Search terms"></li>
                </ul>
                <ul style="width: 99px;float: right;">
                    <li>
                        <span class="cart-val"><?php echo $val_cart; ?></span>
                        <img src="images/my cart copy.png" class="cart-img" />
                    </li>
                </ul>
            </div>
        </div>	
    </div>
</div>
