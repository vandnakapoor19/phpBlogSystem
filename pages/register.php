<form class="form-vertical register-form" id="register-form" method="POST">
    <h3 class="">Sign Up</h3>
    <p>Enter your account details below:</p>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Name</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-user"></i>
                <input class="m-wrap placeholder-no-fix" type="text" placeholder="name" name="name"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-lock"></i>
                <input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-ok"></i>
                <input class="m-wrap placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="rpassword"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-envelope"></i>
                <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
            <input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
            </label>  
            <div id="register_tnc_error"></div>
        </div>
    </div>
    <div class="form-actions">
        <button id="register-back-btn" type="button" class="btn">
        <i class="m-icon-swapleft"></i>  Back
        </button>
        <button type="submit" name="actionprocess" value="register_do" id="register-submit-btn" class="btn green pull-right">
        Sign Up <i class="m-icon-swapright m-icon-white"></i>
        </button>            
    </div>
</form>
		