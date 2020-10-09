<!DOCTYPE html>
<html>
<head><?php
	$fib=array();
	$start=0;
	$now=1;
	$index=2;
	$fib[0]=$start;
	$fib[1]=$now;
	for ($i=0; $i < 100 ; $i++) { 
		$fib_value=$start+$now;
		$fib[$index++]=$fib_value;
		$start=$now;
		$now=$fib_value;
	}
	if (isset($_POST['seq'])) {
		$n=$_POST['seq'];
		$hasil=json_encode($fib[$n]);
	}

?>
	<title> Q6 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>The Fibonacci numbers are the numbers in the following integer sequence.</h3>
<h3>0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ……..</h3>
You're looking for 
<input type="text" size="2" name="seq">th sequence
<button type="submit">Search</button>
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