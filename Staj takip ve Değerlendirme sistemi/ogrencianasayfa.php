<?php
session_start();
?>
<html>
<head>
<title>Sayfa Başlığı</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/main.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
<div class="header"><span class="yazi">Öğrenci Sayfası</span><?php if(isset($_SESSION["adi1"])&&isset($_SESSION["sifre1"]))
            {
			?>  <span id="yazi">Kullanıcı Adı: <?php echo $_SESSION['adi1'];} ?></span></div>
<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2"><img src="images/Kouyenilogo.png" class="bosluk6"></img>
		
</div>
</div>
<div class="col-md-4">
	<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">
	<form action="" method="POST" id="form" >
	<center>		
		<input class="form-check-input"  type="radio" name="secim1" value="Staj" checked>
 		Staj
  		<input class="form-check-input"  type="radio" name="secim1" value="İME" >
  		İME</center>
		<input type="text" class="form-control bosluk1" name="adi"	 placeholder="Adı">
		<input type="text" class="form-control bosluk1" name="soy" placeholder="Soyadı">
		<input type="text" class="form-control bosluk1" name="number" placeholder="Öğrenci No">
		<input type="text" class="form-control bosluk1" name="mail" placeholder="E Posta">
		<input type="text" class="form-control bosluk1" name="tel" placeholder="Cep Telefonu">
		<input type="date" class="form-control bosluk1" name="baslangic" placeholder="Staj Başlangıç Tarihi">
		<input type="text" class="form-control bosluk1" name="bitis" placeholder="Gün Sayısını Giriniz">
		<input type="text" class="form-control bosluk1" name="mekan" placeholder="İş Yeri Adını Giriniz">
		
		<button type="submit" class="btn btn-warning bosluk1" name="onay" id="buton">Onayla</button>
		<button type="submit" class="btn btn-warning bosluk1" name="yazdir" id="btnPrint" >Yazdır</button>
			
			<?phpsession_start();
 
unset($_SESSION['adi1']);
session_destroy();?>
	<a href="girisekrani.php" class="btn btn-warning bosluk3" name="cikis">Çıkış</a>
	
		</form>

	</div>
	<div id="dvContainer"></div>
</div>
<div class="col-md-4">
<div class="shadow-sm p-3 mb-5 bg-white rounded bosluk2">
	
<form action="upload.php" method="post" enctype="multipart/form-data">
     Başvuru Formu<br><br>  <input type="file" name="yukle"/>
	   <input type="submit" value="yukle"/>
		</form>
<form action="upload1.php" method="post" enctype="multipart/form-data">
     Staj Defteri<br><br>  <input type="file" name="yukle"/>
	   <input type="submit" value="yukle"/>
		</form>
</div>
</div>
</div>
</div>

<?php include "kod/ogrenciekleyazdir.php"?>

 <script type="text/javascript">

      $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title></title>');
            printWindow.document.write('</head><h1><center>Staj Formu</center></h1>Adı: <?php echo $ad; ?> <br><hr>Soyadı: <?php echo "".$soy; ?><br><hr> Numara: <?php echo "".$num;?><br><hr> Mail Adresi: <?php echo "".$mail;?> <br><hr>Telefonu: <?php echo "".$tel;?> <br><hr>Çalışma Türü: <?php echo "".$secim;?><br><hr>Başlangıç Tarihi: <?php echo "".$baslangic;?><br><hr> Gün Sayısı: <?php echo "".$bit;?><br><hr> İş Yeri Adı: <?php echo "".$mekan;?><br><hr> Kişi İmzası <br><hr> Stajdan Sorumlu Öğretmen İmzası <br><hr> İş yeri Sorumlusu İmzası <br><hr><body>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
		
			
					
 </script>
</body>


</html>	