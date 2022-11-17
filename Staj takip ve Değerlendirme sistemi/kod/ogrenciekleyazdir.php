<?php 

$con1 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
if(isset($_POST["onay"])){
$secim=$_POST["secim1"];
if($secim=="Staj"){
	$secim="Staj";
}
elseif($secim=="İME"){
	$secim="İME";
}
$ad = $_POST["adi"];
$soy = $_POST["soy"];
$num = $_POST["number"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$baslangic = $_POST["baslangic"];
$bit = $_POST["bitis"];
$mekan = $_POST["mekan"];
$sayac = $con1->prepare("SELECT * FROM kisi WHERE ogrenci_no = ?");
$sayac->execute(array($num));
$kontrol = $sayac->fetch(PDO::FETCH_ASSOC);
if($kontrol > 0)
{
	echo '<script type="text/javascript">									
       window.onload = function () { alert("Aynı Numaraya Sahip Öğrencinin Kayıt İşlemleri Yapılmıştır"); } 
</script>'; 
}
elseif(empty($_POST['adi'])||empty($_POST['soy'])||empty($_POST['number'])||empty($_POST['mail'])||empty($_POST['tel'])||empty($_POST['baslangic'])||empty($_POST['bitis'])||empty($_POST['mekan'])){
	echo '<script type="text/javascript">		
       window.onload = function () { alert("Boş Alan Bulunmaktadır "); } 
</script>';
	
}
else{
	
	$sql=$con1->prepare("insert into kisi set ad=?,soyad=?, ogrenci_no=?, eposta=?, ceptelefonu=?, stajbaslangic=?, gunsayisi=?, isyeriadi=?, Calisma_Sekli=? ");
	$sql->execute(array($ad,$soy,$num,$mail,$tel,$baslangic,$bit, $mekan, $secim));

	echo '<script type="text/javascript">																																		
       window.onload = function () { alert("İşlem Başarılı Bir Şekilde Onaylanmıştır "); } 																				
</script>'; 
}	
}
	elseif(isset($_POST["yazdir"])){
$secim = $_POST["secim1"];

if($secim=="Staj"){
	$secim="Staj";
}
elseif($secim=="İME"){
	$secim="İME";
}
else{
	echo '<script type="text/javascript">																																		
       window.onload = function () { alert("Lütfen İstihdam Türünü Seçiniz "); } 																				
</script>'; 
}
$ad = $_POST["adi"];
$soy = $_POST["soy"];
$num = $_POST["number"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$baslangic = $_POST["baslangic"];
$bit = $_POST["bitis"];
$mekan = $_POST["mekan"];
		
	}		

?>