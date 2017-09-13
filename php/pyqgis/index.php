<?php
include('../../libs/menu.php');
$page = 'pyqgis';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo render_meta(); ?>
		<meta name="description" content="Page with private slides">
		<title>Slides</title>
		<?php echo render_css(); ?>
	</head>
	<body role="document">
		<?php echo render_menu($page); ?>
		<div class="container theme-showcase" role="main">


			<!-- Main jumbotron for a primary marketing message or call to action -->
			<?php echo render_jumbotron($page) ?>


		</div> <!-- /container -->
		<?php echo render_js(); ?>
	</body>
</html>
