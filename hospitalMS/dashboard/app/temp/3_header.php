		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<h1>HOSPITAL</h1>
						<span>Dashboard</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/a.png" alt=""> </span> 
<?php
	$user_role = Session::get("user_role");
	if ($user_role == '1') {
?>
									<div class="user-name">
										<p><?php echo Session::get("lastname"); ?></p>
										<span>Administrator</span>
									</div>
<?php
	}
?>
									
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
<?php
	$filepath = realpath(dirname(__FILE__));
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
        Session::destroy();
        echo "<meta http-equiv='refresh' content='0;URL=?action=logout'/>";
    }
?>
							<ul class="dropdown-menu drp-mnu"> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a onclick="return confirm('sure to log out?');" href="?action=logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->