
<?php 
function w($conevol) {
if (isset($_POST['value1'])) {
if (isset($_POST['value3'])) {
if (isset($_POST['value5'])) {
$conelenght = $_POST['value5'];
$chamberdiameter = $_POST['value3'];
$cannondiameter = $_POST['value1'];
$pi = 3.14159265359;
if (($conelenght and $chamberdiameter and $cannondiameter) != 0) {
$conelenght = (Int)$conelenght;
$chamberdiameter = (Int)$chamberdiameter;
$cannondiameter = (Int)$cannondiameter;
$ca = ($conelenght/3);
$cb = $chamberdiameter/2;
$cc = ($cb*$cb)*$pi;
$cd = $cannondiameter/2;
$ce = ($cd*$cd)*$pi;
$cf = ($ce+sqrt($ce*$cc)+$cc);
$cg = $ca*$cf;
return($cg);
}
else {
return 0;
}
}
}
}
}
function x($value){
$number;
if (isset($_POST['value1']))
{
if (isset($_POST['value2']))
{
if (isset($_POST['value3']))
{
if (isset($_POST['value4']))
{
$cannonlenght = $_POST['value2'];
$chamberlenght = $_POST['value4'];
$chamberdiameter = $_POST['value3'];
$cannondiameter = $_POST['value1'];
/*if (0 == 1) {
	$a = prompt("quel est la longeur de la chambre a combustion de votre patator ?");
	$b = prompt("quel est la longeur du cannon de votre patator ?");
	$c = prompt("quel est le diametre de la chambre a combustion de votre patator ?");
	$d = prompt("quel est le diametre du canon de votre patator  ?");
	$bv = Int(a);
	$bw = Int(b);
	$bx = Int(c);
	$by = Int(d);
	$bz = (bx/2);
    $ca = (bz*bz);
    $cb = (ca*pi);
    $cc = (cb*bv);
    $cd = (by/2);
    $ce = (cd*cd);
    $cf = (ce*pi);
    $cg = (cf*bw);
    $g = (cc/cg);
	$h ;
		if ( g <1.8 && g > 1.6) {
		h = ("le ratio de votre patator est bon");
		}
	else if (g > 1.8) {
		h = ( "le ratio de votre patator est trop eleve augmenter le volume du canon ou abaisser le volume de la chambre a combustion");
		}
	else if (g < 1.6) {
		h = ("le ratio de votre patator est trop faible augmenter le volume de la chambre ou abaisse le volume du canon");
		}
		alert(h + "le ratio de votre patator est " + g );
	}*/
if ($chamberlenght == 0) {
$pi = 3.14159265359;
	$w = $chamberdiameter;
	$x = $cannondiameter;
	$z = $cannonlenght;
	$k = (Int)$w;
	$l = (Int)$x;
	$m = (Int)$z;
	$n = ($l/2);
    $o = ($n*$n);
    $p = ($o*$pi);
    $q = ($p*$m);
    $r = ($q*1.7);
    $s = ($k/2);
    $t = ($s*$s);
    $u = ($t*$pi);
    $v = ($r/$u);
	return($v);
	}
if ($cannonlenght == 0) {
$pi = 3.14159265359;
	$z = $chamberdiameter;
	$aa = $chamberlenght;
	$ab = $cannondiameter;
	$z = (Int)$z;
	$aa = (Int)$aa;
	$ab = (Int)$ab;
	$ac = ($z/2);
    $ad = ($ac*$ac);
    $ae = ($ad*$pi);
    $af = ($ae*$aa);
    $ag = ($ab/2);
    $ah = ($ag*$ag);
    $ai = ($ah*$pi);
    $aj = ((w(0)+$af)/1.7);
    $ak = ($aj/$ai);
	return($ak);
	}
if ($cannondiameter == 0) {
$pi = 3.14159265359;
	$aaad = $chamberdiameter;
	$aaae = $chamberlenght;
	$aaaf = $cannonlenght;
	$ao = (Int)$aaad;
	$ap = (Int)$aaae;
	$aq = (Int)$aaaf;
	$ar = ($ao/2);
    $at = ($ar*$ar);
    $au = ($at*$pi);
    $av = ($au*$ap);
    $aw = (($av+w(0))/1.7);
    $ax = ($aw/$aq);
    $ay = ($ax/$pi);
    $az = sqrt($ay);
    $ba = ($az*2);
	return($ba);
	}
if ($chamberdiameter == 0) {
$pi = 3.14159265359;
	$aaag = $chamberlenght;
	$aaah = $cannonlenght;
	$aaai = $cannondiameter;
	$be = (Int)$aaag;
	$bf = (Int)$aaah;
	$bg = (Int)$aaai;
	$bh = ($bg/2);
    $bi = ($bh*$bh);
    $bj = ($bi*$pi);
    $bk = ($bj*$bf);
    $bl = ($bk*1.7);
    $bm = ($bl/$be);
    $bn = ($bm/$pi);
    $bo = sqrt($bn);
    $bq = ($bo*2);
	return($bq);

	}}}}}}
	function g($type) {
	if (isset($_POST['value1']))
{
	if (isset($_POST['value2']))
{
if (isset($_POST['value3']))
{
if (isset($_POST['value4']))
{
$cannonlenght = $_POST['value2'];
$chamberlenght = $_POST['value4'];
$chamberdiameter = $_POST['value3'];
$cannondiameter = $_POST['value1'];
if ($chamberlenght == 0) {
return(1);
}
if ($cannonlenght == 0) {
return(2);
}
if ($cannondiameter == 0) {
return(3);
}
if ($chamberdiameter == 0) {
return(4);
}
	}}}}}
	function z() {
	if(isset($_GET['pages'])){
	$page = $_GET['pages'];
	return($page);
	}
	if (isset($_GET['videopage'])) {
	return('videopage1.php?videopage='+$_GET['videopage']);
	
	}
	}
	
	?>
	<?php if (isset($_GET['pages'])) {
	echo("<html><head><title></title></head><body>
	<a href=");
	echo('"');
	echo("page1.php?pages=");
	$lol3 = z();
	echo($lol3);
	echo("&value=");
	$lol = x(0); 
	echo($lol);
	echo("&type=");
	$lol2 = g(0);
	echo($lol2);
	if(isset($_POST['value1'])){
	if(!$_POST['value1'] == 0){
	echo('&cannondiameter=');
	echo($_POST['value1']);
	echo('"');
	}
	}
	if(isset($_POST['value2'])){
	if(!$_POST['value2'] == 0) {
	echo('&cannonlenght=');
	echo($_POST['value2']);
	echo('"');
	}
	}
	if(isset($_POST['value3'])){
	if(!$_POST['value3'] == 0) {
	echo('&chamberdiameter=');
	echo($_POST['value3']);
	echo('"');
	}
	}
	if(isset($_POST['value4'])){
	if(!$_POST['value4'] == 0) {
	echo('&chamberlenght=');
	echo($_POST['value4']);
	echo('"');
	}
	}
	echo(">lololo</a></body></html>");
	}
	elseif (isset($_GET['videopage'])) {
	echo("<a href=");
	echo('"');
	echo("videopage1.php?videopage=");
	echo($_GET['videopage']);
	echo("&value=");
	$lol = x(0); 
	echo($lol);
	echo("&type=");
	$lol2 = g(0);
	echo($lol2);
	if(isset($_POST['value1'])){
	if(!$_POST['value1'] == 0){
	echo('&cannondiameter=');
	echo($_POST['value1']);
	echo('"');
	}
	}
	if(isset($_POST['value2'])){
	if(!$_POST['value2'] == 0) {
	echo('&cannonlenght=');
	echo($_POST['value2']);
	echo('"');
	}
	}
	if(isset($_POST['value3'])){
	if(!$_POST['value3'] == 0) {
	echo('&chamberdiameter=');
	echo($_POST['value3']);
	echo('"');
	}
	}
	if(isset($_POST['value4'])){
	if(!$_POST['value4'] == 0) {
	echo('&chamberlenght=');
	echo($_POST['value4']);
	echo('"');
	}
	}
	echo(">lololo</a>");
	}
	else {
		echo("<a href=");
	echo('"');
	echo("page1.php?pages=1");
	echo("&value=");
	$lol = x(0); 
	echo($lol);
	echo("&type=");
	$lol2 = g(0);
	echo($lol2);
	if(isset($_POST['value1'])){
	if(!$_POST['value1'] == 0){
	echo('&cannondiameter=');
	echo($_POST['value1']);
	echo('"');
	}
	}
	if(isset($_POST['value2'])){
	if(!$_POST['value2'] == 0) {
	echo('&cannonlenght=');
	echo($_POST['value2']);
	echo('"');
	}
	}
	if(isset($_POST['value3'])){
	if(!$_POST['value3'] == 0) {
	echo('&chamberdiameter=');
	echo($_POST['value3']);
	echo('"');
	}
	}
	if(isset($_POST['value4'])){
	if(!$_POST['value4'] == 0) {
	echo('&chamberlenght=');
	echo($_POST['value4']);
	echo('"');
	}
	}
	echo(">lololo</a>");
	}?>
