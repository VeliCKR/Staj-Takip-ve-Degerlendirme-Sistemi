<?php 

$con = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
if(isset($_POST['ekle'])){
	$ad=$_POST['adi'];
	$sifre=$_POST['sifresi'];
	
	$yenisifre=md5($sifre);

$sayac = $con->prepare("SELECT * FROM ogrencibilgi WHERE kullanici_adi = ?");
$sayac->execute(array($ad));
$kontrol = $sayac->fetch(PDO::FETCH_ASSOC);

if($kontrol > 0)
{
	echo '<script type="text/javascript">
       window.onload = function () { alert("Aynı Kullanıcı Adı Bulunmaktadır "); } 
</script>'; 
}
elseif(empty($_POST['adi'])||empty($_POST['sifresi'])){
	echo '<script type="text/javascript">
       window.onload = function () { alert("Boş Alan Bulunmaktadır "); } 
</script>';
	
}
else{
	
	$sql=$con->prepare("insert into ogrencibilgi set kullanici_adi=?,sifre=? ");
	$sql->execute(array($ad,$yenisifre));

	echo '<script type="text/javascript">
       window.onload = function () { alert("Kullanıcı Başarılı Bir şekilde Eklenmiştir "); } 
</script>'; 
}	

}
session_start();
if(isset($_POST['giris'])){ 
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $_SESSION['adi1']=$_POST['adi1'];
       $_SESSION['sifre1']=$_POST['sifre1'];
   $sql1=$con->query("select * FROM ogrencibilgi");
while($satir1=$sql1->fetch(PDO::FETCH_ASSOC)){
	
	$username=$satir1['kullanici_adi'];
	$password=$satir1['sifre'];
	$validated = ($_SESSION['adi1'] == $username) && ( md5($_SESSION['sifre1']) == $password);
	if ($validated) {

    header('Location:ogrencianasayfa.php');
}
elseif(!$validated){
	
	echo '<script type="text/javascript">
       window.onload = function () { alert("Yanlış Şifre veya Yanlış Kullanıcı Adı"); } 
</script>'; 
	
}
}	
}


else{
	echo '<script type="text/javascript">
       window.onload = function () { alert("Giriş Başarısız"); } 
</script>'; 
	
	
}
}

	


?>