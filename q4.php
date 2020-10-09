<!DOCTYPE html>
<html>
<head><?php
	
	if (isset($_POST['faktorial'])) {
		$n=$_POST['faktorial'];
		$total=1;
		if ($n<=1) {
			$total=1;
		}else{
		for ($i=1; $i <= ($n-1) ; $i++) { 
			$total=$total*($i+1);
			}
		}
	}

?>
	<title> Q4 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Pencarian fakrorial suatu bilangan</h3>
<input type="text" name="faktorial">
<button type="submit">Cari</button>
<br>
<br>
<?php
	if(!empty($n)){
		?>

		<h4>Hasil dari <?= $n ?>! adalah <?= $total ?></h4>

		<?php
	}

?>
</form>
</body>
</html>