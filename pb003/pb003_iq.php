<?php
$start=microtime(true);

function max_prime_factor($number){
	$prime=2;
	while($prime<round($number)){
		if($number%$prime==0){
			$number=$number/$prime;
		}
		$prime++;
	}
	return($number);
}

echo 'max prime factor of 600851475143 is : '.max_prime_factor(600851475143)."\n";
echo 'execution time : '; echo microtime(true)-$start;

?>