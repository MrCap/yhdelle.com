<?php $tuote=$_GET["tuote"]; 
 
if ($tuote=="baari"){  baari();}
else if ($tuote=="booli"){ booli();}
else if ($tuote=="drinkki"){ drinkki();}
else if ($tuote=="juoma"){  juoma();}

function baari()
{

echo "<html>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<HEAD>
<Title>Baarihaku</title>

<Meta name=\"description\" content=\"baarien haku\">
<Meta name=\"keywords\" content=\"baari, haku\">
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
<li><a href=\"palaute.php\">palaute</a></li>
<!--<li class=\"avoin\"><a href=\"hae.php\">hae</a></li>-->
</ul>
</div>
</div>

<div id=\"vasen\">
  <ul class=\"menu\">
<!--  <li><a href=\"hae.php\">etsi</a></li> -->
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
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

 <div id=\"content\">
 <center><h2>Hae baaria</h2></center>
 
";

$nimi = $_POST["nimi"];
$kaupunki = $_POST["kaupunki"];
$musiikki = $_POST["musiikki"];

//musiikki
$ambient=$_POST["ambient"];$dance=$_POST["dance"];
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

$ruoka = $_POST["ruoka"];
$tyyli = $_POST["tyyli"];
$ika = $_POST["ika"];
$hinta = $_POST["hinta"];

$ika_min=$_POST["ika_min"];
$ika_max=$_POST["ika_max"];

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
 

 //Kysely joka lis&auml;&auml; juoman
$sql = "SELECT DISTINCT kaupunki FROM `osoitetiedot` ";
$city=mysql_query($sql);


  echo "<form action=\"hae_baarit.php\" method=\"post\">
  Baarin nimi: 
  <input type=\"text\" name=\"nimi\">
  
  <br>
  <br>kaupunki:
  <select name=\"kaupunki\">
  <option value=\"\" selected=\"Valitse\">valitse</option>
  ";
   while($row = mysql_fetch_array($city))
  {
    echo "<option value=\"".$row['kaupunki']."\">".$row['kaupunki']."</option>";
  }
  echo"
  </select>
  
  <br>
  <br>Baarissa soi 
  <table>
  <tr>
  <td><input type=\"checkbox\" name=\"ambient\" value=\"1\">ambient</td>
  <td><input type=\"checkbox\" name=\"dance\" value=\"1\">dance</td>
  <td><input type=\"checkbox\" name=\"musiikki_disco\" value=\"1\">disco</td>
  <td><input type=\"checkbox\" name=\"dmetal\" value=\"1\">death metal</td>
  <td><input type=\"checkbox\" name=\"hmetal\" value=\"1\">heavy metal</td>
  <td><input type=\"checkbox\" name=\"hiphop\" value=\"1\">hiphop</td>
  </tr>
  <tr>
  <td><input type=\"checkbox\" name=\"humppa\" value=\"1\">humppa</td>
  <td><input type=\"checkbox\" name=\"tanssimusiikki\" value=\"1\">tanssimusiikki</td>
  <td><input type=\"checkbox\" name=\"jazz\" value=\"1\">jazz</td>
  <td><input type=\"checkbox\" name=\"klassinen\" value=\"1\">klassinen</td>
  <td><input type=\"checkbox\" name=\"noise\" value=\"1\">noise</td>
  <td><input type=\"checkbox\" name=\"pop\" value=\"1\">pop</td>
  </tr>
  <tr>
  <td><input type=\"checkbox\" name=\"punk\" value=\"1\">punk</td>
  <td><input type=\"checkbox\" name=\"progressive\" value=\"1\">progressive</td>
  <td><input type=\"checkbox\" name=\"rap\" value=\"1\">rap</td>
  <td><input type=\"checkbox\" name=\"reggae\" value=\"1\">reggae</td>
  <td><input type=\"checkbox\" name=\"RnB\" value=\"1\">RnB</td>
  <td><input type=\"checkbox\" name=\"rock\" value=\"1\">rock</td>
  </tr>
  <tr>
  <td><input type=\"checkbox\" name=\"suomipop\" value=\"1\">suomipop</td>
  <td><input type=\"checkbox\" name=\"techno\" value=\"1\">techno</td>
  <td><input type=\"checkbox\" name=\"trance\" value=\"1\">trance</td>
  <td><input type=\"checkbox\" name=\"\" value=\"ei\">ei musiikkia</td>
  </tr>
  </table>  
  
   <br><input type=\"checkbox\" name=\"ruoka\" value=\"1\">ruokailumahdollisuus
  
  <br>
  <br>baarin tyyli:
  <br><input type=\"radio\" name=\"tyyli\" value=\"disco\">disco/y&ouml;kerho
  <br><input type=\"radio\" name=\"tyyli\" value=\"olutravintola\">olutravintola
  <br><input type=\"radio\" name=\"tyyli\" value=\"musiikkiklubi\">musiikkiklubi 
  <br><input type=\"radio\" name=\"tyyli\" value=\"pubi\">pubi/baari
  <br><input type=\"radio\" name=\"tyyli\" value=\"tanssiravintola\">tanssiravintola
  <br><input type=\"radio\" name=\"tyyli\" value=\"urheilubaari\">urheilubaari
  <br><input type=\"radio\" name=\"tyyli\" value=\"ruokapainoitteinen\">ruokapainoitteinen
  <br><input type=\"radio\" name=\"tyyli\" value=\"sama\"> Ei v&auml;li&auml;
  
  <br>
  <!--
  <br>asiakaskunnan ik&auml;:
  <br><input type=\"checkbox\" name=\"ika\" value=\"\">ei v&auml;li&auml; 
  <br><input type=\"checkbox\" name=\"ika\" value=\"alle 18\">< 18 
  <br><input type=\"checkbox\" name=\"ika\" value=\"18_20\">18 - 20
  <br><input type=\"checkbox\" name=\"ika\" value=\"20_25\">20 - 25
  <br><input type=\"checkbox\" name=\"ika\" value=\"25_30\">25 - 30
  <br><input type=\"checkbox\" name=\"ika\" value=\"30_40\">30 - 40
  <br><input type=\"checkbox\" name=\"ika\" value=\"40_50\">40 - 50
  <br><input type=\"checkbox\" name=\"ika\" value=\"50_\">50 -
  -->
  
<!--  <br>Ik&auml;raja:
  <br>v&auml;hint&auml;&auml;n
  <select name=\"ika_min\">
  <option value=\"\" selected=\"Valitse\">valitse</option>
  ";
  for($i=18;$i<101;$i++)
  {
    echo "<option value=\"".$i."\">".$i."</option>";
  }
  echo"
  </select>

  <br>enint&auml;&auml;n
  <select name=\"ika_max\">
  <option value=\"\" selected=\"Valitse\">valitse</option>
  <option value=\"ikaraton\">ik&auml;rajaton</option>

  ";
  for($i=18;$i<101;$i++)
  {
    echo "<option value=\"".$i."\">".$i."</option>";
  }
  echo"
  </select>-->


  <!--<br>
  <br>hintataso
  <br>halpa <input type=\"checkbox\" name=\"hinta\" value=\"halpa\">
  <br>keskihintainen <input type=\"checkbox\" name=\"hinta\" value=\"keskihintainen\">
  <br>kallis <input type=\"checkbox\" name=\"hinta\" value=\"kallis\">
  <br>-->
  <br><br>
<input type=\"submit\" value=\"Hae\"/>
  </form>";
}


