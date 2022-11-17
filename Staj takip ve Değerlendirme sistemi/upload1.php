<?php
$uploaddir="stajdefteri/";
$uploadfile=$uploaddir.basename($_FILES['yukle']['name']);
if(move_uploaded_file($_FILES['yukle']['tmp_name'],$uploadfile)){
			echo '<script type="text/javascript">
       window.onload = function () { alert("Dosya Başarıyla Yüklendi "); } 
</script>';
header('Location:ogrencianasayfa.php');
	
}
else{
	
	
			echo '<script type="text/javascript">
       window.onload = function () { alert("Dosya Yükleme Başarısız"); } 
</script>';
}
?>