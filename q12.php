<?php
$spasi=8;
for ($i=1; $i <6 ; $i++) { 
	for ($p=0; $p < $spasi; $p++) { 
		echo "&nbsp;";
	}
	$spasi=$spasi-1;
	for ($s=0;$s < $i ; $s++) { 
		echo "*";
	}
	echo "<br>";
}


?>