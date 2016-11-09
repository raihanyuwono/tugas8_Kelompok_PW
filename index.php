<!DOCTYPE html>
<html>
	<head>

		<title>Find Yours</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	</head>
	
	<body style="background-color: #767d89">
	
		<?php
			session_start();
		?>

		<nav id="nav">
			<ul id="nav-wrapper">
			</ul>
		</nav>

		<div class="flex-center home" style="padding-top: 8%">
			<div class="content">
				<h3 class="content-text">INPUT RELIGION</h3>
				<form action="server_side.php" method="GET" style="margin-bottom: 16px">
					<input type="text" name="religion">
					<input type="submit" value="SUBMIT">
				</form>

				<?php
					if(isset($_SESSION['data'])){
						echo "<div class='content-text' style='text-align: left; padding-bottom: 16px;'>" . $_SESSION['data'] . "</div>";
						session_destroy();
					}
				?>
			</div>
		</div>

	</body>
</html>
