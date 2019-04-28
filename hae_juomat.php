<?php

 $valmistaja = $_POST["valmistaja"];
 $koko = $_POST["koko"]; 
 $pakkaus = $_POST["pakkaus"];  
 $korkki = $_POST["korkki"];
 $vuosi = $_POST["vuosi"];
 $etiketti = $_POST["etiketti"];
 $prosentit = $_POST["prosentit"];
 $happo = $_POST["happo"];
 $sokeri = $_POST["sokeri"];
 $kantavierre = $_POST["kantavierre"];
 $vari = $_POST["vari"]; 
 $katkero = $_POST["katkero"];
 $energia = $_POST["energia"];
 $saatavuus = $_POST["saatavuus"];
 $maa = $_POST["maa"];
 $alaalue = $_POST["alaalue"];
 $laji = $_POST["laji"];
 $alalaji = $_POST["alalaji"];
 $erityisryhma = $_POST["erityisryhma"];
 $oluttyyppi = $_POST["oluttyyppi"];
 $rypale = $_POST["rypale"];
 $perus_hinta = $_POST["perus_hinta"];
 $litrahinta = $_POST["litrahinta"];

$puuttuva=$_POST["puuttuva"];


$urli="?";
   	
if($valmistaja!=NULL)$urli=$urli . "valmistaja=".$valmistaja."";
if($koko!=NULL)$urli=$urli . "koko=".$koko.""; 
if($pakkaus!=NULL)$urli=$urli . "pakkaus=".$pakkaus."";  
if($korkki!=NULL)$urli=$urli . "korkki=".$korkki."";
if($vuosi!=NULL)$urli=$urli . "vuosi=".$vuosi."";
if($etiketti!=NULL)$urli=$urli . "etiketti=".$etiketti."";
if($prosentit!=NULL)$urli=$urli . "prosentit=".$prosentit."";
if($happo!=NULL)$urli=$urli . "happo=".$happo."";
if($sokeri!=NULL)$urli=$urli . "sokeri=".$sokeri."";
if($kantavierre!=NULL)$urli=$urli . "kantavierre=".$kantavierre."";
if($vari!=NULL)$urli=$urli . "vari=".$vari.""; 
if($katkero!=NULL)$urli=$urli . "katkero=".$katkero."";
if($energia!=NULL)$urli=$urli . "energia=".$energia."";
if($saatavuus!=NULL)$urli=$urli . "saatavuus=".$saatavuus."";
if($maa!=NULL)$urli=$urli . "maa=".$maa."";
if($alaalue!=NULL)$urli=$urli . "alaalue=".$alaalue."";
if($laji!=NULL)$urli=$urli . "laji=".$laji."";
if($alalaji!=NULL)$urli=$urli . "alalaji=".$alalaji."";
if($erityisryhma!=NULL)$urli=$urli . "erityisryhma=".$erityisryhma."";
if($oluttyyppi!=NULL)$urli=$urli . "oluttyyppi=".$oluttyyppi."";
if($rypale!=NULL)$urli=$urli . "rypale=".$rypale."";
if($perus_hinta!=NULL)$urli=$urli . "perus_hinta=".$perus_hinta."";
if($litrahinta!=NULL)$urli=$urli . "litrahinta=".$litrahinta."";
	


echo "
<!DOCTYPE HTML PUBLIC \"_//W3C//DTD HTML 4.0 Transitional//EN\">
<html>
<head>
<title>yhdelle</title>
<meta http_equiv=\"REFRESH\" content=\"1;url=http://www.yhdelle.com/juomat.php".$urli." \"></HEAD>
<BODY>
T&auml;m&auml; on haun alustava versio. Yll&auml;pito kehitt&auml;&auml; haun nopeutta, hakuvaihtoehtoja ja haun tarkkuutta. 
<h3>Jatka hakusi <a href=\"./juomat.php".$urli."\">tuloksiin.</a></h3>
</BODY>
</HTML>
";

?>