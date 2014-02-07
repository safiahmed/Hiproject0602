<div id="header_image">
    <div id="container">
        <div id="Header_wrapper"> 
            <div class="hanechitra2">
            </div>
            <div class="hanechitra3">
                <div id="innerlogo">
                    <ul>        
                        <li><a href="#"><img src="images/flike.png"></a></li>

                        <li><a href="#"><img src="images/inshare.png"></a></li>
                    </ul>
                </div>
            </div>
            <?php
if (!isset($_SESSION['reg_id'])) {
    ?>
    <div class="hanechitra4">
        <div id="upperlogo">
            <ul>    
                <li><a href="#openModal"><img src="images/login register.png"></a></li>
                <li><a href="#"><img src="images/mycart (1).png" style="margin-top:-3px"></a></li>
            </ul>
        </div>
    </div>
                 <?php include('index_login_signup.php'); ?>
    <?php
} else {
    ?>
    <div class="hanechitra4">
        <div id="upperlogo">
            <ul>    
                <li><a href="account-information.php"><img src="images/mycart (1).png" style="margin-top:-3px"></a></li>
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
            </div>
        </div>	
    </div>
</div>
