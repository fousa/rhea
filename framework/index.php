<?php
  date_default_timezone_set("Europe/Brussels");

  $rootpath = "/~jelle/10to1/rhea/framework/";
  $common   = parse_ini_file("config/common.ini", true);
  $news     = parse_ini_file("config/news.ini", true);

  if (isset($_GET["language"])) {
    require "pages/functions.php";
    require "pages/header.inc.php";
    require "pages/footer.inc.php";  
  } else {
    require "pages/language-selection.inc.php";
  }
?>
