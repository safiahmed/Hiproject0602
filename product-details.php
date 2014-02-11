<?php require_once './assets/auth.php'; ?>
<?php
if (isset($_REQUEST['id'])) {
    $_SESSION['ids'] = $_REQUEST['id'];
}
if (isset($_SESSION['ids'])) {
    echo $prod_random = $_SESSION['ids'];
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php require_once './meta.php'; ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Home</title>

        <link href="css/knowmore4.css" rel="stylesheet" type="text/css" media="screen" />
        <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
            <link rel="stylesheet" href="css/shaili.css" /> 
            <link rel="stylesheet" href="css/bootstrap.css" />
            <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
            <link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'/>
            <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
            <link rel="stylesheet" href="/resources/demos/style.css"/>
            <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font"/>
            <script type="text/javascript" src="http://baijs.nl/tinyscrollbar/js/jquery.tinyscrollbar.js"></script>	
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
            <script type="text/javascript" src="js/picbox.js"></script>
            <link rel="stylesheet" href="css/picbox.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/header_fotter.css" />
            <script type="text/javascript">
                $(document).ready(function() {
                    var pageTitle = document.title; //HTML page title
                    var pageUrl = location.href; //Location of the page	
                    //user hovers on the share button	
                    $('#share-wrapper li').hover(function() {
                        var hoverEl = $(this); //get element

                        //browsers with width > 699 get button slide effect
                        if ($(window).width() > 699) {
                            if (hoverEl.hasClass('visible')) {
                                hoverEl.animate({"margin-left": "-117px"}, "fast").removeClass('visible');
                            } else {
                                hoverEl.animate({"margin-left": "0px"}, "fast").addClass('visible');
                            }
                        }
                    });
                    //user clicks on a share button
                    $('.button-wrap').click(function(event) {
                        var shareName = $(this).attr('class').split(' ')[0]; //get the first class name of clicked element

                        switch (shareName) //switch to different links based on different social name
                        {
                            case 'facebook':
                                var openLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                                break;
                            case 'twitter':
                                var openLink = 'http://twitter.com/home?status=' + encodeURIComponent(pageTitle + ' ' + pageUrl);
                                break;
                            case 'digg':
                                var openLink = 'http://www.digg.com/submit?phase=2&amp;url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                                break;
                            case 'stumbleupon':
                                var openLink = 'http://www.stumbleupon.com/submit?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                                break;
                            case 'delicious':
                                var openLink = 'http://del.icio.us/post?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                                break;
                            case 'google':
                                var openLink = 'https://plus.google.com/share?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                                break;
                            case 'email':
                                var openLink = 'mailto:?subject=' + pageTitle + '&body=Found this useful link for you : ' + pageUrl;
                                break;

                        }
                        //Parameters for the Popup window
                        winWidth = 650;
                        winHeight = 400;
                        winLeft = ($(window).width() - winWidth) / 2,
                                winTop = ($(window).height() - winHeight) / 2,
                                winOptions = 'width=' + winWidth + ',height=' + winHeight + ',top=' + winTop + ',left=' + winLeft;
                        //open Popup window and redirect user to share website.
                        window.open(openLink, 'Share This Link', winOptions);
                        return false;
                    });

                    //popup starts

                    $(".cart-click").click(function() {
                        var prod_val = $(".prod_val").val();
                        var sess_val = $(".sess_val").val();
                        var altval = $(this).attr('alt');
                        var price = $("#attr_price" + altval).children("input").val();
                        $.post("assets/controller-links.php", {p_val: prod_val, s_val: sess_val, price: price}, function(data) {
                            $("#replace-cart").html(data);
                        });
                    });


                    //$(".remove-click").click(function() {
                    // alert(2);

                    //});

                });
            </script>
            <link href="css/charisma-app.css" rel="stylesheet" />
            <!--jquery for zoom-->

            <script src='js/jquery-1.8.3.min.js'></script>

            <!-- end-->

            <!--zoom effect css-->
            <style>
                #gallery_01 img{border:1px solid white;
                                width:97px;
                }
                #zoom_03
                {
                    width: 300px !important;
                }


                /*Change the colour*/
                .active img{border:1px dotted #333 !important;

                }

            </style>
            <style type="text/css">
                body {
                    background-color: #fff;
                    color: #000;
                }
                h1, p {
                    text-align: center;
                }
                p {
                    /* margin-top: 100px;*/
                }
                a {
                    font-weight: bold;
                    /*color: #f00;*/
                }
            </style>
            <!--end of css-->


    </head>
    <body onload="initLightbox()">	

        <div id="share-wrapper">
            <ul class="share-inner-wrp">
                <!-- Facebook -->
                <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>
                <!-- Twitter -->
                <li class="twitter button-wrap"><a href="#">Tweet</a></li>
            </ul>
        </div>

        <div id="mrova-img-control" style="margin-top: -84px; top: 50%;"></div>
        <div id="wrapper">

            <?php include('header.php'); ?>
            <?php require './assets/my-controller.php'; ?>

            <?php
            require 'product-details_query.php';
            ?>
            <div id="page">
                <div class="col2-left-layout1">
                    <div class="main_home">

                        <div id="breadcrumb">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>/</li>
                                <li><a href="category-view.php">Category-view</a></li>
                                <li>/</li>
                                <li><a href="#"><?php echo $productname; ?></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="product-name">
                    <h1><?php echo $productname; ?></h1>
                </div>		
                <div class="col-main">


                    <div class="product-view">
                        <!-- zoom effect-->
                        <img id="zoom_03" width="300px" src='<?php echo $image1; ?>'  data-zoom-image="<?php echo $image1; ?>"  />
                        <div id="gallery_01" style="margin-top: -200px;" >
                            <ul>

                                <li>  <a href="#" class="elevatezoom-gallery " data-update="" data-image="<?php echo $image1; ?>" data-zoom-image="<?php echo $image1; ?>" >
                                        <img src="<?php echo $image1; ?>" width="100"></a> </li>

                                <li>  <a href="#" class="elevatezoom-gallery " data-update="" data-image="<?php echo $image2; ?>"  data-zoom-image="<?php echo $image2; ?>" >
                                        <img src="<?php echo $image2; ?>" width="100"></a> </li>

                                <li>  <a href="#" class="elevatezoom-gallery "  data-update="" data-image="<?php echo $image3; ?>" data-zoom-image="<?php echo $image3; ?>">
                                        <img src="<?php echo $image3; ?>" width="100"></a> </li>

                            </ul>

                        </div>

                        <script>
                $("#zoom_03").elevateZoom({gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true});

                $("#zoom_03").bind("click", function(e) {
                    var ez = $('#zoom_03').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    return false;
                });
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
                        <!--end-->	
                    </div>
                    <div  class="product-shop">

                        <div class="action-section clearfix">
                            <input type="hidden" id="productId" name="productId" value="31230519">
                                <input type="hidden" id="lazyInformationUrl" name="lazyInformationUrl" value="/product/ajax/lazyInformations">

                                    <h2 id="codShipMsg" class="payment_options_h2"><span class="tick-title">&nbsp;</span>Cash on Delivery</h2>
                                    <div class="box_white">
                                        <div class="btns-sec-js">

                                            <div class="price-box">Kit No: <span style="color:#E72E1E;"><?php echo $modelno; ?></span></div>

                                            <div class="price-box"><a href="#projects_kit">View Kit price</a></div>

                                            <div class="price-box"><img src="images/icon-add-to-wishlist2.png"/><a href="mywishlistnew.php"> Add Your Wishlist</a></div>

                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <div class="price-box"><a href="#review"><?php echo $rows; ?> Review(s)</a></div>
                                            </div>

                                            <div class="price-box">
                                                                            <button type="button" class="product-sprite cursor" id="AddToCart"></button>
                                                                            <a href="javascript:void(0);"  class="save-prd txt-up f-bold mt10 d-block fs10 c666 txt-center"><small class="d-inline common-sprite v-align-mid"></small> Save for later</a>

                                                                        </div>

                                        </div>



                                        <!-- end of code -->
                                    </div>

                                    </div>




                                    </div>

                                    <div class="project_kit1">




                                        <span class="field-content" >
                                            <script src='js/jquery.elevatezoom.js'></script>
                                            <script src='js/jquery.elevateZoom-3.0.8.min.js'></script>
                                            <!-- end-->
                                            <a href="<?php echo $image1; ?>" rel="lightbox" title="Double click for full size... (unless you have a large monitor)">Photo Full Screen</a> 


                                        </span>
                                        <div class="short-description">

                                            <div class="std"><span>Kit Description: </span><?php echo $videodesc; ?></div>
                                        </div>	
                                        <div class="border-class">

                                        </div>
                                        <div class="product_desc" >
                                            <div class="block-title3">
                                                <div id="breadcrumb1">
                                                    <ul>
                                                        <div id="idian">
                                                            <li><img src="images/16.png"/></li>
                                                            <li> <span style="color:#bf6008;">Project Description</span> </li>

                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="box-content">
                                                <ul class="nav nav-tabs" id="myTab">
                                                    <li class="active"><a href="#Video1">Video</a></li>
                                                    <li><a href="#Project_Abstract">Project Abstract</a></li>
                                                    <li><a href="#Block_Diagram">Block Diagram</a></li>

                                                    <li><a href="#Download_Abstract">Downloads</a></li>

                                                </ul>

                                                <div id="myTabContent" class="tab-content">
                                                    <div class="tab-pane active" id="Video1">
                                                        <h3>Video </h3>
                                                        <p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo $videolink; ?>" frameborder="0" width="320" height="215"></iframe></p>
                                                        <p> <?php echo $videodesc; ?>  </p>
                                                    </div>
                                                    <div class="tab-pane" id="Project_Abstract">
                                                        <h3>Project Abstract <small>small text</small></h3>
                                                        <p> <?php echo $videodesc; ?> </p>
                                                    </div>
                                                    <div class="tab-pane" id="Block_Diagram">
                                                        <h3>Block Diagram </h3>
                                                        <p><img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo $product_block; ?>" alt="" width="500" height="352"></p>
                                                        <p><?php echo $videodesc; ?> </p>
                                                    </div>

                                                    <div class="tab-pane" id="Download_Abstract">

                                                        <h3>Download Abstract </h3>
                                                        <p><a class="prod-attach" target="_blank" title="<?php echo $productname; ?>" href=" <?php echo $download; ?>"><span class="attach-img"><img src="images/doc.png" alt="Download" style="margin-right: 5px;"></span><span class="attach-title"><?php echo $productname; ?></span></a></p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div id="projects_kit"></div>
                                        <?php include('projectkitcontent.php'); ?>	
                                        <div class="border-class">
                                        </div>

                                        <div id="product">
                                        </div>


                                        <div id="addyourreview">
                                        </div>
                                        <div class="reviers" >
                                            <div class="block-title3">
                                                <div id="breadcrumb1">
                                                    <ul>
                                                        <div id="idian">
                                                            <li><img src=""/></li>
                                                            <li> <span style="color:#bf6008;"></span> </li>

                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>




                                        </div>


                                        <div id="write_review">



                                        </div>
                                        <div class="border-class">

                                        </div>
                                        <div id="review">
                                        </div>
                                        <div class="block-title3">

                                            <div id="breadcrumb2">
                                                <ul>
                                                    <div id="idian">
                                                        <li><img src="images/16.png"/></li>
                                                        <li> <span style="color:#bf6008;">Reviews</span> </li>

                                                    </div>

                                                </ul>
                                            </div>
                                        </div>




                                        <div class="customer_reviews" >

                                            <div class="review_list">


                                                <?php
                                                $i = 0;
