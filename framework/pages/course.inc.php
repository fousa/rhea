<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $courses = parse_ini_file("config/$language/courses.ini", true);
?>
<h2><?= $courses[$_GET["subpage"]]["title"]; ?></h2>

<?= Markdown($courses[$_GET["subpage"]]["content"]); ?>
