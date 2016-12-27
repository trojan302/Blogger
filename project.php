<?php require_once 'settings/settings.php'; 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Projects</title>
		<link rel="icon" href="images/error.gif" type="image/gif">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="libs/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="libs/css/bootstrap.min.css">
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

							<!-- Carausel -->
							<?php $temp->getCarousel(); ?>

							<!-- Section Post -->
							<?php $temp->getSectionProjects(); ?>

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
			<script src="libs/js/bootstrap.min.js"></script>
			<script>
		    $('.carousel').carousel({
		        interval: 5000
		    })
		    </script>

	</body>
</html>