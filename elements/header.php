<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.php">
				 Blogs
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
                   <!-- BEGIN USER LOGIN DROPDOWN -->
				   <?php if(isset($_SESSION['sessusername'])) :?>
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="assets/img/avatar1_small.jpg" />
						<span class="username"> <?php echo (isset($_SESSION['sessusername'])? $_SESSION['sessusername']:"") ?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
                            <li><a href="dashboard.php"><i class="icon-home"></i>Dashboard</a></li>
							<li><a href="profile.php"><i class="icon-user"></i> My Profile</a></li>
							<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
				   <?php else:
						echo '<li><a href="login.php"><i class="icon-user"></i>Login</a></li>';
				endif; ?>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>