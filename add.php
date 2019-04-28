<?php

function tarkistaja()
{
$tarkistus=$_POST["tarkistus"];

  echo "<br><br>Vastaatko viel&auml; seuraavaan kysymykseen, jottei sp&auml;mmirobotit p&auml;&auml;sisi niin helposti tekem&auml;&auml;n
  vahinkoa sivustollemme.<br>";
  echo "Mink&auml; tuotteen saat jos tilaat pitk&auml;n ";
  echo "<select name=\"tarkistus\" selected=\"valitse\">";
  echo "<option value=1>ison Siiderin</option>";
  echo "<option value=1>pienen Oluen</option>";
  echo "<option value=1>ison lonkeron</option>";
  echo "<option value=1>pienen siiderin</option>";
  echo "<option value=1>ison oluen</option>";
  echo "<option value=1>pienen lonkeron</option>";
  echo "</select>";
  
}

function ajat()
{

  echo "<option value=\"valitse\" >valitse</option>";
 
  for($i=9; $i<=23; $i++)
  {
    echo "<option value=\"". $i .":00:00\">". $i .".00</option>";
    echo "<option value=\"". $i .":30:00\">". $i .".30</option>";
  }
  for($i=0; $i<=3; $i++)
  {
    echo "<option value=\"". $i .":00:00\">". $i .".00</option>";
    echo "<option value=\"". $i .":30:00\">". $i .".30</option>";
  }

  echo"
  <option value=\"4:00:00\">4.00</option>
  </select>";
}

function ika()
{
  echo"  
  <option value=\"\" selected=\"Valitse\">valitse</option>
  ";
  for($i=18; $i<=100; $i++)
  {
    echo "<option value=\"". $i ."\">". $i ."</option>";
  }
  echo"
  </select>";
}



 $tuote=$_GET["tuote"]; 

alku($tuote);
 
if ($tuote=="baari"){ echo "<center><h2>Lis&auml;&auml; baari</h2></center>"; baari();}
else if ($tuote=="booli"){ echo "<center><h2>Lis&auml;&auml; booliohje</h2></center>";  booli();}
else if ($tuote=="drinkki"){ echo "<center><h2>Lis&auml;&auml; drinkki</h2></center>";  drinkki();}
else if ($tuote=="juoma"){ echo "<center><h2>Lis&auml;&auml; juoma</h2></center>";  juoma();}

////////////////////////////////////////////////////////////7
function alku($tuote)
{
echo "<html>\n";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\n";
echo "<HEAD>\n";
echo "<Title>Baarit, drinkit ja boolit</title>\n";

echo "<Meta name=\"description\" content=\"lista baareista, drinkeistä ja booleista\">\n";
echo "<Meta name=\"keywords\" content=\"baari, drinkki, drinkkiohje, booli, booliohje\">\n";
echo "</head>\n";
echo "<body>\n";

echo "<div id=\"wrap\">\n";
echo "<div id=\"otsikko\">\n";


echo "<div id=\"menu\">\n";
echo "<ul>\n";
echo "<li><a href=\"index.php\">alku</a></li>\n";
echo "<li><a href=\"baarit.php\">baarit</a></li>\n";
echo "<li><a href=\"drinkit.php\">drinkit</a></li>\n";
echo "<li><a href=\"boolit.php\">boolit</a></li>\n";
echo "<li><a href=\"juomat.php\">juomat</a></li>\n";
echo "<li><a href=\"palaute.php\">palaute</a></li>";
echo "<!--<li class=\"avoin\"><a href=\"hae.php\">hae</a></li>-->\n";
echo "</ul>\n";
echo "</div>\n";
echo "</div>\n";

echo "<div id=\"vasen\">\n";
echo "<ul class=\"menu\">\n";
if ($tuote=="baari"){ echo "<li><a href=\"hae.php?tuote=baari\">etsi</a></li>\n";}
else if ($tuote=="booli"){ echo "<li><a href=\"hae.php?tuote=booli\">etsi</a></li>\n";}
else if ($tuote=="drinkki"){ echo "<li><a href=\"hae.php?tuote=drinkki\">etsi</a></li>\n";}
else if ($tuote=="juoma"){ echo "<li><a href=\"hae.php?tuote=juoma\">etsi</a></li>\n";}
echo "</ul>\n";
echo "</div>\n";

echo "<div id=\"oikea\">\n";

echo "  <script type=\"text/javascript\"><!--\n";
echo "  google_ad_client = \"pub-2237669061960543\";\n";
echo "  /* yhdelle.com 120x600, luotu 27.10.2008 */\n";
echo "  google_ad_slot = \"7574449257\";\n";
echo "  google_ad_width = 120;\n";
echo "  google_ad_height = 600;\n";
echo "  //-->\n";
echo "  </script>\n";
echo "  <script type=\"text/javascript\"\n";
echo "  src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">\n";
echo "  </script>\n";

echo "</div>\n";

echo " <div id=\"content\">\n";
echo " <br>\n";
}
 

