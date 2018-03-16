<?php require_once "Core/init.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <header>
    <nav class="teal">
      <div class="container nav-wrapper">
        <a href="?url=users/index" class="brand-logo">CRUD MVC OO with page control</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <!-- <li><a href=""></a></li> -->
          <!-- <li><a href=""></a></li> -->
        </ul>
      </div>
    </nav>
  </header>

  <body>
    <div class="container">
          <?php require_once $view.".php" ?>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  </body>

</html>