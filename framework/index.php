<?php
	ini_set("display_errors", 0);
	ini_set("log_errors", 1);

  date_default_timezone_set("Europe/Brussels");

  $rootpath = "/~jelle/10to1/rhea/framework/";
  include_once "frameworks/markdown.php";

  if (isset($_GET["language"])) {
    $language = $_GET["language"];
    $common   = parse_ini_file("config/$language/common.ini", true);
    $news     = parse_ini_file("config/$language/news.ini", true);

    require "pages/functions.php";
    require "pages/header.inc.php";

    $currentPage = $_GET["page"] == "" ? "home" : $_GET["page"];
    if ($currentPage == "research")
      require "pages/research.inc.php";
    elseif ($currentPage == "whoiswho")
      require "pages/whoiswho.inc.php";
    elseif ($currentPage == "links")
      require "pages/links.inc.php";
    elseif ($currentPage == "contact")
      require "pages/contact.inc.php";
    elseif ($currentPage == "publications")
      require "pages/publications.inc.php";
    elseif ($currentPage == "students")
      require "pages/students.inc.php";
    elseif ($currentPage == "news")
      require "pages/news.inc.php";
    elseif ($currentPage == "activities")
      require "pages/activities.inc.php";
    else
      require "pages/home.inc.php";

    require "pages/footer.inc.php";  
  } else {
    require "pages/language-selection.inc.php";
  }
?>