function baari()
{



//baari
$nimi=$_POST["nimi"];

//aukioloajat ja iät
$auki_ma=$_POST["auki_ma"];
$kiinni_ma=$_POST["kiinni_ma"];
$ma_on=$_POST["ma_on"];
$ika_ma=$_POST["ika_ma"];
$auki_ti=$_POST["auki_ti"];
$kiinni_ti=$_POST["kiinni_ti"];
$ti_on=$_POST["ti_on"];
$ika_ti=$_POST["ika_ti"];
$auki_ke=$_POST["auki_ke"];
$kiinni_ke=$_POST["kiinni_ke"];
$ke_on=$_POST["ke_on"];
$ika_ke=$_POST["ika_ke"];
$auki_to=$_POST["auki_to"];
$kiinni_to=$_POST["kiinni_to"];
$to_on=$_POST["to_on"];
$ika_to=$_POST["ika_to"];
$auki_pe=$_POST["auki_pe"];
$kiinni_pe=$_POST["kiinni_pe"];
$pe_on=$_POST["pe_on"];
$ika_pe=$_POST["ika_pe"];
$auki_la=$_POST["auki_la"];
$kiinni_la=$_POST["kiinni_la"];
$la_on=$_POST["la_on"];
$ika_la=$_POST["ika_la"];
$auki_su=$_POST["auki_su"];
$kiinni_su=$_POST["kiinni_su"];
$su_on=$_POST["su_on"];
$ika_su=$_POST["ika_su"];

//Baarin extrat
$biljardi=$_POST["biljardi"];
$darts=$_POST["darts"];
$karaoke=$_POST["karaoke"];
$sauna=$_POST["sauna"];
$ruoka=$_POST["ruoka"];
$terassi=$_POST["terassi"];
$netti=$_POST["netti"];
$liveesiintyjia=$_POST["liveesiintyjia"];
$snooker=$_POST["snooker"];
$jukebox=$_POST["jukebox"];
$wlan=$_POST["wlan"];
$lautapelit=$_POST["lautapelit"];


//osoitetiedot
$kaupunki=$_POST["kaupunki"];
$kaupunginosa=$_POST["kaupunginosa"];
$katu=$_POST["katu"];
$postinumero=$_POST["postinumero"];
$nettiosoite=$_POST["nettiosoite"];
$puhelin=$_POST["puhelin"];

//perustiedot
$kuvaus=$_POST["kuvaus"];
$mainittavaa=$_POST["mainittavaa"];
$koko=$_POST["koko"];
$hinta=$_POST["hinta"];
$asiakaskunta=$_POST["asiakaskunta"];

//tyyli
$disco=$_POST["disco"];
$olutravintola=$_POST["olutravintola"];
$musiikkiklubi=$_POST["musiikkiklubi"];
$pubi=$_POST["pubi"];
$tanssiravintola=$_POST["tanssiravintola"];
$urheilubaari=$_POST["urheilubaari"];
$ruokapainoitteinen=$_POST["ruokapainoitteinen"];

//musiikki$ambient=$_POST["ambient"];
$dance=$_POST["dance"];
$musiikki_disco=$_POST["musiikki_disco"];
$dmetal=$_POST["dmetal"];
$hmetal=$_POST["hmetal"];
$hiphop=$_POST["hiphop"];
$humppa=$_POST["humppa"];
$tanssimusiikki=$_POST["tanssimusiikki"];
$jazz=$_POST["jazz"];
$klassinen=$_POST["klassinen"];
$noise=$_POST["noise"];
$pop=$_POST["pop"];
$punk=$_POST["punk"];
$progressive=$_POST["progressive"];
$rap=$_POST["rap"];
$reggae=$_POST["reggae"];
$rnb=$_POST["rnb"];
$rock=$_POST["rock"];
$suomipop=$_POST["suomipop"];
$techno=$_POST["techno"];
$trance=$_POST["trance"];

//Perustiedot
echo "
<h3>Perustiedot</h3>
<form action=\"thx_baarit.php\" method=\"post\">
<table>
<tr>
<td>  Baarin nimi:</td> 
  <td><input type=\"text\" name=\"nimi\" value=\"".$nimi."\"></td>
</tr>
<tr>  
  <td>Baarin kuvaus:</td>
  <td><textarea name=\"kuvaus\" rows=\"4\" cols=\"20\" value=\"".$kuvaus."\"></textarea></td>
  
</tr>
<tr>  
  <td>Mainittavaa baarista:</td> 
  <td><textarea name= name=\"mainittavaa\" rows=\"4\" cols=\"20\" value=\"".$mainittavaa."\"></textarea></td>
</tr>
<tr>
  <td>kaupunki:</td>
  <td><input type=\"text\" name=\"kaupunki\" value=\"".$kaupunki."\"></td>
</tr>
<tr>
  <td>kaupunginosa:</td>
  <td><input type=\"text\" name=\"kaupunginosa\" value=\"".$kaupunginosa."\"></td>
</tr>
<tr>
  <td>katuosoite:</td>
  <td><input type=\"text\" name=\"katu\" value=\"".$katu."\"></td>
</tr>
<tr>
  <td>postinumero <br>ja toimipaikka:</td> 
  <td><input type=\"text\" name=\"postinumero\" value=\"".$postinumero."\"></td>
</tr>
<tr>
  <td>nettisivut:</td>
  <td><input type=\"text\" name=\"nettiosoite\" value=\"".$nettiosoite."\"></td>
</tr>
<tr>
  <td>puhelinnumero:</td>
  <td><input type=\"text\" name=\"puhelin\" value=\"".$puhelin."\"></td>
</tr>
<tr>
  <td>koko: (arvio asiakaspaikkojen m&auml;&auml;r&auml;st&auml;)</td>
  <td><input type=\"text\" name=\"koko\" value=\"".$koko."\"></td>
</tr>
<tr>
  <td>kuvaus tyypillisest&auml; asiakkaasta:</td>
  <td><input type=\"text\" name=\"asiakaskunta\" value=\"".$asiakaskunta."\"></td>
</tr>

</table>
";

//aukiolo
echo"  
  <h3>Aukiolo</h3>

<table>
<tr>
  <td>P&auml;iv&auml;</td>
  <td>Avataan</td>
  <td>Suljetaan</td>
  <td>Ei avoinna</td>  
  <td>  ik&auml;raja:</td>
</tr>

<tr>
 <td>Maanantai</td>
 <td><select name=\"auki_ma\" selected=\"valitse\">";
 ajat(); echo"</td>
 <td><select name=\"kiinni_ma\">
 ";ajat(); echo"</td>
  <td><center><input type=\"checkbox\" name=\"ma_on\" value=\"Suljettu\"><center></td>
  <td><select name=\"ika_ma\">";ika();echo"</td>
</tr>
<tr>
 <td>Tiistai</td>
 <td><select name=\"auki_ti\">
 ";ajat(); echo"</td>
 <td><select name=\"kiinni_ti\">
 ";ajat(); echo"</td>
 <td><center><input type=\"checkbox\" name=\"ti_on\" value=\"Suljettu\"><center></td>
 <td><select name=\"ika_ti\">";ika();echo"</td>
</tr>
<tr>
 <td>Keskiviikko</td> 
 <td><select name=\"auki_ke\">
 ";ajat(); echo"</td>
 <td><select name=\"kiinni_ke\">
 ";ajat(); echo"</td>
 <td><center><input type=\"checkbox\" name=\"ke_on\" value=\"Suljettu\"><center></td>
 <td><select name=\"ika_ke\">";ika();echo"</td>
</tr>
<tr>
 <td>Torstai</td>
 <td><select name=\"auki_to\">
 ";ajat(); echo"</td>
 <td><select name=\"kiinni_to\">
 ";ajat(); echo"</td>
 <td><center><input type=\"checkbox\" name=\"to_on\" value=\"Suljettu\"><center></td>
 <td><select name=\"ika_to\">";ika();echo"</td>
</tr>
<tr>
 <td>Perjantai</td>
 <td><select name=\"auki_pe\">
 ";ajat(); echo"</td>
 <td><select name=\"kiinni_pe\">
 ";ajat(); echo"</td>
 <td><center><input type=\"checkbox\" name=\"pe_on\" value=\"Suljettu\"><center></td>
 <td><select name=\"ika_pe\">";ika();echo"</td>
</tr>
<tr>
 <td>Lauantai</td>
 <td><select name=\"auki_la\">
 ";ajat(); echo"</td>
 <td><select name=\"kiinni_la\">
 ";ajat(); echo"</td>
 <td><center><input type=\"checkbox\" name=\"la_on\" value=\"Suljettu\"><center></td>
 <td><select name=\"ika_la\">";ika();echo"</td>
</tr>
<tr>
 <td>Sunnuntai</td>
 <td><select name=\"auki_su\">
 ";ajat(); echo"</td>
 <td><select name=\"kiinni_su\">
 ";ajat(); echo"</td>
 <td><center><input type=\"checkbox\" name=\"su_on\" value=\"Suljettu\"><center></td>
 <td><select name=\"ika_su\">";ika();echo"</td>
</tr>

</table>



  
  </select>
";

//muita tietoja
echo"
  <br>
  <h3>Muita tietoja</h3>
  <br>baarin tyyli:
  <br><input type=\"checkbox\" name=\"disco\" value=1> disco/y&ouml;kerho
  <br><input type=\"checkbox\" name=\"olutravintola\" value=1> olutravintola
  <br><input type=\"checkbox\" name=\"musiikkiklubi\" value=1> musiikkiklubi
  <br><input type=\"checkbox\" name=\"pubi\" value=1> pubi/baari
  <br><input type=\"checkbox\" name=\"tanssiravintola\" value=1> tanssiravintola
  <br><input type=\"checkbox\" name=\"urheilubaari\" value=1> urheilubaari
  <br><input type=\"checkbox\" name=\"ruokapainoitteinen\" value=1> ruokapainoitteinen
  
 <br>
  <br>hintataso
  <br>halpa <input type=\"radio\" name=\"hinta\" value=\"halpa\">
  <br>keskihintainen <input type=\"radio\" name=\"hinta\" value=\"keskihintainen\">
  <br>kallis <input type=\"radio\" name=\"hinta\" value=\"kallis\">
  <br>
  
  <br>Baarissa soi
  <br><input type=\"checkbox\" name=\"ambient\" value=\"1\">ambient
  <br><input type=\"checkbox\" name=\"dance\" value=\"1\">dance
  <br><input type=\"checkbox\" name=\"musiikki_disco\" value=\"1\">musiikki_disco
  <br><input type=\"checkbox\" name=\"dmetal\" value=\"1\">death metal
  <br><input type=\"checkbox\" name=\"hmetal\" value=\"1\">heavy metal
  <br><input type=\"checkbox\" name=\"hiphop\" value=\"1\">hiphop
  <br><input type=\"checkbox\" name=\"humppa\" value=\"1\">humppa
  <br><input type=\"checkbox\" name=\"tanssimusiikki\" value=\"1\">tanssimusiikki
  <br><input type=\"checkbox\" name=\"jazz\" value=\"1\">jazz
  <br><input type=\"checkbox\" name=\"klassinen\" value=\"1\">klassinen
  <br><input type=\"checkbox\" name=\"noise\" value=\"1\">noise
  <br><input type=\"checkbox\" name=\"pop\" value=\"1\">pop
  <br><input type=\"checkbox\" name=\"punk\" value=\"1\">punk
  <br><input type=\"checkbox\" name=\"progressive\" value=\"1\">progressive
  <br><input type=\"checkbox\" name=\"rap\" value=\"1\">rap
  <br><input type=\"checkbox\" name=\"reggae\" value=\"1\">reggae
  <br><input type=\"checkbox\" name=\"rnb\" value=\"1\">RnB
  <br><input type=\"checkbox\" name=\"rock\" value=\"1\">rock
  <br><input type=\"checkbox\" name=\"suomipop\" value=\"1\">suomipop
  <br><input type=\"checkbox\" name=\"techno\" value=\"1\">techno
  <br><input type=\"checkbox\" name=\"trance\" value=\"1\">trance
";

//Extra jutut  
echo"  
  <br><br>Extrat

  <table>
  


  <tr>
  <td>biljardi</td>
  <td><input type=\"checkbox\" name=\"biljardi\" value=1></td>
  </tr>
  
  <tr>
  <td>darts</td>
  <td><input type=\"checkbox\" name=\"darts\" value=1></td>
  </tr>
  
  <tr>
  <td>karaoke</td>
  <td><input type=\"checkbox\" name=\"karaoke\" value=1></td>
  </tr>

  <tr>
  <td>sauna</td>
  <td><input type=\"checkbox\" name=\"sauna\" value=1></td>
  </tr>
  
  <tr>
  <td>Ruokaa/naposteltavaa</td>
  <td><input type=\"checkbox\" name=\"ruoka\" value=1></td>
  </tr>

  <tr>
  <td>terassi</td>
  <td><input type=\"checkbox\" name=\"terassi\" value=1></td>
  </tr>

  <tr>
  <td>netti</td>
  <td><input type=\"checkbox\" name=\"netti\" value=1></td>
  </tr>
  
  <tr>
  <td>live-esiintyji&auml;</td></td>
  <td><input type=\"checkbox\" name=\"liveesiintyjia\" value=1></td>
  </tr>
  

  <tr>  
  <td>snooker</td>
  <td><input type=\"checkbox\" name=\"snooker\" value=1></td>
  </tr>
  
  <tr>
  <td>jukebox</td></td>
  <td><input type=\"checkbox\" name=\"jukebox\" value=1></td>
  </tr>
  
  <tr>
  <td>lautapelej&auml;</td></td>
  <td><input type=\"checkbox\" name=\"lautapelit\" value=1></td>
  </tr>
  
  <tr>
  <td>wlan</td></td>
  <td><input type=\"checkbox\" name=\"wlan\" value=1></td>
  </tr>


  
  </table>
  ";
  tarkistaja();
  echo"

  <br><br>
<input type=\"submit\" value=\"Lis&auml;&auml; baari tietokantaan\"/>
  </form>";




}
function drinkki()
{
 	$nimi=$_POST["nimi"];
 	$maku=$_POST["maku"];
 	$lasi=$_POST["lasi"];
 	$lampotila=$_POST["lampotila"];
 	$ohje=$_POST["ohje"];
 	$koriste=$_POST["koriste"];
 	$kuva=$_POST["kuva"];
 	$kuvaus=$_POST["kuvaus"];
 	$mainittavaa=$_POST["mainittavaa"];
 	$aineosat=$_POST["aineosat"];
  
  echo "<form action=\"thx_drinkit.php\" method=\"post\">
  <table><tr><td>nimi:</td> 
  <td><input type=\"text\" name=\"nimi\"></td></tr>
  
  <tr><td>maku:</td> 
  <td><input type=\"text\" name=\"maku\">(makea, kirpe&auml;, hapan...)</td></tr>
  
  <tr><td>lasi:</td> 
  <td><input type=\"text\" name=\"lasi\">(cocktail-lasi, valkoviinilasi, shottilasi...)</td></tr> 
  
  <tr><td>l&auml;mp&ouml;tila:</td> 
  <td><input type=\"text\" name=\"lampotila\">(kylm&auml, kuuma, huoneenl&auml;mp&ouml;inen, viile&auml;...)</td></tr>
  
  <tr><td>kuva</td> 
  <td><input type=\"text\" name=\"kuva\"></td></tr>
  
  <tr><td>Aineosat ja m&auml;&auml;r&auml;t:</td>
  <td><textarea name=\"aineosat\" rows=\"4\" cols=\"50\" value=\"".$aineosat."\"></textarea>
  </td></tr>
  
  <tr><td>Koristeet:</td>
  <td><textarea name=\"koriste\" rows=\"4\" cols=\"50\" value=\"".$koriste."\"></textarea>
  </td></tr>

  
  <tr><td>teko-ohje</td>
  <td><textarea name=\"ohje\" rows=\"4\" cols=\"50\" value=\"".$ohje."\"></textarea>
  </td></tr>

    <tr><td>kuvaus</td>
  <td><textarea name=\"kuvaus\" rows=\"4\" cols=\"50\" value=\"".$kuvaus."\"></textarea>
  </td></tr>

  <tr><td>mainittavaa</td>
  <td><textarea name=\"mainittavaa\" rows=\"4\" cols=\"50\" value=\"".$mainittavaa."\"></textarea></td>
  </tr>
  </table>  
  ";


  tarkistaja();
  
  echo"
  <br><br>
  <input type=\"submit\" value=\"Lis&auml;&auml; drinkki tietokantaan\"/>
  </form>";

}
function booli()
{
    echo "<form>
  Boolin nimi: 
  <input type=\"text\" name=\"nimi\">
  
  <br>
  <br>Aine 1: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 2: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 3: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 4: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 5: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 6: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 7: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 8: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 9: 
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>Aine 10:
  <select name=\"Aine\">
  <option value=\"valitse\" selected=\"valitse\">valitse</option>
  <option value=\"vodka\">vodka</option>
  <option value=\"absintti\">absintti</option>
  <option value=\"vesi\">vesi</option>
  <option value=\"maito\">maito</option>
  </select>
  
  <br>
  <br>Puuttuvia aineita
  <br><input type=\"radio\" name=\"puuttuva\" value=\"ei\"> ei saa olla (kaupassa k&auml;yminen ei ole mahdollista)
  <br><input type=\"radio\" name=\"puuttuva\" value=\"kaupasta\"> voi hakea kaupasta
  <br><input type=\"radio\" name=\"puuttuva\" value=\"alkosta\"> voi hakea my&ouml;s alkosta
  
  </form>";
}
function juoma()
{

//juoma
$nimi=$_POST["nimi"];
$kuva=$_POST["kuva"];
$kuvaus=$_POST["kuvaus"];
$koko=$_POST["koko"];
$pakkaus=$_POST["pakkaus"];
$vuosi=$_POST["vuosi"];
$mainittavaa=$_POST["mainittavaa"];
$prosentit=$_POST["prosentit"];
$kaupat=$_POST["kaupat"];
$smarketit=$_POST["smarketit"];
$alko=$_POST["alko"];
$saatavuus=$_POST["saatavuus"];
$maa=$_POST["maa"];
$laji=$_POST["laji"];
$alalaji=$_POST["alalaji"];
$perus_hinta=$_POST["perus_hinta"];
$alin_hinta=$_POST["alin_hinta"];


  echo "<table>
  <form action=\"thx_juoma.php\" method=\"post\">
  <tr><td>juoman nimi:</td> 
  <td><input type=\"text\" name=\"nimi\" value=\"".$nimi."\"></td></tr>
  
  <tr><td>hinta</td>
  <td><input type=\"text\" name=\"perus_hinta\" value=\"".$perus_hinta."\"></td></tr>
  
  <tr><td>kuva</td>
  <td><input type=\"text\" name=\"kuva\" value=\"".$kuva."\"></td></tr>

  <tr><td>prosentit</td>
  <td><input type=\"text\" name=\"prosentit\" value=\"".$prosentit."\"></td></tr>
  
  <tr><td>pakkauskoko litroissa</td>
  <td><input type=\"text\" name=\"koko\" value=\"".$koko."\"></td></tr>

  <tr><td>pakkausmateriaali</td>
  <td><input type=\"text\" name=\"pakkaus\" value=\"".$pakkaus."\"></td></tr>


  <tr><td>vuosikerta:</td>
  <td><select name=\"vuosi\" selected=\"valitse\">
  
  <option value=\"NULL\">ei merkityst&auml;</option>
  
  ";
  for($i=2009; $i>=1800; $i--)
  {
    echo "<option value=\"". $i ."\">". $i ."</option>";
  }
  echo"
  </select></td></tr>
  
  <tr><td>tyyli:</td>
  <td><select name=\"laji\" selected=\"valitse\">
  
  <option value=\"valitse\">valitse</option>
  
  <option value=\"viini\">viini</option>
  <option value=\"laji\" value=\"punaviini\">-- Punaviini</option>
  <option value=\"Valkoviini\">-- Valkoviini</option>
  <option value=\"Kuohuviini\">-- Kuohuviini</option>
  <option value=\"Roseeviini\">-- Roseeviini</option>
  <option value=\"Aromatisoituviini\">-- Aromatisoitu viini</option>
  <option value=\"Hedelmakuohuviini\">-- Hedelmäkuohuviini</option>
  <option value=\"Hedelmaviini\">-- Hedelmäviini</option>
  <option value=\"Vakevaviini\">-- Väkevä viini</option>
  <option value=\"Portviini\">-- Portviini</option>
  <option value=\"Maustettuvakevaviini\">-- Maustettu väkevä viini</option>
  <option value=\"Vakevahedelmaviini\">-- Väkevä hedelmäviini</option>
  <option value=\"shamppanja\">shamppanja</option>
  
  <option value=\"Olut\">Olut</option>
  <option value=\"tummaolut\">-- Tummaolut</option>
  <option value=\"vaaleaolut\">-- Vaaleaolut</option>
  <option value=\"alkoholironolut\">-- alkoholiton</option>
  
  
  <option value=\"Siideri\">Siideri</option>
  <option value=\"kuivasiideri\">-- Kuivasiideri</option>
  <option value=\"makeasiideri\">-- makeasiideri </option>
  <option value=\"alkoholitonsiideri\">-- alkoholiton</option>

  <option value=\"Longdrink\">Long drink</option>

  <option value=\"vodka\">vodka</option>
  <option value=\"rommi\">rommi</option>
  <option value=\"tequila\">tequila</option>
  <option value=\"absintti\">absintti</option>

  <option value=\"konjakki\">konjakki</option>
  <option value=\"brandi\">brandi</option>
  <option value=\"viski\">viski</option>
  <option value=\"Sherry\">Sherry</option>
  <option value=\"Vermut\">Vermut</option>
  
  <option value=\"Sake\">Sake</option>
  <option value=\"Glogi\">Glögi</option>
  <option value=\"Madeira\">Madeira</option>
  
  <option value=\"likoori\">lik&ouml;&ouml;ri</option>
  <option value=\"gini\">gini</option>
  <option value=\"aperatiivi\">aperatiivi</option>
  <option value=\"Katkero\">Katkero</option>
  
  <option value=\"Alkoholiton\">Alkoholiton</option>
  </select></td></tr>

  <tr><td>myyntipaikat</td>
  <tr><td></td><td><input type=\"checkbox\" name=\"kaupat\" value=\"1\">Kioskit/Kaupat</td></tr>
  <tr><td></td><td><input type=\"checkbox\" name=\"smarketit\" value=\"1\">Supermarketit/suuret kaupat</td></tr>
  <tr><td></td><td><input type=\"checkbox\" name=\"alko\" value=\"1\">Alko</td></tr>
  <tr><td>muut, mitk&auml; </td>
  <td><input type=\"text\" name=\"saatavuus\" value=\"".$saatavuus."\"></td></tr>
  
  <tr><td>kuvaus</td>
  <td><textarea name=\"kuvaus\" rows=\"4\" cols=\"50\" value=\"".$kuvaus."\"></textarea>
  </td></tr>

  <tr><td>mainittavaa</td>
  <td><textarea name=\"mainittavaa\" rows=\"4\" cols=\"50\" value=\"".$mainittavaa."\"></textarea></td>
  </td></tr>
  
  <tr><td>valmistusmaa</td>
  <td><input type=\"text\" name=\"maa\" value=\"".$maa."\"></td></tr>
  </table>";
  
  tarkistaja();
  echo"

  <br><br>
  <input type=\"submit\" value=\"Lis&auml;&auml; juoma tietokantaan\"/>
  </form>";

}
?>


 </p>

	</div>
</div>
</body>
</html>