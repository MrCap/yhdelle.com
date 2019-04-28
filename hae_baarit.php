<?php
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

$urli="?";
if($nimi!=NULL)$urli=$urli . "&nimi=" . $nimi;
if($kaupunki!=NULL)$urli=$urli . "&kaupunki=" . $kaupunki;

if($musiikki!=NULL)$urli=$urli . "&musiikki=" . $musiikki;
if($ambient!=NULL)$urli=$urli . "&ambient=" . $ambient;if($dance!=NULL)$urli=$urli . "&dance=" . $dance;
if($musiikki_disco!=NULL)$urli=$urli . "&musiikki_disco=" . $musiikki_disco;
if($dmetal!=NULL)$urli=$urli . "&dmetal=" . $dmetal;
if($hmetal!=NULL)$urli=$urli . "&hmetal=" . $hmetal;
if($hiphop!=NULL)$urli=$urli . "&hiphop=" . $hiphop;
if($humppa!=NULL)$urli=$urli . "&humppa=" . $humppa;
if($tanssimusiikki!=NULL)$urli=$urli . "&tanssimusiikki=" . $tanssimusiikki;
if($jazz!=NULL)$urli=$urli . "&jazz=" . $jazz;
if($klassinen!=NULL)$urli=$urli . "&klassinen=" . $klassinen;
if($noise!=NULL)$urli=$urli . "&noise=" . $noise;
if($pop!=NULL)$urli=$urli . "&pop=" . $pop;
if($punk!=NULL)$urli=$urli . "&punk=" . $punk;
if($progressive!=NULL)$urli=$urli . "&progressive=" . $progressive;
if($rap!=NULL)$urli=$urli . "&rap=" . $rap;
if($reggae!=NULL)$urli=$urli . "&reggae=" . $reggae;
if($rnb!=NULL)$urli=$urli . "&rnb=" . $rnb;
if($rock!=NULL)$urli=$urli . "&rock=" . $rock;
if($suomipop!=NULL)$urli=$urli . "&suomipop=" . $suomipop;
if($techno!=NULL)$urli=$urli . "&techno=" . $techno;
if($trance!=NULL)$urli=$urli . "&trance=" . $trance;

if($ruoka!=NULL)$urli=$urli . "&ruoka=" . $ruoka;
if($tyyli!=NULL)$urli=$urli . "&tyyli=" . $tyyli;
if($ika!=NULL)$urli=$urli . "&ika=" . $ika;
if($hinta!=NULL)$urli=$urli . "&hinta=" . $hinta;
if($ika_min!=NULL)$urli=$urli . "&ika_min=" . $ika_min;
if($ika_max!=NULL)$urli=$urli . "&ika_max=" . $ika_max;





echo "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
<html>
<head>
<title>yhdelle</title>
<meta http-equiv=\"REFRESH\" content=\"0;url=http://www.yhdelle.com/baarit.php" . $urli ." \"></HEAD>
<BODY>
Haku on k&auml;ynniss&auml;, odota hetki
</BODY>
</HTML>
";
 ?>