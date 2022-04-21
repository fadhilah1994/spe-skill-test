<?php
    $sum = 0;

//narcissistic(153) //this will return true
//narcissistic(111) //this will return false

	$n = 153;
	
	$temp = $n;
	$totalDigits = strlen($n);
	
	while($n != 0) {
		$r = $n%10;
		$sum = $sum+pow($r, $totalDigits);
		$n = floor($n/10);
	}
	
	if($sum == $temp) {
		echo "$temp true";
	} else {
		echo "$temp false";
	}

?>
