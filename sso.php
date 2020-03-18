<?php
session_start();

$session_id = trim($_GET['i']);
if ($session_id != session_id()) {
	session_destroy();
	session_id($session_id);
	session_start();
}

if (isset($_SESSION['sso_sites'])) {
	if (($key = array_search($_SERVER['HTTP_HOST'], $_SESSION['sso_sites'])) !== false) {
		unset($_SESSION['sso_sites'][$key]);
	}
}

header('Content-Type: image/gif');
echo base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');