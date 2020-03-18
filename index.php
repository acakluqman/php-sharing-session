<?php
$sites = array('localhost/ssoone', 'localhost/ssotwo');

session_start();
if (!isset($_SESSION['sso_sites'])) {
	foreach($sites as $site) {
		if ($site != $_SERVER['HTTP_HOST']) {
			$_SESSION['sso_sites'][] = $site;
		}
	}
}
?>

<html>
<head></head>

<body>
	My Session ID: <?php echo(session_id()); ?>

	<?php
	foreach ($_SESSION['sso_sites'] as $site) {
		$url = sprintf('http://%s/sso.php?i=%s', $site, session_id());
		echo('<img src="'.$url.'" style="border:0;" alt=""/>');
	}
	?>

</body>
</html>