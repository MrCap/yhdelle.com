<?php
 
 $order=NULL;
 $order=$_GET["order"];
 
  $valmistaja=NULL;
 $koko=NULL; 
 $pakkaus=NULL;  
 $korkki=NULL;
 $vuosi=NULL;
 $etiketti=NULL;
 $prosentit=NULL;
 $happo=NULL;
 $sokeri=NULL;
 $kantavierre=NULL;
 $vari=NULL;
 $katkero=NULL;
 $energia=NULL;
 $saatavuus=NULL;
 $maa=NULL;
 $alaalue=NULL;
 $laji=NULL;
 $alalaji=NULL;
 $erityisryhma=NULL;
 $oluttyyppi=NULL;
 $rypale=NULL;
 $perus_hinta=NULL;
 $litrahinta=NULL;
 $juoma_id=NULL;
 
 $valmistaja = $_GET["valmistaja"];
 $koko = $_GET["koko"]; 
 $pakkaus = $_GET["pakkaus"];  
 $korkki = $_GET["korkki"];
 $vuosi = $_GET["vuosi"];
 $etiketti = $_GET["etiketti"];
 $prosentit = $_GET["prosentit"];
 $happo = $_GET["happo"];
 $sokeri = $_GET["sokeri"];
 $kantavierre = $_GET["kantavierre"];
 $vari = $_GET["vari"]; 
 $katkero = $_GET["katkero"];
 $energia = $_GET["energia"];
 $saatavuus = $_GET["saatavuus"];
 $maa = $_GET["maa"];
 $alaalue = $_GET["alaalue"];
 $laji = $_GET["laji"];
 $alalaji = $_GET["alalaji"];
 $erityisryhma = $_GET["erityisryhma"];
 $oluttyyppi = $_GET["oluttyyppi"];
 $rypale = $_GET["rypale"];
 $perus_hinta = $_GET["perus_hinta"];
 $litrahinta = $_GET["litrahinta"]; 	 	 	 
 $juoma_id=$_GET["juoma_id"];
 
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
 
 
 $kysely_haku = "SELECT * ";
 $kysely_laske = "SELECT COUNT(*) ";
 $kysely = $kysely ." FROM juomat ";
 $kysely = $kysely ." WHERE juomat.valmis != 0 ";


 
//Kyselyn hakujudanssit

if($valmistaja!= NULL)
{
  $kysely=$kysely."AND juomat.valmistaja LIKE '%".$valmistaja."%'";
 }
if($koko!= NULL)
{
  $kysely=$kysely."AND juomat.koko LIKE '%".$koko."%'";
 } 
if($pakkaus!= NULL)
{
  $kysely=$kysely."AND juomat.pakkaus LIKE '%".$pakkaus."%'";
 }  
if($korkki!= NULL)
{
  $kysely=$kysely."AND juomat.korkki LIKE '%".$korkki."%'";
 }
if($vuosi!= NULL)
{
  $kysely=$kysely."AND juomat.vuosi LIKE '%".$vuosi."%'";
 }
if($etiketti!= NULL)
{
  $kysely=$kysely."AND juomat.etiketti LIKE '%".$etiketti."%'";
 }
if($prosentit!= NULL)
{
  $kysely=$kysely."AND juomat.prosentit LIKE '%".$prosentit."%'";
 }
if($happo!= NULL)
{
  $kysely=$kysely."AND juomat.happo LIKE '%".$happo."%'";
 }
if($sokeri!= NULL)
{
  $kysely=$kysely."AND juomat.sokeri LIKE '%".$sokeri."%'";
 }
if($kantavierre!= NULL)
{
  $kysely=$kysely."AND juomat.kantavierre LIKE '%".$kantavierre."%'";
 }
if($vari!= NULL)
{
  $kysely=$kysely."AND juomat.vari LIKE '%".$vari."%'";
 }
if($katkero!= NULL)
{
  $kysely=$kysely."AND juomat.katkero LIKE '%".$katkero."%'";
 }
if($energia!= NULL)
{
  $kysely=$kysely."AND juomat.energia LIKE '%".$energia."%'";
 }
if($saatavuus!= NULL)
{
  $kysely=$kysely."AND juomat.saatavuus LIKE '%".$saatavuus."%'";
 }
if($maa!= NULL)
{
  $kysely=$kysely."AND juomat.maa LIKE '%".$maa."%'";
 }
if($alaalue!= NULL)
{
  $kysely=$kysely."AND juomat.alaalue LIKE '%".$alaalue."%'";
 }
