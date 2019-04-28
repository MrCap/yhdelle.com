<?php
 
   $order=NULL;
   $order=$_GET["order"];
 
   $drinkki=NULL;
   $drinkki=$_GET["drinkki"];
   
   $drinkki_id=NULL;
   $drinkki_id=$_GET["drinkki_id"];

   $nimi=NULL;
   $nimi=$_GET["nimi"];
   
 	$maku=NULL;
 	$maku=$_GET["maku"];
 	
 	$lasi=NULL;
 	$lasi=$_GET["lasi"];
 	
 	$lampotila=NULL;
 	$lampotila=$_GET["lampotila"];
 	
 	$ohje=NULL;
 	$ohje=$_GET["ohje"];
 	
 	$koriste=NULL;
 	$koriste=$_GET["koriste"];
 	
 	$kuva=NULL;
 	$kuva=$_GET["kuva"];
 	
 	$kuvaus=NULL;
 	$kuvaus=$_GET["kuvaus"];

 	$mainittavaa=NULL;
 	$mainittavaa=$_GET["mainittavaa"];
 	
 	$aineosat=NULL;
 	$aineosat=$_GET["aineosat"];

 	$valmis=NULL;
 	$valmis=$_GET["valmis"];
 
 
 $username="yhdellec_lukija";
 $password="JfeSJ3";
 $database="localhost";
 
 $con = mysql_connect($database,$username,$password);
 if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 } 
 
 mysql_select_db("yhdellec_baari", $con);
 
$kysely_laske = "SELECT COUNT(*) FROM ( SELECT drinkki.drinkki_id ";
  
$kysely_haku_alku = "SELECT * ";
$kysely_haku = $kysely_haku . " FROM drinkki, drinkki_ainekset ";
$kysely_haku = $kysely_haku. " WHERE drinkki.drinkki_id = drinkki_ainekset.drinkki_id ";
if($drinkki_id!=NULL)$kysely_haku = $kysely_haku . " AND drinkki.drinkki_id=".$drinkki_id." ";

$kysely_laske = $kysely_laske . $kysely_haku . " GROUP BY drinkki.drinkki_id ) AS temppi ";

$kysely_haku = $kysely_haku_alku . $kysely_haku ." GROUP BY drinkki.drinkki_id";

$drinkki = mysql_query($kysely_haku);
$laskettu = mysql_query($kysely_laske);
 
if($laskettu!=NULL)$drinkki_kpl=mysql_fetch_array($laskettu);
 
if($drinkki_kpl[0]==1)
{
  $kysely_aineet= "SELECT * FROM drinkki_ainekset WHERE drinkki_id = ".$drinkki_id."";
  $aineet=mysql_query($kysely_aineet);
}
 
echo "kysely_haku ";
echo $kysely_haku;
echo "<br>kysely_laske ";
echo $kysely_laske; 
echo "<br>Aineet: "; 
echo $kysely_aineet;
 
mysql_close($con);



?>


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
<li class="avoin"><a href="drinkit2.php">drinkit</a></li>
<li><a href="boolit.php">boolit</a></li>
<li><a href="juomat.php">juomat</a></li>
<!--<li><a href="hae.php">hae</a></li>-->
</ul>
</div>
</div>


<div id="vasen">
  <ul class="menu">
  <li><a href="hae.php?tuote=drinkki">etsi drinkki</a></li> 
  <li><a href="add.php?tuote=drinkki">lis&auml;&auml; drinkki</a></li>
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

<?php


//Ei yhtään osumaa 
 if($drinkki_kpl[0]==0)
 {
  echo "Valitettavasti hakuehdoillasi ei l&ouml;ytynyt yht&auml&auml;n drinkki&auml;.";
  echo "<br><a href=\"add.php?tuote=drinkki\">lis&auml;&auml; drinkki</a>";
 }

