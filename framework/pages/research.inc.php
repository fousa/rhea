<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $researches = parse_ini_file("config/$language/research.ini", true);
?>
<h2><?= $presentation["research"]["title"]; ?></h2>
  
<?= Markdown($presentation["research"]["content"]); ?>

<ul class="list">
  <? $color = false; ?>
  <? foreach ($researches as $key => $value) { ?>
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
 
