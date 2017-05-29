<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
echo"<b>";
	$foo='hello world!';
	$foo=ucwords($foo); //hello world!
	$bar='HELLO WORLD!';
	$bar=ucwords($bar);
	$bar=ucwords(strtolower($bar)); //hello world!
	echo"$foo<b>$bar";
	echo "</b>";
?>
</body>
</html>