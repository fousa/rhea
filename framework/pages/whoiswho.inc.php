<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $whoiswho = parse_ini_file("config/$language/whoiswho.ini", true);
  
  if (isset($_GET["detail"])) {
    require "pages/person.inc.php";
  } else {
?>
<h2><?= $presentation["whoiswho"]["title"]; ?></h2>
  
<?= Markdown($presentation["whoiswho"]["content"]); ?>

<ul class="list">
  <? $color = false; ?>
  <? foreach ($whoiswho as $key => $value) { ?>
    <li class="<?= (($color = !$color) ? "light" : "dark") ?>">
      <span><?= $key ?></span>
      <ul>
        <? 
          foreach ($value as $innerKey => $innerValue) { 
            $url = $GLOBALS["rootpath"] . $_GET["language"] . "/whoiswho/" . $innerKey;
        ?>
          <li><a href="<?= $url ?>"><?= $innerValue ?></a></li>
        <? } ?>
      </ul>
    </li>
  <? } ?>
</ul>
<? } ?> 
