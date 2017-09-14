<?php
include('../../libs/menu.php');
$page = 'sql';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pavel Grochal">		<meta name="description" content="Page with private slides">
    <title>Slides</title>
    <link href="../css/bootstrap.dark.min.css" rel="stylesheet"><link href="../css/bootstrap.theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	</head>
<body role="document">
<div class="container theme-showcase" role="main">


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php echo render_jumbotron($page) ?>


</div> <!-- /container -->
<?php echo render_footer(); ?>
</body>
</html>
