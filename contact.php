<?php require_once 'settings/settings.php'; 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Us</title>
		<link rel="icon" href="images/error.gif" type="image/gif">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="libs/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="libs/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="libs/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="libs/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php $temp->getHeader(); ?>

							<!-- Contact Form -->
							<div style="margin-top: 50px;">

							<h2>Contact Us</h2>

							<form method="post" action="#">
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									
									<div class="12u$">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<!-- Break -->
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>

							</div>

							<!-- Section Post -->
							<?php $temp->getSectionPost(); ?>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
							<?php $temp->getSearch(); ?>

							<!-- Menu -->
							<?php $temp->getSideMenu(); ?>

							<!-- Section Side1 -->
							<?php $temp->getSectionSide1(); ?>

							<!-- Section Side2-->
							<?php $temp->getSectionSide2(); ?>

							<!-- Footer -->
							<?php $temp->getFooter(); ?>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="libs/js/jquery.min.js"></script>
			<script src="libs/js/skel.min.js"></script>
			<script src="libs/js/util.js"></script>
			<!--[if lte IE 8]><script src="libs/js/ie/respond.min.js"></script><![endif]-->
			<script src="libs/js/main.js"></script>

	</body>
</html>