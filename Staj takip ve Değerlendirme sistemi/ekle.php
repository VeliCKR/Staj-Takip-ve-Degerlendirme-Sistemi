<?php
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql9="select* from kisi WHERE id=?";
$sorgu9=$con4->prepare($sql9);
$sorgu9->execute([$_GET['id']]);
$satir=$sorgu9->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["onayla"])){
	$adi=$satir['ad'];
	$soy1=$satir['soyad'];
	$num1=$satir['ogrenci_no'];
	$mail1=$satir['eposta'];
	$tele=$satir['ceptelefonu'];
	$start=$satir['stajbaslangic'];
	$bitis1=$satir['Bitis_Tarihi'];
	$guns=$satir['gunsayisi'];
	$yer=$satir['isyeriadi'];
	$csekil=$satir['Calisma_Sekli'];
	
$sayac = $con4->prepare("SELECT * FROM onaylikisi WHERE ogrenci_nos = ?");
$sayac->execute(array($num1));
$kontrol = $sayac->fetch(PDO::FETCH_ASSOC);
if($kontrol > 0)
{
	echo '<script type="text/javascript">
       window.onload = function () { alert("Aynı Numaraya Sahip Öğrenci Onaylanmıştır"); } 
</script>'; 
}
else{
	
	$ekle=$con4->query("insert into onaylikisi (adi,soyadi,ogrenci_nos,epostas,ceptelefonus,stajbaslangic,gunsayisi,isyeriadi,Bitis_Tarihi,Calisma_Sekli) 
	VALUES ('$adi','$soy1','$num1','$mail1','$tele','$start','$guns','$yer','$bitis1','$csekil')");
echo '<script type="text/javascript">
       window.onload = function () { alert("Başarıyla Onaylanmıştır"); } 
</script>'; 
	header("Location: komisyonanasayfa.php");

}
}
?>
<html>
<head>
<title>Sayfa Başlığı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/ekle.css"/>
</head>
<body>
<div class="header"><span class="yazi">Komisyon Sayfası</span>   </div>
<div class="container">
	
	<div class="row">
	
		<div class="col-md-4">	<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2"><img src="images/Kouyenilogo.png" class="bosluk6"></img>
		
</div>
</div>
		<div class="col-md-4">
			<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">
	<form action="" method="POST">
		
		<input type="text" class="form-control bosluk1" name="adi1"	 value="<?=$satir['ad']?>" disabled>
		<input type="text" class="form-control bosluk1" name="soy1" value="<?=$satir['soyad']?>" disabled>
		<input type="text" class="form-control bosluk1" name="number1" value="<?=$satir['ogrenci_no']?>" disabled>
		<input type="text" class="form-control bosluk1" name="mail1" value="<?=$satir['eposta']?>" disabled>
		<input type="text" class="form-control bosluk1" name="tel1" value="<?=$satir['ceptelefonu']?>" disabled>
		<input type="date" class="form-control bosluk1" name="baslangic1" value="<?=$satir['stajbaslangic']?>" disabled>
		<input type="text" class="form-control bosluk1" name="sayi" value="<?=$satir['gunsayisi']?>" disabled>
		<input type="text" class="form-control bosluk1" name="bitis1" value="<?=$satir['Bitis_Tarihi']?>" disabled>
		<input type="text" class="form-control bosluk1" name="mekan11" value="<?=$satir['isyeriadi']?>" disabled>
		<input type="text" class="form-control bosluk1" name="mekan11" value="<?=$satir['Calisma_Sekli']?>" disabled>
		
		<button type="submit" class="btn btn-warning bosluk1" name="onayla" id="buton">Onayla</button>
	
 
		
		</form>

	</div></div>
		<div class="col-md-4">
		
	<a href="komisyonanasayfa.php" class="btn btn-warning bosluk7" name="cikis">Çıkış</a>
</div>
	
	</div>

</div>
</body>
</html>