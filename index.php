<?php require_once './assets/auth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include('meta.php'); ?>
    <?php include('index-head.php'); ?>
    <style>
        #amount1{width: 35px;float: left;}
        #amount2{width: 35px;margin-left: 3%;}
        .content a
{
text-decoration:none;
color: #555;

}
    </style>
    <body>	
        <div id="share-wrapper">
            <ul class="share-inner-wrp">
                <!-- Facebook -->
                <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>

                <!-- Twitter -->
                <li class="twitter button-wrap"><a href="#">Tweet</a></li>
            </ul>
        </div>
        <div id="mrova-feedback">
            <div id="mrova-contact-thankyou" style="display: none;">
                Thank you.  We'hv received your feedback.
            </div>
            <div id="mrova-form">
                <form id="mrova-contactform" action="#" method="post">
                    <ul >
                        <li>
                            <label for="mrova-name">Your Name*</label> <input type="text" name="mrova-name" class="required" id="mrova-name" value="">
                        </li>
                        <li>
                            <label for="mrova-email">Email*</label> <input type="text" name="mrova-email" class="required" id="mrova-email" value="">
                        </li>
                        <li>
                            <label for="mrova-message">Message*</label>
                            <textarea class="required" id="mrova-message" name="mrova-message"  rows="8" cols="30"></textarea>
                        </li>
                    </ul>
                    <input type="submit" value="Send" id="mrova-sendbutton" name="mrova-sendbutton">
                </form>
            </div>
            <div id="mrova-img-control"></div>
        </div>

        <div id="wrapper">

            <?php include('header.php'); ?>
            <div id="page">
                <?php include('index-banners.php'); ?>
                <div class="headerpatch">
                    <img src="images/strip 3.png">
                </div>
                <div class="main-index-container">
                    <div class="left-container-index">
                        <?php include 'index-products.php'; ?>


                        <div class="join">
                            <div id="joinus">

                                <h2>Join Us</h2>

                                <form action="assets/controller-links.php" id="form_sub" method="post">
                                    <div id="inputid">

                                        <input type="text" id="test_email" class="email" value="email address" name="sub_email"  />
                                    </div>
                                    <input type="submit" value="subscribe" class="subsciber" name="subscribe"/>
                                </form>						

                            </div>
                            <div id="exist_sub" style="color: red; font-weight: bold;"></div>
                        </div>	
                    </div>
                    <!--<script src="http://code.jquery.com/jquery-1.7.2.js"></script>-->
                    <script>
                        
                        $(document).ready(function() {
                            $(".gobutton img").on('click', function() {
                                var val1 = $("#amount1").val();
                                var val2 = $("#amount2").val();
                                alert(val1 + val2);
                                $.post( "category-view.php", { name: "John", time: "2pm" } );
                            });

                        });
                    </script>
                    <div class="right-container-index">
                        <div class="pricebox">
                            <div class="gobutton">
                                <a href="javascript:void(0);"><img src="images/go.png" style="float:right;" /></a>
                            </div>
                            <div class="content2">
                                <div class="imagin">
                                    <p>
                                        <label for="amount">Range:</label>
                                        <input type="text" id="amount1" style="border:0; color:#f6931f; font-weight:bold;" disabled="disabled" />
                                        <input type="text" id="amount2" style="border:0; color:#f6931f; font-weight:bold;" disabled="disabled" />
                                    </p>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                        </div>
                        <div class="priceorder1">
                            <img src="images/category.png" alt="Present Offer">
                        </div>
<?php include 'index-category.php'; ?>
                        <div class="priceorder">
                            <img src="images/presentoffer.png" alt="Present Offer">
                        </div>
                        <div class="middle_box3_content1">
                            <div class="content">
                               <div class="col-md-3 col-sm-6 col-xs-6">
                                   <div class="blog-post">
                                       <div class="ImageWrapper">
                                           <img class="img-responsive" src="<?php echo $productoffer['prod_thumbimage'] ?>" alt="">
                                               <div class="ImageOverlayH"></div>
                                               <div class="Button StyleMg">
                                                   <span class="WhiteRounded"><a href=""><i class="fa fa-search"></i></a>
                                                   </span>
                                                   <span class="WhiteRounded"><a href=""><i class="fa fa-link"></i></a>
                                                   </span>
                                               </div>
                                       </div>

                                   </div>
                               </div>
                                <!--<div class="borderimage">
                                    <img src="#" alt="">
                                </div>-->
                                <a href="#"><span ><?php echo $productoffer['prod_name'] ?></span></a>
                                <br/>  
                                <div class="gallery-price2"><span><span class="WebRupee">Rs.</span></span><?php echo $productoffer['prod_offer_price'] ?>.00</div>

                                <div class="gallery-price"><strike><span class="WebRupee">Rs.</span> <?php echo $productoffer['prod_org_price'] ?>.00</strike></div>
                                <a href="product-details.php?id=<?php echo $productoffer['prod_random'] ?>"> <input type="image" src="images/view details.png" ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
<?php include('footer.php'); ?>
        </div>
        <span>
            <a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
            <span>


                <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script src="Js/bootstrap.js"></script>
                <script type="text/javascript">
                        $(document).ready(function() { // Ready Function Start
                            $("#myCarousel").carousel({interval: 2000});

                        });//Ready Function End
                </script>

                <!-- js placed at the end of the document so the pages load faster -->

                <script defer src="js/jquery.flexslider.js"></script>
                <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>


                <script src="js/jquery.easing.min.js"></script>
                <script src="js/link-hover.js"></script>

                <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>


                <!--common script for all pages-->
                <script src="js/common-scripts.js"></script>


                <!--common script for all pages-->
                <script>
                        $(window).load(function() {
                            $('[data-zlname = reverse-effect]').mateHover({
                                position: 'y-reverse',
                                overlayStyle: 'rolling',
                                overlayBg: '#fff',
                                overlayOpacity: 0.7,
                                overlayEasing: 'easeOutCirc',
                                rollingPosition: 'top',
                                popupEasing: 'easeOutBack',
                                popup2Easing: 'easeOutBack'
                            });
                        });

                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                start: function(slider) {
                                    $('body').removeClass('loading');
                                }
                            });
                        });

                        //    fancybox
                        jQuery(".fancybox").fancybox();

                        $(function() {
                            var $container = $('#gallery');
                            $container.isotope({
                                itemSelector: '.item',
                                animationOptions: {
                                    duration: 750,
                                    easing: 'linear',
                                    queue: false
                                }
                            });

                            // filter items when filter link is clicked
                            $('#filters a').click(function() {
                                var selector = $(this).attr('data-filter');
                                $container.isotope({filter: selector});
                                return false;
                            });
                        });
                </script>
                </body>
                </html>                                 