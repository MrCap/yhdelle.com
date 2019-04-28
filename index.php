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
 

 //Kysely joka lisää juoman
$sql = 'SELECT COUNT(*) FROM baari';
$baarit=mysql_fetch_array(mysql_query($sql));

$sql = 'SELECT COUNT(*) FROM drinkki';
$drinkki=mysql_fetch_array(mysql_query($sql));

$sql = 'SELECT COUNT(*) FROM booli';
$booli=mysql_fetch_array(mysql_query($sql));

$sql = 'SELECT COUNT(*) FROM juomat';
$juomat=mysql_fetch_array(mysql_query($sql));

$sql = "SELECT * FROM `baari` WHERE valmis!=0 ORDER BY `id` DESC LIMIT 0,5";
$uudet_baarit=mysql_query($sql);

$sql = "SELECT * FROM `drinkki` WHERE valmis!=0 ORDER BY `drinkki_id` DESC LIMIT 0,5";
$uudet_drinkit=mysql_query($sql);

$sql = "SELECT * FROM `booli` WHERE valmis!=0 ORDER BY `booli_id` DESC LIMIT 0,5";
$uudet_boolit=mysql_query($sql);

$sql = "SELECT * FROM `juomat` WHERE valmis!=0 ORDER BY `juoma_id` DESC LIMIT 0,5"; 
$uudet_juomat=mysql_query($sql);

mysql_close($con);


echo "
<html>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<HEAD>
<Title>Baarit, drinkit, boolit ja juomat</title>

<Meta name=\"description\" content=\"Sivuston tietokannassa on listattuna ".$baarit[0]." baaria, ".$drinkki[0]." drinkkiohjetta, ".$booli[0]." booliohjetta, ".$juomat[0]." juomaa ja uusia tulee kokoajan!\">
<Meta name=\"keywords\" content=\"baari, drinkki, drinkkiohje, booli, booliohje\">
</head>
<body>

<script type=\"text/javascript\" src=\"http://sc5.github.com/copyright-campaign/copyright-campaign.js\" charset=\"UTF-8\"></script>
<script>
copyrightCampaign();
</script>

<div id=\"wrap\">
<div id=\"otsikko\">


<div id=\"menu\">
<ul>
<li class=\"avoin\"><a href=\"index.php\">alku</a></li>
<li><a href=\"baarit.php\">baarit</a></li>
<li><a href=\"drinkit.php\">drinkit</a></li>
<li><a href=\"boolit.php\">boolit</a></li>
<li><a href=\"juomat.php\">juomat</a></li>
<li><a href=\"palaute.php\">palaute</a></li>
<!--<li><a href=\"hae.php\">hae</a></li>-->
</ul>
</div>
</div>

