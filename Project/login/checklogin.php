<?php
function clearLoggedUser(){
	unset($_SESSION['user']);
}
function getLoggedUser(){
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
	return $user;
}
function setLoggedUser($user){
	$_SESSION['user'] = $user;
}

function checkLoggedUser(){
	 $user = getLoggedUser();
	 if (!$user) {
	 	 echo "Ban phai dang nhap <a href=\"../login/login.php\">Login</a>";
	 	exit();
	 }
	return $user;
}