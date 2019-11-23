<?php include_once("private/settings.php");
	include_once(PATH."classes/Blog.php");
	$obj = new Blog();
	$blogdata = $obj->selectBlog();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<?php include("elements/head.php");?>
	<link href="assets/css/pages/default.css" rel="stylesheet" type="text/css"/>
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
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12 blog-page">
						<div class="row-fluid">
							<div class="span12 article-block">
								<h1>Latest Blog</h1>
								<?php 	
								if(!empty($blogdata) && is_array($blogdata))
									{
										foreach($blogdata as $row)
										{ ?>
											<div class="row-fluid rd">
												<div class="span12 blog-article">
												<div class="pull-right">
													<ul class="social-icons">
														<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
														<li><a href="#" data-original-title="facebook" class="facebook"></a></li>
														<li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
														<li><a href="#" data-original-title="twitter" class="twitter"></a></li>
														<li><a href="#" data-original-title="instagram" class="instagram"></a></li>
													</ul>
												</div>
												<h2><a href="blog_details.php?blog=<?php echo base64_encode($row->post_id)  ?>"><?php echo $row->title;?></a></h2>
													<ul class="unstyled inline">
														<li><i class="icon-calendar"></i> <a href="#"><?php echo $row->post_date;?></a></li>
														<li><i class="icon-user"></i> <a href="#"><?php echo $row->name;?></a></li>
													</ul>
													<p><?php echo (strlen($row->content)<1500)?($row->content): substr($row->content, 0, strrpos(substr($row->content, 0, 1500), ' ')) . '...';?></p>
													
													<a class="btn blue" href="blog_details.php?blog=<?php echo base64_encode($row->post_id) ;?>">Read more <i class="m-icon-swapright m-icon-white"></i></a>

												</div>
											</div>
											<hr>
											<?php 
										}
									}?>
								
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