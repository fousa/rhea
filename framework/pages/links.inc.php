<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $links = parse_ini_file("config/$language/links.ini", true);
?>
<h2><?= $presentation["links"]["title"]; ?></h2>
  
<?= Markdown($presentation["links"]["content"]); ?>

<? foreach ($links as $key => $value) { ?>
  <h3><?= $key ?></h3>
  <ul class="small-list link-list">
    <? foreach ($value as $innerKey => $innerValue) { ?>
      <li><a href="<?= $innerKey ?>"><?= $innerValue ?></a></li>
    <? } ?>
  </ul>
<? } ?>

