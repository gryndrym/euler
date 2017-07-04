<?php

function sum_even_fibonacci($max){
	$fn1=0; $fn2=1; $fib=0; $sum=0;
	$fib = $fn1+$fn2;
	while($fib<$max){
		$fn1=$fn2;
		$fn2=$fib;
		if($fib%2==0){$sum+=$fib;}
		$fib = $fn1+$fn2;
	}
	return $sum;
}

echo sum_even_fibonacci(4e6);

?>