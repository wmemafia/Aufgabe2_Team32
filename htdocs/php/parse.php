<?php
require_once('world_data_parser.php');

$parser = new WorldDataParser();
$data = $parser->parseCSV('../data/world_data.csv');

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
				<a href="../index.html">
					<img id="logo" src="../img/logo.png" alt="Logo" />
				</a>
				<nav id="navigation">
					<ul id="menu" class="menu">
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="../index.html"> A1 - Table</a></li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="../php/parse.php"> A2 - Parse</a></li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="../php/save.php"> A2 - Save</a></li>
						<li><i class="fa fa-list-ul" aria-hidden="true"></i><a href="../php/print.php"> A2 - Print</a></li>
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
					<pre>
					<?php
						print_r($data);
					?>
					</pre>
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
