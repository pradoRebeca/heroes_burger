<?php

function session(){
	if(session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}

	if(!isset($_SESSION['statusLogin']) || !$_SESSION['statusLogin'] == true){
		header('location:index.php');
	}
}


?>