function drinkki()
{

echo "<html>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<HEAD>
<Title>Drinkkihaku</title>

<Meta name=\"description\" content=\"Hae drinkki&auml;\">
<Meta name=\"keywords\" content=\"drinkkiohje, haku, drinkki\">
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
<li><a href=\"palaute.php\">palaute</a></li>
<!--<li class=\"avoin\"><a href=\"hae.php\">hae</a></li>-->
</ul>
</div>
</div>

<div id=\"vasen\">
  <ul class=\"menu\">
<!--  <li><a href=\"hae.php\">etsi</a></li> -->
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
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

 <div id=\"content\">
 <center><h2>Hae drinkki&auml;</h2></center>
 
";

  echo "<form action=\"hae_drinkit.php\" method=\"post\"> 
  Drinkin nimi: 
  <input type=\"text\" name=\"nimi\">
  
  		<br><h4>Hakutapa</h4>
		<input type=\"radio\" name=\"puuttuva\" value=\"ei_ole\" checked> Drinkeiss&auml; saa olla vain valittuja aineita (teen drinkkini saatavilla olevista aineista enk&auml; k&auml;y kaupassa, mit&auml; enemm&auml;n valintoja sit&auml; enemm&auml;n drinkkiohjeita)
		<br><input type=\"radio\" name=\"puuttuva\" value=\"kaupasta\"> Drinkeiss&auml; pit&auml;&auml; olla v&auml;hint&auml;&auml;n valitut aineet (mieleni tekee tietynlaista juomaa ja voin hakea puuttuvia aineita kaupasta, mit&auml; enemm&auml;n valintoja, sit&auml; v&auml;hemm&auml;n drinkkiohjeita)
<!--	<br><input type=\"radio\" name=\"puuttuva\" value=\"alkosta\"> voin hakea my&ouml;s alkosta-->

  
  		<h3>Valitse aineet</h3>
		<h4>Viinat</h4>
		<input type=\"checkbox\" name=\"Absolut Kurant\" value=\"1\">Absolut Kurant
		<br><input type=\"checkbox\" name=\"amerikkalainen viski\" value=\"1\">amerikkalainen viski
		<br><input type=\"checkbox\" name=\"Angostuuraa\" value=\"1\">Angostuuraa
		<br><input type=\"checkbox\" name=\"Apricot Brandy Bols\" value=\"1\">Apricot Brandy Bols
		<br><input type=\"checkbox\" name=\"Apricot Brandy\" value=\"1\">Apricot Brandy
		<br><input type=\"checkbox\" name=\"Baileys Irish Cream\" value=\"1\">Baileys Irish Cream
		<br><input type=\"checkbox\" name=\"Bon Bacardi Superior\" value=\"1\">Bon Bacardi Superior
		<br><input type=\"checkbox\" name=\"bourbon viski\" value=\"1\">bourbon viski
		<br><input type=\"checkbox\" name=\"brandy\" value=\"1\">brandy
		<br><input type=\"checkbox\" name=\"Calvados Boulard\" value=\"1\">Calvados Boulard
		<br><input type=\"checkbox\" name=\"Campari\" value=\"1\">Campari
		<br><input type=\"checkbox\" name=\"Camparia\" value=\"1\">Camparia
		<br><input type=\"checkbox\" name=\"cherry brandy\" value=\"1\">cherry brandy
		<br><input type=\"checkbox\" name=\"Cointreau\" value=\"1\">Cointreau
		<br><input type=\"checkbox\" name=\"Drambuie\" value=\"1\">Drambuie
		<br><input type=\"checkbox\" name=\"Dry Anis\" value=\"1\">Dry Anis
		<br><input type=\"checkbox\" name=\"Dry Gin\" value=\"1\">Dry Gin
		<br><input type=\"checkbox\" name=\"Dry vermouth Cinzano\" value=\"1\">Dry vermouth Cinzano
		<br><input type=\"checkbox\" name=\"Finlandia Vodka\" value=\"1\">Finlandia Vodka
		<br><input type=\"checkbox\" name=\"Four Roses Bourbon\" value=\"1\">Four Roses Bourbon
		<br><input type=\"checkbox\" name=\"Gin\" value=\"1\">Gin
		<br><input type=\"checkbox\" name=\"konjakki\" value=\"1\">konjakki
		<br><input type=\"checkbox\" name=\"Martini Bianco\" value=\"1\">Martini Bianco
		<br><input type=\"checkbox\" name=\"Martini Extra Dry\" value=\"1\">Martini Extra Dry
		<br><input type=\"checkbox\" name=\"Martini Rosso Vermouth\" value=\"1\">Martini Rosso Vermouth
		<br><input type=\"checkbox\" name=\"Pernod\" value=\"1\">Pernod
		<br><input type=\"checkbox\" name=\"rommi\" value=\"1\">rommi
		<br><input type=\"checkbox\" name=\"Ron Bacardi Superior\" value=\"1\">Ron Bacardi Superior
		<br><input type=\"checkbox\" name=\"sherry\" value=\"1\">sherry
		<br><input type=\"checkbox\" name=\"Silver Rum\" value=\"1\">Silver Rum
		<br><input type=\"checkbox\" name=\"Subrowka\" value=\"1\">Vodka
		<br><input type=\"checkbox\" name=\"Tequila\" value=\"1\">Tequila
		<br><input type=\"checkbox\" name=\"vaalea rommi\" value=\"1\">vaalea rommi
		<br><input type=\"checkbox\" name=\"valkoinen rommi\" value=\"1\">valkoinen rommi
		<br><input type=\"checkbox\" name=\"vermouth rosso\" value=\"1\">vermouth rosso
		<br><input type=\"checkbox\" name=\"vermouth secco\" value=\"1\">vermouth secco
		<br><input type=\"checkbox\" name=\"viski\" value=\"1\">viski
		<br><input type=\"checkbox\" name=\"vodka\" value=\"1\">vodka




		<h4>Lik&ouml;&ouml;rit</h4>
		<input type=\"checkbox\" name=\"Advocaat\" value=\"1\">Advocaat
		<br><input type=\"checkbox\" name=\"Anisete Bols\" value=\"1\">anislik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"aprikoosilik&ouml;&ouml;ri\" value=\"1\">aprikoosilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"banaanilik&ouml;&ouml;ri\" value=\"1\">banaanilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"benedictine&auml;\" value=\"1\">benedictine&auml;
		<br><input type=\"checkbox\" name=\"Blue Curacao\" value=\"1\">Blue Curacao
		<br><input type=\"checkbox\" name=\"Bols Banana\" value=\"1\">banaanilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Brown Creme de Cacao\" value=\"1\">Brown Creme de Cacao
		<br><input type=\"checkbox\" name=\"creme de bananes\" value=\"1\">creme de bananes
		<br><input type=\"checkbox\" name=\"Creme de Cassis\" value=\"1\">Creme de Cassis
		<br><input type=\"checkbox\" name=\"Creme de Menthe\" value=\"1\">Creme de Menthe
		<br><input type=\"checkbox\" name=\"Di Saronno Amaretto\" value=\"1\">Di Saronno Amaretto
		<br><input type=\"checkbox\" name=\"Drambuie-lik&ouml;&ouml;ri\" value=\"1\">Drambuie-lik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Galliano\" value=\"1\">Galliano
		<br><input type=\"checkbox\" name=\"Grand Marnier\" value=\"1\">Grand Marnier
		<br><input type=\"checkbox\" name=\"green curacao\" value=\"1\">green curacao
		<br><input type=\"checkbox\" name=\"kaakaolik&ouml;&ouml;ri\" value=\"1\">kaakaolik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Kahlua\" value=\"1\">Kahlua
		<br><input type=\"checkbox\" name=\"kahvilik&ouml;&ouml;ri\" value=\"1\">kahvilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Kirsberry-kirsikkalik&ouml;&ouml;ri \" value=\"1\">Kirsberry-kirsikkalik&ouml;&ouml;ri 
		<br><input type=\"checkbox\" name=\"kirsikkalik&ouml;&ouml;ri\" value=\"1\">kirsikkalik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Lakkalik&ouml;&ouml;ri\" value=\"1\">Lakkalik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Mandarine Napoleon\" value=\"1\">Mandarine Napoleon
		<br><input type=\"checkbox\" name=\"Midori\" value=\"1\">Midori melonilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"minttulik&ouml;&ouml;ri\" value=\"1\">minttulik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Monopole\" value=\"1\">Monopole
		<br><input type=\"checkbox\" name=\"Parfait Amour-lik&ouml;&ouml;ri\" value=\"1\">Parfait Amour-lik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Pisang Ambon\" value=\"1\">Pisang Ambon
		<br><input type=\"checkbox\" name=\"Polar cranberry liquer Chymos\" value=\"1\">Polar cranberry liquer Chymos
		<br><input type=\"checkbox\" name=\"Polar-lik&ouml;&ouml;ri\" value=\"1\">Polar-lik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"puolukkalik&ouml;&ouml;ri\" value=\"1\">puolukkalik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"sininen Curacao-lik&ouml;&ouml;ri\" value=\"1\">sininen Curacao-lik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Southern Comfort\" value=\"1\">Southern Comfort
		<br><input type=\"checkbox\" name=\"Tia Maria\" value=\"1\">Tia Maria kahvilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Triple Sec\" value=\"1\">Triple Sec
		<br><input type=\"checkbox\" name=\"valkoinen kaakaolik&ouml;&ouml;ri\" value=\"1\">valkoinen kaakaolik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"White Cacao\" value=\"1\">White Cacao


		<h4>Viinit</h4>
		<input type=\"checkbox\" name=\"Offley white port\" value=\"1\">Offley white port
		<br><input type=\"checkbox\" name=\"White Port\" value=\"1\">White Port

		<h4>Lantringit</h4>
		<input type=\"checkbox\" name=\"ananasmehu\" value=\"1\">ananasmehu
		<br><input type=\"checkbox\" name=\"appelsiinimehu\" value=\"1\">appelsiinimehu
		<br><input type=\"checkbox\" name=\"cola\" value=\"1\">cola
		<br><input type=\"checkbox\" name=\"ginger ale\" value=\"1\">ginger ale
		<br><input type=\"checkbox\" name=\"gomme syrup\" value=\"1\">gomme syrup
		<br><input type=\"checkbox\" name=\"grape- tai sitruunamehu\" value=\"1\">grapemehu
		<br><input type=\"checkbox\" name=\"grenadiini\" value=\"1\">grenadiini
		<br><input type=\"checkbox\" name=\"kahvi\" value=\"1\">kahvi
		<br><input type=\"checkbox\" name=\"kananmuna\" value=\"1\">kananmuna
		<br><input type=\"checkbox\" name=\"kerma\" value=\"1\">kerma
		<br><input type=\"checkbox\" name=\"kermavaahto\" value=\"1\">kermavaahto
		<br><input type=\"checkbox\" name=\"kookosmaito\" value=\"1\">kookosmaito
		<br><input type=\"checkbox\" name=\"lime-mehu\" value=\"1\">lime-mehu
		<br><input type=\"checkbox\" name=\"maito\" value=\"1\">maito
		<br><input type=\"checkbox\" name=\"maitokaakao\" value=\"1\">maitokaakao
		<br><input type=\"checkbox\" name=\"mansikkasiirappi\" value=\"1\">mansikkasiirappi
		<br><input type=\"checkbox\" name=\"omenamehu\" value=\"1\">omenamehu
		<br><input type=\"checkbox\" name=\"sitruunamehu\" value=\"1\">sitruunamehu
		<br><input type=\"checkbox\" name=\"soodavesi\" value=\"1\">soodavesi
		<br><input type=\"checkbox\" name=\"Tabasco\" value=\"1\">Tabasco
		<br><input type=\"checkbox\" name=\"tomaattimehu\" value=\"1\">tomaattimehu


		<h4>muut aineet</h4>
		<input type=\"checkbox\" name=\"fariinisokeria\" value=\"1\">fariinisokeria
		<br><input type=\"checkbox\" name=\"j&auml;&auml;murska\" value=\"1\">j&auml;&auml;murska
		<br><input type=\"checkbox\" name=\"j&auml;&auml;tel&ouml;\" value=\"1\">j&auml;&auml;tel&ouml;
		<br><input type=\"checkbox\" name=\"lakka\" value=\"1\">lakka
		<br><input type=\"checkbox\" name=\"punainen grenadiini\" value=\"1\">punainen grenadiini
		<br><input type=\"checkbox\" name=\"sokeriliemi\" value=\"1\">sokeriliemi
		<br><input type=\"checkbox\" name=\"sokeripala\" value=\"1\">sokeripala
		<br><input type=\"checkbox\" name=\"tomusokeria\" value=\"1\">tomusokeria


		<h4>muut juomat</h4>
		<input type=\"checkbox\" name=\"olut\" value=\"1\">olut
		<br><input type=\"checkbox\" name=\"Swedish Punsch\" value=\"1\">Swedish Punsch
		

	<br><input type=\"submit\" value=\"Hae\"/>
	</form>";
}


