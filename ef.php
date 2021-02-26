<?php
function expanded_form($num) {
	$length = strlen($num);
	$efarr = array ($length);
	for ($i=0;$i < $length;$i++) {
		$byten = $num % 10;
		
		for ($x=1;$x <= $i;$x++) {
			$byten *= 10;
		}
		$efarr[$i] = $byten;
		$num = $num/10;
	}
	for ($i=$length-1;$i>=0;$i--) {
		if ($i == 0) {
			echo $efarr[$i] . "<br/>";
		} else {
			echo $efarr[$i] . " + ";
		}
	}
}
	expanded_form(123123);
?>
