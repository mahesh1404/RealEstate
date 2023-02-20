<header id="header">
	<div class="crake-mobile-nav">
		<div class="logo">
			<a  href="index.php" style="color:#fff;margin-top:-10px;font-size:42px;"><strong>Prabal</strong></a>
		</div>
	</div>
	<div class="crake-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="index.php" style="color:#fff;margin-top:-10px;font-size:42px;"><strong>Prabal</strong></a>
				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
					
					<ul class="navbar-nav nav ml-auto">
						<?php
							$current_url = basename($_SERVER['PHP_SELF']);
							$active = "class=\"active\"";
						?>
						<li class="nav-item"><a href="index.php" <?php if ($current_url == "index.php") {echo $active;}?> class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about_us.php" <?php if ($current_url == "about_us.php") {echo $active;}?> class="nav-link">About Us</a></li>
						<!--<li class="nav-item"><a href="services.php" <?php if ($current_url == "services.php") {echo $active;}?> class="nav-link">Services</a>
							<ul class="dropdown_menu">
								<li><a href="ui_ux_design.php" <?php if ($current_url == "services.php") {echo $active;}?> >UI / UX Design</a></li>
								<li><a href="web_design_development.php" <?php if ($current_url == "web_design_development.php") {echo $active;}?>>Web Design & Development</a></li>
								<li><a href="mobile_app_development.php" <?php if ($current_url == "mobile_app_development.php") {echo $active;}?>>Mobile App Development</a></li>
								<li><a href="digital_marketing.php" <?php if ($current_url == "digital_marketing.php") {echo $active;}?>>Digital Marketing</a></li>
								<li><a href="erp_solution.php"  <?php if ($current_url == "erp_solution.php") {echo $active;}?>>ERP Solution</a></li>
								<li><a href="artificial_intelligence.php"  <?php if ($current_url == "artificial_intelligence.php") {echo $active;}?>>Artificial Intelligence</a></li>
							</ul>
						</li>-->
						<li class="nav-item"><a href="recruitment.php"  <?php if ($current_url == "recruitment.php") {echo $active;}?> class="nav-link">Recruitment</a></li>
						<li class="nav-item"><a href="#"  <?php if ($current_url == "") {echo $active;}?> class="nav-link">IT Services</a></li>
						<li class="nav-item"><a href="#"  <?php if ($current_url == "") {echo $active;}?> class="nav-link">IT Product & Retail</a></li>
						<li class="nav-item"><a href="contact_us.php"  <?php if ($current_url == "contact_us.php") {echo $active;}?> class="nav-link">Contact Us</a></li>
					</ul>
				</div>
				<div class="mr-auto others-option">
					<ul class="navbar-nav">
						<li data-toggle="modal" data-target="#myModal2">
							<div class="side-menu">
								<span class="bar-1"></span>
								<span class="bar-2"></span>
								<span class="bar-3"></span>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div> 
	</div>
</header>