<!DOCTYPE html>
<html>
<head><?php
	$given="Taumatawhakatangihanga";
	if (isset($_POST['string'])) {
		$n=$_POST['string'];
		$hasil=str_replace($n, "", $given);
	}

?>
	<title> Q9 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Given String</h3>
	<h5><?= $given ?></h5>
	Remove
	<input type="text" name="string">
<button type="submit" name="min">remove</button>
<br>
<br>
<?php
	if (!empty($_POST['string'])) {
		?>
		<h5>Result  </h5><?= $hasil ?>
		<?php
}
?>
</form>
</body>
</html>