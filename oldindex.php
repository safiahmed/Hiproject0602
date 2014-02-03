<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Home</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/shaili.css" /> 
        <link rel="stylesheet" href="css/bootstrap.css" />
        <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
       <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">
       <link href="css/zoom_image.css" rel="stylesheet">
      <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
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
    </head>
    <body>	

        <div id="share-wrapper">
            <ul class="share-inner-wrp">
                <!-- Facebook -->
                <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>

                <!-- Twitter -->
                <li class="twitter button-wrap"><a href="#">Tweet</a></li>

                <!-- Digg -->
                <li class="digg button-wrap"><a href="#"></a></li>

                <!-- Stumbleupon -->
                <li class="stumbleupon button-wrap"><a href="#">Printer</a></li>

                <!-- Delicious -->


                <!-- Google -->
                <li class="google button-wrap"><a href="#">Plus Share</a></li>

                <!-- Email -->
                <li class="email1 button-wrap"><a href="#">Email</a></li>
            </ul>
        </div>

        <div id="mrova-img-control" style="margin-top: -84px; top: 50%;"></div>
        <div id="wrapper">

            <?php include('header.php'); ?>
            <?php include('phpsql.php'); ?>
           
            <div id="page">
                <div class="hanechitra-kavacha">
                    <div class="hanechitra">
                        <img src="images/shopnow.png" style="margin: 171px 0px 0px 277px;" />
                    </div>
                </div>


                <div class="jaaruchitra-kavacha agala-1080">
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="images/currentbanner.png" />
                            </div>
                            <div class="item">
                                <img src="images/currentbanner.png" />
                            </div>
                            <div class="item">
                                <img src="images/currentbanner.png" />
                            </div>
                            <div class="item">
                                <img src="images/currentbanner.png" />
                            </div>
                        </div>
                    </div>
                </div><!-- Slide Cover end -->
                <div class="headerpatch">
                    <img src="images/strip2.png"/>
                </div>
                <div class="middle_boxes">
                    <div class="middle_box1">
                        <div class="content">
                                  <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData13 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData13 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>
                            <!--<div class="borderimage">
                                <img src="#" alt="">
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData2 ?></span></a>
                            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $displayData3 ?>.00</div>
                             <input type="image" src="images/view details.png" >
                        </div>
                        <div class="join">
                            <div id="joinus">
                                <h2>Join Us</h2>
                                <div id="inputid">
                                    <input type="text" class="email" value="email address"  />
                                </div>
                                <input type="submit" value="Subscribe" class="subsciber"/>
                            </div>		
                        </div>	
                        <div class="payment">
                            <div id="payment_method">
                                <h4>PAYMENT METHOD</h4>
                                <img src="images/payment method full.png"/>
                            </div>		
                        </div>	
                    </div>
                    <div class="middle_box2">
                        <div class="content">
                                 <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData13 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData13 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>
                            <!--<div class="borderimage">
                                <img src="#" alt="">
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData5 ?></span></a>
                            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $displayData6 ?>.00</div>
                             <input type="image" src="images/view details.png" >
                        </div>
                    </div>
                    <div class="middle_box3_content">
                        <div class="content">
                                   <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData13 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData13 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>
                            <!--<div class="borderimage">
                                <img src="#" alt="">
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData8 ?></span></a>
                            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $displayData9 ?>.00</div>
                            <input type="image" src="images/view details.png" >
                        </div>
                    </div>

                    <div class="pricebox">
                        <div class="content2">
                            <img src="images/browse by category.png"/>


                        </div>
                    </div>
                    <div class="priceorder1">
                        <img src="images/category.png" alt="Present Offer">
                    </div>
                    <!-- encrypt -->



                    <?php include 'index-category.php'; ?>


                    <!-- -->
                    <div class="middle_boxcontent">
                        <div class="content">
                             <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData10 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData10 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>

                           <!-- <div class="borderimage">
                                <img src="#" alt="">	
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData11 ?></span></a>
                            <div class="gallery-price"><span><span class="WebRupee">Rs.</span></span> <?php echo $displayData12 ?>.00</div>
                             <input type="image" src="images/view details.png" >
                        </div>
                    </div>
                    <div class="middle_box4_content">
                        <div class="content">
                                <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData13 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData13 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>
                            <!--<div class="borderimage">
                                <img src="#" alt="">
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData14 ?></span></a>
                            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $displayData15 ?>.00</div>
                             <input type="image" src="images/view details.png" >
                        </div>
                    </div>
                    <div class="middle_box6_content">
                        <div class="content">
                                  <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData13 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData13 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>
                            <!--<div class="borderimage">
                                <img src="#" alt="">
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData17 ?></span></a>
                            <div class="gallery-price"><span class="WebRupee">Rs.</span> <?php echo $displayData18 ?>.00</div>
                            <input type="image" src="images/view details.png" >
                        </div>
                    </div>
                    <div class="priceorder">
                        <img src="images/presentoffer.png" alt="Present Offer">
                    </div>
                    <div class="middle_box3_content1">
                        <div class="content">
                                   <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="<?php echo $displayData13 ?>" alt="" />
                    <div class="mask">
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="icon-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="<?php echo $displayData13 ?>">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                </div>
                            <!--<div class="borderimage">
                                <img src="#" alt="">
                            </div>-->
                            <a href="#"><span style="font-family:calibri"><?php echo $displayData20 ?></span></a>
                            <br/>		
                            <div class="gallery-price2"><span><span class="WebRupee">Rs.</span></span> <?php echo $displayData21 ?>.00</div>

                            <div class="gallery-price"><strike><span class="WebRupee">Rs.</span> 9,199.00</strike></div>
                            <input type="image" src="images/view details.png" >
                        </div>
                    </div>
                    <div>	

                    </div>	


                </div>
            </div>	

            <?php include('footer.php'); ?>


        </div>



        <span>
            <a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
            <span>

                <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
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