<!DOCTYPE HTML>
<?php include 'assets/include/connectBDD.php'; ?>
<html>
	<head>
		<title>Mon parcours</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload" onselectstart="return false" oncontextmenu="return false" ondragstart="return false">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<?php include 'assets/include/header.php'; ?>
					</header>

				<!-- Menu -->
					<?php include 'assets/include/nav.php'; ?>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<section class="intro">
									  <div class="container">
									    <h1>Mon parcours scolaire et professionnel</h1>
									  </div>
									</section>

									<section class="timeline">
									  <ul>
											<?php
											$req = $bdd->prepare("SELECT year(parcoursDate), parcoursTitre, parcoursLib FROM parcoursItem ORDER BY parcoursDate desc");
											$req->execute();
											while($cur = $req->fetch())
											{
											?>
									    <li>
									      <div>
									        <time><?php echo $cur[0]; ?> - <?php echo $cur[1]; ?></time> <?php echo $cur[2]; ?>
									      </div>
									    </li>
											<?php
											}
											?>
									  </ul>
									</section>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<?php include 'assets/include/contact.php'; ?>

				<!-- Footer -->
					<?php include 'assets/include/footer.html'; ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/timeline_slider.js" charset="utf-8"></script>

	</body>
</html>
