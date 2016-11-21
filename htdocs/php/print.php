<?php
require_once('world_data_parser.php');

$parser = new WorldDataParser();
$data = $parser->parseCSV('../data/world_data.csv');
$parser->saveXML($data);
$html = $parser->printXML('../data/world_data.xml', '../data/world_data.xsl');

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required UTF8 -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<!-- Title -->
		<title>World Data Overview</title>

		<!-- This is so meta -->
		<meta name="description" content="This is the first excercise in WME 2016. TU Dresden." />
		<meta name="author" content="Mics21, MarauderXtreme" />
		<meta name="keywords" content="Much HTML5, So CSS3, Such JS, WOW" />

		<!-- Keywords are obsolet since search machines don't process them anymore' -->

		<!-- All allowed libraries from a CDN -->
		<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/murtaugh/HTML5-Reset/master/assets/css/reset.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
		
		<!-- Custom Includes -->
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script type="text/javascript" src="../js/app.js"></script>
	</head>
	<body id="page" onresize="unresponsiveIt()" onload="unresponsiveIt()">
		<div id="page-wrapper">
			<header id="header">
				<img id="logo" src="../img/logo.png" alt="Logo" />
				<nav id="navigation">
					<ul id="menu" class="menu">
						<li><i class="fa fa-list-ul" aria-hidden="true"></i> A1 - Table</li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="/php/parse.php"> A2 - Parse</a></li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="/php/save.php"> A2 - Save</a></li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="/php/print.php"> A2 - Print</a></li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i> A3 - REST</li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i> A4 - Vis</li>
					</ul>
					<i class="fa fa-bars menu-sandwich" onclick="toggleMenu();" aria-hidden="true"></i>
				</nav>
				<div class="clearing"></div><!-- clear nav -->
			</header>
			<main id="content">
				<article>
					<h1>
						World Data Overview ...
					</h1>
					<div id="responsive-content">
						Mavericks reality distortion gradients attenuation. Thought through and through notifications transparency game center multitasking aluminum advanced desktop operating system genius bar. This changes everything designed by Apple in California passbook. Control center photos all-new design SDK technology clock. Simplicity is actually quite complicated. Functional layers 9:41am partly cloudy minimalism. Dock airdrop slide to answer music. Video multitouch iTunes compass. Harmonious finder grid system retina animation compressor experience keynote.

						Redesign services API notes system preferences. Features siri flat buttons airplane mode calculator. Missed call cover flow compare models. Wi-Fi apple care volume reminder controls. My stations folders mac power ultimate upgrade. Shop online quicktime trackpad server aperture rumors education safari one to one. Remote desktop motion business. Backlit keyboard chess phone airport extreme support iPad. Accessories magsafe terminal final cut pro. Featured TV shows downloads digital color meter. Glossy tech specs bluetooth manuals. OpenGL products FaceTime free shipping recycling mission control applications. from <a href="http://blog.zappistore.com/jony-ipsum/" target="_blank" rel="nofollow">jony_ipsum</a><!-- don't follow this link -->
					</div>
					<p class="toggles">
						Show/Hide: 
						<a href="#!" onclick="toggleColumnVisibility(2)">birth rate</a> |
						<a href="#!" onclick="toggleColumnVisibility(3)">cellphones</a> |
						<a href="#!" onclick="toggleColumnVisibility(4)">childred / woman</a> |
						<a href="#!" onclick="toggleColumnVisibility(5)">electric usage</a> |
						<a href="#!" onclick="toggleColumnVisibility(6)">internet usage</a>
					</p><!-- /toggles upper -->
                    <?php
                        echo $html;
                    ?>
				</article>
			</main>
			<footer id="footer">
				<div class="small-100 medium-50">
					<p>
						Copyright &copy; 2015 world_data
					</p>
					<p>
						First course exercise <strong>HTML, CSS and JS</strong> of the lecture Web and Multimedia Engineering.
					</p>
				</div><!-- /footer left column -->
				<div class="small-100 medium-50 text-right">
					<p>
						This solution has been created by:
					</p>
					<p>
						@Mics21 and @MarauderXtreme - Team 32
					</p>
				</div><!-- /footer right column -->
				<div class="clearing"></div><!-- clear responsive footer -->
			</footer>
		</div><!-- /page-wrapper -->
	</body>
</html>
