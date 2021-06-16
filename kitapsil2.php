<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kitap Sil</title>
</head>

<body>
<?php
$kisi=$_GET["kitapno"];
include("baglanti.php");

$komut=mysql_query("delete from kitap where kitapno=$kisi");
if($komut)
{
	echo "Başarıyla silindi.";
	header("Location:kitapsil.php");
}
else
{
	echo "Hata:Lütfen tekrar deneyiniz";
}


?>
</body>
</html>