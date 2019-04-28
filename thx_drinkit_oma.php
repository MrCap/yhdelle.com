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
<li class="avoin"><a href="drinkit.php">drinkit</a></li>
<li><a href="boolit.php">boolit</a></li>
<li><a href="juomat.php">juomat</a></li>
<!--<li class="avoin"><a href="hae.php">hae</a></li>-->
</ul>
</div>
</div>

<div id="vasen">
  <ul class="menu">
  <li><a href="hae.php?tuote=juoma">etsi drinkki</a></li> 
  <li><a href="add.php?tuote=juoma">lis&auml;&auml; drinkki</a></li>
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

//drinkki
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
 	
 	$aine1=NULL;
 	$aine2=NULL;
 	$aine3=NULL;
 	$aine4=NULL;
 	$aine5=NULL;
 	$aine6=NULL;
 	$aine7=NULL;
 	$aine8=NULL;
 	$aine9=NULL;
 	$aine10=NULL;
 	

 	$aine1=$_POST["aine1"];
 	$maara1=$_POST["maara1"];
 	$aine2=$_POST["aine2"];
 	$maara2=$_POST["maara2"];
 	$aine3=$_POST["aine3"];
 	$maara3=$_POST["maara3"];
 	$aine4=$_POST["aine4"];
 	$maara4=$_POST["maara4"];
 	$aine5=$_POST["aine5"];
 	$maara5=$_POST["maara5"];
 	$aine6=$_POST["aine6"];
 	$maara6=$_POST["maara6"];
 	$aine7=$_POST["aine7"];
 	$maara7=$_POST["maara7"];
 	$aine8=$_POST["aine8"];
 	$maara8=$_POST["maara8"];
 	$aine9=$_POST["aine9"];
 	$maara9=$_POST["maara9"];
 	$aine10=$_POST["aine10"];
 	$maara10=$_POST["maara10"];


if ($tarkistus==1)
{
 echo "
 Kiitos lis&auml;yksest&auml;. drinkki l&ouml;ytyy tietokannasta kunhan yll&auml;pito on k&auml;ynyt tiedot l&auml;pi.";
 
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
 

 //Kysely joka lisää drinkin
 $sql = 'INSERT INTO `yhdellec_baari`.`drinkki` (`drinkki_id`, `nimi`, `maku`, `lasi`, `lampotila`, `ohje`, `koriste`, `kuva`, `kuvaus`, `mainittavaa`, `aineosat`, `valmis`) VALUES (NULL, \''.$nimi.'\',\''.$maku.'\',\''.$lasi.'\', \''.$lampotila.'\', \''.$ohje.'\', \''.$koriste.'\', \''.$kuva.'\', \''.$kuvaus.'\', \''.$mainittavaa.'\', \''.$aineosat.'\',  \'0\');';
//echo $sql;
mysql_query($sql);

$juoma_id=mysql_insert_id();

if($aine1!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine1.'\', \''.$maara1.'\');';
mysql_query($sql);
}
if($aine2!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine2.'\', \''.$maara2.'\');';
mysql_query($sql);
}
if($aine3!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine3.'\', \''.$maara3.'\');';
mysql_query($sql);
}
if($aine4!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine4.'\', \''.$maara4.'\');';
mysql_query($sql);
}
if($aine5!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine5.'\', \''.$maara5.'\');';
mysql_query($sql);
}
if($aine6!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine6.'\', \''.$maara6.'\');';
mysql_query($sql);
}
if($aine7!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine7.'\', \''.$maara7.'\');';
mysql_query($sql);
}
if($aine8!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine8.'\', \''.$maara8.'\');';
mysql_query($sql);
}
if($aine9!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine9.'\', \''.$maara9.'\');';
mysql_query($sql);
}
if($aine10!=NULL)
{
$sql = 'INSERT INTO `yhdellec_baari`.`drinkki_ainekset` (`drinkki_ainekset_id`, `drinkki_id`, `juoma_id`, `juoma_nimi`, `juoma_tyyli`, `maara`) VALUES (NULL, \''.$juoma_id.'\', NULL, NULL, \''.$aine10.'\', \''.$maara10.'\');';
mysql_query($sql);
}

 
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
