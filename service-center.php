<?php
include 'assets/my-controller.php';
$service = new Service();
$states1 = $service->service_state();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Service center</title>
        <link href="css/delars.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
            <link rel="stylesheet" href="css/shaili.css" /> 
            <link rel="stylesheet" href="css/bootstrap.css" />
            <link rel="stylesheet" href="css/bootstrap-cerulean1.css" />
            <link rel="stylesheet" href="css/bootstrap-cerulean2.css" />
            <link rel="stylesheet" href="css/bootstrap-cerulean22.css" />
            <link href="css/shoppingchat2.css" rel="stylesheet" type="text/css" media="screen" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" href="css/header_fotter.css" />
                <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
                <script src="Js/mrova-feedback-form.js" type="text/javascript"></script>
                <link rel="stylesheet" href="css/mrova-feedback-form.css" type="text/css"/>

                <style type="text/css">
                    body {

                    }
                    .sidebar-nav {
                        padding: 9px 0;
                    }
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
                <script type="text/javascript">
                    $(document).ready(function() {
                        //To switch directions up/down and left/right just place a "-" in front of the top/left attribute
                        //Vertical Sliding
                        $('.boxgrid.slidedown').hover(function() {
                            $(".cover", this).stop().animate({top: '-260px'}, {queue: false, duration: 300});
                        }, function() {
                            $(".cover", this).stop().animate({top: '0px'}, {queue: false, duration: 300});
                        });
                        //Horizontal Sliding
                        $('.boxgrid.slideright').hover(function() {
                            $(".cover", this).stop().animate({left: '325px'}, {queue: false, duration: 300});
                        }, function() {
                            $(".cover", this).stop().animate({left: '0px'}, {queue: false, duration: 300});
                        });
                        //Diagnal Sliding
                        $('.boxgrid.thecombo').hover(function() {
                            $(".cover", this).stop().animate({top: '260px', left: '325px'}, {queue: false, duration: 300});
                        }, function() {
                            $(".cover", this).stop().animate({top: '0px', left: '0px'}, {queue: false, duration: 300});
                        });
                        //Partial Sliding (Only show some of background)
                        $('.boxgrid.peek').hover(function() {
                            $(".cover", this).stop().animate({top: '90px'}, {queue: false, duration: 160});
                        }, function() {
                            $(".cover", this).stop().animate({top: '0px'}, {queue: false, duration: 160});
                        });
                        //Full Caption Sliding (Hidden to Visible)
                        $('.boxgrid.captionfull').hover(function() {
                            $(".cover", this).stop().animate({top: '160px'}, {queue: false, duration: 160});
                        }, function() {
                            $(".cover", this).stop().animate({top: '260px'}, {queue: false, duration: 160});
                        });
                        //Caption Sliding (Partially Hidden to Visible)
                        $('.boxgrid.caption').hover(function() {
                            $(".cover", this).stop().animate({top: '160px'}, {queue: false, duration: 160});
                        }, function() {
                            $(".cover", this).stop().animate({top: '220px'}, {queue: false, duration: 160});
                        });
                    });
                </script>
                <script>
                    
                    $(document).ready(function() {
                        $('#state').change(function() {
                            var state = $(this).val();
                            $('#city').load('city.php', {state: state});
                        });
                    });
                    $(function() {
                        $("#selectable").selectable();
                    });
                </script>

                <style>
                    #gallery_01 img{border:1px solid white;
                                    width:97px;
                                    padding-top:17px;}


                    /*Change the colour*/

                </style>
                </head>
                <body>	
                    <?php include'feedback.php'; ?>

                    <div id="share-wrapper">
                        <ul class="share-inner-wrp">
                            <!-- Facebook -->
                            <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>

                            <!-- Twitter -->
                            <li class="twitter button-wrap"><a href="#">Tweet</a></li>


                        </ul>
                    </div>


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
                                            <li><a href="our-expertise.php">Our Expertise</a></li>
                                            <li><a href="project-kits.php">Project Kits</a></li>
                                            <li><a href="LearningMaterial.php">Learning Material</a></li>

                                            <li class="current_page_item"><a href="service-center.php">Service Center</a></li>
                                            <li><a href="">Support</a></li>
                                            <li><a href="contact-us.php">Contact </a></li>
                                            <li><input type="search" placeholder="Enter Search terms" style="height: 20px;"></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <div id="page">
                            <div class="col2-left-layout1">

                            </div>		
                            <div class="col-main">
                                <div id="breadcrumb1">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li>/</li>
                                        <li><a href="#">HiProjects dealers in India</a></li>
                                    </ul>
                                </div>
                                <div class="navbar">
                                    <div class="navbar-inner">
                                        <a class="brand" href="#">HiProjects dealers in India</a>
                                    </div>
                                </div>  

                            </div>
                            <div class="project_kit">
                                <div id="for-state">
                                    State  :   
                                    <select id="state">
                                        <option selected>---Select State---</option>
                                        <?php
                                        foreach ($states1 as $row) {
                                            ?>
                                            <option value="<?php echo $row['ndstate_id_pk']; ?>"><?php echo $row['ndstate_name'] ?></option>
                                            <?php
                                        }
                                        ?>

                                    </select>	
                                </div>
                                <div id="city"></div>
                                <div id="address"></div>		
                            </div>

                        </div>
                        <?php include('footer.php'); ?>
                    </div>




                    <span>
                        <a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
                        <span>


                            <!-- external javascript
                            ================================================== -->
                            <!-- Placed at the end of the document so the pages load faster -->


                            </body>
                            </html>
