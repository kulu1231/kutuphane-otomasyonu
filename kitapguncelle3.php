<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kitap Güncelle</title>
</head>

<body>
<?php
$kisi=$_GET["kitapno"];
include("baglanti.php");
 $isbnno=$_POST["k1"];
	  $kitapadi=$_POST["k2"];
      $sayfasayisi=$_POST["k3"];
      $puan=$_POST["k4"];
      $resim=$_POST["k5"];
      $yazar=$_POST["k6"];
      $tur=$_POST["k7"];
$komut=mysql_query("update kitap set isbnno='$isbnno' , kitapadi='$kitapadi' , sayfasayisi='$sayfasayisi' , puan='$puan' , kitap_resim='$resim' , yazar='$yazar' , tur='$tur' where kitapno=$kisi");
if($komut)
{
	echo "Başarıyla güncellendi.";
	header("Location:kitapguncelle.php");
}
else
{
	echo "Hata:Lütfen tekrar deneyiniz";
}


?>
</body>
</html>