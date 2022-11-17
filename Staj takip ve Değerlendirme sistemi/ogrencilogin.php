<?php include "calismalogin.php";?>

<html>
<head>
<title>Sayfa Başlığı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.min.js"></script>
 
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
<div class="header"><span class="yazi">Öğrenci Sayfası</span></div>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">

<div class="col-md-4">
<form class="bosluk3" method="post" id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group bosluk1">
    Kullanıcı Adı:
    <input type="text" class="form-control bosluk4"  name="adi1"  placeholder="Kullanıcı Adı">
   
  </div>
  <div class="form-group bosluk1">
    Şifre:
    <input type="password" class="form-control bosluk4"  name="sifre1" placeholder="Şifre">
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
<form  method="post" action="" id="form">     
	 Kullanıcı Adı:
	   <input type="text" class="form-control bosluk4"  name="adi"  placeholder="Kullanıcı Adı">
   <br>
    Şifre:
    <input type="password" class="form-control bosluk4" name="sifresi" placeholder="Şifre">
     
	  </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" name="ekle">Kaydet</button> </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>


</html>