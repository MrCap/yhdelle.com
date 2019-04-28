<?php
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
		    
  $username="yhdellec_lukija";
 $password="JfeSJ3";
 $database="localhost";
 
 $con = mysql_connect($database,$username,$password);
 if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 } 
 
 mysql_select_db("yhdellec_baari", $con);
 
 
mysql_close($con);

		echo "<br>";
		echo  $juoma_id;
		echo "<br>";
		echo  $nimi;
		echo "<br>";
		echo  $valmistaja; 
		echo "<br>";
		echo  $vuosi;
		echo "<br>";
		echo  $kuvaus;
		echo "<br>";
		echo  $makeus;
		echo "<br>";
		echo  $etiketti;
		echo "<br>";
		echo  $prosentit; 	
		echo "<br>";
		echo  $happo;
		echo "<br>";
		echo  $sokeri;
		echo "<br>";
		echo  $kantavierre; 	
		echo "<br>";
		echo  $vari;
		echo "<br>";
		echo  $katkero;
		echo "<br>";
		echo  $energia; 
		echo "<br>";
		echo  $mainittavaa;
		echo "<br>";
		echo  $maa;
		echo "<br>";
		echo  $alue;
		echo "<br>";
		echo  $alaalue; 	
		echo "<br>";
		echo  $laji;
		echo "<br>";
		echo  $alalaji;
		echo "<br>";
		echo  $erityisryhma;
		echo "<br>";
		echo  $oluttyyppi;
		echo "<br>";
		echo  $rypale;

		echo "<br>";
		echo  $aperatiivi;
		echo "<br>";
		echo  $kasvis;
		echo "<br>";
		echo  $pitsa;
		echo "<br>";
		echo  $pasta;
		echo "<br>";
		echo  $buffet;
		echo "<br>";
		echo  $rapu;
		echo "<br>";
		echo  $rasvaton_kala; 
		echo "<br>";
		echo  $rasvainen_kala;
		echo "<br>";
		echo  $kana;
		echo "<br>";
		echo  $porsas;
		echo "<br>";
		echo  $lammas;
		echo "<br>";
		echo  $nauta;
		echo "<br>";
		echo  $pata;
		echo "<br>";
		echo  $grilli;
		echo "<br>";
		echo  $makkara;
		echo "<br>";
		echo  $riistalintu; 	
		echo "<br>";
		echo  $riista;
		echo "<br>";
		echo  $kiinalainen;	
		echo "<br>";
		echo  $juusto;
		echo "<br>";
		echo  $leivos;
		echo "<br>";
		echo  $seurustelu;
		echo "<br>";
		echo  $nautiskelu;
		echo "<br>";
		echo  $malja;
		echo "<br>";
		echo  $alkonkoodi;
		echo "<br>";
		echo  $hinta_tarkistettu;
		echo "<br>";
		echo  $hinnastonro;
		echo "<br>";
		echo  $hae;
		echo "<br>";
		echo  $viinanro;

		echo "<br>";
		echo  $pullo_id;
		echo "<br>";
		echo  $juoma_id;
		echo "<br>";
		echo  $juoma_nimi;
		echo "<br>";
		echo  $koko;
		echo "<br>";
		echo  $pakkaus;
		echo "<br>";
		echo  $korkki;
		echo "<br>";
		echo  $hinta;
		echo "<br>";
		echo  $kuva;
		echo "<br>";
		echo  $alkonkoodi;
		echo "<br>";
		echo  $tarkistettu; 

		echo "<br>";
		echo  $koko1;
		echo "<br>";
		echo  $pakkaus1;
		echo "<br>";
		echo  $korkki1;
		echo "<br>";
		echo  $hinta1;		 
		echo "<br>";
		
		echo "<br>";
		echo  $koko2;
		echo "<br>";
		echo  $pakkaus2;
		echo "<br>";
		echo  $korkki2;
		echo "<br>";
		echo  $hinta2;		 

		echo "<br>";
		echo  $koko3;
		echo "<br>";
		echo  $pakkaus3;
		echo "<br>";
		echo  $korkki3;
		echo "<br>";
		echo  $hinta3;		 

		echo "<br>";
		echo  $koko4;
		echo "<br>";
		echo  $pakkaus4;
		echo "<br>";
		echo  $korkki4;
		echo "<br>";
		echo  $hinta4;		 

		echo "<br>";
		echo  $koko5;
		echo "<br>";
		echo  $pakkaus5;
		echo "<br>";
		echo  $korkki5;
		echo "<br>";
		echo  $hinta5;		 

		echo "<br>";
		echo  $koko6;
		echo "<br>";
		echo  $pakkaus6;
		echo "<br>";
		echo  $korkki6;
		echo "<br>";
		echo  $hinta6;		 

		echo "<br>";
		echo  $koko7;
		echo "<br>";
		echo  $pakkaus7;
		echo "<br>";
		echo  $korkki7;
		echo "<br>";
		echo  $hinta7;		 

		echo "<br>";
		echo  $koko8;
		echo "<br>";
		echo  $pakkaus8;
		echo "<br>";
		echo  $korkki8;
		echo "<br>";
		echo  $hinta8;		 

		echo "<br>";
		echo  $koko9;
		echo "<br>";
		echo  $pakkaus9;
		echo "<br>";
		echo  $korkki9;
		echo "<br>";
		echo  $hinta9;		 

		echo "<br>";
		echo  $koko10;
		echo "<br>";
		echo  $pakkaus10;
		echo "<br>";
		echo  $korkki10;
		echo "<br>";
		echo  $hinta10;		 




?>