<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <title>RHEA ~ <?= print $common["text"]["main_title"]; ?></title>
    <link href="<?= $rootpath; ?>stylesheets/master.css" media="screen" rel="stylesheet" type="text/css">
<script src="<?= $rootpath; ?>/javascripts/jquery-1.4.4.min.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="header">
      <h1>
        <img src="<?= $rootpath; ?>images/logo-small.png" alt="RHEA Logo" />
        <a href="<?= $rootpath; ?><?= $_GET["language"]; ?>/">
          RHEA<span><?= $common["text"]["main_title"]; ?></span>
        </a>
      </h1>
      <img src="<?= $rootpath; ?>images/main.png" alt="The RHEA Team" class="main-image" />
    </div>
    <div class="main-page">
      <div class="aside">
        <div class="nav">
          <ul>
            <?= menuItem("home"); ?>
            <?= menuItem("research"); ?>
            <?= menuItem("whoiswho"); ?>
            <?= menuItem("students"); ?>
            <?= menuItem("publications"); ?>
            <?= menuItem("archive"); ?>
            <? if ($_GET["page"] == "archive" || $_GET["page"] == "news" || $_GET["page"] == "activities") { ?>
              <?= menuItem("activities"); ?>
              <?= menuItem("news"); ?>
            <? } ?>
            <?= menuItem("links"); ?>
            <?= menuItem("contact"); ?>
          </ul>
        </div>
        <div class="last-news">
          <ul>
            <?= shortNews() ?>
          </ul>
          <img src="<?= $rootpath; ?>images/logo-small.png" alt="Logo description" />
        </div>
      </div>
      <div class="breadcrumbs">
        <ul>
          <?= breadcrumbs(); ?>
        </ul>
      </div> 
      <div class="content">
