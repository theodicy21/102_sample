<?php
	
	if ($_POST['uname']=="Charles" && $_POST['pass']=="Babbage") {
		session_start();
		$_SESSION['fname'] = $_POST['uname'];
		$_SESSION['lname'] = $_POST['pass'];
		header('Location: Homepage.php');
	} else {
		echo '<script type="text/javascript">alert("Incorrect Username/Password!");window.location="MyIndex.php"</script>';
	}

?>