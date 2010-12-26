<?php
  function menuItem($url) {
    $currentPage = $_GET["page"] == "" ? "home" : $_GET["page"];
    $name = $GLOBALS["common"]["menu"][$url];

    if ($url == "news" || $url == "activities")
      $output = "<li class='sub-link'>";
    else
      $output = "<li>";

    if ($currentPage == $url || $currentPage == $url . "/" || ($url == "archive" && ($currentPage == "activities" || $currentPage == "news"))) {
      $output .= "<span>";
      if ($url == "news" || $url == "activities")
        $output .= "&rarr; ";
      $output .= $name;
      $output .= "</span>";
    } else {
      if ($url == "archive")
        $otherUrl = "activities";
      else
        $otherUrl = $url;
      $correctUrl = $GLOBALS["rootpath"] . $_GET["language"] . "/" . $otherUrl;

      $output .= "<a href='$correctUrl'>";
      if ($url == "news" || $url == "activities")
        $output .= "&rarr; ";
      $output .= $name;
      $output .= "</a>";
    }

    return $output . "</li>";
  }

  function shortNews() {
    $list = $GLOBALS["news"];
    $output = "";
    foreach ($list as $key=>$value) {
      $date = $value["date"];
      $text = $value["text"];
      $url = $GLOBALS["rootpath"] . "news/" . $value["link"];
      $output .= "<li>$date ~ $text <a href='$url'>meer&nbsp;&rarr;</a></li>";
    }
    return $output;
  }

  function breadcrumbs() {
    $initialURL = $GLOBALS["rootpath"] . $_GET["language"];
    $currentPage = $_GET["page"] == "" ? "home" : $_GET["page"];
    $output = "<li><a href='$initialURL'>rhea</a>&rarr;&nbsp;</li>";

    if (isset($_GET["detail"]) && $_GET["detail"] != "") {
      $url = $initialURL . "/" . $currentPage;
      $name = $GLOBALS["common"]["menu"][$currentPage];
      $output .= "<li><a href='$url'>$name</a>&rarr;&nbsp;</li>";
      if (isset($_GET["subpage"]) && $_GET["subpage"] != "" && $_GET["detail"] != "courses") {
        $url = $initialURL . $currentPage . "/" . $_GET["subpage"];
        $name = $GLOBALS["common"][$currentPage][$_GET["detail"]];
        $output .= "<li><a href='$url'>$name</a>&rarr;&nbsp;</li>";
        $name = $GLOBALS["common"][$currentPage][$_GET["subpage"]];
        $output .= "<li><span>$name</span></li>";
      } else {
        $name = $GLOBALS["common"][$currentPage][$_GET["detail"]];
        $output .= "<li><span>$name</span></li>";
      }
    } else {
      $name = $GLOBALS["common"]["menu"][$currentPage];
      $output .= "<li><span>$name</span></li>";
    }

    return $output;
  }
?>
