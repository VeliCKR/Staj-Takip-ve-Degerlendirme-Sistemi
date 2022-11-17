<?php
session_start();
?>
<?php 
$con4 = new PDO("mysql:host=localhost;port=3340;dbname=calisma", "root", "");
$sql13="select atanılan_ogrenci from atama_tablo where atanan_ogretmen='".$_SESSION['ograd']."'";
$sorgu13=$con4->prepare($sql13);
$sorgu13->execute();
?>
<html>
<head>
<title>Sayfa Başlığı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/ogretmenanasayfa.css"/>
</head>
<body>
<div class="header"><span class="yazi">Öğretmen Sayfası</span> <?php if(isset($_SESSION["ograd"])&&isset($_SESSION["ogrsifre"]))
            {
			?>  <span id="yazi">Kullanıcı Adı: <?php echo $_SESSION['ograd'];} ?></span></div>
<div class="container">
	
	<div class="row">
	
		<div class="col-md-4">	<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2"><img src="images/Kouyenilogo.png" class="bosluk6"></img>
		
</div>
</div>
		<div class="col-md-4"></div>
		<div class="col-md-4"><?phpsession_start();
 
unset($_SESSION['ograd']);
session_destroy();?>
	<a href="girisekrani.php" class="btn btn-warning bosluk7" name="cikis">Çıkış</a>
</div>
	
	</div>
<div class="row">
	<div class="shadow-sm p-3 mb-5 bg-white rounded "><span id="liste"><b><center>Size Atanılan Öğrenci Listesi:</center></b></span></div>
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<table class="table table-striped ustbosluk">  
		<thead>  
                <tr>  
                    <th style="width: 50px;">  
                        <center>Ad  </center>
                    </th>
                    <th style="width: 50px;">  
                        <center>Staj Defterini Gör</center>
                    </th>  
         		  					
                    <th style="width: 50px;">  
                        <center>Değerlendirmeni Yap  </center>
                    </th>  
         		
         		
         		
				</tr>  
	    
		</thead>  
            <tbody align="Center"> 			
    				<?php 
				while($satir13=$sorgu13->fetch(PDO::FETCH_ASSOC)){
			?>
            
				<tr>  
                    <td><?=$satir13['atanılan_ogrenci']?></td>  
                    <td><a href="stajdefteri.php" class="btn btn-warning" >Staj Defteri</a></td>  
                    <td><a href="#" class="btn btn-warning" >Değerlendirme</a></td>  
				
				</tr>  

<?php
}
?>	                  

			            </tbody>
        </table>  

	
	</div>
</div>
<div class="col-md-3"></div>
</div>

</body>
</html>