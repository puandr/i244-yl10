<?php require_once('head.html')?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
		<?php 
		$pildid = array(1,2,3,4,5,6);
		foreach ($pildid as $pilt) {
			echo '<img src="pildid/nameless'.$pilt.'.jpg" alt="nimetu '.$pilt.'" />';
		}		
		?>
	</div>
</div>


<?php require_once('foot.html')?>
