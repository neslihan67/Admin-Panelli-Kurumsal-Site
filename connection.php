<?php

//error_reporting(0);
include_once(SINIF."class.upload.php");
include_once(SINIF."DB.php");

$DB=new DB();

$ayarlarVerisi=$DB-> VeriGetir("siteayarlar","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($ayarlarVerisi!=false)
{
	
	$siteUrl=$ayarlarVerisi[0]["Url"];
	$siteAnahtar=$ayarlarVerisi[0]["Anahtar"];
	$siteAciklama=$ayarlarVerisi[0]["Aciklama"];
	$siteTarayiciAd=$ayarlarVerisi[0]["TarayiciAd"];
	
	
	$siteMail=$ayarlarVerisi[0]["Mail"];
	



}
$mahalleVerisi=$DB-> VeriGetir("mahallebilgi","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($mahalleVerisi!=false)
{
	
	$mahalleBaslik=$mahalleVerisi[0]["Baslik"];
	$mahalleAciklama=$mahalleVerisi[0]["Aciklama"];
	$mahalleResim=$mahalleVerisi[0]["Resim"];

	
	
}
$hizmetyeriVerisi=$DB-> VeriGetir("muhtarlikbilgi","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($hizmetyeriVerisi!=false)
{
	$hizmetyerimuhtarlikAdi=$hizmetyeriVerisi[0]["MuhtarlikAdi"];
	
	$hizmetyeriAdres=$hizmetyeriVerisi[0]["Adres"];
	
	$hizmetyeriTelefon=$hizmetyeriVerisi[0]["Telefon"];
	
	$hizmetyeriHarita=$hizmetyeriVerisi[0]["HaritaUrl"];
	
	$hizmetyeriResim=$hizmetyeriVerisi[0]["Resim"];
	
	$hizmetyeriMail=$hizmetyeriVerisi[0]["Mail"];
	
	$hizmetyeriFax=$hizmetyeriVerisi[0]["Fax"];
	
	$hizmetyeriInstagram=$hizmetyeriVerisi[0]["Instagram"];
	$hizmetyeriYoutube=$hizmetyeriVerisi[0]["Youtube"];
	$hizmetyeriTwitter=$hizmetyeriVerisi[0]["Twitter"];
	$hizmetyeriFacebook=$hizmetyeriVerisi[0]["Facebook"];
	$hizmetyeriLinkedin=$hizmetyeriVerisi[0]["Linkedin"];
	

}
$muhtarsozVerisi=$DB-> VeriGetir("muhtarsozleri","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($muhtarsozVerisi!=false)
{
	
	$muhtarsoz=$muhtarsozVerisi[0]["Soz"];
	
	

}

$logoVerisi=$DB-> VeriGetir("logo","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($logoVerisi!=false)
{
	
	$logoResim=$logoVerisi[0]["Resim"];
    $logoBaslik=$logoVerisi[0]["Aciklama"];
	
	

}



?>