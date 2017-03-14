
<?php 

	function htmlCell($n, $i, $t, $l) {
		echo '
			<div class="cell">
				<div class="title">'.$n.'</div> 
				<!-Image source: '.$i.'->
				<img src= '.$i.' onerror = "this.src=\'http://i.imgur.com/hPYOVf9.jpg\';" /> 
				<div class="type"> Type: '.$t.'</div> 
				<div class="loc"> Location: '.$l.'</div> 
			</div>';
	}

	
?>
