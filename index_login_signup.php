<style>
/*    .black_overlay{
        display: none;
        position: fixed;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
        overflow: auto;
    }

    .white_content {
        display: none;
        position: absolute;
        top: 16%;
        left: 25%;
        width: auto;
        height: auto;
        padding: 16px;
        border: 16px solid #ddd;
        background-color: white;
        z-index:1002;
    }*/
</style>
<div id="light" class="white_content_login">
    <a href = "javascript:void(0)" title="Close" class="close"
       onclick = "document.getElementById('light').style.display = 'none';
               document.getElementById('fade').style.display = 'none'">X</a>
    <div id="si-form">
        <h2>Login</h2>
        <form id="loginformid" action="assets/controller-links.php" method="post">
            <label>Email</label><input type="email" name="email_login" placeholder="Email" class="wert sival"><br>

            <label>password</label><input type="password" name="password_login" placeholder="******" class="wert sival"></br>
            <span class="loginerror"></span><br/>
            <input type="submit" value="Login" class="forbutton loginsubmit" name="login">&nbsp;&nbsp;&nbsp;Or<img src="img/login_facebook.png" class="for_facebook"/>
            <a href="javascript:void(0);" id="forgotpwd" class="sform"><br/><br/>Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0);" id="signup" class="sform">Sign up</a>
        </form>
    </div>
    <div id="su-form">
        <h2>Sign Up</h2>
        <div class="form">
            <form action="assets/controller-links.php" method="post">
                <label>Name</label><input type="text" name="name" placeholder="Name" class="wert sival" required /><br>
                <label>Email</label><input type="email" name="email" placeholder="Email" class="wert email_val sival" required />
                <span id="email_error" style="color: red;margin-left: 30px; font-weight: bold;"></span>
                <br>
                <label>Password</label><input type="password" name="pwd" placeholder="******" class="wert usinue_email sival" required /><br/>
                <label>Confirm Password</label><input type="password" name="cpwd" placeholder="******" class="wert usinue_email sival" required /><br/>
                <label>Mobile</label><input type="text" name="mobile" placeholder="Mobile Number" class="wert usinue_email sival" required /><br/>

                <input type="submit" name="register" value="Sign up!" class="forbutton" />&nbsp;&nbsp;&nbsp;Or<img src="img/login_facebook.png" class="for_facebook"/>

                <br/><br/>Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="javascrip:void(0);"  id="signin" class="sform">Login</a>
            </form>
        </div>
    </div>
    <div id="sf-form">
        <h2>Forgot Password</h2>
        <form id="forgotpwd" action="assets/controller-links.php" method="post">
            <div class="form">
                <label>Email</label><input type="email" name="email_login" placeholder="Email" class="wert sival"><br>
                <input type="submit" value="Login" class="forbutton loginsubmit" name="login">&nbsp;&nbsp;&nbsp;Or
                <img src="img/login_facebook.png" class="for_facebook"/><br>
                <a href="javascript:void(0);" id="signin" class="sform">Sign In</a>&nbsp;&nbsp;&nbsp;
                <a href="javascript:void(0);" id="signup" class="sform">Sign Up</a>
            </div>
        </form>
    </div>
</div>
<div id="fade" class="black_overlay"></div>
<!--delte till here-->

<script type="text/javascript">
           $(document).ready(function() {
               var scls = $(".sform"), suf = $("#su-form"), sif = $("#si-form"), su = $("#signup"),
                       si = $("#signin"), t = $(this), sfr = $("#sf-form"), fv = $('.sival');
               suf.hide();
               sfr.hide();
               scls.on('click', function() {
                   var sui = $(this).attr("id");
                   $('.loginerror').text('');
                   fv.val('');
                   if (sui == "signup") {
                       sif.hide();
                       sfr.hide();
                       suf.show();
                   } else if (sui == "signin") {
                       suf.hide();
                       sfr.hide();
                       sif.show();
                   } else if (sui == "forgotpwd") {
                       sif.hide();
                       suf.hide();
                       sfr.show();
                   }
               });


               $(".usinue_email").on("focus", function() {
                   var a_val = $(".email_val").val();
                   if (a_val == "") {
                       $(".email_val").focus();
                       $("#email_error").html("Please Enter Valid Email");
                   } else {
                       $.post("assets/controller-links.php", {ab_val: a_val}, function(result) {
                           if (result == 0) {
                               $(".email_val").focus().val("");
                               $("#email_error").html("This email already exist. Please login to continue");
                           } else {
                               $("#email_error").html("");
                           }
                       });
                   }
               });

               $('.loginsubmit').click(function(e) {
                   console.log();
                   e.preventDefault();
                   var email = $('input[name=email_login]').val();
                   var password = $('input[name=password_login]').val();
                   var action = "assets/controller-links.php";
                   $.post(action, {emaillogin: email, passwordlogin: password}, function(data) {
                       if (data == 0) {
                           $('.loginerror').text('The email or password you entered is incorrect!!').css('color', 'red');
                       }
                       else {
                           $('#loginformid').submit();
                       }
                   });
               });
           });
           function log_signup() {
               document.getElementById('light').style.display = 'block';
               document.getElementById('fade').style.display = 'block'
               $('.sival').val('');
               $('#sf-form,#su-form').hide();
               $('#si-form').show();
           }
</script>