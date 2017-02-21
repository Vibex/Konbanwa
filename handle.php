<html>
<body>
<?php
$url = $_GET["q"];
if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
	header('Location: http://www.google.com/search$url');
	exit;
}
header('Location: http://www.google.com');
exit;
?>
</html>
</body>
