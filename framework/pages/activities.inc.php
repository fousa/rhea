<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $activities = parse_ini_file("config/$language/activity_list.ini", true);
  
  if (isset($_GET["detail"])) {
    require "pages/activity_detail.inc.php";
  } else {
?>
<h2><?= $presentation["activities"]["title"]; ?></h2>
  
<?= Markdown($presentation["activities"]["content"]); ?>

<ul class="list">
  <? $color = false; ?>
  <? foreach ($activities as $key => $value) { ?>
    <li class="<?= (($color = !$color) ? "light" : "dark") ?>">
      <span><?= $key ?></span>
      <ul>
        <? 
          foreach ($value as $innerKey => $innerValue) { 
            $url = $GLOBALS["rootpath"] . $_GET["language"] . "/activities/" . $innerKey;
        ?>
          <li><a href="<?= $url ?>"><?= $innerValue ?></a></li>
        <? } ?>
      </ul>
    </li>
  <? } ?>
</ul>
<? } ?> 
