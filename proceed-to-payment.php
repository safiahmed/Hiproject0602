<?php
require_once './assets/auth.php';
require_once './assets/my-controller.php';

echo $cart_session_id = $_SESSION['cart_session_id'];
echo '<br>';
echo $_SESSION['reg_id'];

if (isset($_SESSION['reg_id'])) {
    $uid = $_SESSION['reg_id'];
    $product = new Users();
    $data = array();
    $shippindid = $product->shipping_details($uid);
    foreach ($shippindid as $prod) {
        $name = $prod['name'];
        $email = $prod['email'];
        $mobile = $prod['mobile'];
    }
    $shippindaddress = $product->shippingaddress_details($uid);
    if ($shippindaddress != 0) {
        foreach ($shippindaddress as $prod) {
            $address = $prod['ship_streetaddress'];
            $city = $prod['ship_city'];
            $zipcode = $prod['ship_zip'];
            $telephone = $prod['ship_tel'];
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Home</title>
        <link href="css/knowmore2.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/shaili.css" /> 
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-cerulean1.css" />
        <link rel="stylesheet" href="css/bootstrap-cerulean2.css" />
        <link rel="stylesheet" href="css/bootstrap-cerulean22.css" />
        <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
        <link href="css/shoppingchat2.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="js/showhide.js"></script>

        <link  href="css/bootstrap-cerulean22.css" rel="stylesheet">
            <link rel="stylesheet" href="css/header_fotter.css" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
                <script src="Js/mrova-feedback-form.js" type="text/javascript"></script>
                <link rel="stylesheet" href="css/mrova-feedback-form.css" type="text/css"/>

                <style type="text/css">
                    body {
                    }
                    .sidebar-nav {
                        padding: 9px 0;
                    }

                    .left-proceed{ width: 50%;float: left; height: auto;}
                    .right-proceed{width: 100%; height: auto;}
                </style>
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
                    });
                </script>

                <script>
                    $(document).ready(function() {
                        $('body').on('click', '#shopping-cart-table tbody tr', function() {
                            var qty = $('#pdtqty').val();
                            var price = $('#shopping-cart-table tbody tr').children('td:nth-child(3)').text();
                            var amount = qty * price;
                            $('#shopping-cart-table tbody tr').children('td:nth-child(5)').text(amount);
                            alert(qty);
                        });

                        $("#order").hide();
                        $("#show").click(function() {
                            $("#order").show();
                        });

                        $('.paymentlogin_button').click(function(e) {
                            action = 'assets/controller-links.php';
                            console.log();
                            e.preventDefault();
                            var email = $('input[name=paymentemail]').val();
                            var password = $('input[name=paymentpassword]').val();
                            $.post(action, {paymentemail1: email, paymentpassword1: password}, function(data) {
                                if (data == 1) {
                                    $('#paymentlogin1').submit();
                                }
                                else {
                                    alert('Account Does not Exist!! Please register and Continue. Thank You.');
                                }
                            });
                        });

                        $('.shiptoaddress').click(function() {
                            var fname = $('input[name=loginname]').val();
                            var mobile = $('input[name=loginmobile]').val();
                            var address = $('#recent address').children('strong:nth-child(1)').text();
                            var city = $('#recent address').children('strong:nth-child(3)').text();
                            var zipcode = $('#recent address').children('strong:nth-child(5)').text();
                            var telephone = $('#recent address').children('strong:nth-child(7)').text();

                            $('input[name=shipname]').val(fname);
                            $('input[name=shipmobile]').val(mobile);
                            $('textarea[name=shipaddress]').val(address);
                            $('input[name=shipcity]').val(city);
                            $('input[name=shiptel]').val(telephone);
                            $('input[name=shipcode]').val(zipcode);
                        });

                        $('.shipaddress_submit').click(function(e) {
                            var action = 'assets/controller-links.php';
                            var data = $('#newshippingaddress').serializeArray();
                            console.log();
                            e.preventDefault();
                            $.post(action, {newshipmentdata: data}, function(d) {
                                $('#ordercartview').html(d);
                            });
                        });
                    });
                </script>
                <script>
                    $(function() {
                        $("#tabss").tabss().addClass("ui-tabss-vertical ui-helper-clearfix");
                        $("#tabss li").removeClass("ui-corner-top").addClass("ui-corner-left");
                    });
                </script>

                <script>
                    $(document).ready(function() {
                        $("#order").hide();


                    });
                </script>	

                <style>
                    #gallery_01 img{border:1px solid white;
                                    width:97px;
                                    padding-top:17px;}

                    .shipaddress_submit{
                        cursor: pointer;
                    }

                    .cart2 select, textarea,
                    input[type="text"],
                    input[type="password"],
                    input[type="datetime"],
                    input[type="datetime-local"],
                    input[type="date"], input[type="month"],
                    input[type="number"], input[type="email"],
                    input[type="tel"], input[type="color"], .uneditable-input { height: 30px !important;}
                    /*Change the colour*/

                </style>
                </head>
                <body>	


                    <div id="share-wrapper">
                        <ul class="share-inner-wrp">
                            <!-- Facebook -->
                            <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>

                            <!-- Twitter -->
                            <li class="twitter button-wrap"><a href="#">Tweet</a></li>


                        </ul>
                    </div>

                    <?php include'feedback.php'; ?>
                    <div id="wrapper">
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

                                    <?php include 'main-login.php'; ?>


                                    <div id="menu">
                                        <ul id="main">        
                                            <li  id="home_leftline"><a href="index.php">Home</a></li>
                                            <li><a href="ourexpertisee.php">Our Expertise</a></li>
                                            <li ><a href="project-kits.php">Project Kits</a></li>
                                            <li><a href="LearningMaterial.php">Learning Material</a></li>

                                            <li><a href="dealers.php">Dealers Network</a></li>
                                            <li><a href="">Support</a></li>
                                            <li><a href="Contactus.php">Contact </a></li>
                                            <li><input type="search" placeholder="Enter Search terms"></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div id="page">

                            <div class="col2-left-layout1">

                            </div>		
                            <div class="col-main">
                                <div id="breadcrumb">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li>/</li>
                                        <li><a href="category-view.php">Category-view</a></li>
                                        <li>/</li>
                                        <li><a href="project-details.php">Project-Details</a></li>
                                        <li>/</li>
                                        <li><a href="#">Proceed-to-Payment.php</a></li>
                                    </ul>
                                </div>
                                <div id="message_view">

                                    <div class="navbar">
                                        <div class="navbar-inner">
                                            <a class="brand" href="#">Shopping Cart</a>
                                        </div>
                                    </div> 

                                </div>

                            </div>
                            <div class="project_kit">


                                <div class="box-content">
                                    <div class="left-proceed">
                                        <?php
                                        if (!isset($_SESSION['reg_id'])) {
                                            ?>
                                            <div class="border-class" style="border:1px solid #ddd; margin: 15px;background:#ddd">
                                                <font color="black">Please Login</font>
                                                <form id="paymentlogin1" action="assets/controller-links.php" method="post">
                                                    <table id="login-tab">
                                                        <tr>
                                                            <td width="80" align="right;">Email<font color="red">*</font></td><td width="20">:</td><td><input type="text" name="paymentemail"></input></td></tr>
                                                        <tr> <td width="80" align="right;">Password<font color="red">*</font></td><td>:</td><td><input type="password" name="paymentpassword"></input></td></tr>

                                                        <tr>
                                                            <td><input type="submit" name="paymentlogin_button1" value="Sign up!" class="paymentlogin_button forbutton" onclick="return validate();"/></td><td></td>
                                                            <td><img src="img/login_facebook.png" class="for_facebook" ></td>
                                                        </tr>

                                                                                                                    <!--<tr><td></td><td></td><td><a href="#"><img src="img/login_facebook.png" class="for_facebook" ></a></td></tr>-->
                                                    </table>
                                                </form>
                                            </div>

                                            <?php
                                        } else {
                                            ?>
                                            <div class="border-class" style="border:1px solid #ddd;margin: 15px;background:#ddd">
                                                <form>
                                                    <table id="login-tab"><tr>
                                                            <td width="80" align="right;">Name<font color="red">*</font></td><td width="20">:</td><td><input type="text" disabled="disabled" name="loginname"value="<?php echo $name; ?>"></input></td></tr>
                                                        <tr> <td width="80" align="right;">Email<font color="red">*</font></td><td>:</td><td><input type="text" disabled="disabled" name="loginemail" value="<?php echo $email; ?>"></input></td></tr>
                                                        <tr><td width="80" align="right;">Number<font color="red">*</font></td><td>:</td><td><input type="text" disabled="disabled" name="loginmobile" value="<?php echo $mobile; ?>"></input></td></tr>


                                                    </table>
                                                </form>
                                            </div>
                                            <?php
                                        }
                                        ?> </br></br></br></br>
                                        <div id="shipping-tab2" >
                                            <?php if (isset($_SESSION['reg_id']) && $shippindaddress != 0) { ?>
                                                <h3 style="float:left;padding-top: 10px;">Address:</h3>
                                                <div id="recent">

                                                    <address>

                                                        <strong><?php echo $address; ?></strong><br/>   
                                                        <strong><?php echo $city; ?></strong><br/>
                                                        <strong><?php echo $zipcode; ?></strong><br/>
                                                        Ph: <strong><?php echo $telephone; ?> </strong>
                                                    </address>

                                                    <a href="#" class="shiptoaddress"><img src="images/ship to this address.png"/></a>

                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="right-proceed">
                                        <?php if (isset($_SESSION['reg_id'])) { ?>
                                            <form id="newshippingaddress"action="assets/controller-links.php" method="post">
                                                <div id="cart2">
                                                    <h3 style="margin-left:53px;margin-bottom: 27px;">Select one of the shipping address <span style="font-size:30px;color:gray;"> OR </span> Enter new shipping address</h3>
                                                    <table>
                                                        <tr><td width="90" align="right">First Name:</td><td width="20"><font color="red">*</font></td>
                                                            <td><input type="text" name="shipname" required></input></td></tr>
                                                        <tr><td width="120" align="right">Shipping Address:</td><td width="20"><font color="red">*</font></td>
                                                            <td><textarea name="shipaddress" required></textarea></td></tr>

                                                        <tr><td width="90" align="right">City:</td><td width="20"><font color="red">*</font></td>
                                                            <td><input type="text" name="shipcity" required></input></td></tr>
                                                        <tr><td width="90" align="right">State:</td><td width="20"><font color="red">*</font></td>
                                                            <td><select id="sel" name="shipstate" required>
                                                                    <option>Karnataka</option>
                                                                    <option>Kerala</option>
                                                                    <option>Andhra Pradesh</option>
                                                                    <option>Delhi</option>
                                                                    <option>West Bengal</option>
                                                                </select></td></tr>
                                                        <tr><td width="90" align="right">Pin Code:</td><td width="20">
                                                                <font color="red">*</font></td>
                                                            <td><input type="text" name="shipcode" required></input></td></tr>
                                                        <tr><td width="90" align="right" >Mobile:</td>
                                                            <td width="20"><font color="red">*</font></td>
                                                            <td><input type="text" name="shipmobile" required></input></td></tr>
                                                        <tr><td width="90" align="right">Land Line:</td><td width="20"><font color="red">*</font></td>
                                                            <td><input type="text" name="shiptel" required></input></td></tr>
                                                        <tr><td width="90" align="right">Country:</td><td width="20"><font color="red">*</font></td>
                                                            <td><select id="bill" name="bill" required>
                                                                    <option>India</option>
                                                                    <option>Srilanka</option>
                                                                    <option>Cannada</option>
                                                                    <option>USA</option>
                                                                    <option>Italy</option>
                                                                </select></td></tr>
                                                        <input type="hidden" name="sessioncart" value="<?php echo $_SESSION['cart_session_id']; ?>"/>
                                                        <input type="hidden" name="regid" value="<?php echo $_SESSION['reg_id']; ?>"/>
                                                               <tr><td></td><td></td><td>
                                                                    <!--<input type="submit"  name="shipcontinue" value="" class="shipaddress_submit"/></td></tr>-->
                                                                    <img src="images/continue.png" class="shipaddress_submit" />
                                                                    </table>
                                                                    </div>
                                                                    </form>
                                                                <?php } ?>
                                                                </div>
                                                                </div>





                                                                </div>
                                                                <div class="cart" style="margin-left:79px;" id="ordercartview">

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

                                                                        <!-- jQuery -->

                                                                        <!-- jQuery UI -->

                                                                        <!-- transition / effect library -->

                                                                        <script src="js/bootstrap-tab.js"></script>
                                                                        <!-- library for advanced tooltip -->
                                                                        <script src="js/bootstrap-butt on.js"></script>
                                                                        <!-- accordion library (optional, not used in demo) -->
                                                                        <script src="js/jquery.cookie.js"></script>
                                                                        <!-- calander plugin -->




                                                                        </body>
                                                                        </html>
