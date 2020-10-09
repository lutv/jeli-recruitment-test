<!DOCTYPE html>
<html>
<head><?php
	$miaw=array('Miaw','miaw','miaw','miaw','miaww');
	if (isset($_POST['min'])) {
		$hasil=0;
		$cari="miaw";
		$data=count($miaw);
		for($i = 0; $i < $data; $i++)
    {
        if($cari==$miaw[$i]){
        	$hasil=$hasil+1;
        }
    }
	}

?>
	<title> Q10 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Given Array</h3>
	<h5><?= json_encode($miaw)?></h5>
	look for miaw in the array
<button type="submit" name="min">check</button>
<br>
<br>
<?php
	if (isset($_POST['min'])) {
		?>
		<h5>There are <?= $hasil ?> miaw </h5>
		<?php
}
?>
</form>
</body>
</html>