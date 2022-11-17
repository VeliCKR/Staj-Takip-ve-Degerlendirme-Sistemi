<?php
session_start();
?>
<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql5="select * from kisi";
$sorgu5=$con4->prepare($sql5);
$sorgu5->execute();

?>
<?php
include "kod/sil.php";
?>
<html>
<head>
<title>Sayfa Başlığı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="js/script.js"></script>		

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
.bosluk3{
	margin-left:100px;
	width:350px;
}
.bosluk4{
	margin-top:20px;
}
#yazi{
color:white;
margin-left:1000px;	
}
.bosluk6{	
margin-left:95px;
}
.bosluk2{
	margin-top:30px;
}
.bosluk7{
	margin-top:110px;
}
</style>
</head>
<body>
<div class="header"><span class="yazi">Komisyon Sayfası</span> <?php if(isset($_SESSION["kadi"])&&isset($_SESSION["ksifre"]))
            {
			?>  <span id="yazi">Kullanıcı Adı: <?php echo $_SESSION['kadi'];} ?></span></div>

	<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2"><img src="images/Kouyenilogo.png" class="bosluk6"></img>
		
</div>
</div>
<div class="col-md-4"><input type="text"   class="form-control bosluk7 " id="kutu" onkeyup="arama()"placeholder="Öğrenci No Giriniz"></div>
<div class="col-md-4">
<?phpsession_start();
 
unset($_SESSION['adi1']);
session_destroy();?>
	<a href="girisekrani.php" class="btn btn-warning bosluk7" name="cikis">Çıkış</a>
	
</div>

	</div>
	<div class="row">
	<div class="col-md-12"><table id="ara" class="table table-striped ustbosluk">  
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

</div>
	
	</div>
	</div>



</body>
</html>