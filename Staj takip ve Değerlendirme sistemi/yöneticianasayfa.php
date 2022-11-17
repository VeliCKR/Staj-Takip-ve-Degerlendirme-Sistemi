<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql5="select * from kisi";
$sorgu5=$con4->prepare($sql5);
$sorgu5->execute();
?>
<?php
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql6="select kullanici_adi from komisyonbilgi";
$sorgu6=$con4->prepare($sql6);
$sorgu6->execute();
?>
<?php
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql7="select kullanici_adi from ogretmenbilgi";
$sorgu7=$con4->prepare($sql7);
$sorgu7->execute();
?>
<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql8="select adi from onaylikisi";
$sorgu8=$con4->prepare($sql8);
$sorgu8->execute();
?>
<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql9="select kullanici_adi from ogretmenbilgi";
$sorgu9=$con4->prepare($sql9);
$sorgu9->execute();
?>
<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql10="select kullanici_adi from ogretmenbilgi";
$sorgu10=$con4->prepare($sql10);
$sorgu10->execute();
?>
<html>
<head>
<title>Yönetici</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/yoneticianasayfa.css"/>
</head>
<body>
<div class="header"><span class="yazi">Yönetici Sayfası</span></div>
<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">
		<img src="images/Kouyenilogo.png" class="bosluk6"></img>
	</div>

</div>
<div class="col-md-8">
<a name="capa">
	<a href="#ogretmen" class="btn btn-warning bosluk2">Öğretmenleri Listele</a>
	<a href="#komisyon" class="btn btn-warning bosluk2">Komisyon Üyelerini Listele</a>
	<a href="#ogrenci" class="btn btn-warning bosluk2">Öğrencileri Listele</a>

	<button type="button" class="btn btn-warning bosluk2" data-bs-toggle="modal" data-bs-target="#exampleModal">Atamaları Gerçekleştir</button>

	<button type="button" class="btn btn-warning bosluk2" data-bs-toggle="modal" data-bs-target="#exampleModal1">Alt Roller Tanımla</button>
	<button type="button" class="btn btn-warning bosluk2" data-bs-toggle="modal" data-bs-target="#exampleModal2">Yöneticilere Yetki Ver</button>

</a>
</div>

</div>

<div class="row">
	
<div class="col-md-12">
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<a name="ogretmen">
	<table class="table table-striped ustbosluk">  
            <thead>  
                <tr>  
                    <th>  
                        <center>Ad  </center>
                    </th>  
                    <th>
					<center>ONAYLA</center>
                    </th>
				<th>
					<center>SİL</center>
                    </th>
				</tr>  
			
            </thead>  
            <tbody align="Center">  
    				<?php 
				while($satir2=$sorgu7->fetch(PDO::FETCH_ASSOC)){
			?>
            
				<tr>  
                    <td><?=$satir2['kullanici_adi']?></td>  
					<td><a href="#" class="btn btn-warning" >Onayla</a></td>
					<td><a href="#" class="btn btn-warning" onclick="return confirm('Kaldırılsın mı?')">Reddet</a></td>
				</tr>  
				

<?php
}
?>	                  

			            </tbody>
        </table>  
	<a href="#capa" class="btn btn-warning bosluk2">Geri Dön</a>


</a>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<a name="komisyon">
	<table class="table table-striped ustbosluk">  
            <thead>  
                <tr>  
                    <th>  
                        <center>Ad  </center>
                    </th>  
                    <th>
					<center>ONAYLA</center>
                    </th>
				<th>
					<center>SİL</center>
                    </th>
				</tr>  
			
            </thead>  
            <tbody align="Center">  
    				<?php 
				while($satir1=$sorgu6->fetch(PDO::FETCH_ASSOC)){
			?>
            
				<tr>  
                    <td><?=$satir1['kullanici_adi']?></td>  
					<td><a href="#" class="btn btn-warning" >Onayla</a></td>
					<td><a href="#" class="btn btn-warning" onclick="return confirm('Kaldırılsın mı?')">Reddet</a></td>
				</tr>  
				

<?php
}
?>	                  

			            </tbody>
        </table>  
	<a href="#capa" class="btn btn-warning bosluk2">Geri Dön</a>

