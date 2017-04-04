<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Events'name='events' clonable='1'>

<cms:editable name='event_details' type='text'/>

<cms:editable name='event_image'
crop='1'
width='368'
height='256'
type='image' 
/>

</cms:template>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Foodies of Bhubaneswar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="E:\helios\assets\css\about.css" rel="stylesheet" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Events</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>
									Contents
									<ul>
										<li><a href="contents_inbhubaneswar.php">In Bhubaneswar</a></li>
										<li><a href="contents_aroundbhubaneswar.php">Around Bhubaneswar</a></li>

									</ul>
								</li>
								<li><a href="recipes.php">Recipes</li> </a>
								<li><a href="index.php#banner">Deals & Discounts</a></li>
								<li><a href="events.php">Events</a></li>
								<li><a href="index.php#banner1">About</li> </a>
								<li><a href="contact.html">Contact Us</li> </a>
								
							</ul>
						</nav>

				</div>
				<div class="container">
				<div class="wrapper style1">
				<article id="main" class="special">
				</article>

				<div class="row">
				<cms:pages masterpage='events.php'>
							<article class="4u 12u(mobile) special" style=" padding-top: 20px;">
								<img src="<cms:show event_image/>" alt="" />
								<header>
									<h3><cms:show k_page_title /></h3>
								</header>
								<p style="text-align: center">
									<cms:show event_details/>
								</p>


							</article>
							</cms:pages>
							
						</div>

						</div>
						</div>
			</div>

			<!-- about -->		

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php COUCH::invoke(); ?>