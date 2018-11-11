
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<script src="../js/index.js"></script>
		<script src="../js/overlay1.js"></script>
		<script src="../js/display.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Link for adding jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>Tatcall : Your complete solution - 
			<?php
				echo $title;
			?>
		</title>
	</head>
	<body>
	<header>
		<section>
			<?php
				require 'header.php';
			?>
		</section>
	</header>

	<?php
		echo '<main class='.$class.'>';
		echo $contents; 
	?>
	
<footer>
<?php
	require 'footer.php';
?>
</footer>
</body>
</html>