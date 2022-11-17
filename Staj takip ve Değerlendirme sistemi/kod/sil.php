<?php if(isset($_GET['sil'])){
	$sqlsil="DELETE FROM kisi WHERE id=?";
	$sorgusil=$con4->prepare($sqlsil);
	$sorgusil->execute([$_GET['sil']]);
	header('Location:komisyonanasayfa.php');
}

?>