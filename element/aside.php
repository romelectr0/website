
		<aside>
		<div id="entetearraway">
		<p id="entetearrawaytext">Calculateur de ratio de patator</p>
		</div>
				<form id="myarraway" action="calcul.php?<?php if(isset($_GET['pages'])) {
				echo("pages=");
				echo($page);
				}
				if (isset($_GET['videopage'])){
				echo("videopage=");
				echo($_GET['videopage']);
				}
				?>" method="POST">
					<tr>
						<p class="thevalue">spudgun cannon diameter :</p><input id="value1" type="input" name="value1"
						<?php if(isset($_GET['value'])){if(isset($_GET['type'])){$type = $_GET['type'];
						if($type == 3){echo('value=');echo('"');echo($_GET['value']);echo('"');echo("style=");echo('"');echo("color:#FF0000");echo('"');}
						else{if (isset($_GET['cannondiameter'])){echo('"');echo($_GET['cannondiameter']);echo('"');}}}}?>/>
						<p class="thevalue">spudgun cannon lenght :</p><input id="value2" type="input" name="value2"
						<?php if(isset($_GET['value'])){if(isset($_GET['type'])){$type = $_GET['type'];
						if($type ==  2){echo('value=');echo('"');echo($_GET['value']);echo('"');echo("style=");echo('"');echo("color:#FF0000");echo('"');}
						else{if (isset($_GET['cannonlenght'])){echo('"');echo($_GET['cannonlenght']);echo('"');}}}}?>/>
						<p class="thevalue">spudgun combustion chamber diameter :</p><input id="value3" type="input" name="value3" 
						<?php if(isset($_GET['value'])){if(isset($_GET['type'])){$type = $_GET['type'];
						if($type == 4){echo('value=');echo('"');echo($_GET['value']);echo('"');echo("style=");echo('"');echo("color:#FF0000");echo('"');}
						if(!$type == 4){if (isset($_GET['chamberdiameter'])){echo('"');echo($_GET['chamberdiameter']);echo('"');}}}}?>/>
						<p class="thevalue">spudgun combustion chamber lenght :</p><input id="value4" type="input" name="value4" 
						<?php if(isset($_GET['value'])){if(isset($_GET['type'])){$type = $_GET['type'];
						if($type == 1){echo('value=');echo('"');echo($_GET['value']);echo('"');echo("style=");echo('"');echo("color:#FF0000");echo('"');}
						else{if (isset($_GET['chamberlenght'])){echo('"');echo($_GET['chamberlenght']);echo('"');}}}}?>/>
						<p class="thevalue">spudgun cone lenght:</p><input id="value5" type="input" name="value5"/>
						<input type="Submit" id="button" value="results" onclick="f()"/>
					</tr>
				</form>
			</aside>
