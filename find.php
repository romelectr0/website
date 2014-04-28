<?php 
	include('element\articlesgbd.php');
	include('element\filesgbd.php');
	include('element\videosgbd.php');
	if (isset($_POST['nom'])) {
		$str = $_POST['nom'];
		$str = strtolower($str);
		$chaine = explode(" ",$str);
		for($i = 0;$i < count($chaine);$i++) {
			$chaine[$i] = str_replace(' ','',$chaine[$i]);
			}
			for($y = 0;$y < count($videotitle);$y++) {
				$chainenew = $chaine[$i - 1];
				$videotitlevalue = $videotitle[$y];
				$existme = strpos(strtolower($videotitle[$y]),$chaine[0],1);
				if ((!($existme == false)) or ($videotitlevalue[0] == $chainenew[0])) {
				echo('<p>');
					echo($videotitle[$y]);
				echo('</p>');
				}
			}
			
		}
?>