if($laji!= NULL)
{
  $kysely=$kysely."AND juomat.laji LIKE '%".$laji."%'";
 }
if($alalaji!= NULL)
{
  $kysely=$kysely."AND juomat.alalaji LIKE '%".$alalaji."%'";
 }
if($erityisryhma!= NULL)
{
  $kysely=$kysely."AND juomat.erityisryhma LIKE '%".$erityisryhma."%'";
 }
if($oluttyyppi!= NULL)
{
  $kysely=$kysely."AND juomat.oluttyyppi LIKE '%".$oluttyyppi."%'";
 }
if($rypale!= NULL)
{
  $kysely=$kysely."AND juomat.rypale LIKE '%".$rypale."%'";
 }
if($perus_hinta!= NULL)
{
  $kysely=$kysely."AND juomat.perus_hinta LIKE '%".$perus_hinta."%'";
 }
if($litrahinta!= NULL)
{
  $kysely=$kysely."AND juomat.litrahinta LIKE '%".$litrahinta."%'";
}

 if($juoma_id!=NULL)
 {
  $kysely = $kysely ." AND juomat.juoma_id = '".$juoma_id."'";
 }
 
 
 $kysely_laske = $kysely_laske . $kysely;
 $kysely_haku = $kysely_haku . $kysely;
 
 
 
 $juoma = mysql_query($kysely_haku);
 $laskettu = mysql_query($kysely_laske);

//echo $kysely_haku;
//echo "<br>";
//echo $kysely_laske; 
//echo "<br>";
 
 //$baari=mysql_fetch_array($apu);
 
 mysql_close($con);

$juoma_kpl=mysql_fetch_array($laskettu);

?>



<?php


//Ei yhtään osumaa 
 if($juoma_kpl[0]==0)
 {
    echo"
   <html>
   <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
   <HEAD>
   <Title>Juomat</title>

   <Meta name=\"description\" content=\"lista juomista\">
   <Meta name=\"keywords\" content=\"viina, kalja, juoma, lonkku, siideri, viini\">
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
   <li class=\"avoin\"><a href=\"juomat.php\">juomat</a></li>
   <li><a href=\"palaute.php\">palaute</a></li>
   <!--<li><a href=\"hae.php\">hae</a></li>-->
   </ul>
   </div>
   </div>

   <div id=\"vasen\">
   <ul class=\"menu\">
   <li><a href=\"hae.php?tuote=juoma\">etsi juoma</a></li> 
   <li><a href=\"add.php?tuote=juoma\">lis&auml;&auml; juoma</a></li>
   <li><a href=\"http://www.facebook.com/pages/Yhdellecom/262260056847\"><img src=\"kuvia/facebook_pieni.png\"></a></li>
   </ul>
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
   
  
<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src=\'\" + gaJsHost + \"google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

   </div>

   <div id=\"content\">";

  echo "Valitettavasti hakuehdoillasi ei l&ouml;ytynyt yht&auml&auml;n juomaa.";
  echo "<br><a href=\"add.php?tuote=juoma\">lis&auml;&auml; juoma</a>";
 }

