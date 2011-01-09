<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $whoiswho = parse_ini_file("config/$language/whoiswho.ini", true);
  $person = parse_ini_file("config/$language/people/" . $_GET["detail"] . ".ini", true);
  
  if (isset($_GET["detail"]) && isset($_GET["subpage"])) {
    require "pages/person_detail.inc.php";
  } else {
?>

<h2><?= $person["info"]["name"] ?></h2> 
<div class="aside-links"> 
  <img src="../../images/whoiswho/<?= $_GET["detail"] ?>.png" alt="<?= $person["info"]["name"] ?>" /> 
  <ul> 
    <li><a href="<?= $_GET["detail"] ?>/publications">&rarr; <?= $presentation["whoiswho"]["publications"] ?></a></li> 
    <li><a href="<?= $_GET["detail"] ?>/projects">&rarr; <?= $presentation["whoiswho"]["projects"] ?></a></li> 
    <li><a href="<?= $_GET["detail"] ?>/papers">&rarr; <?= $presentation["whoiswho"]["papers"] ?></a></li> 
  </ul> 
</div> 
<div class="vcard"> 
  <p class="adr"> 
  <span class="location"><?= $person["info"]["facility"] ?></span><br /> 
  <span class="street-address"><?= $person["info"]["address"] ?></span><br /> 
  <span class="locality"><?= $person["info"]["city"] ?></span><br /> 
  <span class="country-name"><?= $person["info"]["country"] ?></span> 
  </p> 
  <p class="tel"><span class="type"><?= $presentation["whoiswho"]["work"] ?></span>: <?= $person["info"]["work_phone"] ?></p> 
  <p class="tel"><span class="type"><?= $presentation["whoiswho"]["fax"] ?></span>: <?= $person["info"]["work_fax"] ?></p> 
  <p><?= $presentation["whoiswho"]["email"] ?>:<span class="email"> <a href="mailto: <?= $person["info"]["email"] ?>"><?= $person["info"]["email"] ?></a></span></p> 
</div> 
        
<h3><?= $presentation["whoiswho"]["teaching"] ?></h3> 
        <ul class="small-list"> 
          <? foreach ($person["teaching"] as $key => $value) { ?>
            <li><span><?= $value ?></span></li> 
          <? } ?>
        </ul> 
<h3><?= $presentation["whoiswho"]["work_title"] ?></h3> 
<?= Markdown($person["work"]["content"]) ?>


<? } ?> 
