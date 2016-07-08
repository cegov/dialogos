<?php
	session_start();
	header('Cache-control: private'); // IE 6 FIX
	 
	if(isSet($_GET['lang']))
	{
	$lang = $_GET['lang'];
	 
	// register the session and set the cookie
	$_SESSION['lang'] = $lang;
	 
	setcookie('lang', $lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
	$lang = $_SESSION['lang'];
	}
	else if(isSet($_COOKIE['lang']))
	{
	$lang = $_COOKIE['lang'];
	}
	else
	{
	$lang = 'en';
	}
	 
	switch ($lang) {
	  case 'en':
	  $lang_file = 'lang.en.php';
	  break;
	 
	  case 'de':
	  $lang_file = 'lang.de.php';
	  break;
	 
	  case 'es':
	  $lang_file = 'lang.es.php';
	  break;
	 
	  default:
	  $lang_file = 'lang.en.php';
	 
	}
	 
	include_once 'languages/'.$lang_file;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Diálogos</title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<nav>
		<div class="nav-menu">
			<a href="#"><p>Início</p></a>
			<a href="#description"><p>Sobre</p></a>
			<a href="#schedule"><p>Programação</p></a>
			<a href="#place"><p>Local</p></a>
			<a href="?language=en">En</a>
			<a href="?language=pt">Pt</a>
			<?php
				if ( !empty($_GET['language']) ) {
				    $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'pt';
				} else {
				    $_COOKIE['language'] = 'pt';
				}
				setcookie('language', $_COOKIE['language']);
			?>
		</div>
		<div class="nav-conferences">
			Conferências
			<a href="#conference-1"><span>1</span></a>
			<a href="#conference-2"><span>2</span></a>
			<a href="#conference-3"><span>3</span></a>
			<a href="#conference-4"><span>4</span></a>
			<a href="#conference-5"><span>5</span></a>
			<a href="#conference-6"><span>6</span></a>
		</div>
	</nav>
	<section class="conference-section" id="home">
		<!--<svg class="svg-circle" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin slice">
			<circle cx="100" cy="0" r="50" />
			<circle cx="10" cy="0" r="50" />
		</svg>-->
		<article class="row">
			<div class="col-lg-12">
				<h1 class="home-title"><span>Diálogos em</span><br>Economia Criativa</h1>
			</div>
		</article>
	</section>

	<section class="conference-section" id="description">
		<article class="container">
			<div class="row">
				<div class="col-md-5">
					<h1 class="description-title"><span>Diálogos em</span><br>Economia Criativa</h1>
				</div>
				<div class="col-md-7 description-info">
					<p>Tendo em vista a demanda pelo aprofundamento de debates na área de Economia Criativa e da Cultura, o projeto “Diálogos em Economia Criativa” visa atuar na promoção de um espaço qualificado de discussão com pesquisadores nacionais e internacionais da área</p>
					<p>O projeto propõe-se a realizar 6 conferências ao longo do ano letivo da UFRGS, buscando discutir três eixos centrais nas discussões contemporâneas da Economia Criativa:</p>
					<ul>
						<li>Fluxos internacionais e globalização de bens criativos;</li>
						<li>Novas perspectivas para mercados tradicionais de cultura; </li>
						<li>Gestão pública e privada para fomento da Economia da Cultura.</li>
					</ul>
				</div>
			</div>
		</article>
	</section>

	<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-schedule" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	    <path d="M0 100 C40 0 60 0 100 100 Z" />
	</svg>

	<section class="conference-section" id="schedule">
		<article class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="schedule-title">Programação 2016</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 schedule-left">
					<p class="schedule-date">07 de Junho</p><p class="date-title">Festas Populares e Indústria do Entretenimento</p>
					<p class="schedule-date">05 de Julho</p><p class="date-title">Economia da Música e do Audiovisual:<br>uma visão do mercado a partir de realizadores</p>
					<p class="schedule-date">08 de Agosto</p><p class="date-title">Políticas Culturais: Reflexões Contemporâneas</p>
				</div>
				<div class="col-md-6">
					<p class="schedule-date">13 de Setembro</p><p class="date-title"> Da nova economia à economia criativa</p>
					<p class="schedule-date">25 de Outubro</p><p class="date-title">A Cultura na Era Global </p>
					<p class="schedule-date">21 de Novembro</p><p class="date-title"> Economia Criativa e comércio internacional: <br>novos modelos de negócios</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="schedule-hour"><span>Horário</span>19h - 21h</p>
				</div>
			</div>
		</article>
	</section>	

	<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-place" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	    <path d="M0 0 C 50 100 80 100 100 0 Z" />
	</svg>

	<section class="conference-section" id="place">
		<article class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="schedule-title">Local</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="place-address">Salão de Festas<br/>Reitoria da UFRGS<br>Av. Paulo Gama 110</p>
					<img class="mapa img-fluid" src="image/mapa.png">
				</div>
			</div>
		</article>
	</section>

	<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-1" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	    <path d="M0 0 C 50 100 80 100 100 0 Z" />
	</svg>

	<?php
		if ( $_COOKIE['language'] == "en") {
		   $json = file_get_contents('langs/en-US/conferences.json');
		} else {
		   $json = file_get_contents('langs/pt-BR/conferences.json');
		}
		$conferences = json_decode($json, true);
	?>

	<?php foreach ($conferences as $key => $val) :?>
		<?php foreach ($val as $a => $b) :?>
			<section class="conference-section" id="conference-<?php echo $b['edition'];?>">
				<article class="container">
					<div class="line">
						<div class="circle">
							<img src="image/<?php echo $b['edition'];?>.png">
						</div>
						<div class="info">
							<h1 class="conference-date"><?php echo $b['date'];?></h1>
							<p class="conference-number">Conferência <?php echo $b['edition'];?></p>
							<h2 class="conference-title"><?php echo $b['title'];?></h2>
							<p class="conference-description"><?php echo $b['description'];?></p>
							<p>Palestrantes:</p>
							<?php foreach ($b['panelists'] as $c => $d) :?>
								<?php foreach ($d as $e => $f) :?>
									<div class="conference-panelist">
										<img src="image/teste.jpg">
										<p><?php echo $f['name'];?></p>
									</div>
									<div class="conference-panelist">
										<img class="img-responsive" src="image/teste.jpg">
										<p><?php echo $f['name'];?></p>
									</div>
								<?php endforeach?>
							<?php endforeach?>
						</div>
					</div>
				</article>
			</section>
			<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-<?php echo ++$b['edition']; ?>" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
			    <path d="<?php echo $b['path']; ?>" style="fill:url('#transition-to-<?php echo $b['edition']; ?>')"/>
			    <defs>
				    <linearGradient id="transition-to-<?php echo $b['edition']; ?>" x1="0%" y1="0%" x2="100%" y2="0%">
			        	<stop offset="0%" stop-color="<?php echo $b['color-1']; ?>" />
			        	<stop offset="100%" stop-color="<?php echo $b['color-2']; ?>" />
			    	</linearGradient>
			    </defs>
			</svg>
		<?php endforeach?>
	<?php endforeach?>

	<section class="conference-section" id="realizador">
		<article class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="realizador-title">Realização</h2>
					<div class="realizador-images">
						<img src="image/obec.png">
						<img src="image/cegov.png">
					</div>
				</div>
			</div>
		</article>
	</section>

</body>
</html>