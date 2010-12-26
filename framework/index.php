<?php
  date_default_timezone_set("Europe/Brussels");

  $rootpath = "/~jelle/10to1/rhea/framework/";
  $language = $_GET["language"];
  $common   = parse_ini_file("config/$language/common.ini", true);
  $news     = parse_ini_file("config/$language/news.ini", true);

  include_once "frameworks/markdown.php";

  if (isset($_GET["language"])) {
    require "pages/functions.php";
    require "pages/header.inc.php";

    $currentPage = $_GET["page"] == "" ? "home" : $_GET["page"];
    if ($currentPage == "research")
      echo "Not defined";
    else
      require "pages/home.inc.php";

    require "pages/footer.inc.php";  
  } else {
    require "pages/language-selection.inc.php";
  }
?>
