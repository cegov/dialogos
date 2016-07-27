<?php
	include_once("analyticstracking.php");
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
<html lang=<?php echo $_COOKIE['language'];?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $general['title']?></title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main4.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>

	<!-- Navbar -->
	<nav id="sticky">
		<div class="nav-menu" id="main">
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

	<!-- Home section -->
	<section class="conference-section" id="home">
		<article>
			<h1 class="title"><?php echo $general['dialogos']?></h1>
			<a href="#description"> <img src="image/arrow.png" class="arrow img-fluid"></a>
		</article>
		<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-description" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	    	<path d="M0 0 L100 0 L100 100 L0 100 L0 0 C 50 60 50 60 100 0 Z" />
		</svg>
	</section>


	<section class="conference-section" id="description">
		<article class="container">
			<div class="row line">
				<div class="col-lg-6">
					<div class="videoWrapper">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/MQZCKGlzNdI?showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-lg-6">
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
					<h1 class="schedule-title"><?php echo $general['dates']?> 2016</h1>
					<p class="schedule-hour">(<?php echo $general['hour']?>)</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 schedule-right">
					<?php foreach ($conferences as $key => $val) :?>
						<?php foreach ($val as $a => $b) :?>
							<div class="schedule-block">
								<span class="schedule-number"><?php echo substr($b['date'], 0, 3)?></span>
								<span class="schedule-number2"><?php echo substr($b['date'], -2)?></span>
								<p class="schedule-conference"><span><?php echo $general['conference'] . ' ' . $b['edition'];?></span><?php echo $b['title'];?></p>
							</div>
							<!--<p class="schedule-date"><?php echo $b['date'];?></p>
							<p class="date-title"><?php echo $b['title'];?></p>-->
							<?php if($a == 2)
							 echo '</div><div class="col-md-6">';
							?>
						<?php endforeach;?>
					<?php endforeach;?>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSf1SIjZ1nAUrQJfSGD3pkQmFGu9MR9_IN7QuvtyTJ47OUVAvA/viewform?c=0&w=1" class="link-buttons">
							<button class="button"><?php echo $general['registration']?></button>
						</a>
					</div>
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
					<a href="https://www.google.com.br/maps/@-30.0337546,-51.2191368,19.25z">
						<img class="mapa img-fluid" src="image/mapa.png">
					</a>
				</div>
			</div>
		</article>
	</section>

	<svg xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-1" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
	    <path d="M0 0 C 50 100 80 100 100 0 Z" />
	</svg>

	<!-- Conference sections -->
	<?php foreach ($conferences as $conference) :?>
		<?php foreach ($conference as $value) :?>
			<section class="conference-section" id="conference-<?php echo $value['edition'];?>">
				<article class="container">
					<div class="line">

						<!-- Image block -->
						<div class="circle">
							<img class="img-fluid tste" src="image/<?php echo $value['edition'];?>.png">
						</div>
						
						<!-- Info block -->
						<div class="info">
							<h1 class="conference-date"><?php echo $value['date'];?></h1>
							<p class="conference-number"><?php echo $general['conference'] . ' ' . $value['edition'];?></p>
							<h2 class="conference-title"><?php echo $value['title'];?></h2>
							<p class="conference-description"><?php echo $value['description'];?></p>

							<!-- Panelists block -->
							<h6 class="block-headline"><?php echo $value['panelists'] != NULL ? $general['speaker'] : '' ;?></h6>
							<?php foreach ($value['panelists'] as $panelist) :?>
								<div class="conference-modal" data-toggle="modal" data-target="<?php echo '#modal' . $panelist['picture']?>">
									<img src="<?php echo 'image/profiles/' . $panelist['picture'] . '.png';?>">
									<p><?php echo $panelist['name'];?><br/>
										<?php echo $panelist['university'];?>
									</p>
								</div>
								<div class="modal fade" id="<?php echo 'modal' . $panelist['picture']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<img class="modal-picture" src="<?php echo 'image/profiles/' . $panelist['picture'] . '.png';?>">
												<h4 class="modal-title" id="myModalLabel"><?php echo $panelist['name'];?><span><?php echo $panelist['university'];?></span></h4>
											</div>
											<div class="modal-body">
												<p><?php echo $panelist['resume'];?></p>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach?>

							<!-- Social Media block -->
							<h6 class="block-headline"><?php echo ($value['youtube'] != NULL || $value['facebook'] != NULL) ? $general['seeMore'] : ''?></h6>
							<?php if ($value['youtube'] != NULL):?>
								<a href="<?php echo $d['link']?>" class="link-buttons" data-toggle="modal" data-target="#youtube">
									<img class="video-icon" src="image/play.png">
								</a>
							<?php endif;?>
							<?php if ($value['facebook'] != NULL):?>
								<a href="<?php echo $value['facebook']?>" class="link-buttons" target="_blanck">
									<img class="video-icon" src="image/facebook.png">
								</a>
							<?php endif;?>

							<!-- Modal for youtube videos -->
							<div class="modal fade" id="youtube" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<img class="modal-picture modal-video" src="image/video_2x.png">
											<h4 class="modal-title" id="myModalLabel">Video</h4>
										</div>
										<div class="modal-body">
										<?php foreach ($value['youtube'] as $data) :?>
											<a class="modalVideo-item" href="<?php echo $data['link'];?>">
												<?php echo $data['name'];?>
											</a>
										<?php endforeach?>
										</div>
									</div>
								</div>
							</div>
							

						</div>
					</div>
				</article>
			</section>
			<svg stroke="none" xmlns="http://www.w3.org/2000/svg" class="section-transition transition-to-<?php echo ++$value['edition']; ?>" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
			    <path stroke-width="0" d="<?php echo $value['path']; ?>" style="fill:url('#transition-to-<?php echo $value['edition']; ?>')"/>
			    <defs>
				    <linearGradient id="transition-to-<?php echo $value['edition']; ?>" x1="0%" y1="0%" x2="100%" y2="0%">
			        	<stop offset="0%" stop-color="<?php echo $value['color-1']; ?>" />
			        	<stop offset="100%" stop-color="<?php echo $value['color-2']; ?>" />
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
				</div>
				<div class="realizador-images">
					<img src="image/obec.png">
					<img src="image/cegov.png">
					<img src="image/catavento.png">
					<img src="image/brasil.png">
				</div>				
			</div>
		</article>
	</section>

</body>
</html>