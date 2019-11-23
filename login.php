<?php  include_once("private/settings.php");
include_once(PATH."classes/User.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<?php include("elements/login_head.php");?>
</head>
<style>
.login {
    background-color: #fff !important;
}
	.login .content {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 4px;
    border: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
<!-- Checking Login Form Action -->
<?php include("actions/login.php");?>
<!-- Checking Register Form Action -->
<?php include("actions/register.php");?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo"><a class="brand" href="index.php">BLOGS</a></div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
			<?php include("pages/login.php");?>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
			<?php include("pages/forgot_password.php");?>
		<!-- END FORGOT PASSWORD FORM -->
		<!-- BEGIN REGISTRATION FORM -->
			<?php include("pages/register.php");?>
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
		<?php include("elements/footer.php");?>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<?php include("elements/foot.php");?>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>