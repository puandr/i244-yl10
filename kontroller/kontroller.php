<?php require_once('head.html')?>

<?php 
$pildid = array(1,2,3,4,5,6);

if (isset( $_GET["page"] )) {
	$kuhuvaja = $_GET["page"];
	//echo "page mutuja on ".$kuhuvaja;

	switch($kuhuvaja) {
		case "pealeht" : include("pealeht.php"); break;
		case "galerii" : include("galerii.php"); break;
		case "vote"	: include("vote.php"); break;
		case "tulemus": include("tulemus.php"); break;
	}
} else {
	include("pealeht.php");}




require_once('foot.html');

/*
foreach ($pildid as $pilt) {
	echo '<img src="pildid/nameless'.$pilt.'.jpg" alt="nimetu '.$pilt.'" />';
}
*/

	
	
?>