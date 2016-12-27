<?php require_once 'classes/class_admin.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Internal Error</title>
		<link rel="icon" href="<?= $url; ?>images/error.gif" type="image/gif">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="<?= $url; ?>libs/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?= $url; ?>libs/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= $url; ?>libs/css/signin.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?= $url; ?>libs/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?= $url; ?>libs/css/ie8.css" /><![endif]-->
	</head>
	<body>


	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Sign In With Admin</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>

	<!-- Scripts -->
			<script src="<?= $url; ?>libs/js/jquery.min.js"></script>
			<script src="<?= $url; ?>libs/js/skel.min.js"></script>
			<script src="<?= $url; ?>libs/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?= $url; ?>libs/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?= $url; ?>libs/js/main.js"></script>

	</body>
</html>