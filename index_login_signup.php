<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Login</h2>
        <form id="loginformid" action="assets/controller-links.php" method="post">
            <div class="form">
                <label>Email</label><input type="email" name="email_login" placeholder="Email" class="wert"><br>

                <label>password</label><input type="password" name="password_login" placeholder="******" class="wert"></br>
                <span class="loginerror"></span><br/>
                <input type="submit" value="Login" class="forbutton loginsubmit" name="login">&nbsp;&nbsp;&nbsp;Or<img src="img/login_facebook.png" class="for_facebook"/>
                <a href="#" ><br/><br/>Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#modellogin">Sign up</a>
            </div>
        </form>
    </div>
</div>

<div id="modellogin" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Sign Up</h2>
        <div class="form">
            <form action="assets/controller-links.php" method="post">
                <label>Name</label><input type="text" name="name" placeholder="Name" class="wert" required /><br>
                <label>Email</label><input type="email" name="email" placeholder="Email" class="wert email_val" required />
                <span id="email_error" style="color: red;margin-left: 30px; font-weight: bold;"></span>
                <br>
                <label>Password</label><input type="password" name="pwd" placeholder="******" class="wert usinue_email" required /><br/>
                <label>Confirm Password</label><input type="password" name="cpwd" placeholder="******" class="wert usinue_email" required /><br/>
                <label>Mobile</label><input type="text" name="mobile" placeholder="Mobile Number" class="wert usinue_email" required /><br/>

                <input type="submit" name="register" value="Sign up!" class="forbutton" />&nbsp;&nbsp;&nbsp;Or<img src="img/login_facebook.png" class="for_facebook"/>

                <br/><br/>Already have an account?&nbsp;&nbsp;&nbsp;&nbsp; <a href="#openModal">Login</a>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
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
            var action="assets/controller-links.php";
            $.post(action,{emaillogin:email,passwordlogin:password},function(data){
               if(data==0){
                   
                   $('.loginerror').text('The email or password you entered is incorrect!!').css('color','red');
               }
               else{
                   $('#loginformid').submit();
               }
            });
        });
    });
</script>