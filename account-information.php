<?php include './assets/auth.php'; 
 var_dump($_SESSION);
?>
<!--<?php //include './assets/sessionlogin.php'; ?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include 'meta.php'; ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Home</title>
        <link href="css/account_information.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean1.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean2.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean22.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/shoppingchat.css" rel="stylesheet" type="text/css" media="screen" />	

        <link rel="stylesheet" href="css/shaili.css" /> 
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
            <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
            <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
                    <link href="css/zoom_image.css" rel="stylesheet">
                        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
                        <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />      
                        </script>
                        <script src="Js/mrova-feedback-form.js" type="text/javascript"></script>
                        <link rel="stylesheet" href="css/mrova-feedback-form.css" type="text/css"/>
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
                                $('.nav-toggle').click(function() {
                                    //get collapse content selector
                                    var collapse_content_selector = $(this).attr('href');

                                    //make the collapse content to be shown or hide
                                    var toggle_switch = $(this);
                                    $(collapse_content_selector).toggle(function() {
                                        if ($(this).css('display') == 'none') {
                                            //change the button label to be 'Show'
                                            toggle_switch.html('ReadMore');
                                        } else {
                                            //change the button label to be 'Hide'
                                            toggle_switch.html('ReadLess');
                                        }
                                    });
                                });


////edited by blessy///
//$('.nav-pills').hover(function (){
//     $(this).addClass('active');
//
//});                           //edited by blessy starts here //
                                //start of loading order/pwd page
                                $('.account,.orders,.wishlist,.password').on('click', function() {
                                    var getclass = $(this).attr('class');
                                    if (getclass === 'orders') {
                                        var path = 'my-order-details.php';
                                    }
                                    else if (getclass === 'wishlist') {
                                        var path = 'my-wishlist.php .inner_account_content123456789';

                                    }
                                    else if (getclass === 'password') {
                                        var path = 'change-password.php .inner_account_content1234';
                                    }
                                    else {
                                        var path = 'account-information.php .inner_account_content1234';
                                    }
                                    $('.inner_account_content1234').load(path);
                                    return false;
                                });
                                //edited by blessy end of loading order/pwd pages//
                                //view of order summary starts here//
                                $("body").on('click', '#tab1 tbody tr', function() {
                                    var id = $(this).children('td').find('input[type="hidden"]').val();
                                    $.ajax({
                                        url: 'order-row-details.php',
                                        type: "POST",
                                        data: {orderid: id},
                                        success: function(result) {
                                            $("#order-row").html(result);

                                        }
                                    });
                                });
                                //order summary ends here
                                //update of account info starts here//
                                $('body').on('click', '.btnsavechanges', function() {
                                    $('#accountform').submit();
                                });
                                //account info ends here
                                //pwd matching/updates starts here
                                $('input[name=oldpassword]').blur(function(){
                                    var oldpassword=$(this).val();
                                     action = './assets/controller-links.php';
                                       $.post(action, {oldpassword: oldpassword}, function() {

                                        });
                                     });
                                $('body').on('click', '.savepassword', function(e) {
                                    var newpassword = $('input[name=newpassword]').val();
                                    var repassword = $('input[name=repassword]').val();
                                    console.log();
                                    e.preventDefault();

                                    action = './assets/controller-links.php';
                                    if (newpassword == repassword) {

                                        $.post(action, {repassword: repassword}, function(data) {
                                                alert(data);
                                        });
                                    }
                                    else {
                                        $('.errormsg').text(" *password mismatching!!").css('color', 'red');
                                    }
                                });

                                //pwd check/updates ends here//
                                //blessy code ends here//

                            });
                        </script>

                        <script>
                            $(function() {
                                $("#slider-range").slider({
                                    range: true,
                                    min: 0,
                                    max: 500,
                                    values: [75, 300],
                                    slide: function(event, ui) {
                                        $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                                    }
                                });
                                $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                                        " - $" + $("#slider-range").slider("values", 1));
                            });
                        </script>
                        </head>
                        <body>	
                            <?php
                            include './assets/my-controller.php';
                            $dash = new Users();
                            $personalinfo = $dash->view_personalinfo();
                            $memberinfo = $dash->view_memberinfo();
                            ?>

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

                                <?php include('header.php'); ?>
                                <div id="page">
                                    <div class="col2-left-layout1">
                                        <div class="main_home">

                                            <div id="breadcrumb">

                                            </div>

                                        </div>
                                    </div>	
                                </div>	
