<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../../../wamp64/www/KutuphaneOtomasyonu/Templates/kutuphane.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Üye Ekle</title>
<style type="text/css">

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}

</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="images/logo.ico" />

<style type="text/css">
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
ul
{
	padding:0px;
	margin:0px;
	list-style:none;
}
ul li
{
	float:left;
	margin-left:20px;
}
ul li a
{
	display:block;
	text-decoration:none;
	text-align:center;
	width:120px;
	height:30px;
	line-height:30px;
	color:white;
	font-family:Tahoma, Geneva, sans-serif;

	background:linear-gradient(to top,rgba(0,0,0 ,1),rgba(0, 255, 255, 1));
	transition: all 0.2s ease;
}
ul li a:hover
{
	background:linear-gradient(to top,rgba(0, 255, 255, 1),rgba(0,0,0 ,1));
	transition: all 0.2s ease;
	
}
</style>
</head>

<body style="background-image:linear-gradient(black,lightblue);font-family:Tahoma, Geneva, sans-serif;">
<div style="width:1200px;height:auto;margin:auto;">
<div style="width:1200px;font-family:Tahoma, Geneva, sans-serif;font-size:36px;line-height:120px;height:120px;background-color:lightblue;">
&nbsp;&nbsp;&nbsp;<font color="white">BİLGİ</font>MATİK
  </div>
<p>
<ul>
  <li><a href="index.php">Kitaplar</a></li>
  <li><a href="kitapekle.php">Kitap Ekle</a></li>
   <li><a href="kitapguncelle.php">Kitap Güncelle</a></li>
    <li><a href="kitapsil.php">Kitap Sil</a></li>
     <li><a href="uyeekle.php">Üye Ekle</a></li>
  </ul><br /><br />
 
</p>
<div style="position:relative;width:1200px;height:700px;border-radius:10px;background-color:white;">
  <div style="position:absolute;float:left;width:300px;height:700px;border-radius:10px;background-color:lightblue;">
    <img src="images/solmenu.fw.png" width="300" height="700" /> </div>
   
    <div style="position:relative;padding:10px;left:300px;float:left;height:680px;width:880px;background-color:white;"><!-- InstanceBeginEditable name="EditRegion3" -->
  
  
  
  <form id="form2" name="form2" method="post" action="">
      <table width="862" height="384" border="0" cellpadding="0" cellspacing="10">
        <tr>
          <td width="148">ÜYE ADI</td>
          <td width="684"><label for="textfield2"></label>
            <input type="text" name="k1" id="textfield2" /></td>
        </tr>
        <tr>
          <td>ÜYE SOYADI</td>
          <td><input type="text" name="k2" id="textfield" /></td>
        </tr>
        <tr>
          <td>ÜYE TELEFONU</td>
          <td><input type="text" name="k3" id="textfield3" /></td>
        </tr>
        <tr>
          <td>ÜYE EPOSTA</td>
          <td><input type="text" name="k4" id="textfield4" /></td>
        </tr>
        <tr>
          <td>ÜYE ADRES</td>
          <td><input type="text" name="k5" id="textfield5" /></td>
        </tr>
       
         <tr>
          <td></td>
          <td><button class="button" name="button" type="submit" style="vertical-align:middle"><span>Gönder </span></button></td>
        </tr>
      </table>
    </form>
    <?php
	error_reporting(0);
    $uyeadi=$_POST["k1"];
	$uyesoyadi=$_POST["k2"];
	$uyetelefon=$_POST["k3"];
	$uyeeposta=$_POST["k4"];
	$uyeadres=$_POST["k5"];
	
	include("baglanti.php");
	
	if($uyeadi!=""and$uyesoyadi!=""and$uyetelefon!=""and$uyeeposta!=""and$uyeadres!="")
	{
 $ekle=mysql_query("insert into uyeler(ograd,ogrsoyad,ogrtelefon,ogreposta,ogradres)values('$uyeadi','$uyesoyadi','$uyetelefon','$uyeeposta','$uyeadres')");
	}
	else
	{
		echo "<font color=red><b>Lütfen boş bırakmayınız</b></font>";
	}
	

	
	?><!-- InstanceEndEditable -->
      
    
 </div>
</div>
<div style="position:relative;width:1200px;text-align:center;line-height:120px;color:white;height:120px;background-color:#666;border-radius:10px;">&copy;Copyright 2019 Bütün Hakları Saklıdır</div>
</div>
</body>
<!-- InstanceEnd --></html>
