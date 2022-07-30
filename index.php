<?php
session_start();
$_SESSION = array();
session_destroy();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title id="title">CROISSANCE ET PROFIT – Workshop</title>
	<meta name="description" content="Sym is a Creative onepage parallax template by Hencework." />
	<meta name="keywords" content="Sym, one page, onepage, parallax, portfolio, responsive, video, single page, singlepage, template, html5, studio, design, theme, agency, blog, bootstrap, business, creative, fullscreen, modern" />
	<meta name="author" content="Hencework" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="shortcut icon" href="assets/img/logo.jpeg">
	<link rel="icon" href="assets/img/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/my_css.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/regular.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/solid.min.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tai+Heritage+Pro&display=swap" rel="stylesheet">



	<!--Fonts - changed to Source Code Pro-->
	<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<!--CSS-->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="body" class="home" data-spy="scroll" data-target=".navbar" data-offset="110">
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
	<!-- Border-->
	<div class="border">
		<div id="border-top"></div>
		<div id="border-left"></div>
		<div id="border-right">
			<nav class="navbar navbar-default vertical-nav" role="navigation">
				<ul class="nav navbar-nav">
					<li><a data-scroll href="#body"><span class="nav-dots"><span class="slant"></span></span></a></li>
					<li><a data-scroll href="#about"><span class="nav-dots"><span class="slant"></span></span></a></li>
					<li><a data-scroll href="#services"><span class="nav-dots"><span class="slant"></span></span></a></li>
					<li><a data-scroll href="#work"><span class="nav-dots"><span class="slant"></span></span></a></li>

					<li><a data-scroll href="#pricing"><span class="nav-dots"><span class="slant"></span></span></a></li>

					<li><a data-scroll href="#blog"><span class="nav-dots"><span class="slant"></span></span></a></li>

				</ul>
			</nav>
		</div>
		<div id="border-bottom"></div>
	</div>
	<!-- /Border -->

	<!--Header-->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="img_nav">
						<a class="navbar-brand" data-scroll href="index.php">
							<img class="dark" src="assets/img/logo.jpeg" alt="logo" />
						</a>


					</div>
				</div>
				<div class="collapse navbar-collapse" id="example-navbar-collapse" style="background:rgba(255, 255, 255, 0.978);">
					<ul class="nav navbar-nav mynav">
						<!-- <li><a data-scroll href="#body">Home</a></li>
				<li><a data-scroll href="#about">about</a></li>
				<li><a data-scroll href="#services">services</a></li>
				<li><a data-scroll href="#work">work</a></li>
				<li><a data-scroll href="#team">team</a></li>
				<li><a data-scroll href="#pricing">pricing</a></li>
				<li><a data-scroll href="#client_test">client</a></li>
				<li><a data-scroll href="#blog">blog</a></li>
				<li><a data-scroll href="#contact">contact</a></li> -->
						<li><img src="assets/img/logo_nav1.jpg" width="150%" height="80px" alt="" srcset=""></li>
						<li><img src="assets/img/logo_nav2.jpg" width="150%" height="80px" alt="" srcset=""></li>
				</div>
				</li>
				</ul>


				
			</nav>
		</div>
	</div>
	<!--/Header-->

	<!--Slanted Overlay Menu-->
	<div class="nav-slanted"></div>
	<div class="nav-full-screen hidden">
		<nav class="navbar overlay-nav" role="navigation">
			<div class="overlay-menu-menu">
				<ul class="nav">
					<li class="menu-item active-menu"><a data-scroll href="formulaire.php" style="font-size:1.3em">S'inscrire</a></li>
				</ul>
				<div class="">
					<ul class="social-icons">
						<li>
							<a href="#" class="social-icon">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon">
								<i class="fa fa-behance"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

	</div>
	<!--/Slanted Overlay Menu-->

	<!--slider container-->
	<section id="slider" class="slider-container hero parallax-hero">
		<div class="slider-control left inactive"></div>
		<div class="slider-control right"></div>
		<ul class="slider-pagi"></ul>
		<div class="slider  slider-height">

			<!--Slider One-->
			<div class="slide slide-0 active">
				<div class="slide__bg"></div>
				<div class="slide__content">

					<!--Slider Overlay-->
					<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
						<path class="slide__overlay-path" d="M0,0 212,0 552,405 0,405" />
					</svg>
					<!--/Slider Overlay-->
					<div class="container">
						<!--Slider Info-->
						<div class="slide__text">
							<h1 class="slide__text-heading">SPECIAL MASTERCLASS</h1>
							<p class="slide__text-desc lead col-sm-4 pad-zero">Développez Une Entreprise Réputée Et Rentable Qui Fonctionne Sans Vous !</p>
							<div class="master-info">
								<div class="date">
									<img src="assets/img/png/calendrier.png" alt="" srcset="">
									<p>11 et 12
