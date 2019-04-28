<?php
//give the name to the file
$filename = "hinnasto.txt";

//open file
$fileToOpen = fopen($filename,"r");
//set the content of the file into a variable
$content = fread($fileToOpen, filesize($filename));
//close the file
fclose($fileToOpen);

//write the content
$sana=NULL;
$sanakpl=1;
//echo "<table border=1><TR><td>";
for($i=0;$k<1920;$i++)
{
  $merkki=$content[$i];
  
  if($merkki=="\t")
  {
    switch ($sanakpl)
    {
      case "1" : //TURHA
        ////echo $sana;
        $sana=NULL;
        ////echo "</td><Td>";
        $sanakpl++;
      break;
      case "2" :
        $nimi=$sana;
        //echo $sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "3" :
        //echo $sana;
        $valmistaja=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "4" :
        //echo $sana;
        $koko=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "5" :
        //echo $sana;
        $perus_hinta=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "6" :
        //echo $sana;
        $litrahinta=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "7" : //TURHA
        ////echo $sana;
        $sana=NULL;
        ////echo "</td><Td>";
        $sanakpl++;
      break;
      case "8" : //TURHA
        ////echo $sana;
        $sana=NULL;
        ////echo "</td><Td>";
        $sanakpl++;
      break;
      case "9" :
        //echo $sana;
        $laji=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "10" :
        //echo $sana;
        $alalaji=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "11" :
        //echo $sana;
        $erityisryhma=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "12" :
        //echo $sana;
        $oluttyyppi=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "13" :
        //echo $sana;
        $maa=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "14" :
        //echo $sana;
        $alue=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "15" :
        //echo $sana;
        $alaalue=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "16" :
        //echo $sana;
        $vuosi=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "17" :
        //echo $sana;
        $etiketti=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "18" :
        //echo $sana;
        $mainittavaa=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "19" :
        //echo $sana;
        $rypale=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "20" :
        //echo $sana;
        $kuvaus=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "21" :
        //echo $sana;
        $pakkaus=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "22" :
        //echo $sana;
        $korkki=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "23" :
        //echo $sana;
        $prosentit=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "24" :
        //echo $sana;
        $happo=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "25" :
        //echo $sana;
        $sokeri=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "26" :
        //echo $sana;
        $kantavierre=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "27" :
        //echo $sana;
        $vari=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "28" :
        //echo $sana;
        $katkero=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
      case "29" :
        //echo $sana;
        $energia=$sana;
        $sana=NULL;
        //echo "</td><Td>";
        $sanakpl++;
      break;
    }
    
  }
  else if($merkki=="\n")
  {
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
  $sql = 'INSERT INTO `yhdellec_baari`.`juomat` (`juoma_id`, `nimi`, `valmistaja`, `koko`, `pakkaus`, `korkki`, `vuosi`, `kuva`, `kuvaus`, `etiketti`, `prosentit`, `happo`, `sokeri`, `kantavierre`, `vari`, `katkero`, `energia`, `mainittavaa`, `kaupat`, `smarketit`, `alko`, `saatavuus`, `maa`, `alue`, `alaalue`, `laji`, `alalaji`, `erityisryhma`, `oluttyyppi`, `rypale`, `perus_hinta`, `alin_hinta`, `litrahinta`, `valmis`) VALUES (NULL, \''.$nimi.'\', \''.$valmistaja.'\', \''.$koko.'\', \''.$pakkaus.'\', \''.$korkki.'\', \''.$vuosi.'\', \''.$kuva.'\', \''.$kuvaus.'\', \''.$etiketti.'\', \''.$prosentit.'\', \''.$happo.'\', \''.$sokeri.'\',\''.$kantavierre.'\',\''.$vari.'\',\''.$katkero.'\',\''.$energia.'\', \''.$mainittavaa.'\', NULL, NULL, \'1\',  NULL, \''.$maa.'\', \''.$alue.'\', \''.$alaalue.'\', \''.$laji.'\', \''.$alalaji.'\', \''.$erityisryhma.'\', \''.$oluttyyppi.'\', \''.$rypale.'\', \''.$perus_hinta.'\', NULL, \''.$litrahinta.'\', \'1\');';
  //echo $sql;
  mysql_query($sql);
 
  mysql_close($con);
  //echo $sana;
  $sana=NULL;
  $sanakpl=1;
  //echo "</td></Tr><tr><td>";
  $k++;
  }
  else {$sana=$sana.$merkki;}
}
//echo "</td></tr></table>";
echo "KAIKKI KÄYTY!!! 1900 juomaa lisätty!!!";
//$arrText = file ("http://www.site.com/page.htm");
//for ($i=0; $i<count($arrText); i++) {
//echo("$arrText[$i]
//");
//}

?>

