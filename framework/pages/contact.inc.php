<? 
  $language = $GLOBALS["language"];
  $presentation = parse_ini_file("config/$language/presentation.ini", true);
  $contact = parse_ini_file("config/$language/contact.ini");
?>
<h2><?= $contact["address"]; ?></h2>
  
<div class="aside-links">
  <a href="http://maps.google.com/maps?q=Pleinlaan 2, Brussel,Belgium&amp;zoom=12&amp;size=250x250&amp;maptype=roadmap&amp;markers=size:mid|color:red|Pleinlaan 2, Brussel,Belgium&amp;sensor=false"><img alt="Staticmap?center=pleinlaan 2, brussel,belgium&amp;zoom=12&amp;size=250x250&amp;maptype=roadmap&amp;markers=size:mid|color:red|pleinlaan 2,brussel,belgium&amp;sensor=false" border="0" src="http://maps.google.com/maps/api/staticmap?center=Pleinlaan 2, Brussel,Belgium&amp;zoom=12&amp;size=250x250&amp;maptype=roadmap&amp;markers=size:mid|color:red|Pleinlaan 2, Brussel,Belgium&amp;sensor=false"></a>
</div>
<div class="vcard">
  <p class="adr">
    <span class="location">Vrije Universiteit Brussel</span><br>
    <span class="location">Faculteit Rechten en Criminologie</span><br>
    <span class="extended-address">Lokaal 4B323</span><br>
    <span class="street-address">Pleinlaan 2</span><br>
    <span class="postal-code">1050</span>
    <span class="locality">Brussel</span><br> 
    <span class="country-name">België</span>
  </p>
  <p class="tel"><span class="type"><?= $contact["work-phone"] ?></span>: +32 (2) 629.14.95</p>
  <p><?= $contact["email"] ?>:<span class="email"> <a href="mailto: rhea@vub.ac.be">rhea@vub.ac.be</a></span></p>
</div>

<h3><?= $contact["accessibility"] ?></h3>
<?= Markdown($contact["accessibility-content"]) ?>

<h3><?= $contact["facebook"] ?></h3>
<?= Markdown($contact["facebook-content"]) ?>

<img src="../images/contact.png" alt="The Team" style="margin-left: 20px; margin-bottom: -3px;" />
