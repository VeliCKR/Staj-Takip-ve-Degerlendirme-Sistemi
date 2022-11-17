<html>
<head>
<title>Sayfa Başlığı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style type="text/css">
.header{
width:100%;
height:30px;
background-color:#4f4c4c;

}
.yazi{
color:white;
margin-left:60px;
margin-top:20px;
}
.bosluk1{
	margin-top:30px;
	
}
.bosluk2 {
	width:550px;
	margin-top:50px;
}
.bosluk3{
	margin-left:100px;
	width:350px;
}
.bosluk4{
	margin-top:20px;
}
</style>
</head>
<body>
<div class="header"><span class="yazi">Komisyon Sayfası</span></div>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">

<div class="col-md-4">
<form class="bosluk3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group bosluk1">
    Kullanıcı Adı:
    <input type="text" class="form-control bosluk4" name="kadi"placeholder="Kullanıcı Adı">
   
  </div>
  <div class="form-group bosluk1">
    Şifre:
    <input type="password" class="form-control bosluk4" name="ksifre" id="exampleInputPassword1" placeholder="Şifre">
  </div>
  <button type="submit" class="btn btn-warning bosluk1" name="giris">Giriş Yap</button>

<button type="button" class="btn btn-warning bosluk1" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Üye Ol
</button>

</form>

</div>
</div>
<div class="col-md-4"></div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Üye Ol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form  method="post" action="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >     
	 Kullanıcı Adı:
	   <input type="text" class="form-control bosluk4"  name="komisyonadi"  placeholder="Kullanıcı Adı">
   <br>
    Şifre:
    <input type="password" class="form-control bosluk4" name="komisyonsifre" placeholder="Şifre">
     
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="ekle">Kaydet</button></form>
      </div>
    </div>
  </div>
</div>
</div>
<?php 

$con2 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
if(isset($_POST['ekle'])){
	$ad=$_POST['komisyonadi'];
	$sifre=$_POST['komisyonsifre'];
	
	$yenisifre=md5($sifre);

$sayac = $con2->prepare("SELECT * FROM komisyonbilgi WHERE kullanici_adi = ?");
$sayac->execute(array($ad));
$kontrol = $sayac->fetch(PDO::FETCH_ASSOC);

if($kontrol > 0)
{
	echo '<script type="text/javascript">
       window.onload = function () { alert("Aynı Kullanıcı Adı Bulunmaktadır "); } 
</script>'; 
}
elseif(empty($_POST['komisyonadi'])||empty($_POST['komisyonsifre'])){
	echo '<script type="text/javascript">
       window.onload = function () { alert("Boş Alan Bulunmaktadır "); } 
</script>';
	
}
else{
	
	$sql=$con2->prepare("insert into komisyonbilgi set kullanici_adi=?,sifre=? ");
	$sql->execute(array($ad,$yenisifre));

	echo '<script type="text/javascript">
       window.onload = function () { alert("Kullanıcı Başarılı Bir şekilde Eklenmiştir "); } 
</script>'; 
}	

}
session_start();
if(isset($_POST['giris'])){ 
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $_SESSION['kadi']=$_POST['kadi'];
       $_SESSION['ksifre']=$_POST['ksifre'];
   $sql1=$con2->query("select * FROM komisyonbilgi");
while($satir1=$sql1->fetch(PDO::FETCH_ASSOC)){
	
	$username=$satir1['kullanici_adi'];
	$password=$satir1['sifre'];
	$validated = ($_SESSION['kadi'] == $username) && ( md5($_SESSION['ksifre']) == $password);
	if ($validated) {

    header('Location:komisyonanasayfa.php');
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
</body>


</html>