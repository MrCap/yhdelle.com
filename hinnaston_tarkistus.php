<?php 
  $nimi_haku=$_GET["nimi_haku"]; 

  $kysely = "SELECT * FROM `juomat` WHERE `nimi` LIKE '%".$nimi_haku."%'  ";
  //$kysely = "SELECT * FROM `juomat` WHERE `nimi` LIKE '%osken%'  ";
 $username="yhdellec_lukija";
 $password="JfeSJ3";
 $database="localhost";
 
 $con = mysql_connect($database,$username,$password);
 if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 } 
 
 mysql_select_db("yhdellec_baari", $con);
 
 $juoma = mysql_query($kysely);
//  $row = mysql_fetch_array($juoma);
 mysql_close($con);
 


		$juoma_id=$_POST["juoma_id"];
		$nimi=$_POST["nimi"];
		$valmistaja=$_POST["valmistaja"]; 
		$vuosi=$_POST["vuosi"];
		$kuvaus=$_POST["kuvaus"];
		$makeus=$_POST["makeus"];
		$etiketti=$_POST["etiketti"];
		$prosentit=$_POST["prosentit"]; 	
		$happo=$_POST["happo"];
		$sokeri=$_POST["sokeri"];
		$kantavierre=$_POST["kantavierre"]; 	
		$vari=$_POST["vari"];
		$katkero=$_POST["katkero"];
		$energia=$_POST["energia"]; 
		$mainittavaa=$_POST["mainittavaa"];
		$maa=$_POST["maa"];
		$alue=$_POST["alue"];
		$alaalue=$_POST["alaalue"]; 	
		$laji=$_POST["laji"];
		$alalaji=$_POST["alalaji"];
		$erityisryhma=$_POST["erityisryhma"];
		$oluttyyppi=$_POST["oluttyyppi"];
		$rypale=$_POST["rypale"];

		$aperatiivi=$_POST["aperatiivi"];
		$kasvis=$_POST["kasvis"];
		$pitsa=$_POST["pitsa"];
		$pasta=$_POST["pasta"];
		$buffet=$_POST["buffet"];
		$rapu=$_POST["rapu"];
		$rasvaton_kala=$_POST["rasvaton_kala"]; 
		$rasvainen_kala=$_POST["rasvainen_kala"];
		$kana=$_POST["kana"];
		$porsas=$_POST["porsas"];
		$lammas=$_POST["lammas"];
		$nauta=$_POST["nauta"];
		$pata=$_POST["pata"];
		$grilli=$_POST["grilli"];
		$makkara=$_POST["makkara"];
		$riistalintu=$_POST["riistalintu"]; 	
		$riista=$_POST["riista"];
		$kiinalainen=$_POST["kiinalainen"];	
		$juusto=$_POST["juusto"];
		$leivos=$_POST["leivos"];
		$seurustelu=$_POST["seurustelu"];
		$nautiskelu=$_POST["nautiskelu"];
		$malja=$_POST["malja"];
		$alkonkoodi=$_POST["alkonkoodi"];
		$hinta_tarkistettu=$_POST["hinta_tarkistettu"];
		$hinnastonro=$_POST["hinnastonro"];
		$hae=$_POST["hae"];
		$viinanro=$_POST["viinanro"];

		$pullo_id=$_POST["pullo_id"];
		$juoma_id=$_POST["juoma_id"];
		$juoma_nimi=$_POST["juoma_nimi"];
		$koko=$_POST["koko"];
		$pakkaus=$_POST["pakkaus"];
		$korkki=$_POST["korkki"];
		$hinta=$_POST["hinta"];
		$kuva=$_POST["kuva"];
		$alkonkoodi=$_POST["alkonkoodi"];
		$tarkistettu=$_POST["tarkistettu"]; 

		$koko1=$_POST["koko1"];
		$pakkaus1=$_POST["pakkaus1"];
		$korkki1=$_POST["korkki1"];
		$hinta1=$_POST["hinta1"];								
		
		$koko2=$_POST["koko2"];
		$pakkaus2=$_POST["pakkaus2"];
		$korkki2=$_POST["korkki2"];
		$hinta2=$_POST["hinta2"];								
		
		$koko3=$_POST["koko3"];
		$pakkaus3=$_POST["pakkaus3"];
		$korkki3=$_POST["korkki3"];
		$hinta3=$_POST["hinta3"];								
		
		$koko4=$_POST["koko4"];
		$pakkaus4=$_POST["pakkaus4"];
		$korkki4=$_POST["korkki4"];
		$hinta4=$_POST["hinta4"];								
		
		$koko5=$_POST["koko5"];
		$pakkaus5=$_POST["pakkaus5"];
		$korkki5=$_POST["korkki5"];
		$hinta5=$_POST["hinta5"];								
		
		$koko6=$_POST["koko6"];
		$pakkaus6=$_POST["pakkaus6"];
		$korkki6=$_POST["korkki6"];
		$hinta6=$_POST["hinta6"];								
		
		$koko7=$_POST["koko7"];
		$pakkaus7=$_POST["pakkaus7"];
		$korkki7=$_POST["korkki7"];
		$hinta7=$_POST["hinta7"];								
		
		$koko8=$_POST["koko8"];
		$pakkaus8=$_POST["pakkaus8"];
		$korkki8=$_POST["korkki8"];
		$hinta8=$_POST["hinta8"];								
		
		$koko9=$_POST["koko9"];
		$pakkaus9=$_POST["pakkaus9"];
		$korkki9=$_POST["korkki9"];
		$hinta9=$_POST["hinta9"];								
		
		$koko10=$_POST["koko10"];
		$pakkaus10=$_POST["pakkaus10"];
		$korkki10=$_POST["korkki10"];
		$hinta10=$_POST["hinta10"];		
		


 while($row = mysql_fetch_array($juoma))
 {
		echo "
		<form action=\"hinnaston_tarkistus_hyppy.php\" method=\"post\">

		<br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>nimi<input type=\"text\" name=\"nimi\" value=\"".$row['nimi']."\">
		<br>valmistaja<input type=\"text\" name=\"valmistaja\" value=\"".$row['valmistaja']."\"> 
		<br>vuosi<input type=\"text\" name=\"vuosi\" value=\"".$row['vuosi']."\">
		<br>kuvaus<input type=\"text\" name=\"kuvaus\" value=\"".$row['kuvaus']."\">
		<br>makeus<input type=\"text\" name=\"makeus\" value=\"".$row['makeus']."\">
		<br>etiketti<input type=\"text\" name=\"etiketti\" value=\"".$row['etiketti']."\">
		<br>prosentit<input type=\"text\" name=\"prosentit\" value=\"".$row['prosentit']."\"> 	
		<br>happo<input type=\"text\" name=\"happo\" value=\"".$row['happo']."\">
		<br>sokeri<input type=\"text\" name=\"sokeri\" value=\"".$row['sokeri']."\">
		<br>kantavierre<input type=\"text\" name=\"kantavierre\" value=\"".$row['kantavierre']."\"> 	
		<br>vari<input type=\"text\" name=\"vari\" value=\"".$row['vari']."\">
		<br>katkero<input type=\"text\" name=\"katkero\" value=\"".$row['katkero']."\">
		<br>energia<input type=\"text\" name=\"energia\" value=\"".$row['energia']."\"> 
		<br>mainittavaa<input type=\"text\" name=\"mainittavaa\" value=\"".$row['mainittavaa']."\">
		<br>maa<input type=\"text\" name=\"maa\" value=\"".$row['maa']."\">
		<br>alue<input type=\"text\" name=\"alue\" value=\"".$row['alue']."\">
		<br>alaalue<input type=\"text\" name=\"alaalue\" value=\"".$row['alaalue']."\"> 	
		<br>laji<input type=\"text\" name=\"laji\" value=\"".$row['laji']."\">
		<br>alalaji<input type=\"text\" name=\"alalaji\" value=\"".$row['alalaji']."\">
		<br>erityisryhma<input type=\"text\" name=\"erityisryhma\" value=\"".$row['erityisryhma']."\">
		<br>oluttyyppi<input type=\"text\" name=\"oluttyyppi\" value=\"".$row['oluttyyppi']."\">
		<br>rypale<input type=\"text\" name=\"rypale\" value=\"".$row['rypale']."\">

		<br>aperatiivi<input type=\"checkbox\" name=\"aperatiivi\">
		<br>kasvis<input type=\"checkbox\" name=\"kasvis\" >
		<br>pitsa<input type=\"checkbox\" name=\"pitsa\" >
		<br>pasta<input type=\"checkbox\" name=\"pasta\">
		<br>buffet<input type=\"checkbox\" name=\"buffet\">
		<br>rapu<input type=\"checkbox\" name=\"rapu\">
		<br>rasvaton_kala<input type=\"checkbox\" name=\"rasvaton_kala\"> 
		<br>rasvainen_kala<input type=\"checkbox\" name=\"rasvainen_kala\">
		<br>kana<input type=\"checkbox\" name=\"kana\">
		<br>porsas<input type=\"checkbox\" name=\"porsas\">
		<br>lammas<input type=\"checkbox\" name=\"lammas\">
		<br>nauta<input type=\"checkbox\" name=\"nauta\">
		<br>pata<input type=\"checkbox\" name=\"pata\">
		<br>grilli<input type=\"checkbox\" name=\"grilli\">
		<br>makkara<input type=\"checkbox\" name=\"makkara\">
		<br>riistalintu<input type=\"checkbox\" name=\"riistalintu\"> 	
		<br>riista<input type=\"checkbox\" name=\"riista\">
		<br>kiinalainen<input type=\"checkbox\" name=\"kiinalainen\">	
		<br>juusto<input type=\"checkbox\" name=\"juusto\">
		<br>leivos<input type=\"checkbox\" name=\"leivos\">
		<br>seurustelu<input type=\"checkbox\" name=\"seurustelu\">
		<br>nautiskelu<input type=\"checkbox\" name=\"nautiskelu\">
		<br>malja<input type=\"checkbox\" name=\"malja\">
		
		<br>alkonkoodi<input type=\"text\" name=\"alkonkoodi\" value=\"".$row['alkonkoodi']."\">
		<br>hinta_tarkistettu<input type=\"text\" name=\"hinta_tarkistettu\" value=\"".$row['hinta_tarkistettu']."\">
		<br>hinnastonro<input type=\"text\" name=\"hinnastonro\" value=\"".$row['hinnastonro']."\">
		<br>hae<input type=\"text\" name=\"hae\" value=\"".$row['hae']."\">
		<br>viinanro<input type=\"text\" name=\"viinanro\" value=\"".$row['viinanro']."\">

		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko\" value=\"".$row['koko']."\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus\" value=\"".$row['pakkaus']."\">
		<br>korkki<input type=\"text\" name=\"korkki\" value=\"".$row['korkki']."\">
		<br>hinta<input type=\"text\" name=\"hinta\" value=\"".$row['perus_hinta']."\">
		<br>kuva<input type=\"text\" name=\"kuva\" value=\"".$row['kuva']."\">
		<br>alkonkoodi<input type=\"text\" name=\"alkonkoodi\" value=\"".$row['alkonkoodi']."\">
		<br>tarkistettu<input type=\"text\" name=\"tarkistettu\" value=\"".$row['tarkistettu']."\"> 
		
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko1\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus1\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki1\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta1\" value=\"\">
		
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko2\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus2\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki2\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta2\" value=\"\">
		
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko3\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus3\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki3\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta3\" value=\"\">
		
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko4\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus4\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki4\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta4\" value=\"\">
				
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko5\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus5\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki5\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta5\" value=\"\">

		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko6\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus6\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki6\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta6\" value=\"\">

		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko7\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus7\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki7\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta7\" value=\"\">
		
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko8\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus8\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki8\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta8\" value=\"\">
		
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko9\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus9\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki9\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta9\" value=\"\">
						
		<br><br>juoma_id<input type=\"text\" name=\"juoma_id\" value=\"".$row['juoma_id']."\">
		<br>juoma_nimi<input type=\"text\" name=\"juoma_nimi\" value=\"".$row['nimi']."\">
		<br>koko<input type=\"text\" name=\"koko10\" value=\"\">
		<br>pakkaus<input type=\"text\" name=\"pakkaus10\" value=\"\">
		<br>korkki<input type=\"text\" name=\"korkki10\" value=\"\">
		<br>hinta<input type=\"text\" name=\"hinta10\" value=\"\">
		
		<br><br>
		<input type=\"submit\" value=\"tarkistettu juoma\"/>
  		</form>";
 }



?>