<?php

if (isset($_POST["reset-password-submit"])) {

	$selector = $_GET["selector"];
	$validator = $_GET["validator"];
	$password = $_GET["pwd"];
	$passwordRepeat = $_GET["pwd-repeat"];


	if (empty($password) || empty($passwordRepeat)) {
		header("location: ../new-password.php?newpwd=empty");
		exit();
	} else if ($password != $passwordRepeat) {
		header("location: ../new-password.php?newpwd=pwdnotsame");
		exit();
	}


	$currentDate = date("U");

	require 'dbh.inc.php';


	$sql = "SELECT * FROM pwdReset WHERE pwdresetSelector=? AND pwdResetExpires >=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an Error!";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "You need to re-submit your reset request";
			exit();
		} else {

			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);


			if ($tokenCheck === false) {
				echo 'Link Expired! You have to resubmit your reset request';
				exit();
			} elseif ($tokenCheck === true) {

				$tokenEmail = $row['pwdResetEmail'];

				$sql = "SELECT * FROM users WHERE usersEmail=?;";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo 'There was an error';
					exit();
				} else {
					mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					if (!$row = mysqli_fetch_assoc($result)) {
						echo 'you have to resubmit your reset request';
						exit();
					} else {

						$sql = "UPDATE users SET usersPwd=? WHERE usersEmail=?;";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {

							echo 'There was an error';
							exit();
						} else {
							$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
							mysqli_stmt_execute($stmt);

							$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
							$stmt = mysqli_stmt_init($conn);
							if (!mysqli_stmt_prepare($stmt, $sql)) {

								echo 'There was an error';
								exit();
							} else {

								mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
								mysqli_stmt_execute($stmt);
								header("location: ./login.php?signin=passwordupdated");
							}
						}
					}
				}
			}
		}
	}
} else {
	header("location: ../index.php");
}
