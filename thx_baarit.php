<html>
<link rel="stylesheet" type="text/css" href="style.css">
<HEAD>
<Title>Baarit, drinkit ja boolit</title>

<Meta name="description" content="lista baareista, drinkeistä ja booleista">
<Meta name="keywords" content="baari, drinkki, drinkkiohje, booli, booliohje">
</head>
<body>

<div id="wrap">
<div id="otsikko">


<div id="menu">
<ul>
<li><a href="index.php">alku</a></li>
<li class="avoin"><a href="baarit.php">baarit</a></li>
<li><a href="drinkit.php">drinkit</a></li>
<li><a href="boolit.php">boolit</a></li>
<li><a href="juomat.php">juomat</a></li>
<li><a href="palaute.php">palaute</a></li>
<!--<li class="avoin"><a href="hae.php">hae</a></li>-->
</ul>
</div>
</div>

<div id="vasen">
  <ul class="menu">
  <li><a href="hae.php?tuote=baari">etsi</a></li>
  </ul>
</div>

<div id="oikea">

  <script type="text/javascript"><!--
  google_ad_client = "pub-2237669061960543";
  /* yhdelle.com 120x600, luotu 27.10.2008 */
  google_ad_slot = "7574449257";
  google_ad_width = 120;
  google_ad_height = 600;
  //-->
  </script>
  <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script>

</div>

 <div id="content">
<br>


<?php

$tarkistus=$_POST["tarkistus"];

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

//musiikki$ambient=$_POST["ambient"];$dance=$_POST["dance"];
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


