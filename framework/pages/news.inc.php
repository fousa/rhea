<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $news = parse_ini_file("config/$language/news_list.ini", true);
  
  if (isset($_GET["detail"])) {
    require "pages/news_item.inc.php";
  } else {
?>
<h2><?= $presentation["news"]["title"]; ?></h2>
  
<?= Markdown($presentation["news"]["content"]); ?>

<ul class="list">
  <? $color = false; ?>
  <? foreach ($news as $key => $value) { ?>
    <li class="<?= (($color = !$color) ? "light" : "dark") ?>">
      <span><?= $key ?></span>
      <ul>
        <? 
          foreach ($value as $innerKey => $innerValue) { 
            $url = $GLOBALS["rootpath"] . $_GET["language"] . "/news/" . $innerKey;
        ?>
          <li><a href="<?= $url ?>"><?= $innerValue ?></a></li>
        <? } ?>
      </ul>
    </li>
  <? } ?>
</ul>
<? } ?> 
