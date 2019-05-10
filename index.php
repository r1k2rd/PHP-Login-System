

<?php 

	//Allow config
	define('__CONFIG__', true);
	//Require the config
	require_once "inc/config.php";

 ?>

<!DOCTYPE html>
<html>
	<head>
		

	</head>
	<body>

		<div class="uk-section uk-container uk-text-center">
			<?php 
				echo "Hello world";
				echo "</br>";
				echo "Today is: " . date("Y m d");
			?>

			<p>
				<a href="register.php">Register</a>
				<a href="login.php">Login</a>
			</p>
		</div>



		<?php require_once("inc/footer.php"); ?>
		
	</body>
</html>