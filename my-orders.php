<!--safi here-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Home</title>
        <link href="css/account_information.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean1.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean2.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap-cerulean22.css" rel="stylesheet" type="text/css" media="screen" />


        <link rel="stylesheet" href="css/shaili.css" /> 
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
            <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
            <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
                    <link href="css/zoom_image.css" rel="stylesheet">
                        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
                        <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />      
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



$(".order-row tr").on('click',function(){
    var data="safi";
    
     $.ajax({
         url:"order-row-details.php",
         type:"POST",
         data:{data:data},
         success: function(result){
             //alert(result);
             $("#order-row").html(result);
         }
     });
});

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
                        <style>
                            .table-view{
                                display:none;
                            }
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

                             <?php include'feedback.php '; ?>
                            <div id="wrapper">

                                <?php include('header-dashboard.php'); ?>
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
                                            <li>
                                                <a href="account-information.php" style="color:#939391;">Account</a>
                                            </li>
                                            <li class="active"><a href="#">Orders</a></li>
                                          
                                            <li ><a href="my-wishlist.php" style="color:#939391;">My Wishlist</a></li>
                                            <li><a href="change-password.php"style="color:#939391;">Change Password</a></li>
                                        </ul>

                                        <h3 style="color:#939391;padding-left:5px;padding-bottom:3px;">My Orders</h3>
                                        <div class="inner_account_content12345">
                                            <?php include 'my-order-details.php'; ?>
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
