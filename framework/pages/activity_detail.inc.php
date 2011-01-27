<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
	$activity = $_GET["detail"];
  $activity = parse_ini_file("config/$language/activities/$activity.ini", true);
?>
<h2><?= $activity["title"]; ?></h2>
  
<?= Markdown($activity["content"]); ?>
