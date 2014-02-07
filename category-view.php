<?php
include_once './assets/auth.php';
require_once './assets/my-controller.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$product = new Users();
$data = array();
if(isset($_REQUEST['id']) && isset($_REQUEST['sortn'])){
echo"category name";
$cat_id_index = $_REQUEST['id'];
$product_details=$product->index_productcategory_sortname($cat_id_index);
//print_r($product_details);

}
elseif (isset($_REQUEST['id']) && isset($_REQUEST['sortp'])) {
echo"category price";
$cat_id_index = $_REQUEST['id'];
$product_details=$product->index_productcategory_sortprice($cat_id_index);
}
elseif (isset($_REQUEST['price'])){
   $explo=explode(",", $_REQUEST['price']);
    $min = $explo[0];
    $max = $explo[1];
    $cat_id_index = 1;//this has to change when u change category id in database
  $product_details=$product->index_productcategory_price($cat_id_index,$min,$max);
 // print_r($product_details);
  //exit();
}
elseif(isset($_REQUEST['id'])){
$cat_id_index = $_REQUEST['id'];
$product_details=$product->index_productcategory_name($cat_id_index);
}else{
    $cat_id_index = 1;//this has to change when u change category id in database
$product_details=$product->index_productcategory_name($cat_id_index);
}
?>
<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();
$pro_detail1 = $product->index_subcategory_name($cat_id_index);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include './meta.php'; ?>
        <link href="css/embedded.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/shaili.css" /> 
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
        <link href="css/list.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="Js/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="Js/myscript.js"></script>
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font" />
        
           

            <script src="Js/mrova-feedback-form.js" type="text/javascript"></script>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
            <link rel="stylesheet" href="css/bootstrap.css" />
            <link rel="stylesheet" href="css/sinister.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
   <script type="text/javascript" src="js/picbox.js"></script>
   <link rel="stylesheet" href="css/picbox.css" type="text/css" media="screen" />
            <style>
                #list-view{display: none;}
                #view-as-product{float: left; width: 80%;font-size: 15px;margin-left: 11px;margin-top: 6px;}
                #grid-list-view{float: left; width: 18%;margin-top: 6px;}
            </style>
    </head>
    <!--ganesh-->
    <body>	
        <?php include 'feedback.php'; ?>
        <div id="share-wrapper">
            <ul class="share-inner-wrp">
                <!-- Facebook -->
                <li class="facebook button-wrap"><a href="https://www.facebook.com/pages/Hiprojects/262295280589504">Facebook</a></li>

                <!-- Twitter -->
                <li class="twitter button-wrap"><a href="#">Tweet</a></li>

                <!-- Digg -->

            </ul>
        </div>


        <div id="wrapper">
            <?php include './header.php'; ?>
            <div id="page">
                <div class="col2-left-layout1">
                    <div class="main_home">

                        <div id="breadcrumb">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>/</li>
                                <li><a href="javascript:void(0);">Category-view</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include 'category_links.php'; ?>	
                <div class="col2-left-layout">
                    <div class="col-main">

                        <div class="main-title category_title">
                            <h1><?php echo $pro_detail1[1]; ?></h1>
                        </div>
                        <div class="embedded_category">
                            <div class="cat_main_content">
                                <p style="text-align: justify; font-size:12px;"><?php echo $pro_detail1[2] ?> </p>
                            </div>
                        </div>
                        <div class="toolbar">
                            <div id="view-as-product">
                                <p class="view-mode">
                                    <label>Sort By:-</label>
                                    <a href="category-view.php?id=<?php echo $cat_id_index; ?> && sortn=name">Name </a>
                                    <a href="category-view.php?id=<?php echo $cat_id_index; ?> && sortp=price" title="List" class="list1">|| Price</a>&nbsp;
                                </p>    
                            </div>
                            <div id="grid-list-view">
                                <div class="lfloat view_type inactive_view">
                                    <strong title="List"><span class="list">List</span></strong>
                                </div>     
                                <div class="lfloat view_type">
                                    <strong title="Grid"><span class="grid">Grid</span></strong>
                                </div>
                            </div>
                        </div>
                        <div class="middle_boxes">
                            <?php include 'category-grid-view.php'; ?>
                            <div id="list-view">
                                <?php include 'category-list-view.php'; ?> 
                            </div>
                        </div>
                    </div>

                    <div class="pagenavi">
                        <div class="dotted-pages"> &nbsp;</div>
                        <a href="">Prev</a><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">Next</a>

                    </div>
                </div>
            </div>
            <?php include('footer.php'); ?>		
        </div>
        <span>
            <a href="#" title="Scroll to Top" class="scrollup" style="display: inline;"></a>
            <span>


                <script src="Js/bootstrap.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() { // Ready Function Start
                        $("#myCarousel").carousel({interval: 2000});

                    });//Ready Function End
                </script>
                <!-- Placed at the end of the document so the pages load faster -->

                <!-- jQuery -->
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
