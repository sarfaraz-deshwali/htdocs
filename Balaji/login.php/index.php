<?php
session_start();

if (isset($_SESSION['id'])) {
	echo "Hellow".$_SESSION['name'];
	
}

else{
	echo "login kar be
	";
}

?>