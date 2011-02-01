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

	<? $url = $GLOBALS["rootpath"] . $language . "/news/" . $presentation["homepage"]["link_news"]; ?>
	<h2><?= $presentation["homepage"]["title_news"]; ?> <a href="<?= $url ?>">&rarr; meer hier</a></h2>
	<?= Markdown($presentation["homepage"]["content_news"]); ?>

	<? $url = $GLOBALS["rootpath"] . $language . "/activities/" . $presentation["homepage"]["link_activity"]; ?>
  <h2><?= $presentation["homepage"]["title_activity"]; ?> <a href="<?= $url ?>">&rarr; meer hier</a></h2>
	<?= Markdown($presentation["homepage"]["content_activity"]); ?>
<? } ?>
