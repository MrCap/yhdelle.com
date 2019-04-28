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
<li><a href="baarit.php">baarit</a></li>
<li><a href="drinkit.php">drinkit</a></li>
<li><a href="boolit.php">boolit</a></li>
<li class="avoin"><a href="juomat.php">juomat</a></li>
<li><a href="palaute.php">palaute</a></li>
<!--<li class="avoin"><a href="hae.php">hae</a></li>-->
</ul>
</div>
</div>

<div id="vasen">
  <ul class="menu">
  <li><a href="hae.php?tuote=juoma">etsi juoma</a></li> 
  <li><a href="add.php?tuote=juoma">lis&auml;&auml; juoma</a></li>
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


if ($tarkistus==1)
{
 echo "
 Kiitos lis&auml;yksest&auml;. Juoma l&ouml;ytyy tietokannasta kunhan yll&auml;pito on k&auml;ynyt tiedot l&auml;pi.";
 
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
 

 //Kysely joka lisää juoman
 $sql = 'INSERT INTO `yhdellec_baari`.`juomat` (`juoma_id`, `nimi`,`koko`,`pakkaus`,`vuosi`, `kuva`, `kuvaus`, `prosentit`, `mainittavaa`,  `kaupat`, `smarketit`, `alko`,`saatavuus`, `maa`, `laji`,`alalaji`, `perus_hinta`, `alin_hinta`, `valmis`) VALUES (NULL, \''.$nimi.'\',\''.$koko.'\',\''.$pakkaus.'\',\''.$vuosi.'\',\''.$kuva.'\',\''.$kuvaus.'\',\''.$prosentit.'\',\''.$mainittavaa.'\',\''.$kaupat.'\',\''.$smarketit.'\',\''.$alko.'\',\''.$saatavuus.'\',\''.$maa.'\',\''.$laji.'\',\''.$alalaji.'\',\''.$perus_hinta.'\', \''.$alin_hinta.'\', \'0\');';
//echo $sql;
mysql_query($sql);
 
 mysql_close($con);
 }


 


else echo "valitettavasti vastasit v&auml;&auml;rin tarkistus kysymykseen, joten emme voi lis&auml;t&auml; baaria. Jos olet
ihminen etk&auml; robotti, niin voitko yst&auml;v&auml;llisesti palata takaisin ja tarkistaa vastauksesi.";
?>
</p>

	</div>
</div>
</body>
</html>
