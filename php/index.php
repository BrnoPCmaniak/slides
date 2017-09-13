<?php
include('../libs/menu.php');
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
    <?php echo render_menu(NULL); ?>
    <div class="container theme-showcase" role="main">


      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Welcome!</h1>
        <p>
          On this page you can find all of my presentations that were created for mostly conference and/or teaching purposes.
        </p>
      </div>


    </div> <!-- /container -->
    <?php echo render_js(); ?>
  </body>
</html>
