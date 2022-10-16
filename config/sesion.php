<?php
  if ( !isset($_SESSION) ) session_start();

	if($_SESSION['activo']<>true){
		session_destroy();
		header("Location: ../login.php");
	}
?>