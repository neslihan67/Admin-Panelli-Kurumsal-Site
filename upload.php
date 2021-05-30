<?php

if(isset($_FILES['upload']['name'])){
	$dosya=$_FILES['upload']['tmp_name'];
	$dosyaadi=$_FILES['upload']['name'];
	$dosyaadi_array=explode(".",$dosyaadi);
	$yeni=end($dosyaadi_array);
	$resimyeni=rand().'.'.$yeni;
	chmod('upload',0777);
	$kabul=array("jpg","gif","png","jpeg");
	if(in_array($yeni,$kabul)){
		move_uploaded_file($dosya,'upload/'.$resim_yeni);
		$fonksiyon_numarası=$_GET['CKEditorFuncNum'];
		$url='upload/'.resim_yeni;
		$mesaj='';
		echo "<script> type='txt/javascript' >window.parent.CKEDITOR.tools.callFunction($fonksiyon_numarası,'$url',$mesaj);</script>";
		
	}
}


?>