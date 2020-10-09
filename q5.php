<!DOCTYPE html>
<html>
<head><?php
	$fib=array();
	
	if (isset($_POST['string'])) {
		$n=$_POST['string'];
		$hasil=str_replace(" ", "%20", $n);
	}

?>
	<title> Q5 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Replace All Space with %20</h3>
<input type="text" size="50" name="string">
<button type="submit">Cari</button>
<br>
<br>
<?php
	if(!empty($n)){
		?>

		<h4>Hasilnya</h4>
		<h5><?= $hasil ?></h5>

		<?php
	}

?>
</form>
</body>
</html>