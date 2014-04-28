<?php
	$articlesgbd = file_get_contents('articlesgbd.txt',FILE_USE_INCLUDE_PATH);
	$articletitlesgbd = file_get_contents('articletitlesgbd.txt',FILE_USE_INCLUDE_PATH);
	$articleimagesgbd = file_get_contents('articleimagesgbd.txt',FILE_USE_INCLUDE_PATH);
	$article = explode(',',$articlesgbd);
	$articletitle = explode(',',$articletitlesgbd);
	$articleimage = explode(',',$articleimagesgbd);
	if (isset($_GET['pages'])) {
	$page = $_GET['pages'];
	}
 ?>
 
