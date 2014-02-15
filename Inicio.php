<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/vegas.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<script type="text/javascript" src="js/jquery.vegas.min.js"></script> 
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">La vida renaciendo a cada instante</h2>
				<div class="scrollCont">
					<p>El Grupo Vive Cuetzalan ofrece al visitante la posibilidad de experimentar una visita a escenarios naturales de diversidad ambiental, en una región de amplísima riqueza cultural ancestralviva, sitios de interés y esparcimiento, deleitarse con su gastronomía de raíz étnica mundialmente reconocida por su autenticidad, y la oportunidad de compartir la calidez de la gente que habita el lugar desde tiempos inmemorables.</p>
				</div>
			</div>

		</div>

		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.datepicker-es.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=19; i++) {
					iniBackgrounds.push({ src: 'imgs/index/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'css/overlays/06.png' });
			})(jQuery);
		</script>
	</body>
</html>