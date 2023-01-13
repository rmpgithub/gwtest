<!DOCTYPE html>
<html lang="pl">
<head>
	<title> 8-9 czerwca 2019 III Agro Targi Wschód </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../../dist/css/main.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="../../dist/js/scripts.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simple-lightbox.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simplelightbox.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98798397-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-98798397-1');
	</script>
</head>
<body class="">
	<header class="header">
		<div class="logo">
			<a href="../../index.html"><img src="../assets/img/logo.png" alt="Logo"></a>
		</div>  
		<div class="hamburger"></div>		
		<nav>
			<ul class="menu">
				<li><a href="../../index.html">Start</a></li>
				<li><a href="../../src/html/news.html">Aktualności</a></li>
				<li><a href="../../src/html/exhibitors.html">Wystawcy</a></li>
				<li><a href="../../src/html/for-exhibitors-application.html">Cennik</a></li>
				<li><a href="../../src/html/for-visitors.html">Dla zwiedzających</a></li>
				<li><a href="../../src/html/for-exhibitors.html">Dla wystawców</a></li>
				<li><a href="../../src/html/galleries.html">Galeria</a></li>
				<li><a href="../../#partnerzy">Partnerzy</a></li>
				<li><a href="../../src/html/contact.html">Kontakt</a></li>
				<li class="flag GB"><a href="#"><img src="../assets/img/gbflag.png" alt="wielka brytania"></a></li>
				<li class="flag UK"><a href="#"><img src="../assets/img/ukraineflag.png" alt="ukraina"></a></li>

			</ul>
		</nav>
	</header>
	<div class="jumbotron">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="../../index.html">start</a></li>				
				<li><a href="../../src/html/for-visitors.html">dla zwiedzających</a></li>
				<li><a href="../../src/html/galleries.html">Galeria</a></li>
				<li class="active"><a href="">II Agro Targi Wschód 2018</a></li>
			</ul>
			<h1>II Agro Targi Wschód 2018</h1>
		</div>			
	</div>	
	<div class="container gallery">		
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="../../src/assets/img/atw2/001.jpg"><img class="Thumbnail" src="../../src/assets/img/atw2/001.jpg" alt=""></a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="../../src/assets/img/atw2/002.jpg"><img class="Thumbnail" src="../../src/assets/img/atw2/002.jpg" alt=""></a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="../../src/assets/img/atw2/003.jpg"><img class="Thumbnail" src="../../src/assets/img/atw2/003.jpg" alt=""></a>
			</div>
		</div>

		<?php
			$nr = 1;
			for ($i = 1; $i <= 45; $i++) 
			{
    			
		    echo '<div class="row">';
		    	for($ii = 1; $ii <= 3; $ii++)
		    	{
		    		echo '<div class="col-xs-12-col-sm-6 col-md-4">';
		    		echo '<a href="../../src/assets/img/atw2/' .$nr. '.jpg">';
		    		echo '<img class="Thumbnail" src="../../src/assets/img/atw2/' . $nr. '.jpg" alt=""></a>';
		    		echo '</div>';
		    		
		    		$nr++;
		    	}
			
			echo '</div>';

			}
		?>


		<div class="row">
			
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="../../src/assets/img/gal2/atwii33.jpg"><img class="Thumbnail" src="../../src/assets/img/gal2/atwii33.jpg" alt=""></a>
			</div>	
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="../../src/assets/img/gal2/atwii34.jpg"><img class="Thumbnail" src="../../src/assets/img/gal2/atwii34.jpg" alt=""></a>
			</div>	
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="../../src/assets/img/gal2/atwii36.jpg"><img class="Thumbnail" src="../../src/assets/img/gal2/atwii36.jpg" alt=""></a>
			</div>	
		</div>

		


		
		<div class="container">
			<div class="row">
				<div class="galleryNav">
					<a class="prev" href="../../src/html/gallery.html">poprzedni wpis</a>
				<!--	<a class="next" href="">następny wpis</a> -->
				</div>
			</div>
		</div>
		
	</div>

	<div class="container">
		<div class="row see-more">
			<h3>zobacz również</h3>
			<hr>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="../../src/assets/img/OTARGACH.png" alt="o targach">
					<h4>O targach</h4>
					<p>Agro Targi Wschód to kompleksowa wystawa, podczas której swoją aktualną ofertę prezentują producenci maszyn rolniczych, producenci nawozów, nasion, środków ochrony roślin, firmy z sektora finansowego i innych branż związanych z rolnictwem.</p>
					<a href="#" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="../../src/assets/img/IDEA.png" alt="o targach">
					<h4>Idea targów</h4>
					<p>Międzynarodowy charakter i transgraniczność targów, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej między Ukrainą i Unią Europejską są impulsem do podjęcia na tym obszarze imprez targowo-wystawienniczych.</p>
					<a href="#" class="">zobacz</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="../../src/assets/img/download.png" alt="o targach">
					<h4>Do pobrania</h4>
					<p>W tej zakładce znajdziecie wszystkie niezbędne pliki do pobrania: Regulamin targów, Regulamin pokazów, Formularz zgłoszeniowy dla wystawcy, Formularz zgłoszeniowy dla handlu drobnego, Gastronomia, Cennik.</p>
					<a href="#" class="">przeglądaj</a>
				</div>
			</div>
		</div>		
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					    <a href="../../index.html"><img src="../../src/assets/img/logowhite.png" alt="targi"></a>                        
					<img src="../../src/assets/img/sawalogowhite.png" alt="sawa">
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3">
					<ul>Start
						<li><a href="news.html">Aktualności</a></li>
						<li><a href="for-visitors.html">Dla zwiedzających</a></li>
						<li><a href="for-exhibitors.html">Dla wystawców</a></li>
						<li><a href="contact.html">Kontakt</a></li>
						<li><a href="about.html">Agro Targi Wschód</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3">
					<ul>Dla zwiedzających
						<li><a href="idea.html">Idea targów</a></li>
						<li><a href="about.html">O targach</a></li>
						<li><a href="galleries.html">Galeria</a></li>
						<li><a href="download.html">Do pobrania</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3">
					<ul>Dla wystawców
						<li><a href="for-exhibitors-application.html">Zgłoszenia</a></li>
						<li><a href="for-exhibitors-regulations.html">Regulamin</a></li>
						<li><a href="for-exhibitors-drive.html">Dojazd i hotele</a></li>
						<li><a href="for-exhibitors-comm.html">Reklama</a></li>
					</ul>
				</div>
			</div>
			<div class="row copyrights">
				<p>Copyright © 2017 | AGRO TARGI WSCHÓD, SAWA EXPO - Wszystkie prawa zastrzeżone</p>
				<p>Realizacja: <a href="http://interactivevision.pl">interactivevision.pl</a></p>
			</div>
		</div>
	</footer>
</body>
</html>