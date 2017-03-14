<!doctype html>
<html>
	<head>
		<title>Project 3</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="sitebody">
			<div class="banner container-fluid">
				<div class="title">
					Photo Album Thingy
				</div>
			</div>
			<div id="header">
				<div id="menubar">
					<ul id="menu">
						<li><a href="index.php">Images</a></li>
						<li><a href="albums.php">Albums</a></li>
						<li><a href="addImage.php">Add an Image</a></li>
						<li><a href="addAlbum.php">Add an Album</a></li>
						<li><a href="login.php">Log in</a></li>
					</ul>
				</div>
			</div>
			<div class="results">
				<div class="container">
					<div class="row">
						<?php include "displayImages.php"; ?>
							
					</div>
				</div>
			</div>
		</div>
	</body>
</html>