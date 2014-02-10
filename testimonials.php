<?php
require_once './assets/my-controller.php';
$test = new Users();
$data = array();
$test_details = $test->Testimonial_details($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php include('meta.php'); ?>
        <title>Hiprojects| Home</title>
        <link href="css/testimonial.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/shaili.css" /> 
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
            <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
            <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
                <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
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
                       <?php include'feedback.php '; ?>
                        <div id="share-wrapper">
                            <ul class="share-inner-wrp">
                                <!-- Facebook -->
                                <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>

                                <!-- Twitter -->
                                <li class="twitter button-wrap"><a href="#">Tweet</a></li>


                            </ul>
                        </div>

                        <div id="wrapper">

                            <?php include('header.php'); ?>
                            <div id="page">
                                <div class="col2-left-layout1">
                                    <div class="main_home">

                                        <div id="breadcrumb">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li>/</li>
                                                <li><a href="#">Testimonials</a></li>


                                            </ul>
                                        </div>

                                    </div>
                                </div>	
                                <h1 class="only_for" >TESTIMONIALS</h1>

                                <div class="col2-left-layout">




                                    <div class="testi_page"><!--Background-->      


                                        <?php
                                        $i = 0;
                                        foreach ($test_details as $prod) {

                                            $mod = ($i % 2);
                                            if ($mod == 0) {
                                                $liclass = "testimonial_1";
                                                $unit = "left_address";
                                                $test = "right_testimonial1";
                                            } else if ($mod == 1) {
                                                $liclass = "testimonial_2";
                                                $unit = "left_address2";
                                                $test = "right_testimonial";
                                            }
                                            ?>

                                            <div class="<?php echo $liclass; ?>"> <!--1st testimonial--> 

                                                <div class="<?php echo $unit; ?>">	
                                                    <h4 style="color:#D02627;"><?php echo $prod['test_by']; ?></h4>

                                                </div>	
                                                <div class="<?php echo $test; ?>">

                                                    <p><?php echo $prod['test_matter']; ?></p>
                                                </div> 

                                            </div> 




                                            <?php $i++;
                                        } ?>	




                                    </div> </div>			


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

                                    <!-- jQuery UI -->



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