//                                                            print_r($review_details);

                                                foreach ($review_details as $prod) {


                                                    $mod = ($i % 2);
                                                    if ($mod == 0) {
                                                        $liclass = "fk_reviews1";
                                                        $unit = "unit size1of5 section1";
                                                    } else if ($mod == 1) {
                                                        $liclass = "fk_reviews2";
                                                        $unit = "unit1 size1of5 section1";
                                                    }
                                                    ?>

                                                    <div class="<?php echo $liclass; ?>">

                                                        <div class="<?php echo $unit; ?>">
                                                            <?php $rating = $prod['r_rating']; ?>
                                                            <div class="rating-box1">
                                                                <div class="rating" style="width:<?php echo $rating * 20 ?>%"></div>
                                                            </div>

                                                            <div class="line">

                                                                <a class="" profile_name="" href="#">
                                                                    <?php echo $prod['r_name']; ?></a>

                                                            </div>
                                                            <div class="date line fk-font-small">

                                                                09 December 13         
                                                            </div>


                                                        </div>

                                                        <div class="comment_list">
                                                            <div class="line fk-font-normal bmargin5 dark-gray">
                                                                <strong><?php echo $productname; ?></strong>
                                                            </div>
                                                            <p class="line bmargin10">
                                                                <?php echo $prod['write_reviews']; ?><br>
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                                ?>




                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-right sidebar">

                                        <div class="mrp">

                                            <table class="table table-bordered">

                                                <tr>
                                                    <td><div class="block-title8">
                                                            <strong><span style="color:#FFF;">People also bought</span></strong>
                                                        </div></td>
                                                </tr>
                                                <tr></br></tr>
                                                <?php
                                                foreach ($people_details as $prod) {
                                                    ?>

                                                    <tr ><td><span style="font-size:12px; font-weight:bold"><span style="color: #2071a1;"><a href="#" style="text-decoration:none;font-family: 'Open Sans', sans-serif;"><?php echo $prod['prod_name']; ?></a></span></span></td></tr>
                                                    <tr><td> <img src="<?php echo $prod['prod_thumbimage']; ?>" style="margin-left: 32px;
                                                                  margin-top: 8px;
                                                                  width: 180px;" /></td></tr>



                                                                                                            <!--<tr><td><div class="block-title">
                                                                                                                        <strong><span><center style="font-family:'Open Sans', sans-serif;" >Also Purchased</center</span></strong>
                                                                                                                    </div></td>
                                                                                                            </tr>
                                                                                                            <tr id="liid"><td><span style="font-size:12px; font-weight:bold"><span style="color: #2071a1;"><a href="#" style="text-decoration:none;font-family: 'Open Sans', sans-serif;">Auto Power Supply Control from 4 Differe...</a></span></span></td></tr>
                                                                                                            <tr><td><img src="Complete 1st folder\1 Rx (1).png" style="margin-left: 32px;margin-top: 8px; width: 180px;" /></td></tr>-->
                                                <?php } ?>
                                            </table>
                                        </div>


                                        <div class="block block-related">


                                            <div class="block block-related1">
                                                <div class="block-title">
                                                    <strong><span style="color:#FFF;">Similar Products</span></strong>
                                                </div>
                                                <ol class="mini-products-list" id="block-related">
                                                    <?php
                                                    foreach ($productsubdetails_details as $prod) {
                                                        ?>
                                                        <li class="item odd">

                                                            <div class="product">
                                                                <a href="#" title="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque." class="product-image"><img src="<?php echo $prod['prod_thumbimage']; ?>" width="150" height="100" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque."></a>
                                                                <div class="product-details">
                                                                    <p class="product-name1"><a href="#"><?php echo $prod['prod_name']; ?></a></p>
                                                                    <div class="wapper-related">



                                                                        <div class="price-box1">
                                                                            <span class="regular-price" id="product-price-438-related">
                                                                                <span class="price"><span class="WebRupee"> Rs. </span> <?php echo $prod['prod_org_price']; ?></span>                </span>

                                                                        </div>
                                                                        <a href="" style="float:right;margin-top: -13px; padding:4px;">View more>></a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    <?php } ?> 


                                                </ol>
                                            </div>

                                            <div id="register" class="modalDialog1">

                                                <div id="replace-cart">
                                                    <?php // include 'addtocart1.php'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                    </div>
                                    </div>
                                    </div>		
                                    </div>	

                                    <?php include('footer.php'); ?>

                                    </div>

                                    <span>
                                        <a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
                                        <span>


                                            <script>
                                                $("#zoom_03").elevateZoom({gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true});

                                                $("#zoom_03").bind("click", function(e) {
                                                    var ez = $('#zoom_03').data('elevateZoom');
                                                    $.fancybox(ez.getGalleryList());
                                                    return false;
                                                });

                                            </script>
                                            <!-- external javascript
                                            ================================================== -->
                                            <!-- Placed at the end of the document so the pages load faster -->

                                            <script src="js/jquery-1.7.2.min.js"></script>
                                            <!-- jQuery UI -->
                                            <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
                                            <!-- transition / effect library -->
                                            <script src="js/bootstrap-transition.js"></script>
                                            <!-- alert enhancer library -->
                                            <script src="js/bootstrap-alert.js"></script>
                                            <!-- modal / dialog library -->
                                            <script src="js/bootstrap-modal.js"></script>
                                            <!-- custom dropdown library -->
                                            <script src="js/bootstrap-dropdown.js"></script>
                                            <!-- scrolspy library -->
                                            <script src="js/bootstrap-scrollspy.js"></script>
                                            <!-- library for creating tabs -->
                                            <script src="js/bootstrap-tab.js"></script>
                                            <!-- library for advanced tooltip -->
                                            <script src="js/bootstrap-tooltip.js"></script>
                                            <!-- popover effect library -->
                                            <script src="js/bootstrap-popover.js"></script>
                                            <!-- button enhancer library -->
                                            <script src="js/bootstrap-button.js"></script>
                                            <!-- accordion library (optional, not used in demo) -->
                                            <script src="js/bootstrap-collapse.js"></script>
                                            <!-- carousel slideshow library (optional, not used in demo) -->
                                            <script src="js/bootstrap-carousel.js"></script>
                                            <!-- autocomplete library -->
                                            <script src="js/bootstrap-typeahead.js"></script>
                                            <!-- tour library -->
                                            <script src="js/bootstrap-tour.js"></script>
                                            <!-- library for cookie management -->
                                            <script src="js/jquery.cookie.js"></script>
                                            <!-- calander plugin -->
                                            <script src='js/fullcalendar.min.js'></script>
                                            <!-- data table plugin -->
                                            <script src='js/jquery.dataTables.min.js'></script>

                                            <!-- chart libraries start -->
                                            <script src="js/excanvas.js"></script>
                                            <script src="js/jquery.flot.min.js"></script>
                                            <script src="js/jquery.flot.pie.min.js"></script>
                                            <script src="js/jquery.flot.stack.js"></script>
                                            <script src="js/jquery.flot.resize.min.js"></script>
                                            <!-- chart libraries end -->

                                            <!-- select or dropdown enhancer -->
                                            <script src="js/jquery.chosen.min.js"></script>
                                            <!-- checkbox, radio, and file input styler -->
                                            <script src="js/jquery.uniform.min.js"></script>
                                            <!-- plugin for gallery image view -->
                                            <script src="js/jquery.colorbox.min.js"></script>
                                            <!-- rich text editor library -->
                                            <script src="js/jquery.cleditor.min.js"></script>
                                            <!-- notification plugin -->
                                            <script src="js/jquery.noty.js"></script>
                                            <!-- file manager library -->
                                            <script src="js/jquery.elfinder.min.js"></script>
                                            <!-- star rating plugin -->
                                            <script src="js/jquery.raty.min.js"></script>
                                            <!-- for iOS style toggle switch -->
                                            <script src="js/jquery.iphone.toggle.js"></script>
                                            <!-- autogrowing textarea plugin -->
                                            <script src="js/jquery.autogrow-textarea.js"></script>
                                            <!-- multiple file upload plugin -->
                                            <script src="js/jquery.uploadify-3.1.min.js"></script>
                                            <!-- history.js for cross-browser state change on ajax -->
                                            <script src="js/jquery.history.js"></script>
                                            <!-- application script for Charisma demo -->
                                            <script src="js/charisma.js"></script>
                                            <script>
                                                $('#scrollbar1').tinyscrollbar();
                                            </script>
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
                                            <!-->>>>>>> branch 'master' of https://github.com/safiahmed/HiProjects.git-->

