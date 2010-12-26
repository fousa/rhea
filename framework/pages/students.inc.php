<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $students = parse_ini_file("config/$language/students.ini", true);

  if (isset($_GET["detail"]) && isset($_GET["subpage"])) {
    require "pages/course.inc.php";
  } else {
?>
  <h2><?= $presentation["students"]["title"]; ?></h2>
  
  <?= Markdown($presentation["students"]["content"]); ?>

  <h3><?= $presentation["students"]["courses"]; ?></h3>
  <ul class="small-list">
    <? 
      foreach ($students["courses"] as $key => $value) {
        $url = $GLOBALS["rootpath"] . $_GET["language"] . "/students/courses/" . $key;
    ?>
        <li><span><?= $value ?>&nbsp;<a href="<?= $url ?>">meer&nbsp;&rarr;</a></span></li>
    <? } ?>
  </ul>

  <h3><?= $presentation["students"]["papers"]; ?></h3>
  <ul class="list">
    <li class="light">
      <ul>
        <? 
          foreach ($students["papers"] as $key => $value) {
            $url = $GLOBALS["rootpath"] . $_GET["language"] . "/whoiswho/" . $key . "/papers";
        ?>
            <li><a href="<?= $url ?>"><?= $value ?></a></li>
        <? } ?>
      </ul>
    </li>
  </ul>
<? } ?>
