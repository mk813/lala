<?php
function expanded_form($num) {
	//$num = 4546545645456456;
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
	expanded_form();
?>
/* 		изменение управляющей переменной от 1 до 100 с шагом 1:
			for(int i = 1; i <= 100; i++)
			
			изменение управляющей переменной от 100 до 1 с шагом -1 (с уменьшением на 1):
			for(int i = 100; i > 0; i--)
			
			изменение управляющей переменной от 7 до 77 с шагом 7:
			for(int i = 7; i <= 77; i += 7)
			
			изменение управляющей переменной от 20 до 2 с шагом -2:
			for(int i = 20; i >= 2; i -= 2)
			
			изменение управляющей переменной в следующей последовательности: 2, 5, 8, 11, 14:
			for(int j = 2; j <= 20; j += 3)
			
			изменение управляющей переменной в следующей последовательности: 99, 88, 77, 66, 55, 44, 33, 22, 11, 0:
			for(int j = 99; j >= 0; j -= 11)

 expanded_form( $number) 
	 expanded_form(59132) => 50000 + 9000 + 100 + 30 + 2 
	 >>>>>nam nujen filter 4tob polu4it' toka integer number<<<<*/
	 
	/*function expanded_form($num) {
		$dlina = strlen($num);
		echo "<br/>";
		$whole = floor($num);
		echo $whole;
		echo "<br/>";
		for ($i=0;$i <= $dlina;$i++) {
			$a = $num/10;
			echo $a . "<br/>";
			//($n - intval($n))*10;
		}
	}
	
	expanded_form("59132");
	/*
	//echo explode(".",1.10);
	$n = 59132;
	$i = 59132/10;
	$asd = "asd";
	$sad = "sad";
	echo $asd  + $sad;
	echo "<br/>";	
	echo	intval($n); // 12
	echo "<br/>";
	echo	explode('.', number_format($n, 1))[0]; // 3
	echo "<br/>";
	echo	explode('.', number_format($n, 2))[1]; // 34
	echo "<br/>";
	echo	explode('.', number_format($n, 3))[1]; // 343
	echo "<br/>";
	echo	explode('.', number_format($n, 4))[1]; // 3430
	echo "<br/>";
	$decimal = 1.25;
	echo substr($decimal,-2);*/
?>