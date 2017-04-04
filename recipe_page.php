<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Recipes' name='recipe' clonable='1'>

<cms:editable name='recipe_summary' type='text'/>

<cms:editable name='recipe_details' type='richtext'/>

<cms:editable name='recipe_image'
crop='1'
width='768'
height='352.633'
type='image' 
/>

<cms:editable name='ingredients' type='richtext'/>
</cms:template>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Foodies of Bhubaneswar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo"><cms:show k_page_title /></a></h1>
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

			<!-- Main -->
				<div class="wrapper style1" style="padding-top: 50px">

					<div class="container">
						<div class="row 200%">
							<div class="3u 12u(mobile)" id="sidebar">
								<hr class="first" />
								
								<section>
									<header>
										<h3 style="font-size: 1.5em;"><a href="#">Ingredients</a></h3>
									</header>
	
									<div class="row 50%">
								
										<div class="8u"> 
										<h4><cms:show  ingredients/> </h4>
										
									</div>
									
								</section>
							</div>
							<div class="9u 12u(mobile) important(mobile)" id="content" >
								<article id="main">
							
									<a class="image featured" style="margin-bottom: 0px"><img src="<cms:show recipe_image />" alt="" /></a>
									<section>
										<header>
											<h3 id="procedure">Procedure</h3>
										</header>
										<p>
										<cms:show recipe_details />
											
										</p>
										

							<!-- AddToAny BEGIN -->
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_google_plus"></a>
							<a class="a2a_button_pinterest"></a>
							</div>
							<script async src="https://static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->


									</section>
								</article>
							</div>
						</div>
						
					</div>

				</div>

		</div>

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