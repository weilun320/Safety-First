<?php
	if (isset($_POST['signout']))
	{
		session_unset();
		session_destroy();
		
		header('Location: signin.php');
		exit();
	}
?>