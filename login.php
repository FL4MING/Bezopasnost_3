<?php 
	include 'Php_connect.php';
		if ($_POST['login'] != "" && $_POST['pass'] != "") {
			$login = $_POST['login'];
			$pass = $_POST['pass'];
			$data = "SELECT * FROM `users` WHERE `login` = '$login'";
			$check = mysqli_query($conn, $data);
			if (mysqli_num_rows($check) == 1) {
				$row = mysqli_fetch_assoc($check);
				mysqli_close($conn);
				if (password_verify($pass, $row['pass'])) {
						session_start();
						$_SESSION['id'] = session_id();
					echo "<script type='text/javascript'>
						window.open('main.php','_self');
					</script>";
					return $error;
				}
				else {
					$error[]="Введены неверные данные";
					return $error;
				}
			}
			else {
				$error[]="Введены неверные данные";
				return $error;
			}
		}
		else {
			$error[]="Заполните все поля";
			return $error;
		}
	
?>