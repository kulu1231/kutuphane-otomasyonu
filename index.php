<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/kutuphane.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Anasayfa</title>
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
   
    <div style="position:relative;padding:10px;left:300px;float:left;height:680px;width:880px;background-color:white;"><!-- InstanceBeginEditable name="EditRegion3" --><?php
  include("baglanti.php");
  $sorgu=mysql_query("select * from kitap");
  while($goster=mysql_fetch_array($sorgu))
  {
	  
  }
?>
     <?php
     $limit = 8;

$page = @$_GET["page"];
if(empty($page) or !is_numeric($page)) {

$page = 1;

}


	$count			 = mysql_num_rows(mysql_query("SELECT kitapno FROM kitap"));
	$toplamsayfa	 = ceil($count / $limit);
	$baslangic		 = ($page-1)*$limit;


$sorgu = "SELECT * FROM kitap ORDER BY kitapno ASC LIMIT $baslangic,$limit";

$yazdir_sorgu = mysql_query($sorgu) or die(mysql_error() );

while ($yazdir = mysql_fetch_array($yazdir_sorgu)){

echo "<div style=position:relative;width:200px;height:300px;float:left;margin-bottom:30px;margin-left:10px;>";
	  echo "<div style=position:relative;width:200px;height:250px;>"."<img src={$yazdir["kitap_resim"]} width=200 height=250 />"."</div>";
	  echo "<div style=position:relative;width:200px;text-align:center;color:black;line-height:25px;height:50px;>".'<a style=text-decoration:none;color:black; href="ayrinti.php?kitapno='.$yazdir['kitapno'].'">'."".$yazdir["kitapadi"]."</a>"."</div>";
	  echo "</div>"; 
}

if($count > $limit) : 
  $x = 2; // akrif sayfadan önceki/sonraki sayfa gösterim sayisi 
  $lastP = ceil($count/$limit); 

  if($page > 1){

  $onceki = $page-1;
  
  echo "<div style=position:absolute;margin:auto;width:120px;top:650px;left:580px;text-align:center;>"."<a href=\"?page=$onceki\" style=text-decoration:none;color:white;height:30px;line-height:30px;display:block;border-radius:10px;background-color:red;>« Önceki Sayfa </a>"."</div>"; 
  
  }

  // sayfa 1'i yazdir 
  if($page==1) echo "<div style=position:absolute;width:40px;display:none;text-align:center;top:650px;>"."<span class=\"sayfa\" style=height:30px;width:40px;line-height:30px;border-radius:10px;background-color:red;color:white;text-decoration:none;>[1]</span>"."</div>"; 
  else  echo "<div style=position:absolute;width:40px;text-align:center;top:650px;>"."<a href=\"?page=1\" style=height:30px;width:40px;line-height:30px;display:none;border-radius:10px;background-color:red;color:white;text-decoration:none;>[1]</a>"."</div>"; 
  // "..." veya direkt 2 
  if($page-$x > 2) { 
    echo "..."; 
    $i = $page-$x; 
  } else { 
    $i = 2; 
  } 
  // +/- $x sayfalari yazdir 
  for($i; $i<=$page+$x; $i++) { 
    if($i==$page) echo "<div style=position:absolute;width:40px;text-align:center;top:650px;>"."<span class=\"sayfa\" style=height:30px;width:40px;line-height:30px;display:none;border-radius:10px;background-color:red;color:white;text-decoration:none;>[$i]</span>"."</div>"; 
    else echo "<div style=position:absolute;width:40px;text-align:center;top:650px;>"."<a href=\"?page=$i\" style=height:30px;width:40px;line-height:30px;display:none;border-radius:10px;background-color:red;color:white;text-decoration:none;>[$i]</a>"."</div>"; 
    if($i==$lastP) break; 
  } 
  // "..." veya son sayfa 
  if($page+$x < $lastP-1) { 
    echo "..."; 
    echo "<div style=position:absolute;width:40px;text-align:center;top:650px;>"."<a href=\"?page=$lastP\" style=height:30px;width:40px;line-height:30px;display:none;border-radius:10px;background-color:red;color:white;text-decoration:none;>[$lastP]</a>"."</div>"; 
  } elseif($page+$x == $lastP-1) { 
    echo "<div style=position:absolute;width:40px;text-align:center;top:650px;>"."<a href=\"?page=$lastP\" style=height:30px;width:40px;line-height:30px;display:none;border-radius:10px;background-color:red;color:white;text-decoration:none;>[$lastP]</a>"."</div>"; 
  } 
  
  if($page < $lastP){
  
  $sonraki = $page+1;
  
  echo "<div style=position:absolute;width:120px;text-align:center;top:650px;left:700px;>"."<a href=\"?page=$sonraki\" style=height:30px;width:120px;line-height:30px;display:block;border-radius:10px;background-color:red;color:white;text-decoration:none;> Sonraki Sayfa » </a>"."</div>";
  
  }
  
endif; 
	 
	 ?>
  <!-- InstanceEndEditable -->
      
    
 </div>
</div>
<div style="position:relative;width:1200px;text-align:center;line-height:120px;color:white;height:120px;background-color:#666;border-radius:10px;">&copy;Copyright 2019 Bütün Hakları Saklıdır</div>
</div>
</body>
<!-- InstanceEnd --></html>
