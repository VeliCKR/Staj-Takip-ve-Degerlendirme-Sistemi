<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql13="select atanılan_ogrenci from atama_tablo ";
$sorgu13=$con4->prepare($sql13);
$sorgu13->execute();
?>
<html>
<head>
<title>Sayfa Başlığı</title>
</head>
<body>

<?php   
// Store the file name into variable
$file = '"'.$satir13['atanılan_ogrenci'].'".pdf';
$filename = '"'.$satir13['atanılan_ogrenci'].'".pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
  
?>
</body>

</html>