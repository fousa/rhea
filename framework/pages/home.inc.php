<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);

  if ($_GET["detail"] == "history") {
    require "pages/history.inc.php";
  } else {
?>
  <h2><?= $presentation["homepage"]["title"]; ?></h2>
  
  <?= Markdown($presentation["homepage"]["content"]); ?>
  
  <? $url = $GLOBALS["rootpath"] . $_GET["language"] . "/home/history"; ?>
  <p>Kom meer de weten over de <a href="<?= $url ?>">historiek</a> van RHEA.</p>
<? } ?>