if ($tarkistus==1)
{
 echo "
 Kiitos lis&auml;yksest&auml;. Baari l&ouml;ytyy tietokannasta kunhan yll&auml;pito on k&auml;ynyt tiedot l&auml;pi.";
 
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
 

 //Kysely joka lisää baarin
 

$sql = 'INSERT INTO `yhdellec_baari`.`baari` (`id`, `nimi`, `valmis`) VALUES (NULL, \''.$nimi.'\', \'0\');';
mysql_query($sql);
 
$baari_id=mysql_insert_id();

//
//aukioloajat ja iät
$sql = 'INSERT INTO `yhdellec_baari`.`aukiolo` (`baari_id`, `auki_ma`, `kiinni_ma`, `ma_on`, `ika_ma`, `auki_ti`, `kiinni_ti`, `ti_on`, `ika_ti`, `auki_ke`, `kiinni_ke`, `ke_on`, `ika_ke`, `auki_to`, `kiinni_to`, `to_on`, `ika_to`, `auki_pe`, `kiinni_pe`, `pe_on`, `ika_pe`, `auki_la`, `kiinni_la`, `la_on`, `ika_la`, `auki_su`, `kiinni_su`, `su_on`, `ika_su`) VALUES (\''.$baari_id.'\', \''.$auki_ma.'\', \''.$kiinni_ma.'\', \''.$ma_on.'\',\''.$ika_ma.'\', \''.$auki_ti.'\', \''.$kiinni_ti.'\', \''.$ti_on.'\',\''.$ika_ti.'\', \''.$auki_ke.'\', \''.$kiinni_ke.'\', \''.$ke_on.'\',\''.$ika_ke.'\', \''.$auki_to.'\', \''.$kiinni_to.'\', \''.$to_on.'\',\''.$ika_to.'\', \''.$auki_pe.'\', \''.$kiinni_pe.'\', \''.$pe_on.'\',\''.$ika_pe.'\', \''.$auki_la.'\', \''.$kiinni_la.'\', \''.$la_on.'\',\''.$ika_la.'\', \''.$auki_su.'\', \''.$kiinni_su.'\', \''.$su_on.'\',\''.$ika_su.'\');';
 mysql_query($sql);

//Baarin extrat
$sql = 'INSERT INTO `yhdellec_baari`.`extrat` (`baari_id`, `biljardi`, `darts`, `karaoke`, `sauna`, `ruoka`, `terassi`, `netti`, `liveesiintyjia`, `snooker`, `jukebox`, `wlan`, `lautapeli`) VALUES (\''.$baari_id.'\', \''.$biljardi.'\', \''.$darts.'\', \''.$karaoke.'\', \''.$sauna.'\', \''.$ruoka.'\', \''.$terassi.'\', \''.$netti.'\', \''.$liveesiintyjia.'\', \''.$snooker.'\', \''.$jukebox.'\', \''.$wlan.'\', \''.$lautapelit.'\');';
//$sql = 'INSERT INTO `yhdellec_baari`.`extrat` (`baari_id`, `biljardi`, `darts`, `karaoke`, `sauna`, `ruoka`, `terassi`, `netti`, `liveesiintyjia`, `snooker`, `jukebox`, `wlan`, `lautapeli`) VALUES (\'18\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\', \'1\');';
 mysql_query($sql);
 
//osoitetiedot
$sql = 'INSERT INTO `yhdellec_baari`.`osoitetiedot` (`baari_id`, `kaupunki`, `kaupunginosa`, `katu`, `postinumero`, `puhelin`, `nettiosoite`) VALUES (\''.$baari_id.'\', \''.$kaupunki.'\', \''.$kaupunginosa.'\', \''.$katu.'\', \''.$postinumero.'\', \''.$puhelin.'\', \''.$nettiosoite.'\');';
 mysql_query($sql);

//kuvaus, mainittavaa, tyyli, koko, hinta, asiakaskunta
$sql = 'INSERT INTO `yhdellec_baari`.`perustiedot` (`baari_id`, `kuvaus`, `mainittavaa`, `koko`, `hinta`, `asiakaskunta`) VALUES (\''.$baari_id.'\', \''.$kuvaus.'\', \''.$mainittavaa.'\', \''.$koko.'\', \''.$hinta.'\', \''.$asiakaskunta.'\');';
 mysql_query($sql);

//baarin tyyli
$sql = 'INSERT INTO `yhdellec_baari`.`tyyli` (`baari_id`, `disco`, `olutravintola`, `musiikkiklubi`, `pubi`, `tanssiravintola`, `urheilubaari`, `ruokapainoitteinen`) VALUES (\''.$baari_id.'\', \''.$disco.'\', \''.$olutravintola.'\', \''.$musiikkiklubi.'\', \''.$pubi.'\', \''.$tanssiravintola.'\', \''.$urheilubaari.'\', \''.$ruokapainoitteinen.'\');';
 mysql_query($sql);
 
 
//musiikkityyli
$sql = 'INSERT INTO `yhdellec_baari`.`musiikki` (`baari_id`, `ambient`, `dance`, `musiikki_disco`, `dmetal`, `hmetal`, `hiphop`, `humppa`, `tanssimusiikki`, `jazz`, `klassinen`, `noise`, `pop`, `punk`, `progressive`, `rap`, `reggae`, `rnb`, `rock`, `suomipop`, `techno`, `trance`) VALUES (\''.$baari_id.'\', \''.$ambient.'\',\''.$dance.'\',\''.$musiikki_disco.'\',\''.$dmetal.'\',\''.$hmetal.'\',\''.$hiphop.'\',\''.$humppa.'\',\''.$tanssimusiikki.'\',\''.$jazz.'\',\''.$klassinen.'\',\''.$noise.'\',\''.$pop.'\',\''.$punk.'\', \''.$progressive.'\', \''.$rap.'\', \''.$reggae.'\', \''.$rnb.'\', \''.$rock.'\', \''.$suomipop.'\', \''.$techno.'\', \''.$trance.'\');';
 mysql_query($sql);

 mysql_close($con);
 
}


 


else echo "valitettavasti vastasit v&auml;&auml;rin tarkistus kysymykseen, joten emme voi lis&auml;t&auml; baaria. Jos olet
ihminen etk&auml; robotti, niin voitko yst&auml;v&auml;llisesti palata takaisin ja tarkistaa vastauksesi.";

 


