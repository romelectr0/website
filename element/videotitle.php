<?php
	if(isset($_GET['videopage'])){
		if(!($_GET['videopage'] > ((floor(count($video)/5)) + 1))) {
			echo("<article>");
			
			echo("<div class='video'>
			<div class='small_banniere'>
					<h1 class='high_text'>");
					if (!((($_GET['videopage'] * 5) - 5) >= (count($video) ))) {
					echo($videotitle[($_GET['videopage'] * 5) - 5]);
					}
					echo ("
					</h1>
				</div>
				");
				if (!((($_GET['videopage'] * 5) - 5) > (count($video) ))) {
			echo($video[($page*5) - 5]);
			}
			if (!((($_GET['videopage'] * 5) - 4) >= (count($video) ))) {
			 echo("
				
				</div>
				<div class='video'>
					<div class='small_banniere'>
						<h1 class='high_text'>");
						if (!((($_GET['videopage'] * 5) - 4) > (count($video) ))) {
						echo($videotitle[($_GET['videopage'] * 5) - 4]);
						}
						echo("
						</h1>
					</div>
					");
					echo($video[($page*5) - 4]);
					if (!((($_GET['videopage'] * 5) - 3) >= (count($video) ))) {
					echo("
					</div>
								<div class='video'>
					<div class='small_banniere'>
						<h1 class='high_text'>");
						if (!((($_GET['videopage'] * 5) - 3) > ((count($video) )))) {
						echo($videotitle[($_GET['videopage'] * 5) - 3]);
						}

						echo("</h1>
					</div>
					");
					echo($video[($page*5) - 3]);
					if (!((($_GET['videopage'] * 5) - 2) >= (count($video) ))) {
					echo("
					</div>
													<div class='video'>
					<div class='small_banniere'>
						<h1 class='high_text'>");
						if (!((($_GET['videopage'] * 5) - 2) > (count($video) ))) {
					echo($videotitle[($_GET['videopage'] * 5) - 2]);
					}
						echo("</h1>
					</div>
					");
					echo($video[($page*5) - 2]);
					if (!((($_GET['videopage'] * 5) - 1) >= (count($video) ))) {
					echo("
					</div>
													<div class='video'>
					<div class='small_banniere'>
						<h1 class='high_text'>");
						if (!((($_GET['videopage'] * 5) - 1) > (count($video) ))) {
						echo($videotitle[($_GET['videopage'] * 5) - 1]);
						}
					if (!((($_GET['videopage'] * 5) - 1) > (count($video) ))) {
						echo("</h1>
					</div>
					");
					echo($video[($page*5) - 1]);
					echo("
					</div>
			");
			}
			}
			}
			}
			}
		}
		if ($_GET['videopage'] > ((floor(count($video)/5)) + 1)) {
			echo("this page doesnt exist");
		}
	}
?>
