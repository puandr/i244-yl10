

<div id="wrap">
<?php
	$pildid = array(1,2,3,4,5,6);
	if (empty($_SESSION['haaletatud'])) {
		if (isset( $_POST['pilt']) && in_array($_POST['pilt'], $pildid)){
			echo '<p>Täname hääletamast! :)</p>';
			echo '<p>Valisite pildi nr '.$_POST['pilt'].'</p>';
			echo '<p><img src="pildid/nameless'.$_POST['pilt'].'.jpg" alt="nimetu '.$_POST['pilt'].'" /></p>';
			$_SESSION['haaletatud'] = $_POST['pilt'];
			//echo $_SESSION['haaletatud'];
			
		} else {
			echo '<p>Kahjuks pole midagi valitud! :(</p>';
		}
	} else {
		echo '<p>Olete juba hääleatnud!!</p>';
		echo '<p>Valisite pildi nr '.$_SESSION['haaletatud'].'.</p>';
		echo '<p><img src="pildid/nameless'.$_SESSION['haaletatud'].'.jpg" alt="nimetu '.$_SESSION['haaletatud'].'" /></p>';
	}
	echo '<p><a href=session_end.php>Lõpeta sessiooni</a></p>';
	
?>
	

</div>