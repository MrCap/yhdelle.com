<?php
 
 $order=NULL;
 $order=$_GET["order"];
 
 $baari=NULL;
 $baari=$_GET["baari"];
 
 $nimi=NULL;
 $nimi=$_GET["nimi"];
 
 $id=NULL;
 $id=$_GET["id"];
 
 
 $kaupunki=NULL;
 $kaupunki=$_GET["kaupunki"];
 
 $musiikki=NULL;
 $musiikki=$_GET["musiikki"];
 
 $ambient=NULL;
 $ambient=$_GET["ambient"];
 $dance=NULL;
 $dance=$_GET["dance"];

 $musiikki_disco=NULL;
 $musiikki_disco=$_GET["musiikki_disco"];

 $dmetal=NULL;
 $dmetal=$_GET["dmetal"];

 $hmetal=NULL;
 $hmetal=$_GET["hmetal"];

 $hiphop=NULL;
 $hiphop=$_GET["hiphop"];

 $humppa=NULL;
 $humppa=$_GET["humppa"];

 $tanssimusiikki=NULL;
 $tanssimusiikki=$_GET["tanssimusiikki"];

 $jazz=NULL;
 $jazz=$_GET["jazz"];

 $klassinen=NULL;
 $klassinen=$_GET["klassinen"];

 $noise=NULL;
 $noise=$_GET["noise"];

 $pop=NULL;
 $pop=$_GET["pop"];

 $punk=NULL;
 $punk=$_GET["punk"];

 $progressive=NULL;
 $progressive=$_GET["progressive"];

 $rap=NULL;
 $rap=$_GET["rap"];

 $reggae=NULL;
 $reggae=$_GET["reggae"]; 

 $rnb=NULL;
 $rnb=$_GET["rnb"];

 $rock=NULL;
 $rock=$_GET["rock"];

 $suomipop=NULL;
 $suomipop=$_GET["suomipop"];

 $techno=NULL;
 $techno=$_GET["techno"];

 $trance=NULL;
 $trance=$_GET["trance"];

 
 $ruoka=NULL;
 $ruoka=$_GET["ruoka"];
 
 $tyyli=NULL;
 $tyyli=$_GET["tyyli"];
 
 $ika=NULL;
 $ika=$_GET["ika"];
 
 $hinta=NULL;
 $hinta=$_GET["hinta"];
 
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
 $kysely = $kysely ."FROM baari, osoitetiedot, aukiolo, perustiedot, extrat, tyyli, musiikki ";
 $kysely = $kysely ."WHERE baari.valmis = 1 AND baari.id = musiikki.baari_id AND baari.id = osoitetiedot.baari_id AND baari.id = tyyli.baari_id AND baari.id = aukiolo.baari_id AND baari.id = perustiedot.baari_id AND baari.id = extrat.baari_id ";
 
