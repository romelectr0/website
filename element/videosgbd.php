<?php
	$videotitlesgbd = file_get_contents('videosgbd.txt', FILE_USE_INCLUDE_PATH);
	$videovideosgbd = file_get_contents('videovideo.txt',FILE_USE_INCLUDE_PATH);
	$videotitle = explode(',',$videotitlesgbd);
	$video = explode(',',$videovideosgbd);
	if(isset($_GET['videopage'])) {
		$page = $_GET['videopage'];
	}
?>
