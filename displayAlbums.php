
<?php 

	function htmlCell($n, $i) {
		echo '
			<div class="cell">
				<div class="title">'.$n.'</div> 
				<!-Image source: '.$i.'->
				<img src= images/'.$i.' onerror = "this.src=\'http://i.imgur.com/hPYOVf9.jpg\';" /> 
			</div>';
	}
	require_once "config.php";
	$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
	$result = $mysqli->query("SELECT * FROM Images");
	while ($row = $result->fetch_assoc() ) {
		htmlCell($row["title"], $row["file_path"]);
	}
?>
