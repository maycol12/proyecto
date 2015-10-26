<?php
	session_start();
	unset($_SESSION['id']);
	session_destroy();
	header("Location:index.html");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img border="0" src="http://www.cyberconnect2.jp/naruto/entrance.jpg" width="512" height="348"> 

</body>
</html>