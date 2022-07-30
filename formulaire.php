<?php
session_start();
$_SESSION = array();
session_destroy();
//vérification du get
if (isset($_GET) && !empty($_GET)) {
	extract($_GET);
	$n = (int)$n;
	if (is_int($n)) {
		if ($n < 0 && $n >= 2) {
			$n = 2;
		}
	} else {
		$n = 2;
	}
}
//tableau d'erreur
$error = [
	'Formulaire non rempli',
	// 'remplissez nom',
	'Nom et prénoms doit pas contenir des caractères spéciaux',
	'La nationnalité doit pas contenir des caractères spéciaux',
	'Email invalide',
	'Numéro de téléphone invalide',
	'Le pays et ville doit pas contenir des caractères spéciaux',
	'Ces informations sont déja inscrite dans la base de donnée',
	'Une erreur est survenue, veillez réssayer'
];
?>
<!DOCTYPE html>
<html lang="en">
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
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style.css">

	

	<!--Fonts - changed to Source Code Pro-->
	<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<!--CSS-->
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		#error{
			background-color: red;
			width: 100vw;
			position: absolute;
			top:100px;
			text-align: center;
			font-size: 3em;
			
			
		}
	</style>
</head>
<body style="padding:0px;">
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
				<div class="collapse navbar-collapse" id="example-navbar-collapse">
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
	<h1 id="error"><?php if (isset($n)) {
								echo $error[$n];
							} ?></h1>
							<section id="blog" class="blog-sec padding-sec-lg myrow">
		
		<div class="blog-wrap myrow myrow-form">
			<div data-aos="zoom-in">
				<p>Votre Contribution à l’Atelier
550 000 F CFA
</p>

			</div>
			<div data-aos="zoom-in">
				<p>11 et 12 Novembre 2022</p>

			</div>
			<div data-aos="zoom-in">
				<p>Hôtel Golden Tulip de Cotonou</p>

			</div>
			<div data-aos="zoom-in">
				<p>
					1H30 de mastermind collectif offert <br>02 jours intensifs d'atelier en mode coaching pour remettre l'entreprise sur la voie du succès
				</p>

			</div>
		</div>
		
	</section>
<section id="inscription" class="contact-sec padding-sec-lg" style="position: relative;top:200px;">
		<div class="form-wrap container" data-ng-controller="ContactController" data-ng-app="contactApp">
			<div class="row">
				<div class="col-lg-6 center-div">
					<h2>
						Inscrivez vous
					</h2>
					<div class="seprator">
						<span class="seprator-sm center-div"></span>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			
			<form action="controller/formulaire.php" method="post">
				<!--Nom et prénoms-->
				<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
					<input type="text" class="form-control input__field input input__field--hoshi" id="nom" name="nom" placeholder="Nom et Prénoms" autocomplete="off" required>
				</div>
		</div>

		<!--Date de Naissance-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="birth_day" name="birth_day" placeholder="Date de Naissance" autocomplete="off" onfocus="(this.type='date')" required>
		</div>
		</div>
		<!--Nationnalité-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="countries" name="countries" placeholder="Nationnalité" autocomplete="off" required>
		</div>
		</div>

		<!--Adresse email-->
		<div class="form-group col-lg-8 center-div"">
				
					<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="mail" name="mail" placeholder="Adresse Email" autocomplete="off" required>
		</div>
		</div>

		<!--Numéro de téléphone-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="tel" class="form-control input__field input input__field--hoshi" id="phone_number" name="phone_number" placeholder="Numéro de téléphone" autocomplete="off" required>
		</div>
		</div>
		<!--Pays et ville de résidence-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="city" name="city" placeholder="Pays et ville de résidence" autocomplete="off" required>
		</div>
		</div>
		<!--Nom de l'entreprise-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="business_name" name="business_name" placeholder="Nom de l'entreprise" autocomplete="off" required>
		</div>
		</div>

		<!--Effectif de l'entreprise-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="number" class="form-control input__field input input__field--hoshi" id="business_number" name="business_number" placeholder="Effectif de l'entreprise" autocomplete="off" required>
		</div>
		</div>

		<!--Secteur d'activité-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="activity_area" name="activity_area" placeholder="Secteur d'activité" autocomplete="off" required>
		</div>
		</div>

		<!--Date de création de l'entreprise-->
		<div class="form-group col-lg-8 center-div"">
				
				<div class=" input-wrap">
			<input type="text" class="form-control input__field input input__field--hoshi" id="business_date" name="business_date" placeholder="Date de création de l'entreprise" autocomplete="off" placeholder="Date de Naissance" autocomplete="off" onfocus="(this.type='date')"  required>
		</div>
		</div>
		<!--	<div class="form-group  col-lg-8 center-div" data-ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
				<div class="input-wrap">
					<textarea data-ng-model="formData.inputMessage" class="form-control input input__field input__field--hoshi" rows="4" id="inputMessage" name="inputMessage" placeholder="message" autocomplete="off" required></textarea>
				</div>	
			</div> -->
		<div class="form-group">
			<div class="center-div">
				<button type="submit" class="btn btn-3 btn-3e icon-arrow-right" name="inscrit">S'inscrire<i class="fa fa-angle-down"></i></button>
			</div>
		</div>
		</form>

		</div>
		<footer style="position:relative;top:90%;">
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
	</section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
		duration:800
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