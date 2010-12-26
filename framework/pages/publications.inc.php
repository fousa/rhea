<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $publications = parse_ini_file("config/$language/publications.ini");
?>
<h2><?= $presentation["publications"]["title"]; ?></h2>
  
<?= Markdown($presentation["publications"]["content"]); ?>

  <ul class="small-list">
    <? foreach ($publications as $key => $value) { ?>
      <li><span><?= $value ?>&nbsp;<a href="<?= $key ?>">koop online&nbsp;&rarr;</a></span></li>
    <? } ?>
  </ul>
