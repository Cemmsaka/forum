<!DOCTYPE HTML>
<?php

function url($param,$php = true){
	$baseurl = "/php/";
	if($php){
		$baseurl .= "forumphp/";
	}
	return "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['SERVER_NAME']}{$baseurl}{$param}";
}

?>
<?php session_start(); ?>
<html>
	<head>
		<title>The UnkownForum</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" href="img/logo0.png"/>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">The Unknown Forum</a></h1>
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
								<?php if(!isset($_SESSION["logged_in"])){ ?>
								<li><a href=<?=url("new",false)?>>Log In/Sign Up</a></li>
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
								<h2>PlayerUnkowns Battlegrounds</h2>
								<p>PlayerUnknown's Battlegrounds (PUBG) is a massively multiplayer online battle royal video game developed and published by Bluehole for Microsoft Windows and Xbox One. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game's world decreases in size over a match, directing surviving players into tighter areas and forcing encounters. The last player or team standing wins the round.</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
									<div class="imagePUBG"> <img src="img/pubg_overview1.jpg"/>

									<h3 class="major">Who is PlayerUnkown</h3>
									<p> PLAYERUNKNOWN (Brendan Greene - Creative Director at Bluehole) is the pioneer of the Battle Royale genre.
											From humble beginnings creating the Battle Royale game-mode on the ARMA series,
											he went on to license his game-mode to Sony Online Entertainment (now Daybreak Games) for inclusion in their title H1Z1.
											Now working as creative director on BATTLEGROUNDS,
											he has finally the chance to create his own version of the game-mode which spawned a new genre in gaming.
											“From when I first started making the Battle Royale game-mode in ARMA 2, I have always wanted to make a good game.
											With Bluehole, and their philosophy of creating “well made” games,
											I am confident that together we can create a great game.” </p>

									<h3 class="major">Community-Driven development</h3>
									<p> Since we started this project a year ago,
											we have reached out to the Battle Royale community to gather suggestions
											and feedback about what they want and expect from the game.
											Ever since we started our pre-alpha testing,
											we have worked with them to implement suggestions,
											get feedback about gameplay, and ask their help when we ran alpha and beta testing.</p>

									<h3 class="major">Custom Games and Modding</h3>
									<p>	During Early Access, we will have custom games on private servers available for our partners. From the very start,
											we wanted to provide players with the ability
											to create new game-modes and mods based in our game.
											We have created a highly detailed world, and provide content creators
											with a wealth of vehicles, weapons & items for use in their own mods.
											Our players will have the full use of our assets
											and can create their own content for inclusion in their mods,
											by using the highly powerful Unreal Engine devkit!</p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="img/Guide_PUBG2.jpg" alt="" /></a>
											<h3 class="major">How to play Battlegrounds</h3>
											<p>Here a quick guide to get you up and running in Battlegrounds(litterally running).</p>
											<a href="../forumphp/howto.php" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="img/Weapons_PUBG1.jpg" alt="" /></a>
											<h3 class="major">Weapons and Attachments</h3>
											<p>Who doesnt want to see the sexy ass weapons they use in the game?!</p>
											<a href="../forumphp/index.php" class="special">Take a look here.</a>
										</article>
									</section>

								</div>
							</div>

					</section>

				<!-- Footer -->

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
