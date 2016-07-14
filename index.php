<?php
	if ( !empty($_GET['language']) ) {
	    $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'pt';
	} else {
	    $_COOKIE['language'] = 'pt';
	}
	setcookie('language', $_COOKIE['language']);


	if ( $_COOKIE['language'] == "en") {
	   $json = file_get_contents('langs/en-US/conferences.json');
	   $teste = file_get_contents('langs/en-US/general.json');
	} else {
	   $json = file_get_contents('langs/pt-BR/conferences.json');
	   $teste = file_get_contents('langs/pt-BR/general.json');
	}
	$conferences = json_decode($json, true);
	$general = json_decode($teste, true);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $general['title']?></title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>

	<nav id="sticky">
		<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
			&#9776;
		</button>
		<div class="nav-menu collapse navbar-toggleable-xs" id="exCollapsingNavbar2 main">
			<ul class="menu-list">
				<li>
					<a id="anchor" class="menu-link" href="#home"><span class="menu-label"><?php echo $general['home']?></span></a>
				</li>
				<li>
					<a id="anchor" class="menu-link" href="#description"><span class="menu-label"><?php echo $general['about']?></span></a>
				</li>
				<li>
					<a id="anchor" class="menu-link" href="#schedule"><span class="menu-label"><?php echo $general['dates']?></span></a>
				</li>
				<li>
					<a class="menu-link" href="#place"><span class="menu-label"><?php echo $general['place']?></span></a>
				</li>
				<li>
					<a class="menu-link" href="#conference-1"><span class="menu-label"><?php echo $general['conference']?> 1</span></a>
				</li>
				<li>
					<a class="menu-link" href="#conference-2"><span class="menu-label"><?php echo $general['conference']?> 2</span></a>
				</li>
				<li>
					<a class="menu-link" href="#conference-3"><span class="menu-label"><?php echo $general['conference']?> 3</span></a>
				</li>
				<li>
					<a class="menu-link" href="#conference-4"><span class="menu-label"><?php echo $general['conference']?> 4</span></a>
				</li>
				<li>
					<a class="menu-link" href="#conference-5"><span class="menu-label"><?php echo $general['conference']?> 5</span></a>
				</li>
				<li>
					<a class="menu-link" href="#conference-6"><span class="menu-label"><?php echo $general['conference']?> 6</span></a>
				</li>
				<li>
					<a class="menu-link" href="#realizador"><span class="menu-label"><?php echo $general['organization']?></span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="dropdown">
		<img src="image/icon_lang.png" class="dropdown-toggle world-img" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<div class="dropdown-menu lang-dropdown" aria-labelledby="dropdownMenu1">
			<a class="dropdown-item" href="?language=en">English</a>
			<a class="dropdown-item" href="?language=pt">Português</a>
		</div>
	</div>

	<section class="conference-section" id="home">
		<!--<svg class="svg-circle" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin slice">
			<circle cx="100" cy="0" r="50" />
			<circle cx="10" cy="0" r="50" />
		</svg>-->
		<article>
			<h1 class="home-title"><?php echo $general['dialogos']?></h1>
			<!--<img src="image/fundo3.png" class="home-img">-->
		</article>
		<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-description" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	    	<path d="M0 0 C 40 100 60 100 100 0 Z"></path>
		</svg>
	</section>


	<section class="conference-section" id="description">
		<article class="container">
			<div class="row">
				<div class="col-md-5">
					<h1 class="description-title"><?php echo $general['dialogos']?></h1>
				</div>
				<div class="col-md-7 description-info">
					<?php foreach($general['description'] as $key => $value):?>
						<p><?php echo $value['paragraph']; ?></p>
					<?php endforeach;?>
					<ul>
						<?php foreach($general['description-items'] as $key => $value):?>
							<li><?php echo $value['items']; ?></li>
						<?php endforeach;?>
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
					<h1 class="schedule-title"><?php echo $general['dates']?><br> 2016</h1>
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
					<p class="schedule-hour"><span><?php echo $general['time']?></span>19h - 21h</p>
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
					<h1 class="schedule-title"><?php echo $general['place']?></h1>
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

	<?php foreach ($conferences as $key => $val) :?>
		<?php foreach ($val as $a => $b) :?>
			<section class="conference-section" id="conference-<?php echo $b['edition'];?>">
				<article class="container">
					<div class="line">
						<div class="circle">
							<img class="img-fluid" src="image/<?php echo $b['edition'];?>.png">
						</div>
						<div class="info">
							<h1 class="conference-date"><?php echo $b['date'];?></h1>
							<p class="conference-number"><?php echo $general['conference'] . ' ' . $b['edition'];?></p>
							<h2 class="conference-title"><?php echo $b['title'];?></h2>
							<p class="conference-description"><?php echo $b['description'];?></p>
							<p><?php echo $general['speaker'];?>:</p>
							<?php foreach ($b['panelists'] as $c => $d) :?>
								<div class="conference-panelist" data-toggle="modal" data-target="<?php echo '#modal' . $d['picture']?>">
									<img src="<?php echo 'image/profiles/' . $d['picture'] . '.png';?>">
									<p><?php echo $d['name'];?><br/>
										<?php echo $d['university'];?>
									</p>
								</div>
								<div class="modal fade" id="<?php echo 'modal' . $d['picture']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<img class="modal-picture" src="<?php echo 'image/profiles/' . $d['picture'] . '.png';?>">
												<h4 class="modal-title" id="myModalLabel"><?php echo $d['name'];?><span><?php echo $d['university'];?></span></h4>
											</div>
											<div class="modal-body">
												<p><?php echo $d['resume'];?></p>
											</div>
										</div>
									</div>
								</div>
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
					<h2 class="realizador-title"><?php echo $general['organization']; ?></h2>
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