<div class="inner_account_page">

                                    <!--  <div class="side_account_information">
          <ul>
                                                     <li style="background-color:black;color:white;margin-top:-15px;"><p style="padding-left:25px;padding-top:10px;">Account Information</p></li>
                                                     <li style=background-color:#E0E0E0;"><p style="padding-left:25px;padding-top:10px;"><a href="#" style="text-decoration:none;">My Orders</a></p></li>
                                                     <li class="ccccc"><p style="padding-left:25px;padding-top:10px;"><a href="change_password.php" style="text-decoration:none;">Change Password</a></p></li>
                                                    
                                                   </ul>
      </div>	-->

                                    <div class="content_account_information">

                                        <ul class="nav nav-pills">
                                            <li class="active">
                                                <a href="#" class="account">Account</a>
                                            </li>
                                            <li ><a href="" class="orders" style="color:#939391;">Orders</a></li>

                                            <li ><a href="" class="wishlist" style="color:#939391;">My Wishlist</a></li>
                                            <li ><a href="" class="password" style="color:#939391;">Change Password</a></li>
                                        </ul>
                                        <span>welcome  <?php 
                                  if(isset($_SESSION['reg_id']))
                                  {    echo $_SESSION['reg_id'];}
                              
                                ?></span>

                                        <div class="inner_account_content1234" >
                                            <form id="accountform" role="form" action="./assets/controller-links.php" method="post">
                                                <div id="account-info" class="middle_box1">
                                               
                                                    <h2 style="padding-left:10px;padding-top:10px;">Presonal Information</h2>

                                                    <div class="form-group">
                                                        <p style="padding-left:57px;padding-top:13px;color:#939391;">Name
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="exampleInputname1" name="name" value="<?php echo $personalinfo['name']; ?>"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p style="padding-left:55px;color:#939391;">EmailID 
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" class="form-control" id="exampleInputEmail1 "name="email" value="<?php echo $personalinfo['email']; ?>"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p style="padding-left:50px;color:#939391;">Mobile Number
                                                            &nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="exampleInputphone1" name="mobile" value="<?php echo $personalinfo['mobile']; ?>"></p>
                                                    </div></div>

                                                <div class="middle_box1">
                                                    <div class="top-sidebar">
                                                        <!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">-->
                                                        <h2>1.Group member</h2>
                                                        <div>
                                                            <label>
                                                                <span>Name</span>

                                                                <input placeholder="Please enter your name" type="text" tabindex="1" name="fname" value="<?php echo $memberinfo['fname']; ?>" required  >
                                                            </label>
                                                        </div>

                                                        <div>
                                                            <label>
                                                                <span>Email</span>
                                                                <input placeholder="Please enter your email address" type="email" tabindex="2" name="femail" value="<?php echo $memberinfo['femail']; ?>" required >
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label>
                                                                <span>Phone</span>
                                                                <input placeholder="Please enter your number" type="tel" tabindex="3" name="fphone" value="<?php echo $memberinfo['fmobile']; ?>" required >
                                                            </label>
                                                        </div>


                                                        <!--<div>
                                                                <button name="submit1" type="submit">Submit</button>
                                                        </div>-->
                                                        <!--</form>-->
                                                    </div>
                                                </div>
                                                <div class="middle_box1">
                                                    <div class="top-sidebar">
                                                        <!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">-->
                                                        <h2>2.Group member</h2>
                                                        <div>
                                                            <label>
                                                                <span>Name</span>
                                                                <input placeholder="Please enter your name" type="text" tabindex="1" name="sname" value="<?php echo $memberinfo['sname']; ?>" required  >
                                                            </label>
                                                        </div>

                                                        <div>
                                                            <label>
                                                                <span>Email</span>
                                                                <input placeholder="Please enter your email address" type="email" tabindex="2" name="semail" value="<?php echo $memberinfo['semail']; ?>"  required >
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label>
                                                                <span>Phone</span>
                                                                <input placeholder="Please enter your number" type="tel" tabindex="3" name="sphone" value="<?php echo $memberinfo['sphone']; ?>" required >
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="middle_box1">
                                                    <div class="top-sidebar">
                                                        <!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">-->
                                                        <h2>3.Group member</h2>
                                                        <div>
                                                            <label>
                                                                <span>Name</span>
                                                                <input placeholder="Please enter your name" type="text" tabindex="1" name="tname" value="<?php echo $memberinfo['tname']; ?>"  >
                                                            </label>
                                                        </div>

                                                        <div>
                                                            <label>
                                                                <span>Email</span>
                                                                <input placeholder="Please enter your email address" type="email" tabindex="2" name="temail" value="<?php echo $memberinfo['temail']; ?>" >
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label>
                                                                <span>Phone</span>
                                                                <input placeholder="Please enter your number" type="tel" tabindex="3" name="tphone" value="<?php echo $memberinfo['tphone']; ?>" >
                                                            </label>
                                                        </div>


                                                        <!--<div>
                                                                <button name="submit1" type="submit">Submit</button>
                                                        </div>-->
                                                        <!--</form>-->
                                                    </div>
                                                </div>
                                                <div class="middle_box1">
                                                    <div class="top-sidebar">
                                                        <!--<form id="contact-form" name="myemailform" enctype="multipart/form-data" action="group.php" method="post">-->
                                                        <h2>4.Group member</h2>
                                                        <div>
                                                            <label>
                                                                <span>Name</span>
                                                                <input placeholder="Please enter your name" type="text" tabindex="1" name="frname" value="<?php echo $memberinfo['frname']; ?>">
                                                            </label>
                                                        </div>

                                                        <div>
                                                            <label>
                                                                <span>Email</span>
                                                                <input placeholder="Please enter your email address" type="email" tabindex="2" name="fremail" value="<?php echo $memberinfo['fremail']; ?>">
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label>
                                                                <span>Phone</span>
                                                                <input placeholder="Please enter your number" type="tel" tabindex="3" name="frphone"  value="<?php echo $memberinfo['frphone']; ?>" >
                                                            </label>
                                                        </div>


                                                        <!--<div>
                                                                <button name="submit1" type="submit">Submit</button>
                                                        </div>-->
                                                        <!--</form>-->
                                                    </div>
                                                </div>




                                                <button type="submit" name="btnsavechanges" class="btnsavechanges">Save Changes</button>
                                            </form> 
                                        </div>


                                    </div>	
                                </div>



<?php include('footer.php'); ?>

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
                                        <!-- Placed at the end of the document so the pages load faster -->

                                        <!-- jQuery -->

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
                                        <script src="js/bootstrap-tour.js"></script>
                                        <!-- library for cookie management -->
                                        <script src="js/jquery.cookie.js"></script>
                                        <!-- calander plugin -->
                                        <script src='js/fullcalendar.min.js'></script>
                                        <!-- data table plugin -->
                                        <script src='js/jquery.dataTables.min.js'></script>



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