function booli()
{
echo "<html>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<HEAD>
<Title>Boolihaku</title>

<Meta name=\"description\" content=\"etsi booliohjetta\">
<Meta name=\"keywords\" content=\"haku, booli, booliohje\">
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
<li><a href=\"palaute.php\">palaute</a></li>
<!--<li class=\"avoin\"><a href=\"hae.php\">hae</a></li>-->
</ul>
</div>
</div>

<div id=\"vasen\">
  <ul class=\"menu\">
<!--  <li><a href=\"hae.php\">etsi</a></li> -->
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
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

 <div id=\"content\">
 <center><h2>Hae booliohjetta</h2></center>
 
";

    echo "<form action=\"hae_boolit.php\" method=\"post\">
  Boolin nimi: 
  <input type=\"text\" name=\"nimi\">
  
  		<br><h4>Hakutapa</h4>
		<input type=\"radio\" name=\"puuttuva\" value=\"ei_ole\" checked> Boolissa saa olla vain valittuja aineita (teen drinkkini saatavilla olevista aineista enk&auml; k&auml;y kaupassa, mit&auml; enemm&auml;n valintoja sit&auml; enemm&auml;n drinkkiohjeita)
		<br><input type=\"radio\" name=\"puuttuva\" value=\"kaupasta\"> Boolissa pit&auml;&auml; olla v&auml;hint&auml;&auml;n valitut aineet (mieleni tekee tietynlaista juomaa ja voin hakea puuttuvia aineita kaupasta, mit&auml; enemm&auml;n valintoja, sit&auml; v&auml;hemm&auml;n drinkkiohjeita)
<!--	<br><input type=\"radio\" name=\"puuttuva\" value=\"alkosta\"> voin hakea my&ouml;s alkosta-->

  
  		<h3>Valitse aineet</h3>

		<h4>Viinat</h4>
		<input type=\"checkbox\" name=\"absintti\" value=\"1\">absintti
		<br><input type=\"checkbox\" name=\"appelsiinivodka\" value=\"1\">appelsiinivodka
		<br><input type=\"checkbox\" name=\"aprikoosibrandy\" value=\"1\">aprikoosibrandy
		<br><input type=\"checkbox\" name=\"bourbon\" value=\"1\">bourbon
		<br><input type=\"checkbox\" name=\"brandy\" value=\"1\">brandy
		<br><input type=\"checkbox\" name=\"gini\" value=\"1\">gini
		<br><input type=\"checkbox\" name=\"J&auml;germeister\" value=\"1\">J&auml;germeister
		<br><input type=\"checkbox\" name=\"kirsikkabrandy\" value=\"1\">kirsikkabrandy
		<br><input type=\"checkbox\" name=\"kirsikkasnapsi\" value=\"1\">kirsikkasnapsi
		<br><input type=\"checkbox\" name=\"kookosrommi\" value=\"1\">kookosrommi
		<br><input type=\"checkbox\" name=\"omenasnapsi\" value=\"1\">omenasnapsi
		<br><input type=\"checkbox\" name=\"omenavodka\" value=\"1\">omenavodka
		<br><input type=\"checkbox\" name=\"passiohedelm&auml;rommi\" value=\"1\">passiohedelm&auml;rommi
		<br><input type=\"checkbox\" name=\"persikkasnapsi\" value=\"1\">persikkasnapsi
		<br><input type=\"checkbox\" name=\"piparminttusnapsi\" value=\"1\">piparminttusnapsi
		<br><input type=\"checkbox\" name=\"rommi\" value=\"1\">rommi
		<br><input type=\"checkbox\" name=\"sininen snapsi\" value=\"1\">sininen snapsi
		<br><input type=\"checkbox\" name=\"sitrusrommi\" value=\"1\">sitrusrommi
		<br><input type=\"checkbox\" name=\"sitrusvodka\" value=\"1\">sitrusvodka
		<br><input type=\"checkbox\" name=\"sitruunavodka\" value=\"1\">sitruunavodka
		<br><input type=\"checkbox\" name=\"tequila\" value=\"1\">tequila
		<br><input type=\"checkbox\" name=\"vadelmavodka\" value=\"1\">vadelmavodka
		<br><input type=\"checkbox\" name=\"viski\" value=\"1\">viski
		<br><input type=\"checkbox\" name=\"vodka\" value=\"1\">vodka
		<br><input type=\"checkbox\" name=\"vaniljavodka\" value=\"1\">vaniljavodka

		<h4>lik&ouml;&ouml;rit</h4>
		<input type=\"checkbox\" name=\"appelsiinilik&ouml;&ouml;ri\" value=\"1\">appelsiinilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"banaanilik&ouml;&ouml;ri\" value=\"1\">banaanilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Blue Curacao lik&ouml;&ouml;ri\" value=\"1\">Blue Curacao lik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"Grand Marnier\" value=\"1\">Grand Marnier
		<br><input type=\"checkbox\" name=\"Irish Cream\" value=\"1\">Irish Cream
		<br><input type=\"checkbox\" name=\"kaakaolik&ouml;&ouml;ri\" value=\"1\">kaakaolik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"kahvilik&ouml;&ouml;ri\" value=\"1\">kahvilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"kirsikkalik&ouml;&ouml;ri\" value=\"1\">kirsikkalik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"mantelilik&ouml;&ouml;ri\" value=\"1\">mantelilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"melonilik&ouml;&ouml;ri\" value=\"1\">melonilik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"mustaherukkalik&ouml;&ouml;ri\" value=\"1\">mustaherukkalik&ouml;&ouml;ri
		<br><input type=\"checkbox\" name=\"persikkalik&ouml;&ouml;ri\" value=\"1\">persikkalik&ouml;&ouml;ri


		<h4>lantringit</h4>
		<br><input type=\"checkbox\" name=\"ananasmehu\" value=\"1\">ananasmehu
		<br><input type=\"checkbox\" name=\"appelsiinilimsa\" value=\"1\">appelsiinilimsa
		<br><input type=\"checkbox\" name=\"appelsiinimehu\" value=\"1\">appelsiinimehu
		<br><input type=\"checkbox\" name=\"Cola\" value=\"1\">Cola
		<br><input type=\"checkbox\" name=\"energiajuoma\" value=\"1\">energiajuoma
		<br><input type=\"checkbox\" name=\"greippimehu\" value=\"1\">greippimehu
		<br><input type=\"checkbox\" name=\"greippisooda\" value=\"1\">greippisooda
		<br><input type=\"checkbox\" name=\"grenadiinisiirappi\" value=\"1\">grenadiinisiirappi
		<br><input type=\"checkbox\" name=\"guavamehu\" value=\"1\">guavamehu
		<br><input type=\"checkbox\" name=\"hedelm&auml;booli\" value=\"1\">hedelm&auml;booli
		<br><input type=\"checkbox\" name=\"hedelm&auml;mehu\" value=\"1\">hedelm&auml;mehu
		<br><input type=\"checkbox\" name=\"kahvia\" value=\"1\">kahvia
		<br><input type=\"checkbox\" name=\"Karpalo-omenamehu\" value=\"1\">Karpalo-omenamehu
		<br><input type=\"checkbox\" name=\"karpalolimonadi\" value=\"1\">karpalolimonadi
		<br><input type=\"checkbox\" name=\"karpalomehu\" value=\"1\">karpalomehu
		<br><input type=\"checkbox\" name=\"kirsikkamehu\" value=\"1\">kirsikkamehu
		<br><input type=\"checkbox\" name=\"limelimonadi\" value=\"1\">limelimonadi
		<br><input type=\"checkbox\" name=\"limemehu\" value=\"1\">limemehu
		<br><input type=\"checkbox\" name=\"limemehutiiviste\" value=\"1\">limemehutiiviste
		<br><input type=\"checkbox\" name=\"limetti\" value=\"1\">limetti
		<br><input type=\"checkbox\" name=\"limonadi\" value=\"1\">limonadi
		<br><input type=\"checkbox\" name=\"maito\" value=\"1\">maito
		<br><input type=\"checkbox\" name=\"Mangomehu\" value=\"1\">Mangomehu
		<br><input type=\"checkbox\" name=\"Mangomesi\" value=\"1\">Mangomesi
		<br><input type=\"checkbox\" name=\"mansikkamehu\" value=\"1\">mansikkamehu
		<br><input type=\"checkbox\" name=\"omenamehu\" value=\"1\">omenamehu
		<br><input type=\"checkbox\" name=\"persikkamehu\" value=\"1\">persikkamehu
		<br><input type=\"checkbox\" name=\"Pina Colada\" value=\"1\">Pina Colada
		<br><input type=\"checkbox\" name=\"porevesi\" value=\"1\">porevesi
		<br><input type=\"checkbox\" name=\"sitruslimonadi\" value=\"1\">sitruslimonadi
		<br><input type=\"checkbox\" name=\"sitruuna-limemix\" value=\"1\">sitruuna-limemix
		<br><input type=\"checkbox\" name=\"sitruunamehu\" value=\"1\">sitruunamehu
		<br><input type=\"checkbox\" name=\"sitruunamehutiiviste\" value=\"1\">sitruunamehutiiviste
		<br><input type=\"checkbox\" name=\"sokeriliemi\" value=\"1\">sokeriliemi
		<br><input type=\"checkbox\" name=\"soodavesi\" value=\"1\">soodavesi
		<br><input type=\"checkbox\" name=\"sprite\" value=\"1\">sprite
		<br><input type=\"checkbox\" name=\"tonic-vett&auml;\" value=\"1\">tonic-vett&auml;
		<br><input type=\"checkbox\" name=\"vaaleanpunainen limonadi\" value=\"1\">vaaleanpunainen limonadi
		<br><input type=\"checkbox\" name=\"vadelmalimonadi\" value=\"1\">vadelmalimonadi
		<br><input type=\"checkbox\" name=\"vett&auml;\" value=\"1\">vett&auml;
		<br><input type=\"checkbox\" name=\"viiniryp&auml;lemehu\" value=\"1\">viiniryp&auml;lemehu

		<h4>muut</h4>
		<br><input type=\"checkbox\" name=\"cantaloupe-meloni\" value=\"1\">cantaloupe-meloni
		<br><input type=\"checkbox\" name=\"ananas\" value=\"1\">ananas
		<br><input type=\"checkbox\" name=\"banaani\" value=\"1\">banaani
		<br><input type=\"checkbox\" name=\"Elintarvikev&auml;ri\" value=\"1\">Elintarvikev&auml;ri
		<br><input type=\"checkbox\" name=\"fariinisokeri\" value=\"1\">fariinisokeri
		<br><input type=\"checkbox\" name=\"hedelm&auml;\" value=\"1\">hedelm&auml;
		<br><input type=\"checkbox\" name=\"hedelm&auml;cocktail\" value=\"1\">hedelm&auml;cocktail
		<br><input type=\"checkbox\" name=\"j&auml;&auml;\" value=\"1\">j&auml;&auml;
		<br><input type=\"checkbox\" name=\"j&auml;&auml;kuutioita\" value=\"1\">j&auml;&auml;kuutioita
		<br><input type=\"checkbox\" name=\"kanelitanko\" value=\"1\">kanelitanko
		<br><input type=\"checkbox\" name=\"limekuorta\" value=\"1\">limekuorta
		<br><input type=\"checkbox\" name=\"mansikka\" value=\"1\">mansikka
		<br><input type=\"checkbox\" name=\"minttukarkki\" value=\"1\">minttukarkki
		<br><input type=\"checkbox\" name=\"muskotti\" value=\"1\">muskotti
		<br><input type=\"checkbox\" name=\"mustaherukkasiirappi\" value=\"1\">mustaherukkasiirappi
		<br><input type=\"checkbox\" name=\"omena\" value=\"1\">omena
		<br><input type=\"checkbox\" name=\"sokeri\" value=\"1\">sokeri
		<br><input type=\"checkbox\" name=\"suklaaj&auml;&auml;tel&ouml;&auml;\" value=\"1\">suklaaj&auml;&auml;tel&ouml;&auml;
		<br><input type=\"checkbox\" name=\"vaniljaj&auml;&auml;tel&ouml;&auml;\" value=\"1\">vaniljaj&auml;&auml;tel&ouml;&auml;
		<br><input type=\"checkbox\" name=\"viiniryp&auml;le\" value=\"1\">viiniryp&auml;le

		<h4>muut juomat</h4>
		<br><input type=\"checkbox\" name=\"Coecoei\" value=\"1\">Coecoei
		<br><input type=\"checkbox\" name=\"everclear\" value=\"1\">everclear
		<br><input type=\"checkbox\" name=\"Ginger Ale\" value=\"1\">Ginger Ale
		<br><input type=\"checkbox\" name=\"Hawaiin Punssi\" value=\"1\">Hawaiin Punssi
		<br><input type=\"checkbox\" name=\"Kool-Aid\" value=\"1\">Kool-Aid
		<br><input type=\"checkbox\" name=\"kuohuviini\" value=\"1\">kuohuviini
		<br><input type=\"checkbox\" name=\"lager\" value=\"1\">lager
		<br><input type=\"checkbox\" name=\"limeade\" value=\"1\">limeade
		<br><input type=\"checkbox\" name=\"munatoti\" value=\"1\">munatoti
		<br><input type=\"checkbox\" name=\"olut\" value=\"1\">olut
		<br><input type=\"checkbox\" name=\"omenasiideri\" value=\"1\">omenasiideri
		<br><input type=\"checkbox\" name=\"punaviini\" value=\"1\">punaviini
		<br><input type=\"checkbox\" name=\"rainbowsorbetti\" value=\"1\">rainbowsorbetti
		<br><input type=\"checkbox\" name=\"Roseviini\" value=\"1\">Roseviini
		<br><input type=\"checkbox\" name=\"Shampanja\" value=\"1\">Shampanja
		<br><input type=\"checkbox\" name=\"sorbetti\" value=\"1\">sorbetti
		<br><input type=\"checkbox\" name=\"sweet and sour mix\" value=\"1\">sweet and sour mix
		<br><input type=\"checkbox\" name=\"triplesec\" value=\"1\">triplesec
		<br><input type=\"checkbox\" name=\"trooppinen punssisekoitus\" value=\"1\">trooppinen punssisekoitus
		<br><input type=\"checkbox\" name=\"valkoviini\" value=\"1\">valkoviini
	<br><input type=\"submit\" value=\"Hae\"/>
		</form>";


}
function juoma()
{
  echo "<html>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<HEAD>
<Title>Juomahaku</title>

<Meta name=\"description\" content=\"etsi juomaa\">
<Meta name=\"keywords\" content=\"haku, juoma\">
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
<li><a href=\"palaute.php\">palaute</a></li>
<!--<li class=\"avoin\"><a href=\"hae.php\">hae</a></li>-->
</ul>
</div>
</div>

<div id=\"vasen\">
  <ul class=\"menu\">
<!--  <li><a href=\"hae.php\">etsi</a></li> -->
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
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-2232338-2\");
pageTracker._trackPageview();
} catch(err) {}</script>

