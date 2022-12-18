<?php 
	session_start();
	if ($_SESSION['id']!= "") {
		if (isset($_POST['outButton'])) {
			unset($_SESSION['id']);
			session_destroy();
			echo "<script type='text/javascript'>
						window.open('index.php','_self');
					</script>";
		}
	}
?>