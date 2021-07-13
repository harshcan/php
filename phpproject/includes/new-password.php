<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>

<div class="wrapper-main">
	<section class="section-default">



		<?php
		$selector = $_GET["selector"];
		$validator = $_GET["validator"];

		if (empty($selector) || empty($validator)) {
			echo "COULD not validate your request!";
		} else {
			if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
				echo "Yes ";
				echo "<form action='includes/reset-password.inc.php' method='post'>
				<input type='hidden' name='selector' value='<?php echo $selector ?>'>
				<input type='hidden' name='validator' value='<?php echo $validator ?>'>
				<input type='password' name='pwd' placeholder='Password'>
				<input type='password' name='pwd-repeat' placeholder='Confirm Password'>
				<button type='submit' name='reset-password-submit'>Submit</button>
				";
			}
		}
		?>



	</section>
</div>
</body>
</html>