//Kyselyn hakujudanssit
 if($order!=NULL)
 {
  
 }
 
 if($baari!=NULL)
 {
  
 }
 
 if($nimi!=NULL)
 {
  $kysely = $kysely ." AND baari.nimi = '".$nimi."'";
 }
 
 
 if($id!=NULL)
 {
  $kysely = $kysely ." AND baari.id = '".$id."'";
 }
 
 
 if($kaupunki!=NULL)
 {
  $kysely = $kysely ." AND osoitetiedot.kaupunki = '".$kaupunki."'";
 }
 
 
 if($musiikki!=NULL)
 {
   
 }
 if($ambient!=NULL OR $dance!=NULL OR $musiikki_disco!=NULL OR $dmetal!=NULL OR $hmetal!=NULL OR $hiphop!=NULL OR $humppa!=NULL OR $tanssimusiikki!=NULL OR $jazz!=NULL OR $klassinen!=NULL OR $noise!=NULL OR $pop!=NULL OR $punk!=NULL OR $progressive!=NULL OR $rap!=NULL OR $reggae!=NULL OR $rnb!=NULL OR $rock!=NULL OR $suomipop!=NULL OR $techno!=NULL OR $trance!=NULL)
 {
   $kysely = $kysely ." AND ( 1=0 ";
  } 
 
 if($ambient!=NULL)
 {
   $kysely = $kysely ." OR musiikki.ambient=1";
 }
 if($dance!=NULL)
 {
    $kysely = $kysely ." OR musiikki.dance=1";
 }
 if($musiikki_disco!=NULL)
 {
    $kysely = $kysely ." OR musiikki.musiikki_disco=1";
 }
 if($dmetal!=NULL)
 {
    $kysely = $kysely ." OR musiikki.dmetal=1";
 }
 if($hmetal!=NULL)
 {
    $kysely = $kysely ." OR musiikki.hmetal=1";
 }
 if($hiphop!=NULL)
 {
    $kysely = $kysely ." OR musiikki.hiphop=1";
 }
 if($humppa!=NULL)
 {
    $kysely = $kysely ." OR musiikki.humppa=1";
 }
 if($tanssimusiikki!=NULL)
 {
    $kysely = $kysely ." OR musiikki.tanssimusiikki=1";
 }
 if($jazz!=NULL)
 {
    $kysely = $kysely ." OR musiikki.jazz=1";
 }
 if($klassinen!=NULL)
 {
    $kysely = $kysely ." OR musiikki.klassinen=1";
 }
 if($noise!=NULL)
 {
    $kysely = $kysely ." OR musiikki.noise=1";
 }
 if($pop!=NULL)
 {
    $kysely = $kysely ." OR musiikki.pop=1";
 }
 if($punk!=NULL)
 {
    $kysely = $kysely ." OR musiikki.punk=1";
 }
 if($progressive!=NULL)
 {
    $kysely = $kysely ." OR musiikki.progressive=1";
 }
 if($rap!=NULL)
 {
    $kysely = $kysely ." OR musiikki.rap=1";
 }
 if($reggae!=NULL)
 {
    $kysely = $kysely ." OR musiikki.reggae=1";
 }
 if($rnb!=NULL)
 {
    $kysely = $kysely ." OR musiikki.rnb=1";
 }
 if($rock!=NULL)
 {
    $kysely = $kysely ." OR musiikki.rock=1";
 }
 if($suomipop!=NULL)
 {
    $kysely = $kysely ." OR musiikki.suomipop=1";
 }
 if($techno!=NULL)
 {
    $kysely = $kysely ." OR musiikki.techno=1";
 }
 if($trance!=NULL)
 {
    $kysely = $kysely ." OR musiikki.trance=1";
 }
 
 if($ambient!=NULL OR $dance!=NULL OR $musiikki_disco!=NULL OR $dmetal!=NULL OR $hmetal!=NULL OR $hiphop!=NULL OR $humppa!=NULL OR $tanssimusiikki!=NULL OR $jazz!=NULL OR $klassinen!=NULL OR $noise!=NULL OR $pop!=NULL OR $punk!=NULL OR $progressive!=NULL OR $rap!=NULL OR $reggae!=NULL OR $rnb!=NULL OR $rock!=NULL OR $suomipop!=NULL OR $techno!=NULL OR $trance!=NULL)
 {
   $kysely = $kysely ." )";
 }
   
 if($ruoka!=NULL)
 {
  $kysely = $kysely ." AND extrat.ruoka=1";
 }
 
 
 if($tyyli!=NULL)
 {
   if(strcmp($tyyli,"disco")==0){$kysely = $kysely ." AND tyyli.disco=1";}
   if(strcmp($tyyli,"olutravintola")==0){$kysely = $kysely ." AND tyyli.olutravintola= 1";}
   if(strcmp($tyyli,"musiikkiklubi")==0){$kysely = $kysely ." AND tyyli.musiikkiklubi= 1";} 
   if(strcmp($tyyli,"pubi")==0){$kysely = $kysely ." AND tyyli.pubi= 1";}
   if(strcmp($tyyli,"tanssiravintola")==0){$kysely = $kysely ." AND tyyli.tanssiravintola= 1";}
   if(strcmp($tyyli,"urheilubaari")==0){$kysely = $kysely ." AND tyyli.urheilubaari= 1";}
   if(strcmp($tyyli,"ruokapainoitteinen")==0){$kysely = $kysely ." AND tyyli.ruokapainoitteinen= 1";}
   if(strcmp($tyyli,"sama")==0){$kysely = $kysely ." AND 1= 1";}
   
 }
 
 
 if($ika!=NULL)
 {
 //KORJAA
  $kysely = $kysely ." AND aukiolo.ika_su <= ".$ika."";
 }
 
 
 if($hinta!=NULL)
 {
  
 }
 
 $kysely_laske = $kysely_laske . $kysely;
 $kysely_haku = $kysely_haku . $kysely;
 $baari = mysql_query($kysely_haku);
 $laskettu = mysql_query($kysely_laske);
 
 //$baari=mysql_fetch_array($apu);
 
 mysql_close($con);
 