NOVEMBRE 2022</p>
								</div>
								<div class="lieu">
								<img src="assets/img/png/lieu.png" alt="" srcset="">
									<p>GOLDEN TULIP (Cotonou)</p>
								</div>
							</div>
						</div>
						<!--/Slider Info-->
					</div>
				</div>
			</div>
			<!--/Slider One-->

		</div>
	</section>
	<!--/slider container-->

	<!--Main Content-->
	<div class="main-content">

		<!--About Sec-->
		<div style="background:url('assets/img/background.jpg');">
			<section id="about" class="container padding-sec-lg about-sec">
				<div class="row">
					<div class="col-lg-6 center-div">
						<h2 data-aos="zoom-in">
							Workshop
						</h2>
						<div class="seprator">
							<span class="seprator-sm center-div"></span>
						</div>
						<h4 id="text_sous_workshop">Vous êtes Chef d'entreprise et vous rêvez de devenir un véritable Entrepreneur.<br>Vous êtes au bon endroit:</h4>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-lg-8 center-div">
						<div class="row">
							<div class="col-sm-3 col-xs-6">
								<div class="studio-icn-wrap">
									<svg id="studio_1" width="35" height="40" xmlns="http://www.w3.org/2000/svg">
										<g>
											<rect fill="none" height="402" width="582" y="-1" x="-1" />
										</g>
										<g>
											<path d="m22.417999,12.01l0,25.816l-9.834999,0l0,-25.816" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m26.148001,16.924l6.103998,9.882999l0,6.101002l-6.146999,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m8.852,16.924l-6.104,9.882999l0,6.101002l6.147,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m17.5,34.136002l0,-17.210001" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m12.583,8.32l4.917,-6.146l4.917999,6.146" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
										</g>
									</svg>
								</div>
								<span class="about-icon-tag">Augmenter vos revenus</span>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div class="studio-icn-wrap">
									<svg id="studio_2" width="45" height="36" xmlns="http://www.w3.org/2000/svg">

										<g>
											<rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1" />
										</g>
										<g>
											<path d="m32.188,34.605l11.069,0l0,-33.21l-41.514,0l0,33.21l11.071,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m15.581,18c-3.057,0 -5.535999,-2.479 -5.535999,-5.533c0,-3.062 2.479,-5.539 5.535999,-5.539s5.536,2.478 5.536,5.539c0,3.054 -2.479,5.533 -5.536,5.533z" stroke-miterlimit="10" stroke-width="2" stroke="#2596be" fill="none" />
											<path d="m23.884001,30.454l-1.362001,-8.304001l-4.174,-1.379999" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m7.278,30.454l1.363,-8.304001l4.173,-1.379999" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m28.035999,9.697001l5.532001,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m28.035999,15.232l11.069,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m28.035999,20.768l11.069,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m27.973501,26.302l11.068998,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m15.581,34.605l13.838,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
										</g>
									</svg>
								</div>
								<span class="about-icon-tag">Maîtriser votre plan de croissance</span>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div class="studio-icn-wrap">
									<svg id="studio_3" width="32" height="37" xmlns="http://www.w3.org/2000/svg">

										<g>
											<rect fill="none" height="402" width="582" y="-1" x="-1" />
										</g>
										<g>
											<path d="m4.508,0.113l0,9.197" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m4.508,23.098l0,13.789001" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m1.06,16.202c0,-1.904972 1.543028,-3.448 3.448,-3.448c1.904973,0 3.448,1.543028 3.448,3.448c0,1.904972 -1.543027,3.448 -3.448,3.448c-1.904972,0 -3.448,-1.543028 -3.448,-3.448z" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m16,0.113l0,18.387" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m16,32.290001l0,4.597" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m12.552,25.396c0,-1.904972 1.543028,-3.448 3.448,-3.448c1.904972,0 3.448,1.543028 3.448,3.448c0,1.904972 -1.543028,3.448 -3.448,3.448c-1.904972,0 -3.448,-1.543028 -3.448,-3.448z" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m27.492001,0.113l0,4.596" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m27.492001,18.5l0,18.387001" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m24.044001,11.605c0,-1.904972 1.543028,-3.448 3.448,-3.448c1.904972,0 3.448,1.543028 3.448,3.448c0,1.904973 -1.543028,3.448001 -3.448,3.448001c-1.904972,0 -3.448,-1.543028 -3.448,-3.448001z" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
										</g>
									</svg>
								</div>
								<span class="about-icon-tag">Stimuler l'engagement de votre équipe</span>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div class="studio-icn-wrap">
									<svg id="studio_4" width="49" height="36" xmlns="http://www.w3.org/2000/svg">

										<g>
											<rect fill="none" height="402" width="582" y="-1" x="-1" />
										</g>
										<g>
											<path d="m34.611,12.629l12.824001,0l0,21.186003l-12.824001,0l0,-21.186003z" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m17.719999,28.375999l-16.417999,0l0,-27.189999l40.785002,0l0,11.179" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m37.981998,12.079l0,-6.645l-32.161998,0l0,18.864" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m34.778999,28.375999l-9.028,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m29.902,33.813999l-16.416,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
											<path d="m34.356998,28.375999l13.341003,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
										</g>
									</svg>
								</div>
								<span class="about-icon-tag">Lbérer du temps pour votre qualité de vie</span>
							</div>
						</div>
					</div>
					<p id="p-sous-row">Le programme "CROISSANCE ET PROFIT" a été éprouvé depuis plusieurs années. Il vous garantit d'implémenter une vision claire et partagée au sein de votre entreprise pour impulser une croissance durable et une grande rentabilité</p>
				</div>
				<!-- <div class="row about-info-row">
		<div class="col-lg-4">
			<p class="lead">First tell about the studio in the opening lead paragraph. Optimize your webpage for search by assigning keywords.</p>
		</div>
		<div class="col-lg-4">
			<p class="">As with every conversation, what you say determines what you get. A well­ written content creates an instant connection with visitors. It is always a good thing to be able to talk with concrete proof.</p>
		</div>
		<div class="col-lg-4">
			<p class="">As with every conversation, what you say determines what you get. A well­ written content creates an instant connection with visitors. It is always a good thing to be able to talk with concrete proof.</p>
		</div>
	</div> -->
			</section>
		</div>
		<!--/About Sec-->

		<!--Expertises Sec-->
		<section id="services" class="expertises-sec">
			<!-- <div class="sec-head">
				<div class="slanted-head"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<div class="table-wrap">
								<div class="align-middle">
									<h4>
										our expertise
									</h4>
									<div class="seprator sm-sep">
										<span class="seprator-sm black"></span>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="table-wrap">
								<div class="align-middle text-right">
									<p>
										Beautifully showcase the services you provide.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div style="background:url('assets/img/background.jpg');">
				<div class="container padding-sec-sm">
					<div class="coach-info">
						<img src="assets/img/coach.jpg" alt="" srcset="" data-aos="zoom-in-left">
						<div class="info-coach" data-aos="zoom-in-right">
							<h2>Thierry MOUTON</h2>
							<ul>
								<li>Thierry a été rôdé, très jeune, au monde de l’entreprise en étant largement impliqué, dans l’affaire familiale spécialisée en architecture paysagère. C’est là qu’il a acquis une forte culture du résultat associée à la certitude qu’il ne peut y avoir de résultats sains et durables pour une entreprise sans une équipe impliquée à 100%.</li>
								<li>Dirigeant durant plus de 12 années d’une PME Parisienne spécialisée dans les domaines des Services et de la restauration (75 M€ & 940 collaborateurs) cédée en 2004 au groupe ELIOR.</li>
								<li>Il a conquis et développé avec ses équipes d’importants contrats auprès d’entreprises cotées et classées « Fortune 500 » telles que HPInvent, Microsoft, Delphi, Procter&Gamble, IBM, Comcast, L’Oréal, KPMG, Dassault, Schlumberger, Alcatel.</li>
								<li>Expert en « Qualité de vie des Dirigeants » et coach d’affaires certifié.</li>
								<li>30 ans d’Encadrement, de management et de Direction d’équipes pluridisciplinaires mobilisées sur la création de Valeur.</li>
								<li>Plus de 4800 h de pratique en séances individuelles de coaching d’affaires auprès de ses différents partenaires et au sein de ActionCOACH .</li>
							</ul>

						</div>
					</div>
					<!-- <div class="row">
						
						<div class="col-lg-4 col-sm-6 service-wrap margin-btm-sm">
							<div class="expertise-block-wrap">
								<div class="row">
									<div class="service-content-wrap">
										<div class="col-sm-2">
											<svg id="expertise_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47px" height="38px" viewBox="-1 -1 47 38" enable-background="new -1 -1 47 38" xml:space="preserve">
												<path fill="none" stroke="#2596be" stroke-width="2" d="M18.245,29.641H0.671V0.537h43.657v29.104H26.842" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M6.493,6.357h32.015v17.461H6.493V6.357z" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M22.5,31.096v-3.02" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M31.285,35.463H13.713" />
											</svg>
										</div>
										<div class="services-icon col-sm-10">
											<div class="service-info-text">
												<h3>Web Design</h3>
												<p>Accompany your services with selection of appropriate icons to make it look an interesting thing to read further.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="serch-wrap-sep"></div>
								<div class="clearfix"></div>
								<div class="progress-bar-graph">
									<div>
										<div class="row">
											<div class="progress-bar-wrap">
												<div class="col-sm-2">
													<strong><i>100</i>%</strong>
												</div>
												<div class="col-sm-10">
													<div class="bar-wrap">
														<span data-width="100"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 service-wrap margin-btm-sm">
							<div class="expertise-block-wrap">
								<div class="row">
									<div class="service-content-wrap">
										<div class="col-sm-2">
											<svg id="expertise_2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42px" height="38px" viewBox="0 -1 42 38" enable-background="new 0 -1 42 38" xml:space="preserve">
												<path fill="none" stroke="#2596be" stroke-width="2" d="M13.044,21.978h5.304V8.718h-7.956" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M18.349,8.718l22.54-7.955v29.17l-22.54-7.955" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M35.586,8.26l-11.918,4.405" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M1.111,8.718h5.303v13.26H1.111V8.718z" />
												<path fill="none" stroke="#2596be" stroke-width="2" stroke-miterlimit="10" d="M18.349,27.28h-3.978v3.979
								c0,2.196-1.782,3.979-3.978,3.979c-2.196,0-3.978-1.781-3.978-3.979v-5.304" />
											</svg>
										</div>
										<div class="services-icon col-sm-10">
											<div class="service-info-text">
												<h3>Branding</h3>
												<p>Accompany your services with selection of appropriate icons to make it look an interesting thing to read further.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="serch-wrap-sep"></div>
								<div class="clearfix"></div>
								<div class="progress-bar-graph">
									<div>
										<div class="row">
											<div class="progress-bar-wrap">
												<div class="col-sm-2">
													<strong><i>90</i>%</strong>
												</div>
												<div class="col-sm-10">
													<div class="bar-wrap">
														<span data-width="90"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 service-wrap margin-btm-sm">
							<div class="expertise-block-wrap">
								<div class="row">
									<div class="service-content-wrap">
										<div class="col-sm-2">
											<svg id="expertise_3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="33px" viewBox="-1 -0.5 48 33" enable-background="new -1 -0.5 48 33" xml:space="preserve">
												<path fill="none" stroke="#2596be" stroke-width="2" d="M9.526,1L27.5,4v27h-27V10h19.449" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M5,16h14.949" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M33.5,13l12-3v21l-12-3" />
											</svg>
										</div>
										<div class="services-icon col-sm-10">
											<div class="service-info-text">
												<h3>Motion</h3>
												<p>Accompany your services with selection of appropriate icons to make it look an interesting thing to read further.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="serch-wrap-sep"></div>
								<div class="clearfix"></div>
								<div class="progress-bar-graph">
									<div>
										<div class="row">
											<div class="progress-bar-wrap">
												<div class="col-sm-2">
													<strong><i>60</i>%</strong>
												</div>
												<div class="col-sm-10">
													<div class="bar-wrap">
														<span data-width="60"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 service-wrap">
							<div class="expertise-block-wrap">
								<div class="row">
									<div class="service-content-wrap">
										<div class="col-sm-2">
											<svg id="expertise_4" width="46" height="46" xmlns="http://www.w3.org/2000/svg">
												<g>
													<rect fill="none" height="402" width="582" y="-1" x="-1" />
												</g>
												<g>
													<path d="m37.334,35.897999l7.166,0l0,-25.796999l-43,0l0,25.796999l7.166,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
													<path d="m12.967,28.732l0,15.768l20.066001,0l0,-15.768" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
													<path d="m5.8,15.834l2.866,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
													<path d="m11.533,15.834l2.866,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
													<path d="m33.028999,5.8l0,-4.3l-20.065,0l0,4.3" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
													<path d="m17.267,38.768002l12.9,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
													<path d="m17.267,33.033001l12.9,0" stroke-opacity="null" stroke-width="2" stroke="#2596be" fill-opacity="null" fill="none" />
												</g>
											</svg>
										</div>
										<div class="services-icon col-sm-10">
											<div class="service-info-text">
												<h3>Print</h3>
												<p>Accompany your services with selection of appropriate icons to make it look an interesting thing to read further.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="serch-wrap-sep"></div>
								<div class="clearfix"></div>
								<div class="progress-bar-graph">
									<div>
										<div class="row">
											<div class="progress-bar-wrap">
												<div class="col-sm-2">
													<strong><i>80</i>%</strong>
												</div>
												<div class="col-sm-10">
													<div class="bar-wrap">
														<span data-width="80"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 service-wrap">
							<div class="expertise-block-wrap">
								<div class="row">
									<div class="service-content-wrap">
										<div class="col-sm-2">
											<svg id="expertise_5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="42px" viewBox="-0.5 -1.5 46 42" enable-background="new -0.5 -1.5 46 42" xml:space="preserve">
												<path fill="none" stroke="#2596be" stroke-width="2" d="M12.467,27.458H44V0.225H1v36.551l7.166-9.317" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M9.599,13.125c0-1.584,1.283-2.867,2.867-2.867
								s2.867,1.283,2.867,2.867s-1.283,2.867-2.867,2.867S9.599,14.709,9.599,13.125z" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M19.633,13.125c0-1.584,1.283-2.867,2.867-2.867
								s2.867,1.283,2.867,2.867s-1.283,2.867-2.867,2.867S19.633,14.709,19.633,13.125z" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M29.667,13.125c0-1.584,1.283-2.867,2.867-2.867
								s2.866,1.283,2.866,2.867s-1.282,2.867-2.866,2.867S29.667,14.709,29.667,13.125z" />
											</svg>

										</div>
										<div class="services-icon col-sm-10">
											<div class="service-info-text">
												<h3>Social Media</h3>
												<p>Accompany your services with selection of appropriate icons to make it look an interesting thing to read further.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="serch-wrap-sep"></div>
								<div class="clearfix"></div>
								<div class="progress-bar-graph">
									<div>
										<div class="row">
											<div class="progress-bar-wrap">
												<div class="col-sm-2">
													<strong><i>75</i>%</strong>
												</div>
												<div class="col-sm-10">
													<div class="bar-wrap">
														<span data-width="75"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 service-wrap">
							<div class="expertise-block-wrap">
								<div class="row">
									<div class="service-content-wrap">
										<div class="col-sm-2">
											<svg id="expertise_6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42px" height="48px" viewBox="-0.5 -1 42 48" enable-background="new -0.5 -1 42 48" xml:space="preserve">
												<path fill="none" stroke="#2596be" stroke-width="2" stroke-miterlimit="10" d="M33.42,1.101
								c8.773,8.771,8.771,23.045,0,31.819c-8.773,8.771-23.045,8.771-31.818,0" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M1,17C1,7.884,8.384,0.5,17.5,0.5C26.616,0.5,34,7.884,34,17
								s-7.384,16.5-16.5,16.5C8.384,33.5,1,26.116,1,17z" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M25,45.5H10" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M28,12.28l-2.039,8.288L20.267,26l1.054-7.38l-5.858-3.22
								l3.869-5.217l-2.874-1.117l-4.953,1.243L8.744,8" />
												<path fill="none" stroke="#2596be" stroke-width="2" d="M7,19.657l4.966,0.548l-0.85,4.72" />
											</svg>
										</div>
										<div class="services-icon col-sm-10">
											<div class="service-info-text">
												<h3>Campaigns</h3>
												<p>Accompany your services with selection of appropriate icons to make it look an interesting thing to read further.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="serch-wrap-sep"></div>
								<div class="clearfix"></div>
								<div class="progress-bar-graph">
									<div>
										<div class="row">
											<div class="progress-bar-wrap">
												<div class="col-sm-2">
													<strong><i>95</i>%</strong>
												</div>
												<div class="col-sm-10">
													<div class="bar-wrap">
														<span data-width="95"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div> -->
				</div>
			</div>
		</section>
		<!--/Expertises Sec-->

		<!--Work Sec-->
		<section id="work" class="work-sec">
			<div class="sec-head mywork">

				<q>Il ne peut y avoir de résulats sains et durables pour une entreprise sans une équipe impliquée à 100%</q>
			</div>





		</section>
		<!--/Work Sec-->

		<!--Counter Sec-->

		<!--/Counter Sec-->

		<!--Team Sec-->
		<!-- <section id="team" class="container padding-sec-lg team-sec">
			<div class="row">
				<div class="col-lg-4">
					<h4>
						the team
					</h4>
					<div class="seprator sm-sep">
						<span class="seprator-sm"></span>

					</div>
				</div>
				<div class="col-lg-8">
					<p class="lead">Showcase the Teams of Management, Experts & Enthusiasts.</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<ul class="our-team">



				
				<li class="team-margin">
					<div class="team-member hover" style="background:rgba(247,170,167,0.95)">
						<img class="img-responsive" src="assets/img/team1.jpg" alt="team" />
						<div class="hover-out"></div>
						<div class="hover-in table-wrap">
							<div class="team-info align-middle">
								<h5 class="team-name">Make the most of it.</h5>
								<div class="seprator">
									<span class="seprator-sm"></span>
								</div>
								<p class="team-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>
								<ul class="socials">
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="team-per-details">
						<span class="tp-name">michle johnson</span>
						<span class="tp-desg">art director</span>
					</div>
				</li>
				


				
				<li class="team-margin">
					<div class="team-member hover" style="background:rgba(220,183,156,0.95)">
						<img class="img-responsive" src="assets/img/team2.jpg" alt="team" />
						<div class="hover-out"></div>
						<div class="hover-in table-wrap">
							<div class="team-info align-middle">
								<h5 class="team-name">If it makes you happy, do it.</h5>
								<div class="seprator">
									<span class="seprator-sm"></span>
								</div>
								<p class="team-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>
								<ul class="socials">
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="team-per-details">
						<span class="tp-name">Nilonia Sym</span>
						<span class="tp-desg">Business Head</span>
					</div>
				</li>
				
				<li class="team-margin">
					<div class="team-member hover" style="background:rgba(198,207,220,0.95)">
						<img class="img-responsive" src="assets/img/team3.jpg" alt="team" />
						<div class="hover-out"></div>
						<div class="hover-in table-wrap">
							<div class="team-info align-middle">
								<h5 class="team-name">Let things go.</h5>
								<div class="seprator">
									<span class="seprator-sm"></span>
								</div>
								<p class="team-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>
								<ul class="socials">
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="team-per-details">
						<span class="tp-name">Tom Shire</span>
						<span class="tp-desg">Creative Head</span>
					</div>
				</li>
				


			</ul>
			

		</section> -->
		<div class="row myrow">
			<div class="col-xs-8 center-div">
				<h2 id="myh2">
					Prix et distinctions
				</h2>
				<div class="seprator">
					<span class="seprator-sm center-div"></span>
				</div>
			</div>

		</div>
		<section class="price">
			<aside>

				<img src="assets/img/prix.jpg" alt="" srcset="" data-aos="zoom-in">
			</aside>
			<div>

				<div class="theprice">
					<h3 data-aos="zoom-in">EMEA GROWTHCLUB AWARD</h3>
					
						<h3 data-aos="zoom-in">TOP 30 BEST COACHES<br>ACTIONCOACH NETWORK</h3>
						
						</div>
					
				
						<div class="theprice">
					<h3 data-aos="zoom-in">EMEA PROFITCLUB AWARD</h3>
					
						<h3 data-aos="zoom-in">FRANCE BEST CLIENT RESULTS<br>AWARD : MARS 2014</h3>
						</div>
					
				
						<div class="theprice">
					<h3 data-aos="zoom-in">EMEA ACTION CLUB AWARD</h3>
					
						<h3 data-aos="zoom-in">EMEA BEST CLIENT RESULTS<br>AWARD</h3>
						</div>
					
				
			</div>
		</section>
		<!--/Team Sec-->

		<!--Start A Project Sec-->
		<section class="start-project">
			<div class="sec-head  padding-sec-sm">
				<div class="slanted-head"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-8 center-div">
							<h2 id="myh2">
								Cliquez ci-dessous, pour réserver votre place<br>(Nombre de place limité)
							</h2>
							<div class="seprator">
								<span class="seprator-sm center-div"></span>
							</div>
						</div>
						<div class="col-xs-4 center-div">
							<a data-scroll href="formulaire.php" class="btn btn-3 btn-3e icon-arrow-right">S'inscrire<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Start A Project Sec-->

		<!--Pricing Sec-->
		<section id="pricing" class="pricing-sec padding-sec-lg parallax myparralax1" style="background-image:url(assets/img/parallaxbg2.jpg);">
			<div class="container">
				<div class="row">
					<h1 id="titre_vid" data-aos="slide-left">Une méthode éprouvée</h1>
					<div class="seprator">
						<span class="seprator-sm center-div"></span>
					</div>
					<h3 id="text_vid" data-aos="slide-right">Pour vous faire une idée de la méthode de coaching développée par Thierry, visonnez la vidéo</h3>
					<div class="vid"><a href="https://www.youtube.com/watch?v=I0Vbw6zjxUk&feature=youtu.be" target="_blank">
							<img src="assets/svg/youtube-brands.svg" alt="" srcset=""></a>
					</div>
				</div>
			</div>
	</div>
	</div>
	</section>
	<!--/Pricing Sec-->

	<!--Services Sec-->
	<section id="process" class="container padding-sec-lg service-sec">
		<div class="row">
			<div class="col-sm-6 center-div">
				<h2>
					TRAINING
				</h2>
				<div class="seprator">
					<span class="seprator-sm center-div"></span>

				</div>
			</div>
			<div class="training">
				<img src="assets/img/master.jpg" alt="">
				<ul>
					<li>2 jours intensifs d’atelier en mode coaching, pour remettre l’entreprise sur la voie du succès</li>
					<li>1H30 de mastermind collectif offert</li>
					<li>Date : 11 et 12 NOVEMBRE 2022</li>
					<li>Lieu : Hôtel Golden Tulip de Cotonou</li>
					<li>Votre Contribution à l'Atelier : 550 000F CFA</li>
					<li>Offre promotionnelle : 20% de réduction si inscription avant le 30 Mars</li>
				</ul>
			</div>
	</section>
	<!--/Services Sec-->


	<!-- /Testimonial Section-->



	<!--Blog Sec-->
	<section id="blog" class="blog-sec padding-sec-lg myrow">
		<div class="row sion-mark">
			<div class="col-lg-6 center-div">
				<h2>
					SION MARK Et EMCW
				</h2>
				<div class="seprator">
					<span class="seprator-sm center-div"></span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-wrap myrow">
			<div data-aos="zoom-in">
				<p>Un Coach Expérimenté</p>

			</div>
			<div data-aos="zoom-in">
				<p>Une Méthode Éprouvée Et Orientée Action </p>

			</div>
			<div data-aos="zoom-in">
				<p>Un Véritable Coup D'accélérateur Pour Votre Entreprise</p>

			</div>
			<div data-aos="zoom-in">
				<p>
					Notre Grarentie:100%
					Satisfait Ou 100% Remboursé (Dès La Fin De La Première Journée)
				</p>

			</div>
		</div>
		<a href="formulaire.php" class="btn btn-3 btn-3e icon-arrow-right">S'inscrire<i class="fa fa-angle-down"></i></a>
	</section>
	<footer>
		<p class="info">
			Pour plus d'informations contactez SION MARK: <br>(229)67 13 11 55 - 96 29 32 75 ; Courriel:
