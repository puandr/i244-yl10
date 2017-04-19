

<div id="wrap">
<?php
	$pildid = array(1,2,3,4,5,6);
	if (isset( $_POST['pilt']) && in_array($_POST['pilt'], $pildid)){
		echo '<p>Täname hääletamast! :)</p>';
		echo '<p>Valisite pildi nr '.$_POST['pilt'].'</p>';
		echo '<img src="pildid/nameless'.$_POST['pilt'].'.jpg" alt="nimetu '.$_POST['pilt'].'" />';
		
	} else {
		echo '<p>Kahjuks pole midagi valitud! :(</p>';
	}
?>
	

</div>