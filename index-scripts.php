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