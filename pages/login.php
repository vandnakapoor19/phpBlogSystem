<form class="form-vertical login-form" id="login-form" method="POST">
    <?php 
        if(isset($frmMessage) && $frmMessage!=''){
            ?>
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert"></button>
                    <strong>Error!</strong> <?php echo $frmMessage;?>
                </div>
            <?php
        }
        if(isset($resselect) && $resselect  =='User Already Exist'){
            ?>
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert"></button>
                    <strong>Error!</strong> <?php echo $resselect;?>
                </div>
            <?php
        }
         
    ?>
    <h3 class="form-title">Login to your account</h3>
    <div class="alert alert-error hide">
        <button class="close" data-dismiss="alert"></button>
        <span>Enter any email and password.</span>
    </div>
    <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">email</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-user"></i>
                <input class="m-wrap placeholder-no-fix" type="text" placeholder="email" name="email"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
            <div class="input-icon left">
                <i class="icon-lock"></i>
                <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <label class="checkbox">
        <input type="checkbox" name="remember" value="1"/> Remember me
        </label>
        <button type="submit" name="actionprocess" value="login_do" class="btn green pull-right">
        Login <i class="m-icon-swapright m-icon-white"></i>
        </button>            
    </div>
    <div class="forget-password">
        <h4>Forgot your password ?</h4>
        <p>
            no worries, click <a href="javascript:;" class="" id="forget-password">here</a>
            to reset your password.
        </p>
    </div>
    <div class="create-account">
        <p>
            Don't have an account yet ?&nbsp; 
            <a href="javascript:;" id="register-btn" class="">Create an account</a>
        </p>
    </div>
</form>