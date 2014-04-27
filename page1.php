
<?php include("element\articlesgbd.php"); ?>
<?php include("element\header.php");?>
			<?php include("element\menu.php"); ?>
			<?php include("element\articletitle.php"); ?>
			<?php include("element\aside.php");?>
			<?php if (isset($_SERVER['REMOTE_ADDR'])) { if ($_SERVER['REMOTE_ADDR'] == '192.168.1.53' || '192.168.1.66') {include("element\pass.php");}} ?>
			</section>
		<footer>
			<div class="page">
			<div id="pagepage" class="allchoice">
					<a href="page1.php?pages=<?php 
		if(isset($_GET['pages'])) {
				include("element\articlefooterall.php");
					}
				else {
				include("element\articlefooter1.php");
					}
					?></p></a>
				</div>
			</div>
		</footer>
	</body>
</html>
