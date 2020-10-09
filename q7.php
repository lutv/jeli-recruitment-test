<!DOCTYPE html>
<html>
<head><?php
	if (isset($_POST['string'])) {
		$str=$_POST['string'];
		$hasil=0;
		for($i = 0; $i < strlen($str); $i++)
    {
        for($j = $i + 1; $j < strlen($str); $j++) 
        {
            if($str[$i] == $str[$j])
            {
                $hasil+=$i;
            }
        }
    }
	}

?>
	<title> Q7 PHP</title>
</head>
<body>
	<form method="POST">
	<h3>Determine if a string has all unique characters..</h3>
<input type="text" size="20" name="string">
<button type="submit">Check</button>
<br>
<br>
<?php
	if (!empty($str)) {
	
	if($hasil>0){
		?>
		<h5><?= $str ?> doesn't have all unique characters </h5>
		<?php
	}else{
		?>
		<h5><?= $str ?> has all unique characters </h5>
		<?php
	}
}
?>
</form>
</body>
</html>