<div id=\"vasen\">
<a href=\"http://www.facebook.com/pages/Yhdellecom/262260056847\"><img src=\"kuvia/facebook.png\"></a>
<br>
<br>Lue tulevista muutoksista <a href=\"http://www.yhdelle.com/palaute.php\">palaute</a>-osiosta ja &auml;&auml;nest&auml;
mit&auml; sivustolle lis&auml;t&auml;&auml;n seuraavaksi.

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

 <div id=\"content\">
 <br>
 
 <p>
 ";


  				
  				echo "<TABLE id=\"tbl\">";
  				echo "<thead>";
  				echo "<TR>";
  				echo "<TH>Uusimmat baarit</TH>";
  				echo "<TH>Uusimmat drinkit</TH>";
  				echo "<TH>Uusimmat boolit</TH>";
  				echo "<TH>Uusimmat juomat</TH>";
  				echo "</TR>";
  				echo "</thead>";
  				$paririvi=0;
  				echo "<TR>";
  				
				for($i=0;$i<5;$i++)
				{
				if($paririvi==0){echo "<TR>";$paririvi=1;}
   			else if($paririvi==1){echo "<TR class=\"odd\">";$paririvi=0;}
   			
   			$row = mysql_fetch_array($uudet_baarit);
   			echo "<td class=\"cell_alku\">";
//   			if($paririvi==0){echo "<TD class=\"cell_alku\">";$paririvi=1;}
//   			else if($paririvi==1){echo "<TD class=\"odd_alku\">";$paririvi=0;}
  				echo "<a href=\"http://www.yhdelle.com/baarit.php?id=".$row[id]."\">".$row['nimi']."</a>";
  				echo "</td>";

  				$row = mysql_fetch_array($uudet_drinkit);
  				echo "<td class=\"cell_alku\">";
//  				if($paririvi==0){echo "<TD class=\"cell_alku\">";$paririvi=1;}
//   			else if($paririvi==1){echo "<TD class=\"odd_alku\">";$paririvi=0;}
  				echo "<a href=\"http://www.yhdelle.com/drinkit.php?drinkki_id=".$row[drinkki_id]."\">".$row['nimi']."</a><br>";
  				echo "</td>";

  				$row = mysql_fetch_array($uudet_boolit);
  				echo "<td class=\"cell_alku\">";
//  				if($paririvi==0){echo "<TD class=\"cell_alku\">";$paririvi=1;}
//   			else if($paririvi==1){echo "<TD class=\"odd_alku\">";$paririvi=0;}
  				echo "<a href=\"http://www.yhdelle.com/boolit.php?booli_id=".$row[booli_id]."\">".$row['nimi']."</a><br>";
  				echo "</td>";

  				$row = mysql_fetch_array($uudet_juomat);
  				echo "<td class=\"cell_alku\">";
//  				if($paririvi==0){echo "<TD class=\"cell_alku\">";$paririvi=1;}
//   			else if($paririvi==1){echo "<TD class=\"odd_alku\">";$paririvi=0;}
  				echo "<a href=\"http://www.yhdelle.com/juomat.php?juoma_id=".$row[juoma_id]."\">".$row['nimi']."</a><br>";
				echo "</td>";
				
  				echo "</tr>";
  				}
  				echo "</TABLE>";
  				

 
 /*echo "
 <table width=\"630\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"tbl\">
        <tr> 
          <td width=\"120\" valign=\"top\"> 
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" id=\"tbl\">
              <tr valign=\"top\"> 
                <thead><th> 
                  <p align=\"left\"><font color=\"#FFFFFF\"><b><font size=\"2\"><font color=\"#000000\">
                  uusimmat baarit</font></font></b></font></p>
                  <p align=\"left\"><font size=\"2\">
                  ";while($row = mysql_fetch_array($uudet_baarit)){ echo "<a href=\"http://www.yhdelle.com/baarit.php?id=".$row[id]."\">".$row['nimi']."</a><br>";}
                  echo"
                </th></thead>
              </tr>
            </table>
          </td>
          <td width=\"1\" bgcolor=\"#bababa\"></td>
          <td width=\"120\" valign=\"top\"> 
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" id=\"tbl\">
              <tr valign=\"top\"> 
                <thead><th> 
                  <p align=\"left\"><font color=\"#FFFFFF\"><b><font size=\"2\" color=\"#000000\">
                  uusimmat drinkit</font></b></font></p>
                  <p><font size=\"2\" >
                  ";while($row = mysql_fetch_array($uudet_drinkit)){ echo "<a href=\"http://www.yhdelle.com/drinkit.php?drinkki_id=".$row[drinkki_id]."\">".$row['nimi']."</a><br>";}
                  echo"
                </th></thead>
              </tr>
            </table>
          </td>
          <td width=\"1\" bgcolor=\"#bababa\"></td>
          <td width=\"120\" valign=\"top\"> 
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" id=\"tbl\">
              <tr valign=\"top\"> 
                <thead><th> 
                  <p align=\"left\"><font color=\"#FFFFFF\"><b><font size=\"2\"><font color=\"#000000\">
                  uusimmat boolit</font></font></b></font></p>
                  <p align=\"left\"><font size=\"2\">
                  ";while($row = mysql_fetch_array($uudet_boolit)){ echo "<a href=\"http://www.yhdelle.com/boolit.php?booli_id=".$row[booli_id]."\">".$row['nimi']."</a><br>";}
                  echo"
                </th></thead>
              </tr>
            </table>
            </td>
          <td width=\"1\" bgcolor=\"#bababa\"></td>
          <td width=\"120\" valign=\"top\"> 
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" id=\"tbl\">
              <tr valign=\"top\"> 
                <thead><th> 
                  <p align=\"left\"><font color=\"#FFFFFF\"><b><font size=\"2\"><font color=\"#000000\">
                  uusimmat juomat</font></font></b></font></p>
                  <p align=\"left\"><font size=\"2\">
                  ";while($row = mysql_fetch_array($uudet_juomat)){ echo "<a href=\"http://www.yhdelle.com/juomat.php?juoma_id=".$row[juoma_id]."\">".$row['nimi']."</a><br>";}
                  echo"
                </th></thead>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td height=\"10\"></td>
          <td height=\"10\"></td>
          <td height=\"10\"></td>
          <td height=\"10\"></td>
          <td height=\"10\"></td>
          <td height=\"10\"></td>
          <td height=\"10\"></td>
        </tr>
        <tr> 
          <td height=\"1\" bgcolor=\"#bababa\"></td>
          <td height=\"1\" bgcolor=\"#bababa\"></td>
          <td height=\"1\" bgcolor=\"#bababa\"></td>
          <td height=\"1\" bgcolor=\"#bababa\"></td>
          <td height=\"1\" bgcolor=\"#bababa\"></td>
          <td height=\"1\" bgcolor=\"#bababa\"></td>
          <td height=\"1\" bgcolor=\"#bababa\"></td>
        </tr>
      </table>";
*/
   echo"   
 </p>
 
 <p>
 Sivuston tietokannassa on listattuna ".$baarit[0]." baaria, ".$drinkki[0]." drinkkiohjetta, ".$booli[0]." booliohjetta, ".$juomat[0]." juomaa. 
 Kaikkia n&auml;it&auml; voit arvostella tai kommentoida. Tietokanta el&auml;&auml; kokoajan, joten jos et juuri nyt l&ouml;yd&auml; omaa
 suosikkiasi niin tule pian uudelleen tai lis&auml;&auml; se tietokantaan.
 </p>
 
	</div>
</div>
</body>
</html>
";
?>