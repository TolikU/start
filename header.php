<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="ООО ГАЗХОЛОДМАШ">
	<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title>ООО "ГАЗХОЛОДМАШ"</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<header>
				<div id="logo">
					<a href="#">
						<?php the_custom_logo(); ?>
					</a>
				</div>
				<div id="nav">
					<?php wp_nav_menu(array(
						'theme_location' => 'primery',
					)); ?>
				</div>
			</header>