$baari_kpl=mysql_fetch_array($laskettu);

?>




<?php


//Ei yhtään osumaa 
 if($baari_kpl[0]==0)
 {
 ?>
  <html>
<link rel="stylesheet" type="text/css" href="style.css">
<HEAD>
<Title>Baarit, y&ouml;kerhot, pubit ja ravintolat</title>

<Meta name="description" content="lista baareista, yökerhoista, pubeista ja ravintoloista">
<Meta name="keywords" content="baari, yökerho, pubi, ravintola">
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
<!--<li><a href="hae.php">hae</a></li>-->
</ul>
</div>
</div>
 
  <div id="vasen">
  <ul class="menu">
  <li><a href="hae.php?tuote=baari">etsi baari</a></li>
  <li><a href="add.php?tuote=baari">lis&auml;&auml; baari</a></li>
  <li><a href="http://www.facebook.com/pages/Yhdellecom/262260056847"><img src="kuvia/facebook_pieni.png"></a></li>
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
  
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2232338-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

<div id="content">
<br>

 
<p>
<?php
  echo "Valitettavasti hakuehdoillasi ei l&ouml;ytynyt yht&auml&auml;n baaria.";
  echo "<br><a href=\"add.php?tuote=baari\">lis&auml;&auml; baari</a>";
 }