//Löyty 1 drinkki, siitä tarkemmat tiedot
 else if($drinkki_kpl[0]==1)
 {
  $row = mysql_fetch_array($drinkki);
  
  echo"<table><tr><td>";
  if($row['kuva']!=NULL)
  {  
    echo "<IMG SRC=\"";		 	 	 	 	 	 	 
    echo $row['kuva']; 	 	 	 	 	 
    echo "\"></td><td>";
  }
  echo "<b><center><H1>";
    
  echo $row['nimi'];
  echo"</b></h1>";
  echo "</center>";
  echo "<br></td></tr></table>";
  echo "<b>Aineet:</b> <br>";
  while($aine_rivi = mysql_fetch_array($aineet))
  {
    if ($aine_rivi['juoma_tyyli']==NULL)
    {
      echo $aine_rivi['maara'];
      echo " cl ";
      echo $aine_rivi['nimi'];
    }
    else
    {
      echo $aine_rivi['maara'];
      echo " cl ";
      echo $aine_rivi['juoma_tyyli'];
    }
    echo "<br>";
  }


  echo"<b>maku: </b>";
  echo $row['maku'];		 	 	 	 	 	 	 
  echo "<br>";
  echo"<b>lasi: </b>";
  echo $row['lasi'];		 	 	 	 	 	 	 
  echo "<br>";
  echo"<b>l&auml;mp&ouml;tila: </b>";
  echo $row['lampotila'];
  echo "<br>";
  echo"<b>teko-ohje: </b>";
  echo $row['ohje'];
  echo "<br>";
  echo"<b>koristeeksi: </b>";
  echo $row['koriste'];
  echo "<br>";

  echo "<br>";
  echo $row['kuvaus'];		 	 	 	 	 	 	 
  echo "<br>";
  echo $row['mainittavaa'];		 	 	 	 	 	 	 
    
  kommentti($row['drinkki_id']);
  kommentti_luku($row['drinkki_id']);

}

 else
 {
  echo "Haullasi l&ouml;ytyi seuraavat drinkit. Tarkastele l&auml;hemmin drinkkej&auml; klikkaamalla drinkin nime&auml;"; 
  echo "<TABLE border='1'>";
  echo "<TR>";
  echo "<TD>Nimi</TD>";
  echo "<TD>Prosentit</TD>";
  echo "<TD>laji</TD>";
  echo "<TD>maa</TD>";
  echo "</TR>";
  
  while($row = mysql_fetch_array($drinkki))
  {
   echo "<TR>";
   echo "<TD>";
   echo "<a href=\"http://www.yhdelle.com/drinkit2.php?drinkki_id=".$row['drinkki_id']."\">".$row['nimi']."</a>";
   echo "</TD>";
   echo "<TD>";
   echo "esimerkki";
   echo "</TD>";
   
   echo "</TR>";
  }

  echo "</TABLE>";

 }


function kommentti($drinkki_id)
{
  echo "<br><br><h3>Kommentit</h3>";
  echo "Kirjoita kommentti/kerro jos drinkin tiedoissa on vikaa. Yll&auml;pito tarkistaa ja tarvittaessa korjaa tiedot mahdollisimman nopeasti.";
  echo "<form name=\"input\" action=\"thx_kommentti.php\" method=\"post\">";
  echo "Nimimerkki:";
  echo "<input type=\"text\" name=\"nimimerkki\" />";
  echo "<br>Kommentti:<br>";
  echo "<textarea name=\"kommentti\" rows=10 cols=75 value=\"\"></TEXTAREA><br><br>";
  echo "<input TYPE=\"hidden\" VALUE=\"".$drinkki_id."\" NAME=\"drinkki_id\">";
  echo "<input TYPE=\"hidden\" VALUE=1 NAME=\"tarkistus\">";  
  echo "<center><input type=\"submit\" value=\"L&auml;het&auml;\" /></center>";
  echo "</form>";
}

function kommentti_luku($drinkki_id)
{
$username="yhdellec_lukija";
 $password="JfeSJ3";
 $database="localhost";
 
 $con = mysql_connect($database,$username,$password);
 if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 } 
 
 mysql_select_db("yhdellec_baari", $con);
 
 $sql = 'SELECT * FROM `kommentit_drinkki` WHERE drinkki_id='.$drinkki_id.' AND valmis=1 LIMIT 0, 30 ';
  $kommentit = mysql_query($sql);
 mysql_close($con);

  
  while($row = mysql_fetch_array($kommentit))
  {
     echo "Nimimerkki:";
     echo $row['nimimerkki'];
     echo "<br>Kommentti:<br>";
     echo $row['kommentti'];
     echo "<br><br>";
   }
}
?> 


 
	</div>
</div>
</body>
</html>