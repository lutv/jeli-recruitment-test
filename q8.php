<!DOCTYPE html>
<html>
<head><?php
	$numbers=array();
	$max=25;
	for ($i=0; $i < $max ; $i++) { 
		$numbers[$i]=rand(0,10000);
	}
	if (isset($_POST['min'])) {
		$min=$numbers[0];
		$maximum=$numbers[0];
		$data=count($numbers);
		for($i = 0; $i < $data; $i++)
    {
        if($maximum<$numbers[$i]){
        	$maximum=$numbers[$i];
        }else if($min>$numbers[$i]){
        	$min=$numbers[$i];
        }
    }
	}

?>
	<title> Q8 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Given Array</h3>
	<h5><?= prin_r($numbers)?></h5>
<button type="submit" name="min">check</button>
<br>
<br>
<?php
	if (isset($_POST['min'])) {
		?>
		<h5>Max number <?= $maximum ?> </h5>
		<?php
		?>
		<h5>Min number <?= $min ?></h5>
		<?php
}
?>
</form>
</body>
</html>