

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
			<form class="uk-form-horizontal uk-margin-large js-login">

				<h2> Login </h2>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-horizontal-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-horizontal-text" type="email" placeholder="email@email.com" required="required">
			        </div>
			    </div>

			     <div class="uk-margin">
			        <label class="uk-form-label" for="form-horizontal-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Your password" required="required">
			        </div>
			    </div>

			    <div class="uk-margin">
			    	<button class="uk-button uk-button-default" type="submit">LOGIN</button>
			    </div>

			</form>
		</div>

		<?php require_once("inc/footer.php"); ?>
		
	</body>
</html>