//Löyty 1 baari, siitä tarkemmat tiedot
 else if($baari_kpl[0]==1)
 {
  $row = mysql_fetch_array($baari);
 ?> 
 
  <?php
  echo"
  <html>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
  <HEAD>
  <Title>".$row['nimi'].", ".$row['kaupunki']."</title>

  <Meta name=\"description\" content=\"".$row['nimi'].", ".$row['kaupunki']."\">
  <Meta name=\"keywords\" content=\"baari, ".$row['nimi'].", ".$row['kaupunki']."\">
  </head>
  <body>

  <div id=\"wrap\">
  <div id=\"otsikko\">

  <div id=\"menu\">
  <ul>
  <li><a href=\"index.php\">alku</a></li>
  <li class=\"avoin\"><a href=\"baarit.php\">baarit</a></li>
  <li><a href=\"drinkit.php\">drinkit</a></li>
  <li><a href=\"boolit.php\">boolit</a></li>
  <li><a href=\"juomat.php\">juomat</a></li>
  <!--<li><a href=\"hae.php\">hae</a></li>-->
  </ul>
  </div>
  </div>

  <div id=\"vasen\">
  <ul class=\"menu\">
  <li><a href=\"hae.php?tuote=baari\">etsi baari</a></li>
  <li><a href=\"add.php?tuote=baari\">lis&auml;&auml; baari</a></li>
  <li><a href=\"http://www.facebook.com/pages/Yhdellecom/262260056847\"><img SRC=\"http://www.yhdelle.com/kuvia/facebook_pieni.png\"></a></li>

  </ul>
  
  ";

 

  echo "<B>";
  echo $row['nimi'];
  echo "</b><BR>";
  echo $row['katu'];
  echo "<br>";
  echo $row['postinumero'];
  echo "<br>";
  echo $row['puhelin'];
  echo "<br>";
  echo "<a Href=\"".$row['nettiosoite']."\">www-sivut</a><br>";
  
  ?>
<!--
  <iframe width="160" height="160" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;q=torikatu+11,+oulu&amp;ie=UTF8&amp;ll=65.018391,25.472574&amp;spn=0.007232,0.027251&amp;z=14&amp;g=torikatu+11,+oulu&amp;iwloc=r0&amp;output=embed&amp;s=AARTsJokVYu4oqS5ZYT5XiFMca6wg9gAxQ"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;q=torikatu+11,+oulu&amp;ie=UTF8&amp;ll=65.018391,25.472574&amp;spn=0.007232,0.027251&amp;z=14&amp;g=torikatu+11,+oulu&amp;iwloc=r0&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
-->
  <?php

  echo "<TABLE>";
  
  echo "<TR>";
  echo "<TD>Ma</TD>";
  if ($row['ma_on']==0)echo "<TD>".date("H:i",strtotime($row['auki_ma']))." - ".date("H:i",strtotime($row['kiinni_ma']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "<TR>";
  echo "<TD>Ti</TD>";
  if ($row['ti_on']==0) echo "<TD>".date("H:i",strtotime($row['auki_ti']))." - ".date("H:i",strtotime($row['kiinni_ti']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "<TR>";
  echo "<TD>Ke</TD>";
  if ($row['ke_on']==0) echo "<TD>".date("H:i",strtotime($row['auki_ke']))." - ".date("H:i",strtotime($row['kiinni_ke']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "<TR>";
  echo "<TD>To</TD>";
  if ($row['to_on']==0) echo "<TD>".date("H:i",strtotime($row['auki_to']))." - ".date("H:i",strtotime($row['kiinni_to']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "<TR>";
  echo "<TD>Pe</TD>";
  if ($row['pe_on']==0) echo "<TD>".date("H:i",strtotime($row['auki_pe']))." - ".date("H:i",strtotime($row['kiinni_pe']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "<TR>";
  echo "<TD>La</TD>";
  if ($row['la_on']==0) echo "<TD>".date("H:i",strtotime($row['auki_la']))." - ".date("H:i",strtotime($row['kiinni_la']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "<TR>";
  echo "<TD>Su</TD>";
  if ($row['su_on']==0) echo "<TD>".date("H:i",strtotime($row['auki_su']))." - ".date("H:i",strtotime($row['kiinni_su']))."</TD>";
  else echo "<td>Kiinni</td>";
  echo "</TR>";
  
  echo "</TABLE>";
  echo "<br>koko: ";
  echo $row[koko];
  echo "<br>Hintataso: ";
  echo $row[hinta];

?>  
  
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
  
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2232338-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

<div id="content">
<br>

 
<p>
<?php
echo "<table WIDTH=75%><tr><td>";
  
  //echo "<iframe float=\"left\" width=\"350\" height=\"200\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Torikatu+11,+90100+Oulu,+Finland&amp;sll=37.0625,-95.677068&amp;sspn=31.646818,53.349609&amp;ie=UTF8&amp;ll=65.012972,25.468283&amp;spn=0.003626,0.008583&amp;z=15&amp;output=embed\"></iframe><br /><small><a href=\"http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Torikatu+11,+90100+Oulu,+Finland&amp;sll=37.0625,-95.677068&amp;sspn=31.646818,53.349609&amp;ie=UTF8&amp;ll=65.012972,25.468283&amp;spn=0.003626,0.008583&amp;z=15\" style=\"color:#0000FF;text-align:left\">View Larger Map</a></small>";
  echo $row['googlemap'];
  echo"</td><td>";
  echo "<center><H2>".$row['nimi']."";
  if ($row[disco]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_disco.jpg\" ALT=\"disco/youml;kerho\" TITLE=\"disco/y&ouml;kerho\">";
  if ($row[olutravintola]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_olutravintola.jpg\" ALT=\"olutravintola\" TITLE=\"olutravintola\">";
  if ($row[musiikkiklubi]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_musiikkiklubi.jpg\" ALT=\"musiikkiklubi\" TITLE=\"musiikkiklubi\">";
  if ($row[pubi]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_pubi.jpg\" ALT=\"pubi\" TITLE=\"pubi\">";
  if ($row[tanssiravintola]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_tanssiravintola.jpg\" ALT=\"tanssiravintola\" TITLE=\"tanssiravintola\">";
  if ($row[urheilubaari]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_urheilubaari.jpg\" ALT=\"urheilubaari\" TITLE=\"urheilubaari\">";
  if ($row[ruokapainoitteinen]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_ruokapainoitteinen.jpg\" ALT=\"ruokapainoitteinen\" TITLE=\"ruokapainoitteinen\">";
  echo "</H2>";
  echo "<H5>".$row['kaupunginosa'].", ".$row['kaupunki']."</H5></center>";
   // echo "<center><script>function fbs_click() {u=location.href;t=document.title;window.open(\'http://www.facebook.com/sharer.php?u=\'+encodeURIComponent(u)+\'&t=\'+encodeURIComponent(t),\'sharer\',\'toolbar=0,status=0,width=626,height=436\');return false;}</script><style> html .fb_share_button { display: -moz-inline-block; display:inline-block; padding:1px 20px 0 5px; height:15px; border:1px solid #d8dfea; background:url(http://static.ak.fbcdn.net/images/share/facebook_share_icon.gif?8:26981) no-repeat top right; } html .fb_share_button:hover { color:#fff; border-color:#295582; background:#3b5998 url(http://static.ak.fbcdn.net/images/share/facebook_share_icon.gif?8:26981) no-repeat top right; text-decoration:none; } </style> <a href=\"http://www.facebook.com/share.php?u=http://www.yhdelle.com/baarit.php?id=".$row[id]."\" class=\"fb_share_button\" onclick=\"return fbs_click()\" target=\"_blank\" style=\"text-decoration:none;\">Share</a></center>";
    echo "<br><center><iframe src=\"http://www.facebook.com/plugins/like.php?href=http%253A%252F%252Fwww.yhdelle.com%252Fbaarit.php%253Fid%253D". $row['baari_id']."&amp;layout=button_count&amp;show-faces=true&amp;width=100&amp;action=like&amp;font=lucida+grande&amp;colorscheme=dark\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" style=\"border:none; overflow:hidden; width:90px; height:20px;\"></iframe></center>";

echo "<br><center>Baarissa soitetaan: ";
echo "";

if($row["ambient"]==1) echo " ambienttia";;if($row["dance"]==1) echo " dancea";if($row["musiikki_disco"]==1) echo " discoa";
if($row["dmetal"]==1) echo " death metallia";
if($row["hmetal"]==1) echo " heavy metallia";
if($row["hiphop"]==1) echo " hiphoppia";
if($row["humppa"]==1) echo " humppaa";
if($row["tanssimusiikki"]==1) echo " tanssimusiikkia";
if($row["jazz"]==1) echo " jazzia";
if($row["klassinen"]==1) echo " klassista";
if($row["noise"]==1) echo " noisea";
if($row["pop"]==1) echo " poppia";
if($row["punk"]==1) echo " punkkia";
if($row["progressive"]==1) echo " progressivea";
if($row["rap"]==1) echo " rappia";
if($row["reggae"]==1) echo " reggaea";
if($row["rnb"]==1) echo " RnB:t&auml";
if($row["rock"]==1) echo " rockkia";
if($row["suomipop"]==1) echo " suomipoppia";
if($row["techno"]==1) echo " technoa";
if($row["trance"]==1) echo " trancea";

echo "</center>";
echo "<br><center>";
echo "</center><br>";
  if ($row[terassi]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_terassi.jpg\" ALT=\"terassi\" TITLE=\"terassi\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_terassi.jpg\" ALT=\"ei terassia\" TITLE=\"ei terassia\">";
  if ($row[netti]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_netti.jpg\" ALT=\"internetp&auml;&auml;te\" TITLE=\"internetp&auml;&auml;te\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_netti.jpg\" ALT=\"ei internetp&auml;&auml;tett&auml;\" TITLE=\"ei internetp&auml;&auml;tett&auml;\">";
  if ($row[wlan]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_wlan.jpg\" ALT=\"Langaton netti\" TITLE=\"Langaton netti\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_wlan.jpg\" ALT=\"ei langatonta netti&auml;\" TITLE=\"ei langatonta netti&auml;\">";
  if ($row[biljardi]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_biljardi.jpg\" ALT=\"biljardi\" TITLE=\"biljardi\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_biljardi.jpg\" ALT=\"ei biljardia\" TITLE=\"biljardia\">";
  if ($row[snooker]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_snooker.jpg\" ALT=\"snooker\" TITLE=\"snooker\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_snooker.jpg\" ALT=\"ei snookeria\" TITLE=\"ei snookeria\">";
  if ($row[darts]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_darts.jpg\" ALT=\"darts\" TITLE=\"darts\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_darts.jpg\" ALT=\"ei dartsia\" TITLE=\"ei dartsia\">";
  if ($row[karaoke]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_karaoke.jpg\" ALT=\"karaoke\" TITLE=\"karaoke\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_karaoke.jpg\" ALT=\"ei karaokea\" TITLE=\"ei karaokea\">";
  if ($row[sauna]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_sauna.jpg\" ALT=\"sauna\" TITLE=\"sauna\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_sauna.jpg\" ALT=\"ei saunaa\" TITLE=\"ei saunaa\">";
  if ($row[jukebox]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_jukebox.jpg\" ALT=\"jukebox\" TITLE=\"jukebox\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_jukebox.jpg\" ALT=\"ei jukeboxia\" TITLE=\"ei jukeboxia\">";
  if ($row[lautapelit]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_lautapeli.jpg\" ALT=\"lautapelej&auml;\" TITLE=\"lautapelej&auml;\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_lautapeli.jpg\" ALT=\"ei lautapelej&auml;\" TITLE=\"ei lautapelej&auml;\">";
  if ($row[liveesiintyjia]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_liveesiintyja.jpg\" ALT=\"live-esiintyji&auml;\" TITLE=\"live-esiintyji&auml;\">";
  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_liveesiintyja.jpg\" ALT=\"ei live-esiintyji&auml;\" TITLE=\"ei live-esiintyji&auml;\">";
//!!KORJAA!!  if ($row[ruoka]==1) echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/pieni_ruoka.jpg\" ALT=\"ruokaa/purtavaa\" TITLE=\"ruokaa/purtavaa\">";
//!!KORJAA!!  else echo "<IMG SRC=\"http://www.yhdelle.com/kuvia/ikonit/ei_pieni_ruoka.jpg\" ALT=\"ei ruokaa/purtavaa\" TITLE=\"ei ruokaa/purtavaa\">";


echo "</td></tr></table>";
  echo $row[kuvaus];
  
  if($row[mainittavaa]!=NULL) 
  {
    echo "<br>Mainittavaa: ";
    echo $row[mainittavaa];
  }
  
  if($row[asiakaskunta]!=NULL) 
  {
    echo "<br>Tyypillinen asiakas: ";
    echo $row[asiakaskunta];
  }
  
  
  kommentti($row['id']);
  kommentti_luku($row['id']);
  
 }


//Löyty useita baareja, niistä tiedot 
 else
 {
 ?> 
 <html>
<link rel="stylesheet" type="text/css" href="style.css">
<HEAD>
<Title>Baarit, y&ouml;kerhot, pubit ja ravintolat</title>

<Meta name="description" content="lista baareista, yökerhoista, pubeista ja ravintoloista">
<Meta name="keywords" content="baari, yökerho, pubi, ravintola">
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
<!--<li><a href="hae.php">hae</a></li>-->
</ul>
</div>
</div>
 
  <div id="vasen">
  <ul class="menu">
  <li><a href="hae.php?tuote=baari">etsi baari</a></li>
  <li><a href="add.php?tuote=baari">lis&auml;&auml; baari</a></li>
  <li><a href="http://www.facebook.com/pages/Yhdellecom/262260056847"><img src="kuvia/facebook_pieni.png"></a></li>  
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
  
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2232338-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

<div id="content">
<br>

 
<p>
<?php
//  echo "Haullasi l&ouml;ytyi seuraavat baarit. Tarkastele l&auml;hemmin baareja klikkaamalla baarin nime&auml;"; 
  echo "<TABLE id=\"tbl\">";
  echo "<thead>";
  echo "<TR>";
  echo "<TH>Nimi</TH>";
  echo "<TH>Kaupunki</TH>";
  echo "<TH>Auki</TH>";
  echo "</TR>";
  echo "</thead>";
  $paririvi=0;
  
  while($row = mysql_fetch_array($baari))
  {
   if($paririvi==0){echo "<TR>";$paririvi=1;}
   else if($paririvi==1){echo "<TR class=\"odd\">";$paririvi=0;}
   echo "<TD class=\"cell_baarinimi\">";
   echo "<a class=\"baarinimi\" href=\"http://www.yhdelle.com/baarit.php?id=".$row['id']."\">".$row['nimi']."</a>";
   echo "</TD>";
   echo "<TD class=\"cell_baarikaupunki\">";
   echo "<a class=\"baarikaupunki\" href=\"http://www.yhdelle.com/baarit.php?id=".$row['id']."\">".$row['kaupunki']."</a>";
   echo "</TD>";
   
   echo "<TD class=\"cell_baariauki\">";
   echo "<a class=\"baarikaupunki\" href=\"http://www.yhdelle.com/baarit.php?id=".$row['id']."\">";
   $paiva=getdate();
   if($paiva[weekday]=="Monday")
   {
    if($row['ma_on']==0)
    {
     echo date("H:i",strtotime($row['auki_ma']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_ma']));
    }
    else echo "Kiinni";
   }
   else if($paiva[weekday]=="Tuesday")
   {
      if($row['ti_on']==0)
    {
     echo date("H:i",strtotime($row['auki_ti']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_ti']));
    }
    else echo "Kiinni";
   }
   else if($paiva[weekday]=="Wednesday")
   {
    if($row['ke_on']==0)
    {
     echo date("H:i",strtotime($row['auki_ke']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_ke']));
    }
    else echo "Kiinni";   
   }
   else if($paiva[weekday]=="Thursday")
   {
    if($row['to_on']==0)
    {
     echo date("H:i",strtotime($row['auki_to']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_to']));
    }
    else echo "Kiinni";  
   }
   else if($paiva[weekday]=="Friday")
   {
    if($row['ma_pe']==0)
    {
     echo date("H:i",strtotime($row['auki_pe']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_pe']));
    }
    else echo "Kiinni";
   }
   else if($paiva[weekday]=="Saturday")
   {
    if($row['la_on']==0)
    {
     echo date("H:i",strtotime($row['auki_la']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_la']));
    }
    else echo "Kiinni";
   }
   else if($paiva[weekday]=="Sunday")
   {
    if($row['su_on']==0)
    {
     echo date("H:i",strtotime($row['auki_su']));
     echo " - ";
     echo date("H:i",strtotime($row['kiinni_su']));
    }
    else echo "Kiinni";
   }
   echo "</a>";
   echo "</TD>";
   echo "</TR>";
  }

  echo "</TABLE>";
 }
 

echo "</p>";

echo "	</div>";
echo "</div>";
echo "</body>";
echo "</html>";

function kommentti($baari_id)
{
//echo "<img src=\"http://maps.google.com/staticmap?center=65.012485,25.468380&markers=65.012485,25.468380,red&zoom=14&size=200x200&key=ABQIAAAALXOmpjFbSSzeeZ2UJ-uWLRQcSM2ZXvEB3v3omBsbj8-ofaMymxTsnz-D6laTStIXxru6Kj3qjRJCAA\">";
  echo "<br><br><h3>Kommentit</h3>";
  echo "Kirjoita kommentti/kerro jos paikan tiedoissa on vikaa. Yll&auml;pito tarkistaa ja tarvittaessa korjaa tiedot mahdollisimman nopeasti.";
  echo "<form name=\"input\" action=\"thx_kommentti.php\" method=\"post\">";
  echo "Nimimerkki:";
  echo "<input type=\"text\" name=\"nimimerkki\" />";
  echo "<br>Kommentti:<br>";
  echo "<textarea name=\"kommentti\" rows=10 cols=75 value=\"\"></TEXTAREA><br><br>";
  echo "<input TYPE=\"hidden\" VALUE=\"".$baari_id."\" NAME=\"baari_id\">";
  echo "<input TYPE=\"hidden\" VALUE=1 NAME=\"tarkistus\">";  
  echo "<center><input type=\"submit\" value=\"L&auml;het&auml;\" /></center>";
  echo "</form>";
}

function kommentti_luku($baari_id)
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
 
 $sql = 'SELECT * FROM `baari_kommentit` WHERE baari_id='.$baari_id.' AND valmis=1 LIMIT 0, 30 ';
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