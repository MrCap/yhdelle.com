<?php

$username="yhdellec_tietok";
$password="Kf4H3s";
$database="localhost";
 
$con = mysql_connect($database,$username,$password);
if (!$con)
{
 die('Could not connect: ' . mysql_error());
 echo "yhteys ei onnistunut";
} 
 
$db_selected=mysql_select_db("yhdellec_baari", $con);
if (!$db_selected)
{
 die ("Can\'t use db : " . mysql_error());
 echo "tietokannassa ongelma";
}
 

 
mysql_close($con);


echo "
<html>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<HEAD>
<Title>Baarit, drinkit, boolit ja juomat</title>

<Meta name=\"description\" content=\"Yhdelle.com palauteosio, kerro miten sivustoa pit&auml;isi mielest&auml;si kehitt&auml;&auml;. K&auml;ytt&auml;jien toiveet huomioidaan ja sivusto kehittyy enemmist&ouml;n mukaisesti.\">
<Meta name=\"keywords\" content=\"baari, drinkki, drinkkiohje, booli, booliohje\">
</head>
<body>

<div id=\"wrap\">
<div id=\"otsikko\">


<div id=\"menu\">
<ul>
<li><a href=\"index.php\">alku</a></li>
<li><a href=\"baarit.php\">baarit</a></li>
<li><a href=\"drinkit.php\">drinkit</a></li>
<li><a href=\"boolit.php\">boolit</a></li>
<li><a href=\"juomat.php\">juomat</a></li>
<li class=\"avoin\"><a href=\"palaute.php\">palaute</a></li>
<!--<li><a href=\"hae.php\">hae</a></li>-->
</ul>
</div>
</div>

<div id=\"vasen\">


</div>

<div id=\"oikea\">

  <script type=\"text/javascript\"><!--
  google_ad_client = \"pub-2237669061960543\";
  /* yhdelle.com 120x600, luotu 27.10.2008 */
  google_ad_slot = \"7574449257\";
  google_ad_width = 120;
  google_ad_height = 600;
  //-->
  </script>
  <script type=\"text/javascript\"
  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
  </script>

</div>

 <div id=\"content\">
 <br>

 <p>
 Jos haluat ottaa yhteytt&auml; sivuston tekij&ouml;ihin, sinulla on parannusehdotus tai jokin osa ei toimi, 
 l&auml;het&auml; postia osoitteeseen <a href=\"mailto:palaute@yhdelle.com\">palaute@yhdelle.com</a>
 tai t&auml;yt&auml; alla oleva lomake.
 </p>
 <p>
 
  <h3>Palaute</h3>
  <form name=\"input\" action=\"thx_palaute.php\" method=\"post\">
  Nimimerkki:
  <input type=\"text\" name=\"nimimerkki\" />
  <br>haluan 
  <br><select name=\"tyyli\">
  <option value=\"\" selected=\"Valitse\">valitse</option>
  <option value=\"palaute\"> antaa palautetta</option>
  <option value=\"kehitys\"> antaa kehitysidean</option>
  <option value=\"virhe\"> kertoa virheest&auml;</option>
  <option value=\"seuraava\">&auml;&auml;nest&auml;&auml; seuraavaa kehityskohdetta</option>
  
  </select>
  <textarea name=\"kommentti\" rows=10 cols=75 value=\"\"></TEXTAREA><br><br>
  <input TYPE=\"hidden\" VALUE=1 NAME=\"tarkistus\">
  <center><input type=\"submit\" value=\"L&auml;het&auml;\" /></center>
  </form>
 
 </p>
 <p>
 Joitain kehitystoiveita on tullut ja sen perusteella t&auml;m&auml;n hetkinen kehitysj&auml;rjestys on seuraava:
 <br>-Boolien lis&auml;&auml;minen, (satoja reseptej&auml; odottaa lis&auml;&auml;mist&auml;)
 <br>-Booliosion kuntoon saattaminen
 <br>-kaikkiin osioihin erillinen arvostelulomake (yleisarvosana, juoman hinta, baarin siisteys yms. 1 - 10 arvosanalla)
 <br>-Baarien lis&auml;&auml;minen
 <br>-drinkkien lis&auml;&auml;minen (tiedossa olevia drinkkiohjeitakin piisaa)
 <br>-juomien lis&auml;&auml;minen (selvityksen alla on voiko yli 21% juomia lis&auml;t&auml; sivustolle vai kielt&auml;&auml;k&ouml; laki sen t&auml;ysin)
 <br><br><b>Sivustoa tehd&auml;&auml;n k&auml;ytt&auml;jien ehdoilla, joten jos on jokin osio mink&auml; haluaisit mahdollisimman nopeasti niin ota yhteytt&auml;,
  se mit&auml; eniten kaivataan, tehd&auml;&auml;n ensimm&auml;isen&auml;!</b>
 
 </p>

	</div>
</div>
</body>
</html>
";
?>