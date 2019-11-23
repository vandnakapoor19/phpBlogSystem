<?php  include_once("private/settings.php");
include_once(PATH."classes/Blog.php");

$title = '';
$content = '';
$name = '';
$post_date ='';
if(isset($_GET['blog']) && $_GET['blog']!=''){
	$obj = new Blog();
	$obj->post_id = base64_decode($_GET['blog']);
	$blogdata = $obj->selectBlog();


	if(isset($blogdata) && is_array($blogdata)){
		$row 	= $blogdata[0];
		$title 	= $row->title;
		$content 	= $row->content;
		$name 	= $row->name;
		$post_date 	= $row->post_date;	
	
}
}


?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<?php include("elements/head.php");?>
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/css/pages/blog.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/pages/default.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
		<?php include("elements/header.php");?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->   
	<div class="page-container row-fluid">
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Blog</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Blog Post</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12 blog-page">
						<div class="row-fluid">
							<div class="span12 article-block">
								<h1><?php echo $title;?></h1>
								<div class="blog-tag-data">
									<div class="row-fluid">
										<div class="span6">
											<ul class="unstyled inline blog-tags">
											<li><i class="icon-calendar"></i> <a href="#"><?php echo $post_date;?></a></li>
											<li><i class="icon-user"></i> <a href="#"><?php echo $name;?></a></li>
											
											</ul>
										</div>
										<div class="pull-right">
											<ul class="social-icons">
												<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
												<li><a href="#" data-original-title="facebook" class="facebook"></a></li>
												<li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
												<li><a href="#" data-original-title="twitter" class="twitter"></a></li>
												<li><a href="#" data-original-title="instagram" class="instagram"></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!--end news-tag-data-->
								<div>
									<p><?php echo $content;?></p>
								</div>
								<hr>
								<?php if(!isset($_SESSION['sessusername'])):?>
								<div class="media">
									<h3>Comments</h3>
									<a href="#" class="pull-left">
									<img alt="" src="assets/img/blog/9.jpg" class="media-object">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Media heading <span>5 hours ago / <a href="#">Reply</a></span></h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
										<hr>
										<!-- Nested media object -->
										<div class="media">
											<a href="#" class="pull-left">
											<img alt="" src="assets/img/blog/5.jpg" class="media-object">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Media heading <span>17 hours ago / <a href="#">Reply</a></span></h4>
												<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
											</div>
										</div>
										<!--end media-->
										<hr>
										<div class="media">
											<a href="#" class="pull-left">
											<img alt="" src="assets/img/blog/7.jpg" class="media-object">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Media heading <span>2 days ago / <a href="#">Reply</a></span></h4>
												<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
											</div>
										</div>
										<!--end media-->
									</div>
								</div>
								<!--end media-->
								<div class="media">
									<a href="#" class="pull-left">
									<img alt="" src="assets/img/blog/6.jpg" class="media-object">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Media heading <span>July 5,2013 / <a href="#">Reply</a></span></h4>
										<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
									</div>
								</div>
								<!--end media-->
								<hr>
								<div class="post-comment">
									<h3>Leave a Comment</h3>
									<form>
										<label>Name</label>
										<input type="text" class="span7 m-wrap">
										<label>Email <span class="color-red">*</span></label>
										<input type="text" class="span7 m-wrap">
										<label>Message</label>
										<textarea class="span10 m-wrap" rows="8"></textarea>
										<p><button class="btn blue" type="submit">Post a Comment</button></p>
									</form>
								</div>
								<?php endif; ?>
							</div>
							
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			<?php include("elements/footer.php");?>
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="assets/scripts/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>