//tulostus

//Perustiedot

echo "<br>Baarin nimi: ";
echo $nimi;
echo "<br>Baarin kuvaus: ";
echo $kuvaus;
echo "<br>Baarista mainittavaa: ";
echo $mainittavaa;
echo "<br>Baarin kaupunki: ";
echo $kaupunki;
echo "<br>Baarin kaupunginosa: ";
echo $kaupunginosa;
echo "<br>katuosoite: ";
echo $katu;
echo "<br>postinumero ja toimipaikka: ";
echo $postinumero;
echo "<br>nettiosoite: ";
echo $nettiosoite;
echo "<br>puhelin: ";
echo $puhelin;
echo "<br>koko: ";
echo $koko;
echo "<br>asikaskunta: ";
echo $asiakaskunta;

//aukiolo
echo "<h3>Aukiolo</h3>";
echo "<Table>
		
		<tr>
  		<td>P&auml;iv&auml;</td>
  		<td>Avataan</td>
  		<td>Suljetaan</td>
  		<td>Ei avoinna</td>  
  		<td>  ik&auml;raja:</td>
		</tr>
		";
echo "<tr>";
echo "<td>Maanantai</td><td>";		
echo $auki_ma;
echo "</td>";
echo "<td>";
echo $kiinni_ma;
echo "</td>";
echo "<td>";
echo $ma_on;
echo "</td>";
echo "<td>";
echo $ika_ma;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Tiistai</td><td>";
echo $auki_ti;
echo "</td>";
echo "<td>";
echo $kiinni_ti;
echo "</td>";
echo "<td>";
echo $ti_on;
echo "</td>";
echo "<td>";
echo $ika_ti;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Keskiviikko</td><td>";
echo $auki_ke;
echo "</td>";
echo "<td>";
echo $kiinni_ke;
echo "</td>";
echo "<td>";
echo $ke_on;
echo "</td>";
echo "<td>";
echo $ika_ke;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Torstai</td><td>";
echo $auki_to;
echo "</td>";
echo "<td>";
echo $kiinni_to;
echo "</td>";
echo "<td>";
echo $to_on;
echo "</td>";
echo "<td>";
echo $ika_to;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Perjantai</td><td>";
echo $auki_pe;
echo "</td>";
echo "<td>";
echo $kiinni_pe;
echo "</td>";
echo "<td>";
echo $pe_on;
echo "</td>";
echo "<td>";
echo $ika_pe;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Lauantai</td><td>";
echo $auki_la;
echo "</td>";
echo "<td>";
echo $kiinni_la;
echo "</td>";
echo "<td>";
echo $la_on;
echo "</td>";
echo "<td>";
echo $ika_la;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Sunnuntai</td><td>";
echo $auki_su;
echo "</td>";
echo "<td>";
echo $kiinni_su;
echo "</td>";
echo "<td>";
echo $su_on;
echo "</td>";
echo "<td>";
echo $ika_su;
echo "</td>";
echo "</tr>";
echo "</table>";

//muitatietoja
echo "Tyyli: ";
echo $tyyli;
echo "<br>Hintataso: ";
echo $hinta;
echo "<h3>Muuta:</h3>";

if ($terassi!=NULL)echo $terassi;
if ($netti!=NULL)echo $netti;
if ($biljardi!=NULL) echo $biljardi;
if ($snooker!=NULL)echo $snooker;
if ($darts!=NULL)echo $darts;
if ($karaoke!=NULL)echo $karaoke;
if ($sauna!=NULL)echo $sauna;
if ($jukebox!=NULL)echo $jukebox;
if ($lautapelit!=NULL)echo $lautapelit;
if ($liveesiintyjia!=NULL)echo $liveesiintyjia;


?>
</p>

	</div>
</div>
</body>
</html>