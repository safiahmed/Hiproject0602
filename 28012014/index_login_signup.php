<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Login</h2>
        <form action="account-information.php" method="post">
            <div class="form">
                <label>Email</label><input type="email" name="email" placeholder="Email" class="wert"><br>

                <label>password</label><input type="password" name="password" placeholder="******" class="wert"></br>

                <input type="submit" value="Login" class="forbutton" name="mrova-sendbutton">&nbsp;&nbsp;&nbsp;Or<img src="img/login_facebook.png" class="for_facebook"/>
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
                <label>Email</label><input type="email" name="email" placeholder="Email" class="wert" required /><br>
                <label>Password</label><input type="password" name="pwd" placeholder="******" class="wert" required /><br/>
                <label>Confirm Password</label><input type="password" name="cpwd" placeholder="******" class="wert" required /><br/>
                <label>Mobile</label><input type="text" name="mobile" placeholder="Mobile Number" class="wert" required /><br/>

                <input type="submit" name="register" value="Sign up!" class="forbutton" />&nbsp;&nbsp;&nbsp;Or<img src="img/login_facebook.png" class="for_facebook"/>

                <br/><br/>Already have an account?&nbsp;&nbsp;&nbsp;&nbsp; <a href="#openModal">Login</a>
            </form>
        </div>
    </div>
</div>