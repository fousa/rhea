<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $person = parse_ini_file("config/$language/people/" . $_GET["detail"] . ".ini", true);
?>
<h2><?= $presentation["whoiswho"][$_GET["subpage"]]; ?></h2>
  
<?= Markdown($person[$_GET["subpage"]]["content"]); ?>

<ul class="small-list">
  <? foreach ($person[$_GET["subpage"]]["list"] as $key => $value) { ?>
    <li><span><?= $value ?></span></li>
  <? } ?>
</ul>
