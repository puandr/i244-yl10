

<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="?page=tulemus" method="POST">
		<?php
		$pildid = array(1,2,3,4,5,6);
		foreach ($pildid as $pilt) {
			echo '<p>';
			echo '<label for="p'.$pilt.'">';
			echo '<img src="pildid/nameless'.$pilt.'.jpg" alt="nimetu '.$pilt.'" height="100" />';
			echo '</label>';
			echo '<input type="radio" value="'.$pilt.'" id="p'.$pilt.'" name="pilt"/>';
			echo '</p>';
		}	
		?>
	
		
		<br/>
		<input type="submit" value="Valin!"/>
	</form>

</div>

