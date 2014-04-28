<?php
	if(isset($_GET['filepage'])){
		if(!($_GET['filepage'] > ((floor(count($article)/5)) + 1))) {
			echo("<article>");
			echo("
			<div class='article'>
			<div class='small_banniere'>
			<img src=");
			echo("'");
			if (!((($_GET['filepage'] * 5) - 5) >= (count($article) ))) {
				echo($articleimage[($page*5) - 5]);
				echo("'");
				}
			echo("alt='pseudo hack' class='categorie'/>
					<h1 class='high_text'>");
					if (!((($_GET['filepage'] * 5) - 5) >= (count($article) ))) {
					echo($articletitle[($_GET['filepage'] * 5) - 5]);
					}
					echo ("
					</h1>
				</div>
				");
				if (!((($_GET['filepage'] * 5) - 5) > (count($article) ))) {
			echo($article[($page*5) - 5]);
			}
			echo("</div>");
			if (!((($_GET['filepage'] * 5) - 4) >= (count($article) ))) {
			echo("<div class='article'>
			<div class='small_banniere'>
			<img src=");
			echo("'");
			if (!((($_GET['filepage'] * 5) - 4) >= (count($article) ))) {
				echo($articleimage[($page*5) - 4]);
				echo("'");
				}
			echo("alt='pseudo hack' class='categorie'/>
					<h1 class='high_text'>");
						if (!((($_GET['filepage'] * 5) - 4) > (count($article) ))) {
						echo($articletitle[($_GET['filepage'] * 5) - 4]);
						}
						echo("
						</h1>
					</div>
					");
					echo($article[($page*5) - 4]);
					echo("</div>");
					if (!((($_GET['filepage'] * 5) - 3) >= (count($article) ))) {
								echo("<div class='article'>
								<div class='small_banniere'>
			<img src=");
			echo("'");
			if (!((($_GET['filepage'] * 5) - 3) >= (count($article) ))) {
				echo($articleimage[($page*5) - 3]);
				echo("'");
				}
			echo("alt='pseudo hack' class='categorie'/>
					<h1 class='high_text'>");
						if (!((($_GET['filepage'] * 5) - 3) > ((count($article) )))) {
						echo($articletitle[($_GET['filepage'] * 5) - 3]);
						}

						echo("</h1>
					</div>
					");
					echo($article[($page*5) - 3]);
					echo("</div>");
					if (!((($_GET['filepage'] * 5) - 2) >= (count($article) ))) {
			echo("<div class='article'
			<div class='small_banniere'>
			<img src=");
			echo("'");
			if (!((($_GET['filepage'] * 5) - 2) >= (count($article) ))) {
				echo($articleimage[($page*5) - 2]);
				echo("'");
				}
			echo("alt='pseudo hack' class='categorie'/>
					<h1 class='high_text'>");
						if (!((($_GET['filepage'] * 5) - 2) > (count($article) ))) {
					echo($articletitle[($_GET['filepage'] * 5) - 2]);
					}
						echo("</h1>
					</div>
					");
					echo($article[($page*5) - 2]);
					echo("</div>");
					if (!((($_GET['filepage'] * 5) - 1) >= (count($article) ))) {
			echo("<div class='article'>
			<div class='small_banniere'>
			<img src=");
			echo("'");
			if (!((($_GET['filepage'] * 5) - 1) >= (count($article) ))) {
				echo($articleimage[($page*5) - 1]);
				echo("'");
				}
			echo("alt='pseudo hack' class='categorie'/>
					<h1 class='high_text'>");
						if (!((($_GET['filepage'] * 5) - 1) > (count($article) ))) {
						echo($articletitle[($_GET['filepage'] * 5) - 1]);
						}
						echo("</div>");
					if (!((($_GET['filepage'] * 5) - 1) > (count($article) ))) {
						echo("</h1>
					</div>
					");
					echo($article[($page*5) - 1]);
					echo("
					</div>
			");
			}
			}
			}
			}
			}
		}
		if ($_GET['filepage'] > ((floor(count($article)/5)) + 1)) {
			echo("this page doesnt exist");
		}
	}
?>
