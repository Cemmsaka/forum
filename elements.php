<!DOCTYPE HTML>
<html>
	<head>
		<?php
		include_once '../new/database.php';
		new mydatabase;
		session_start();
		 ?>
		<title>Topics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="Cem Saka">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="img/logo.png"/>
	<!-->[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><!-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<?php

	function url($param,$php = true){
		$baseurl = "/php/";
		if($php){
			$baseurl .= "forumphp/";
		}
		return "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['SERVER_NAME']}{$baseurl}{$param}";
	}

	?>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">The Unkown Forum</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="elements.php">Topics</a></li>
								<li><a href="profile.php">My Profile</a></li>
								<?php if(!isset($_SESSION["logged_in"])){ ?>
									<li><a href= <?=url("new",false)?>>Log In/Sign Up</a></li>
									<?php }else {?>
										<li><a href="../new/logout.php">Log out</a></li>
								<?php }?>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Topics</h2>
								<section>

									<div class="table-wrapper" style="overflow-x:auto;">
										<table>
											<thead>
												<tr>
													<th>Title</th>
													<th>Description</th>
													<th>Created At</th>
													<th>Created By</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$variable = mydatabase::execute("SELECT * FROM topics ");
													foreach ($variable as $value ) {

												?>
												<tr>
													<td><?= $value['subject'] ?></td>
													<td><?= $value['content'] ?></td>
													<td><?= $value['created at'] ?></td>
													<td><?= $value['users_first_name'] ?></td>
												</tr>
<?php
}
 ?>
											</tbody>
										</table>
									</div>
								</section>
							</div>
							<section id="topic-form">
								<article class="input">


								</article>

						</header>


		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
