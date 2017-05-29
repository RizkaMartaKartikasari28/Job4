<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
echo"<b>";
	$foo='hello world!';
	$foo=ucfirst($foo); //hello world!
	$bar='HELLO WORLD!';
	$bar=ucfirst($bar);
	$bar=ucfirst(strtolower($bar)); //hello world!
	echo"$foo<b>$bar";
	echo "</b>";
?>
</body>
</html>