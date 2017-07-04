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
		<title>How to play.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="img/logo0.png"/>
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
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
								<h2>How to play</h2>
								<p>Here a quick guide to get you up and running in Battlegrounds ( litterally running ).</p>
								<div class="imagePUBGie"> <img src="img/overview_thumb_big08.jpg"/>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
									<h3 class="major">PUBG</h3>
									<p>If you’re unfamiliar with PlayerUnknown’s Battlegrounds, it’s essentially the latest hugely successful battle royale game with one huge exception: it’s not total bobbins. Unlike DayZ and H1Z1, PlayerUnknown’s Battlegrounds is surprisingly polished - albeit horribly optimised - with nuanced, weighty gunplay reminiscent of the Arma series and plenty of space within its 8x8km map for players to flex their tactical muscle.</p>


									<h3 class="major"></h3>
									<p>If the runaway success of PlayerUnknown's Battlegrounds proves one thing, it’s that people love dying alone in the middle of nowhere to an unseen enemy, armed with just a crowbar and sporting only a pair of inexplicably clean boxers. Nope, it’s not the nerve-shredding tension that only a last-man-standing battle royale fight between 100 players can deliver – it’s the dying alone in a ditch that attracts.
										Since buying the game earlier this week, I’ve died in a lot of ditches (precisely nine at the time of writing), but I’ve also died in buildings, on rooftops, under cars, while swimming, on fire, at the bottom of a cliff, consumed by a cloud of electricity, by skillet, and friendly fire.
										Naturally, that makes me something of an expert when it comes to playing PlayerUnknown's Battlegrounds badly; an idiot without the savant if you will. So, while I can’t impart any wisdom as to how you might win a match in this brutal survival game, I can tell you how not to play it in the hope that you’ll figure out the rest. Oh, and when you do, can you let me know? Cheers.</p>

									<h3 class="major">Don’t go in buildings with open doors</h3>
									<p>Here’s an easy tip to set you on your way: open doors in PlayerUnknown's Battlegrounds signify that another player has already entered the building. From this we can extrapolate that they’ve already collected up all the best survival swag, but also that they’re either still in the building, or close enough to it that they’ll be able to hear or spot you snooping around in there.
										If you’re smarter and better at aiming than me, you can exploit this by setting a trap of your own by entering the building, making some noise, and then blasting or bludgeoning whoever comes to investigate. If you’re as stupid and bad at aiming as me then this plan will backfire, and whoever comes to investigate will kill you, and probably steal your shoes and fingerless gloves – looking cool is also very important.</p>

									<h3 class="major">Don't go in buildings with closed doors</h3>
									<p>Like buildings with open doors, buildings with closed doors are also untrustworthy as another player has likely already been there, CLOSED THE DOOR AFTER THEM, collected all the best survival swag, and are might also still be in the building or close enough to it that they’ll be able to hear or spot you snooping around in there. These buildings, much like the ones with open doors, are certified death traps and should be avoided at all costs.</p>

									<h3 class="major">Go in all the buildings</h3>
									<p>It’s absolutely imperative that you go in as many buildings as possible in PlayerUnknown's Battlegrounds, open doors or not. Why? Buildings contain generous amounts of gear, ranging from humble six shooters (although in the topsy-turvy reality that PlayerUnknown's Battlegrounds posits as its setting, they’re actually seven shooters) and automatic assault rifles, to scopes, backpacks, armour, and melee weapons. You’ll need all of these things for the best chance of surviving into the last 40 players, and the only way of getting them is to rummage through buildings. Every building, you see, because the best attachments and armour are exceedingly rare.
									Now, if you can simultaneously explore every building in sight while also avoiding any with open or closed doorways, you’re really onto something.</p>

									<h3 class="major">Don’t forget to mute voice chat</h3>
									<p>Just don’t. I’m not f***ing around, you’ll want to smash Ctrl+T the second the game lets you.
									If you thought the screeching masses of Call of Duty lobbies were too much to bear then you haven’t heard 99 players all bleating over one another like a flock of racist, sweary, misogynistic sheep. Obviously, it’s not actually every player, but it’s certainly more than most people can cope with.</p>

									<h3 class="major">Don’t get swept up by the gigantic electrical force field slowly enveloping the entire map</h3>
									<p>One of the gameplay features PlayerUnknown's Battlegrounds borrows from the battle royale genre is a shrinking playable zone. Once everyone has landed on the 8x8km island, a zone will appear on the map signalling the playable area, and after five minutes, an electrical cloud will sweep across the rest of the map dealing a small amount of damage to anyone caught in it every couple of seconds. Then the playable zone shrinks, and after another couple of minutes the force field shrinks with it. This carries on until the last few players are left in a field with next to no cover, desperately duking it out until the end.
									Now, it seems obvious enough, but don’t get caught out by the ginormous force field because it will kill you. In fact, don’t even go near the borders of the storm, as this is an incredibly popular area of play for opportunistic snipers looking to pick off players as they try to make it to safety.
									</p>

									<h3 class="major">Don’t go within a 100 metres of a vehicle</h3>
									<p>There are seven types of vehicle in PlayerUnknown's Battlegrounds and you will die if you tread within 100 metres of any of them. Don’t be fooled if you manage to make it inside a car or boat and speed away to safety: you’re still done for.
										Vehicles make noise, are easy to spot, and hard to discretely ditch. Get into one and a lot of players will become aware of your presence, that is if they’re not already watching it through a scope, hoping to pick off anyone optimistic enough to think that it’s the answer to their survival hopes. As an added bonus, if a player spots an abandoned vehicle, they know a player is probably nearby, so best to just avoid vehicles completely.</p>

									<h3 class="major">Don’t start a fight you can’t finish</h3>
									<p>This tip is great because it can also be applied to real life, if you’re a hardened geezer from London’s East End, that is. Basically, if you’ve only got a machete and a pistol with a couple of rounds then you’re not adequately prepared to raid a building being held by a four-man squad or a tense sniping duel. It’s easy to get carried away by the mere sight of an enemy when you’ve spent 20 minutes running around and collecting gear in total isolation, but patience and preparation reign supreme in PlayerUnknown's Battlegrounds.</p>

									<h3 class="major">Don’t trust your squadmates</h3>
									<p>If the loneliness and suffering of solo matchmaking in PlayerUnknown's Battlegrounds is getting you down, it might be tempting to try out Duo or Squad matchmaking, which will pair you up with other loners to make the experience a bit less suffocating. But what they don’t mention alongside that matchmaking option is all the heartbreaking betrayal you’ll encounter when playing with others.
										It’s often more insidious than a simple shotgun blast to the face because you decided to sneak up on a squadmate while they were scavenging for supplies in a gloomy attic. It’s things like your squad driving off into a sunset without you – in the jeep you found and brought to them – or asking you to run across a field while they cover you, only for them to abandon you at the slightest hint of danger.</p>


									<section class="features">
										<article>
											<a href="#" class="image"><img src="img/pic04.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="img/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>

								</div>
							</div>

					</section>


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
