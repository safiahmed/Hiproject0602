<script type="text/javascript" >

    $(document).ready(function() {
        $('.supportBtn').click(function() {
            $(this).animate({right: '300px'}, {duration: 400, queue: false});
            //$(this).addClass('close');
            //alert('hey dont touch me');
            $('.contentBox').show({duration: 400, queue: false});
            $('.closeBtn').fadeIn({duration: 500, queue: false});
            //alert('hi');

        })

        $('.closeBtn').click(function() {
            $(this).fadeOut({duration: 100, queue: false});
            $('.supportBtn').animate({right: '0'}, {duration: 400, queue: false});
            $('.supportBtn').removeClass('close');
            //alert('hey dont touch me');
            $('.contentBox').hide({duration: 400, queue: false});

            //alert('hi');

        })
    });
</script>
<style type="text/css">
    .social {
        width: 172px;
        position: fixed;
        top: 35%;
        right: 0;
        background: #ccc;
        z-index: 999;
    }
    .social .contentBox {
        width: 282px;
        height: auto;
        position: absolute;
        top: 0;
        right: 0;
        background: #f1f1f1;
        border: 1px solid #d3d3d3;
        border-right: none;
        -webkit-border-radius: 5px 0px 0px 5px;
        border-radius: 5px 0px 0px 5px;
        padding: 12px 0 12px 15px;
        display: none;
        z-index: 9;
        float: left;
    }
    .social .contentBox .closeBtn {
        position: absolute;
        bottom: -5px;
        left: -5px;
        cursor: pointer;
        display: none;
    }.social .contentBox h6 {
        font-size: 15px;
        color: #163b93;
        font-weight: bold;
    }.social .contentBox ul {
        margin: 20px 0 0;
        list-style: none;
        padding: 0;
    }
    .social .supportBtn {
        cursor: pointer;
        position: absolute;
        right: 0;
        top: 0;
        width: 44px;
        height: 160px;
        background: url(images/FEED_BACK.jpg) 19px 0 no-repeat;
        text-decoration: none;
    }
     #mrova-sendbutton {
	width:60px;
	background:#db4f4a; color:#fff; 
	cursor:pointer;
	padding:5px 10px; 
	border: none;
}
#mrova-name
{
    width:250px;
}
</style>
<div class="social">
    <div class="contentBox">
        <img src="images/closeBtn_black.png"  alt="" class="closeBtn" />
          <form  action="assets/controller-links.php" method="post">
                                <ul >
                                    <li>
                                        <label for="mrova-name">Your Name*</label> <input type="text" name="mrova-name" class="required" id="mrova-name" value="">
                                    </li>
                                    <li>
                                        <label for="mrova-email">Email*</label> <input type="text" name="mrova-email" class="required" id="mrova-name" value="">
                                    </li>
                                    <li>
                                        <label for="mrova-message">Message*</label>
                                        <textarea class="required" id="mrova-name" name="mrova-message"  rows="8" cols="30"></textarea>
                                    </li>
                                </ul>
                                <input type="submit" value="Send" id="mrova-sendbutton" name="feedback">
                            </form>
    </div>
    <a href="javascript:void(0);" onClick="supportBtn();" class="supportBtn">&nbsp;</a>
</div>

<!-- <div id="mrova-feedback">
                        <div id="mrova-contact-thankyou" style="display: none;">
                            Thank you.  We'hv received your feedback.
                        </div>
                        <div id="mrova-form">
                            <form id="mrova-contactform" action="#" method="post">
                                <ul >
                                    <li>
                                        <label for="mrova-name">Your Name*</label> <input type="text" name="mrova-name" class="required" id="mrova-name" value="">
                                    </li>
                                    <li>
                                        <label for="mrova-email">Email*</label> <input type="text" name="mrova-email" class="required" id="mrova-email" value="">
                                    </li>
                                    <li>
                                        <label for="mrova-message">Message*</label>
                                        <textarea class="required" id="mrova-message" name="mrova-message"  rows="8" cols="30"></textarea>
                                    </li>
                                </ul>
                                <input type="submit" value="Send" id="mrova-sendbutton" name="mrova-sendbutton">
                            </form>
                        </div>
                        <div id="mrova-img-control"></div>
                    </div>-->