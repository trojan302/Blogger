<?php require_once 'settings/conf.php'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="icon" href="<?= $url; ?>images/error.gif" type="image/gif">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="<?= $url; ?>libs/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?= $url; ?>libs/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= $url; ?>libs/css/admin-panel.css" />
		<link rel="stylesheet" href="<?= $url; ?>libs/css/font-awesome.min.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?= $url; ?>libs/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?= $url; ?>libs/css/ie8.css" /><![endif]-->
	</head>
	<body>


	<div id="wrapper">

        <!-- Sidebar -->
        <?php $tmp->getSidebar(); ?>

        <!-- Page Content -->
       	<?php $tmp->getContent(); ?>

    </div>
	



	<script src="<?= $url; ?>libs/js/jquery.min.js"></script>
	<script src="<?= $url; ?>libs/js/bootstrap.min.js"></script>
	<script>
		$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		});
	</script>

	</body>
</html>