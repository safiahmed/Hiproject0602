<?php
include './assets/auth.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include 'meta.php'; ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hiprojects| Learning Materials</title>
        <link href="css/payment_reg.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/shaili.css" /> 
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-cerulean1.css" />
        <link rel="stylesheet" href="css/bootstrap-cerulean2.css" />
        <link rel="stylesheet" href="css/bootstrap-cerulean22.css" />
        <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" href="css/header_fotter.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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

                    $("#learning-content1").hide();
                    $("#learning-content2").hide();
                    $("input[value=rad1]").change(function() {
                        var test = $(this).val();
                        $("#learning-content").show();
                        $("#learning-content1").hide();
                        $("#learning-content2").hide();
                    });
                    $("input[value=rad2]").change(function() {
                        var test = $(this).val();
                        $("#learning-content").hide();
                        $("#learning-content2").hide();
                        $("#learning-content1").show();

                    });
                    $("input[value=rad3]").change(function() {
                        var test = $(this).val();
                        $("#learning-content").hide();
                        $("#learning-content1").hide();
                        $("#learning-content2").show();
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


        <div id="page">
            <div class="col-main">
                <div id="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li><a href="#">Payment</a></li>
                    </ul>
                </div>
                <div class="navbar">
                    <div class="navbar-inner">
                        <a class="brand" href="#">Choose Payment Option</a>
                    </div>
                </div>                               

                <div id="wrap">
                    <div id="extrawrapper1">
                        <div class="bank_report">
                            <table >
                                <tr >	
                                    <td><input type="radio" name="radio" value="rad1" checked>         Bank Deposit</input></td>
                                </tr>
                                <tr >	
                                    <td><input type="radio" name="radio" value="rad2">        Cash on Delivery</input></td>
                                </tr>
                                <tr >	
                                    <td><input type="radio" name="radio" value="rad3">         Paypal</input></td>
                                </tr>
                            </table>


                        </div>
                    </div>
                    <div id="learning-content">

                        <address>
                            <strong>Hiprojects-sheshdhrfjfjtjktgfj</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>

                                        <address>
                                            <strong>Full Name</strong><br>
                                                <a href="mailto:#">first.last@example.com</a>
                                        </address>
                                        </div>	
                                        <div id="learning-content1">


                                            <strong>Pay using Cash On Delivery</strong><br>
                                                No additional COD charges<br/></br>

                                            <address>

                                                <strong>Shipping Address [ <a href="#">Edit </a> ]</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                        San Francisco, CA 94107<br>
                                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                                            </address>


                                                            <address>
                                                                <strong>Full Name</strong><br>
                                                                    <a href="mailto:#">first.last@example.com</a>
                                                            </address>

                                                            <div class="button-outer" "="">
                                                                <button id="payment-continue" class="order-button checkout-continue-button" style="width: 156px; display: inline-block;">
                                                                    <span class="button-text">Complete Order </span>
                                                                </button>
                                                            </div>
                                                            </div>
                                                            <div id="learning-content2">

                                                                <address>
                                                                    <strong>Hiprojects-paypal</strong><br>
                                                                        795 Folsom Ave, Suite 600<br>
                                                                            San Francisco, CA 94107<br>
                                                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                                                                </address>

                                                                                <address>
                                                                                    <strong>Full Name</strong><br>
                                                                                        <a href="mailto:#">first.last@example.com</a>
                                                                                </address>
                                                                                </div>
                                                                                <div id="bank-deposit">
                                                                                    <h3>Bank Deposit</h3>
                                                                                    <p>Your order is placed but to activate it deposit amount to <strong>Manager@hiprojects</strong><br>
                                                                                            <span style="margin-left:337px;">sbi : 3245672358</span><br>
                                                                                                <span style="margin-left:337px;">branch:Bangalore</p></span>
                                                                                                <div id="fill-form">

                                                                                                    <form class="form-horizontal" role="form">
                                                                                                        <div class="form-group">
                                                                                                            <label for="inputEmail3" class="col-sm-2 control-label">Registered with us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                                                            <div class="col-sm-10">
                                                                                                                <input type="email" class="form-control" id="inputEmail3" disabled="disabled" value="Mangium">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label for="inputPassword3" class="col-sm-2 control-label"><br>Attach proof(Please attach your photo copy)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                                                            <div class="col-sm-10">
                                                                                                                <br><input type="file" class="form-control" id="inputPassword3" placeholder="Password">
                                                                                                                        </div>
                                                                                                                        </div>

                                                                                                                        <div class="form-group">
                                                                                                                            <label for="inputPassword3" class="col-sm-2 control-label">&nbsp;</label>
                                                                                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                                                                                <br><button type="submit" class="btn btn-default">upload</button>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        </form>
                                                                                                                        </div>
                                                                                                                        </div>
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

                                                                                                                                </body>
                                                                                                                                </html>