<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='About Us' >
<cms:editable name='about_image'
crop='1'
width='1200'
height='551'
type='image' />

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
	<body class="homepage">

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo"><img style='height: 100%; width: 100%; object-fit: contain;' src="./images/logo.png"/></a></h1>
								
								<hr />
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Explore</a>
								
							</footer>
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
								<li><a href="recipes.php">Recipes </a> </li>
								<li><a href="index.php#banner">Deals & Discounts</a></li>
								<li><a href="events.php">Events</a></li>
								<li><a href="index.php#banner1">About </a> </li>
								<li><a href="contact.html">Contact Us </a> </li>
								
							</ul>
						</nav>
				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Hi. We have some exciting <strong>Deals</strong> for you</h2>
						
					</header>
				</section>

			<!-- Carousel -->

				<section class="carousel">
					<div class="reel">
					<cms:pages masterpage='deals.php' >

						<article>
							<a class="image featured"><img src="<cms:show deal_image/>" alt="" /></a>
							<header>
								<h3><cms:show k_page_title /></h3>
							</header>
							<p><cms:show deal_details/></p>
						</article>
						</cms:pages>					
					</div>
				</section>
		<!--about-->		
		<section  id="banner1" style="padding-bottom: 0px;" >
    		<div class="container">
             	<div class="row text-center pad-row" >
             		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                	<i class="fa fa-quote-left fa-3x"></i>
					<h2> About us </h2> <br>

                            <article id="main" class="container special">
						<img class="image featured" style="margin-bottom: 25px" src="<cms:show about_image/>" alt="" />

						<cms:editable name='about_us' type='richtext'> 
						<p>
							Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
							mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
							consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque.
						</p>
						</cms:editable>
					</article>
					
                	</div>
                </div>
            </div>   
           
       </section>

			<!-- Main -->
				<div class="wrapper style2"></div>

			<!-- Features -->
				<div class="wrapper style1">

					<section id="features" class="container special">
						<header>
							<h2>Recent Contents for you</h2>
						</header>
						<div class="row">
						<cms:pages masterpage='contents.php' limit='3' >
							<article class="4u 12u(mobile) special">
								<a href="<cms:show k_page_link />" class="image featured"><img src="<cms:show content_image />" alt="" /></a>
								<header>
									<h3><a href="<cms:show k_page_link />"> <cms:show k_page_title /> </a></h3>
								</header>
								<p style="text-align: center;">
									<cms:show content_summary />
								</p>
							</article>

						</cms:pages>

						</div>
					</section>

				</div>

						<div id="footer">
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Like our Website?</h3>
										</header>
										<p>Share this awesome website with your friends.</p>

									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Foodies of Bhubaneswar</li><li>Design & Development: <a href="">S R Tarun</a></li>
										</ul>
									</div>

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