//Löyty 1 juoma, siitä tarkemmat tiedot
 else if($juoma_kpl[0]==1)
 {
   $row = mysql_fetch_array($juoma);
   echo"
   <html>
   <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
   <HEAD>
   ";
   if($row['alalaji']!=NULL)
   {
     echo"<Title>".$row['nimi']." ".$row['prosentit']."%, ".$row['alalaji']."</title>
     <Meta name=\"description\" content=\"".$row['nimi']." ".$row['prosentit']."%, ".$row['alalaji']."\">";
   }
   else
   {
     echo"<Title>".$row['nimi']." ".$row['prosentit']."%, ".$row['laji']."</title>
     <Meta name=\"description\" content=\"".$row['nimi']." ".$row['prosentit']."%, ".$row['laji']."\">";
   }
   echo"   
   <Meta name=\"keywords\" content=\"".$row['nimi'].", ".$row['prosentit']."%, ".$row['laji']."\">
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
   <li class=\"avoin\"><a href=\"juomat.php\">juomat</a></li>
   <li><a href=\"palaute.php\">palaute</a></li>
   <!--<li><a href=\"hae.php\">hae</a></li>-->
   </ul>
   </div>
   </div>

   <div id=\"vasen\">
   <ul class=\"menu\">
   <li><a href=\"hae.php?tuote=juoma\">etsi juoma</a></li> 
   <li><a href=\"add.php?tuote=juoma\">lis&auml;&auml; juoma</a></li>
   <li><a href=\"http://www.facebook.com/pages/Yhdellecom/262260056847\"><img src=\"kuvia/facebook_pieni.png\"></a></li>
   </ul>
   
   
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
   
   <script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src=\'\" + gaJsHost + \"google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

   </div>

   <div id=\"content\">";

 	 	 	
  
  
  
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
  echo $row['prosentit'];
  echo "% ";
  echo $row['laji'];	
  if($row['alalaji']!=NULL){echo " ";echo $row['alalaji'];}
  echo "<br><iframe src=\"http://www.facebook.com/plugins/like.php?href=http%253A%252F%252Fwww.yhdelle.com%252Fjuomat.php%253Fjuoma_id%253D". $row['juoma_id']."&amp;layout=button_count&amp;show-faces=true&amp;width=100&amp;action=like&amp;font=lucida+grande&amp;colorscheme=dark\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" style=\"border:none; overflow:hidden; width:90px; height:20px;\"></iframe>";

  echo "</center>";
  	 	 	 	 	 	 	 
  echo "<br></td></tr></table>";
  echo $row['kuvaus'];		 	 	 	 	 	 	 
  echo "<br>";
  echo $row['mainittavaa'];		 	 	 	 	 	 	 
  echo "<br><b>Maa:</b> ";
  echo $row['maa'];

  if($row['prosentit']<=220)
  {
    echo "<br><b>hinta:</b> ";
    echo rtrim($row['perus_hinta'], '0');		 	 	 	 	 	 	 
  }
  else
  {
    echo "<br>hinta: 1)*";
  }    
  if($row['prosentit']>220)echo "<br><br>1) Valitettavasti emme voi n&auml;ytt&auml;&auml; t&auml;t&auml; tietoa. Sill&auml; 
  Alkoholilain 33 &sect;:n 1 momentin mukaan v&auml;kev&auml;n alkoholijuoman mainonta, ep&auml;suora mainonta ja muu myynninedist&auml;mistoiminta 
  on kielletty. Sanotut s&auml;&auml;nn&ouml;ksen koskevat Suomessa asuviin henkil&ouml;ihin kohdistettua mainontaa ja muuta myynninedist&auml;mistoimintaa.";

  if($row['valmistaja']!=NULL)
{
  echo "<br><b>valmistaja:</b> ";
  echo $row['valmistaja'];
}
if($row['koko']!=NULL)
{
  echo "<br><b>koko:</b> ";
  echo rtrim($row['koko'], '0');
}
if($row['pakkaus']!=NULL)
{
  echo "<br><b>pakkaus:</b> ";
  echo $row['pakkaus'];
}
if($row['korkki']!=NULL)
{
  echo "<br><b>korkki:</b> ";
  echo $row['korkki'];
}
if($row['vuosi']!=NULL)
{
  echo "<br><b>vuosi:</b> ";
  echo $row['vuosi'];
}
if($row['etiketti']!=NULL)
{
  echo "<br><b>etiketti:</b> ";
  echo $row['etiketti'];
}
if($row['happo']!=NULL)
{
  echo "<br><b>happo:</b> ";
  echo rtrim($row['happo'], '0');
}
if($row['sokeri']!=NULL || $row['sokeri']==0)
{
  echo "<br><b>sokeri:</b> ";
  echo rtrim($row['sokeri'], '0');
}
if($row['kantavierre']!=NULL)
{
  echo "<br><b>kantavierre:</b> ";
  echo rtrim($row['kantavierre'], '0');
}
if($row['vari']!=NULL)
{
  echo "<br><b>v&auml;ri:</b> ";
  echo rtrim($row['vari'], '0');
}
if($row['katkero']!=NULL)
{
  echo "<br><b>katkero:</b> ";
  echo rtrim($row['katkero'], '0');
}
if($row['energia']!=NULL)
{
  echo "<br><b>energia:</b> ";
  echo rtrim($row['energia'], '0');
}


if($row['kaupat']!=NULL)
{
}
if($row['smarketit']!=NULL)
{
}
if($row['alko']!=NULL)
{
}
if($row['saatavuus']!=NULL)
{
}


if($row['alue']!=NULL)
{
  echo "<br><b>alue:</b> ";
  echo $row['alue'];
}
if($row['alaalue']!=NULL)
{
  echo "<br><b>tarkempi alue:</b> ";
  echo $row['ala-alue'];
}
if($row['erityisryhma']!=NULL)
{
  echo "<br><b>erityisryhm&auml;:</b> ";
  echo $row[''];
}
if($row['oluttyyppi']!=NULL)
{
  echo "<br><b>oluttyyppi:</b> ";
  echo $row['oluttyyppi'];
}
if($row['rypale']!=NULL)
{
  echo "<br><b>ryp&auml;le:</b> ";
  echo $row['rypale'];
}

if($row['alin_hinta']!=NULL)
{
}
if($row['litrahinta']!=NULL)
{
}
    
  kommentti($row['juoma_id']);
  kommentti_luku($row['juoma_id']);

}

 else
 {
    echo"
   <html>
   <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
   <HEAD>
   <Title>Juomat</title>

   <Meta name=\"description\" content=\"lista juomista\">
   <Meta name=\"keywords\" content=\"viina, kalja, juoma, lonkku, siideri, viini\">
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
   <li class=\"avoin\"><a href=\"juomat.php\">juomat</a></li>
   <li><a href=\"palaute.php\">palaute</a></li>
   <!--<li><a href=\"hae.php\">hae</a></li>-->
   </ul>
   </div>
   </div>

   <div id=\"vasen\">
   <ul class=\"menu\">
   <li><a href=\"hae.php?tuote=juoma\">etsi juoma</a></li> 
   <li><a href=\"add.php?tuote=juoma\">lis&auml;&auml; juoma</a></li>
   <li><a href=\"http://www.facebook.com/pages/Yhdellecom/262260056847\"><img src=\"kuvia/facebook_pieni.png\"></a></li>
   </ul>
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
   
   <script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src=\'\" + gaJsHost + \"google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

   </div>

   <div id=\"content\">";

//  echo "Haullasi l&ouml;ytyi seuraavat juomat. Tarkastele l&auml;hemmin juomia klikkaamalla juoman nime&auml;"; 
  echo "<TABLE id=\"tbl\">";
  echo "<thead>";
  echo "<TR>";
  echo "<TH>Nimi</TH>";
  echo "<TH>Prosentit</TH>";
  echo "<TH>laji</TH>";
  echo "<TH>alalaji</TH>";
  echo "</TR>";
  echo "</thead>";
  $paririvi=0;
  
  while($row = mysql_fetch_array($juoma))
  {
   if($paririvi==0){echo "<TR>";$paririvi=1;}
   else if($paririvi==1){echo "<TR class=\"odd\">";$paririvi=0;}
   echo "<TD class=\"cell_juomanimi\">";
   echo "<a class=\"juomanimi\" href=\"http://www.yhdelle.com/juomat.php?juoma_id=".$row['juoma_id']."\">".$row['nimi']."</a>";
   echo "</TD>";
   echo "<TD class=\"cell_juomaprosentit\">";
   echo "<a class=\"juomaprosentit\" href=\"http://www.yhdelle.com/juomat.php?juoma_id=".$row['juoma_id']."\">".$row['prosentit']."</a>";
   echo "</TD>";
   echo "<TD class=\"cell_juomalaji\">";
   echo "<a class=\"juomalaji\" href=\"http://www.yhdelle.com/juomat.php?juoma_id=".$row['juoma_id']."\">".$row['laji']."</a>";
   echo "</TD>";
   echo "<TD class=\"cell_juomaalalaji\">";
   echo "<a class=\"juomaalalaji\" href=\"http://www.yhdelle.com/juomat.php?juoma_id=".$row['juoma_id']."\">".$row['alalaji']."</a>";
   echo "</TD>";

   
   echo "</TR>";
  }

  echo "</TABLE>";

 }


function kommentti($juoma_id)
{
  echo "<br><br><h3>Kommentit</h3>";
  echo "Kirjoita kommentti/kerro jos juoman tiedoissa on vikaa. Yll&auml;pito tarkistaa ja tarvittaessa korjaa tiedot mahdollisimman nopeasti.";
  echo "<form name=\"input\" action=\"thx_kommentti.php\" method=\"post\">";
  echo "Nimimerkki:";
  echo "<input type=\"text\" name=\"nimimerkki\" />";
  echo "<br>Kommentti:<br>";
  echo "<textarea name=\"kommentti\" rows=10 cols=75 value=\"\"></TEXTAREA><br><br>";
  echo "<input TYPE=\"hidden\" VALUE=\"".$juoma_id."\" NAME=\"juoma_id\">";
  echo "<input TYPE=\"hidden\" VALUE=1 NAME=\"tarkistus\">";  
  echo "<center><input type=\"submit\" value=\"L&auml;het&auml;\" /></center>";
  echo "</form>";
}

function kommentti_luku($juoma_id)
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
 
 $sql = 'SELECT * FROM `kommentit_juoma` WHERE juoma_id='.$juoma_id.' AND valmis=1 LIMIT 0, 30 ';
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