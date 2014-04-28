<div id="motdepasse">
	<form id="myarraway" action="motdepasse.php?<?php if(isset($_GET['pages'])) {
				echo("pages=");
				echo($page);
				}
				if (isset($_GET['videopage'])){
				echo("videopage=");
				echo($_GET['videopage']);
				}
				?>" method="POST">
	Pass:<input type="text" name="pass"  x-webkit-speech/>
	Pass2:<input type="text" name="pass2"  x-webkit-speech/>
	<input type="Submit" id="buton" value="active" onclick="g()"/>
</div>