</a>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<a name="ogrenci">
	<table class="table table-striped ustbosluk">  
            <thead>  
                <tr>  
                    <th>  
                        <center>ID</center>  
                    </th>  
                    <th>  
                        <center>Ad  </center>
                    </th>  
                    <th>  
                       <center> Soyad </center>
                    </th>  
					<th>  
                       <center> Öğrenci No </center>
                    </th>
					<th>  
                       <center> E Posta </center>
                    </th>
					<th>  
                      <center> Cep Telefonu </center>
                    </th>
					<th>  
                       <center> Staj Başlangıç Tarihi </center>
                    </th>
					<th>  
                       <center> Gün Sayısı </center>
                    </th>
					<th>  
                       <center> Bitiş Tarihi </center>
                    </th>
					<th>  
                       <center> İş Yeri Adı </center>
                    </th>
					<th>  
                       <center> Çalışma Şekli </center>
                    </th>	
					<th>
					<center>ONAYLA</center>
                    </th>
				<th>
					<center>SİL</center>
                    </th>
				</tr>  
			
            </thead>  
            <tbody align="Center">  
    				<?php 
				while($satir=$sorgu5->fetch(PDO::FETCH_ASSOC)){
			?>
            
				<tr>  
                    <td><?=$satir['id']?></td>  
                    <td><?=$satir['ad']?></td>  
                    <td>  
                        <?=$satir['soyad']?>
                    </td>  
                 <td> <?=$satir['ogrenci_no']?></td>  
					 <td>  <?=$satir['eposta']?> </td>  
				 <td>  <?=$satir['ceptelefonu']?>  </td>  
<td><?=$satir['stajbaslangic']?></td>  
								

				<td><?=$satir['gunsayisi']?></td>
				<td><?=$satir['Bitis_Tarihi']?></td>
					<td><?=$satir['isyeriadi']?></td>
					<td><?=$satir['Calisma_Sekli']?></td>
					<td><a href="ekle.php?id=<?=$satir['id']?>" class="btn btn-warning" >Onayla</a></td>
					<td><a href="?sil=<?=$satir['id']?>" class="btn btn-warning" onclick="return confirm('Kaldırılsın mı?')">Reddet</a></td>
				</tr>  
				

<?php
}
?>	                  

			            </tbody>
        </table>  
	<a href="#capa" class="btn btn-warning bosluk2">Geri Dön</a>

</a>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atamaları Seçin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<form method="post" action="">    
    <select class="form-select" name="liste1" aria-label="Default select example">
  <option selected>Atanılacak Öğrenci</option>
  	<?php 
				while($satir8=$sorgu8->fetch(PDO::FETCH_ASSOC)){
	
	?>
  <option><?=$satir8['adi']?></option>


<?php
}
?>	          
</select>
<br>
<select class="form-select" name="liste2" aria-label="Default select example">
  <option selected>Atanan Öğretmen</option>
  <?php 
				while($satir9=$sorgu9->fetch(PDO::FETCH_ASSOC)){
			?>
  
  <option><?=$satir9['kullanici_adi']?></option>
 
<?php
				
}
?>	          
</select>
<br>
        <button type="submit" class="btn btn-warning" name="atama">Kaydet</button>
		
	</form>
      </div>
    </div>
  </div>
</div>
<?php 
if(isset($_POST['atama'])){
	
	$con11 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
	$sayac = $con11->prepare("SELECT * FROM atama_tablo WHERE atanılan_ogrenci = ?");
$sayac->execute(array($_POST['liste1']));
$kontrol = $sayac->fetch(PDO::FETCH_ASSOC);
if($kontrol > 0)
{
	echo '<script type="text/javascript">									
       window.onload = function () { alert("Aynı isimli öğrenciye atama yapılmıştır"); } 
</script>'; 
}
else{
	$ogrenadi=$_POST['liste1'];
	$ograd=$_POST['liste2'];				
	
	$ekle11=$con11->query("insert into atama_tablo (atanılan_ogrenci, atanan_ogretmen) 
	VALUES ('$ogrenadi','$ograd')");
 
}
}


?>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alt Roller Tanımla</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form method="post" action="">
		<select class="form-select" name="liste3" aria-label="Default select example">
			
			<option selected>Atanacak Kişi</option>
			
		<?php 
				while($satir10=$sorgu10->fetch(PDO::FETCH_ASSOC)){
	
	?>	
				<option><?=$satir10['kullanici_adi']?></option>
		
	
<?php
				
}
?>	    
		</select>
			<br>
      <select class="form-select"  name="liste4" aria-label="Default select example">
			
			<option selected>Atanılan Ünvan</option>
				<option>2. Yönetici</option>
		      
			</select>
			
	  </div>
      <div class="modal-footer">
	  
        <button type="submit" class="btn btn-warning" name="rol">Kaydet</button>
      </div>
	  </form>
    </div>
  </div>
</div>
<?php 
if(isset($_POST['rol'])){
	
	$con12 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
    $sorgu12 = $con12->query("SELECT id FROM yoneticiler");
	
if($sorgu12->rowCount() > 1)
{
	echo '<script type="text/javascript">									
       window.onload = function () { alert("En Fazla İki Adet Yönetici Kaydı Yapılabilir"); } 
</script>'; 
}
else{
	$rol=$_POST['liste3'];
	$unvan=$_POST['liste4'];				
	
	$ekle12=$con12->query("insert into yoneticiler (Adi, Unvan) 
	VALUES ('$rol','$unvan')");
 
}
}
?>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yöneticilere Yetki Ver</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  Yetki Verilecek Birimi Seçiniz:<br></br>
        <select class="form-select"  name="liste5" aria-label="Default select example">
			
			<option selected>Atanılan Ünvan</option>
				<option>2. Yönetici</option>
		      
			</select>
      </div>
      <div class="modal-footer">
        
		<button type="button" class="btn btn-warning">Kaydet</button>
      </div>
    </div>
  </div>
</div>
</body>



</html>