</div>

 <div id=\"content\">
 <center><h2>Hae juomaa</h2></center>
 
";

$username="yhdellec_lukija";
 $password="JfeSJ3";
 $database="localhost";
 
 $con = mysql_connect($database,$username,$password);
 if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 } 
 
 mysql_select_db("yhdellec_baari", $con);
 
 $valmistaja = mysql_query("SELECT DISTINCT `valmistaja` FROM juomat ORDER BY `valmistaja`");
 $koko = mysql_query("SELECT DISTINCT `koko` FROM juomat ORDER BY `koko`");
 $pakkaus = mysql_query("SELECT DISTINCT `pakkaus` FROM juomat ORDER BY `pakkaus`");
 $korkki = mysql_query("SELECT DISTINCT `korkki` FROM juomat ORDER BY `korkki`");
 $vuosi = mysql_query("SELECT DISTINCT `vuosi` FROM juomat ORDER BY `vuosi`");
 $etiketti = mysql_query("SELECT DISTINCT `etiketti` FROM juomat ORDER BY `etiketti`");
 $prosentit = mysql_query("SELECT DISTINCT `prosentit` FROM juomat ORDER BY `prosentit`");
 $happo = mysql_query("SELECT DISTINCT `happo` FROM juomat ORDER BY `happo`");
 $sokeri = mysql_query("SELECT DISTINCT `sokeri` FROM juomat ORDER BY `sokeri`");
 $kantavierre = mysql_query("SELECT DISTINCT `kantavierre` FROM juomat ORDER BY `kantavierre`");
 $vari = mysql_query("SELECT DISTINCT `vari` FROM juomat ORDER BY `vari`");
 $katkero = mysql_query("SELECT DISTINCT `katkero` FROM juomat ORDER BY `katkero`");
 $energia = mysql_query("SELECT DISTINCT `energia` FROM juomat ORDER BY `energia`");
 $saatavuus = mysql_query("SELECT DISTINCT `saatavuus` FROM juomat ORDER BY `saatavuus`");
 $maa = mysql_query("SELECT DISTINCT `maa` FROM juomat ORDER BY `maa`");
 $alaalue = mysql_query("SELECT DISTINCT `alaalue` FROM juomat ORDER BY `alaalue`");
 $laji = mysql_query("SELECT DISTINCT `laji` FROM juomat ORDER BY `laji`");
 $alalaji = mysql_query("SELECT DISTINCT `alalaji` FROM juomat ORDER BY `alalaji`");
 $erityisryhma = mysql_query("SELECT DISTINCT `erityisryhma` FROM juomat ORDER BY `erityisryhma`");
 $oluttyyppi = mysql_query("SELECT DISTINCT `oluttyyppi` FROM juomat ORDER BY `oluttyyppi`");
 $rypale = mysql_query("SELECT DISTINCT `rypale` FROM juomat ORDER BY `rypale`");
 $perus_hinta = mysql_query("SELECT DISTINCT `perus_hinta` FROM juomat ORDER BY `perus_hinta`");
 $litrahinta = mysql_query("SELECT DISTINCT `litrahinta` FROM juomat ORDER BY `litrahinta`");
 
 mysql_close($con);


    echo "<form action=\"hae_juomat.php\" method=\"post\">
  juoman nimi: 
  <input type=\"text\" name=\"nimi\">
  
  <br>Valmistaja: 

  <select name=\"valmistaja\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($valmistaja))
  {
    echo "<option value=\"".$row['valmistaja']."\">".$row['valmistaja']."</option>";
  }
  
  echo"
  </select>
  
  
    <br>koko: 

  <select name=\"koko\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($koko))
  {
    echo "<option value=\"".$row['koko']."\">".$row['koko']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>pakkaus: 

  <select name=\"pakkaus\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($pakkaus))
  {
    echo "<option value=\"".$row['pakkaus']."\">".$row['pakkaus']."</option>";
  }
  
  echo"
  </select>
  
  
  
  <br>korkki: 

  <select name=\"korkki\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($korkki))
  {
    echo "<option value=\"".$row['korkki']."\">".$row['korkki']."</option>";
  }
  
  echo"
  </select>
  
  
 
  
  
   <br>vuosi: 

  <select name=\"vuosi\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($vuosi))
  {
    echo "<option value=\"".$row['vuosi']."\">".$row['vuosi']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>etiketti: 

  <select name=\"etiketti\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($etiketti))
  {
    echo "<option value=\"".$row['etiketti']."\">".$row['etiketti']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>alkoholiprosentit: 

  <select name=\"prosentit\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($prosentit))
  {
    echo "<option value=\"".$row['prosentit']."\">".$row['prosentit']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>happo g/l: 

  <select name=\"happo\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($happo))
  {
    echo "<option value=\"".$row['happo']."\">".$row['happo']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>sokeri g/l: 

  <select name=\"sokeri\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($sokeri))
  {
    echo "<option value=\"".$row['sokeri']."\">".$row['sokeri']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>kantavierre p-%: 

  <select name=\"kantavierre\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($kantavierre))
  {
    echo "<option value=\"".$row['kantavierre']."\">".$row['kantavierre']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>v&auml;ri EBC: 

  <select name=\"vari\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($vari))
  {
    echo "<option value=\"".$row['vari']."\">".$row['vari']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>katkerot EBU: 

  <select name=\"katkero\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($katkero))
  {
    echo "<option value=\"".$row['katkero']."\">".$row['katkero']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>energia kcal/100 ml: 

  <select name=\"energia\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($energia))
  {
    echo "<option value=\"".$row['energia']."\">".$row['energia']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>saatavuus: 

  <select name=\"saatavuus\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($saatavuus))
  {
    echo "<option value=\"".$row['saatavuus']."\">".$row['saatavuus']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>maa: 

  <select name=\"maa\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($maa))
  {
    echo "<option value=\"".$row['maa']."\">".$row['maa']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>alaalue: 

  <select name=\"alaalue\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($alaalue))
  {
    echo "<option value=\"".$row['alaalue']."\">".$row['alaalue']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>laji: 

  <select name=\"laji\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($laji))
  {
    echo "<option value=\"".$row['laji']."\">".$row['laji']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>alalaji: 

  <select name=\"alalaji\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($alalaji))
  {
    echo "<option value=\"".$row['alalaji']."\">".$row['alalaji']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>erityisryhma: 

  <select name=\"erityisryhma\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($erityisryhma))
  {
    echo "<option value=\"".$row['erityisryhma']."\">".$row['erityisryhma']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>oluttyyppi: 

  <select name=\"oluttyyppi\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($oluttyyppi))
  {
    echo "<option value=\"".$row['oluttyyppi']."\">".$row['oluttyyppi']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>rypale: 

  <select name=\"rypale\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   		echo "<option value=\"Bonarda\">Bonarda</option>";
 			echo "<option value=\"Malbec\">Malbec</option>";
 	 	 	echo "<option value=\"Cabernet_Sauvignon\">Cabernet Sauvignon</option>";
 	 	 	echo "<option value=\"Syrah\">Syrah</option>";
 	 	 	echo "<option value=\"Bonarda\">Bonarda</option>";
 	 	 	echo "<option value=\"Merlot\">Merlot</option>";
 	 	 	echo "<option value=\"Pinot_Noir\">Pinot Noir</option>";
 	 	 	echo "<option value=\"Shiraz\">Shiraz</option>";
 	 	 	echo "<option value=\"Sangiovese\">Sangiovese</option>";
 	 	 	echo "<option value=\"Durif\">Durif</option>";
 	 	 	echo "<option value=\"Melnik\">Melnik</option>";
 	 	 	echo "<option value=\"Carmenère\">Carmenère</option>";
 	 	 	echo "<option value=\"Bobal\">Bobal</option>";
 	 	 	echo "<option value=\"Tempranillo\">Tempranillo</option>";
 	 	 	echo "<option value=\"Tinta_de_Toro\">Tinta de Toro</option>";
 	 	 	echo "<option value=\"Monastrell\">Monastrell</option>";
 	 	 	echo "<option value=\"Tinta_Fina\">Tinta Fina</option>";
 	 	 	echo "<option value=\"Pinotage\">Pinotage</option>";
 	 	 	echo "<option value=\"Primitivo\">Primitivo</option>";
 	 	 	echo "<option value=\"Montepulciano\">Montepulciano</option>";
 	 	 	echo "<option value=\"Lambrusco_Grasparossa\">Lambrusco Grasparossa</option>";
 	 	 	echo "<option value=\"Negroamaro\">Negroamaro</option>";
 	 	 	echo "<option value=\"Nebbiolo\">Nebbiolo</option>";
 	 	 	echo "<option value=\"Corvina Veronese\">Corvina Veronese</option>";
 	 	 	echo "<option value=\"Periquita\">Periquita</option>";
 	 	 	echo "<option value=\"Zinfandel\">Zinfandel</option>";
 	 	 	echo "<option value=\"Viognier\">Viognier</option>";
 	 	 	echo "<option value=\"Chardonnay\">Chardonnay</option>";
 	 	 	echo "<option value=\"Torrontés\">Torrontés</option>";
 	 	 	echo "<option value=\"Fruity_Lexia\">Fruity Lexia</option>";
  
  echo"
  </select>
  
  
  
    <br>perus_hinta: 

  <select name=\"perus_hinta\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($perus_hinta))
  {
    echo "<option value=\"".$row['perus_hinta']."\">".$row['perus_hinta']."</option>";
  }
  
  echo"
  </select>
  
  
  
    <br>litrahinta: 

  <select name=\"litrahinta\">
  <option value=\"\" selected=\"Valitse\">Ei v&auml;li&auml;                                            </option>
  ";
   while($row = mysql_fetch_array($litrahinta))
  {
    echo "<option value=\"".$row['litrahinta']."\">".$row['litrahinta']."</option>";
  }
  
  echo"
  </select>
  

  <br>
  <input type=\"submit\" value=\"Hae\"/>
  </form>";
}
?>


 </p>

	</div>
</div>
</body>
</html>