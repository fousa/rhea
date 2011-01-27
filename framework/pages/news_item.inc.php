<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
	$news = $_GET["detail"];
  $news = parse_ini_file("config/$language/news/$news.ini", true);
?>
<h2><?= $news["title"]; ?></h2>
  
<?= Markdown($news["content"]); ?>