sionmarkgroup@gmail.com
		</p>
		<div class="font">
			<ul>
				<li><a href="http://"><img src="assets/img/png/facebook.png" alt="" srcset="" width="40px" height="40px"></a></li>
				<li><a href="http://"><img src="assets/img/png/whatsaap.png" alt="" srcset="" width="40px" height="40px"></a></li>
				<li><a href="http://"><img src="assets/img/png/instagram.png" alt="" srcset="" width="40px" height="40px"></a></li>
				
			</ul>
		</div>
		<p id="copy">Copyright SION MARK et EMCW 2022</p>
	</footer>

	</div>
	
	<!--/Main Content-->
	<!--Footer Sec-->
	<!-- <section class="footer-sec">
		<footer>
			
			<div class="sec-head">
				<div class="slanted-head"></div>
				<div class="container center-div padding-sec-xs">
					<div class="copyright">
						<ul class="social-icons">
							<li>
								<a href="" class="social-icon">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="" class="social-icon">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="" class="social-icon">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="" class="social-icon">
									<i class="fa fa-behance"></i>
								</a>
							</li>
						</ul>
						
						<p>Copyright SION MARK et EMCW 2022</p>
					</div>
				</div>
			</div>
			<div class="gototop">
				<a href="#body" data-scroll class="btn btn-3 btn-3e"><i class="fa fa-angle-up"></i></a>
			</div>
		</footer>
	</section> -->
	<!--/Footer Sec-->

	<!--JavaScripts-->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
			duration: 800
		});
	</script>

	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/app.js"></script>
	<script src="assets/js/controllers.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>
	<script src="assets/js/init.js"></script>
</body>

</html>