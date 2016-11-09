<!DOCTYPE html>
<html>
	<head>

		<title>Find Yours</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	</head>
	
	<body>
	
		<?php
			session_start();
		?>

		<nav id="nav">
			<ul id="nav-wrapper">
				<li><a href="#"><b>Home</b></a></li>
				<li><a href="#"><b>About Us</b></a></li>
			</ul>
		</nav>

		<div class="flex-center full-height home">
			<div class="content">
				<h3 class="content-text">INPUT YOUR NIM</h3>
				<form action="server_side.php" method="POST" style="margin-bottom: 16px">
					<input type="text" name="nim">
					<input type="submit" value="SUBMIT">
				</form>

				<?php
					if(isset($_SESSION['data'])){
						echo "<div class='content-text' style='text-align: left'>" . $_SESSION['data'] . "</div>";
						session_destroy();
					}
				?>
			</div>
		</div>

	</body>
</html>
