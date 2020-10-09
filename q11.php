<!DOCTYPE html>
<html>
<head><?php
	if (isset($_POST['submit'])) {

		$nama=$_POST['names'];

		for ($i=0; $i < count($nama) ; $i++) { 
			$input=mysqli_query($koneksi, "INSERT INTO tb_ VALUES('','$nama[$i]')");
		}
        }
?>
	<title> Q11 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Input 5 Student names</h3>
<?php for ($i=0; $i <5 ; $i++) { 
	
 ?>	<?= $i+1 ?>.<input type="text" name="names[]"><br>
<?php }?>
<button type="submit" name="submit">check</button>
<br>
<br>
<?php
	if (isset($input)) {
		?>
		<h5>Masuk data sukses</h5>
		<?php
}
?>
</form>
</body>
</html>