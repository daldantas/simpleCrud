<?php
  require_once "Core/Controller.php";
  $c = new Controller;
  $d = $c->init();
  foreach ($d as $k => $v){$$k = $v;}
?>