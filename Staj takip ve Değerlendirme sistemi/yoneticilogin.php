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
<div class="header"><span class="yazi">Yönetici Sayfası</span></div>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">

<div class="col-md-4">
<form class="bosluk3">
  <div class="form-group bosluk1">
    Kullanıcı Adı:
    <input type="email" class="form-control bosluk4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı Adı">
   
  </div>
  <div class="form-group bosluk1">
    Şifre:
    <input type="password" class="form-control bosluk4" id="exampleInputPassword1" placeholder="Şifre">
  </div>
  <button type="submit" class="btn btn-warning bosluk1">Giriş Yap</button>
</form>


</div>
</div>
<div class="col-md-4"></div>

</div>


</div>

</body>


</html>