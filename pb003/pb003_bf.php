<?php
$start=microtime(true);

function prime_factor($number){
	for($i=2; $i<=$number;$i++){
		if($number%$i==0){
			return $i;
			break;
		}
	}
	return(0);
}


function max_prime($number){
	$max=0;
	$new_num=$number;
	$prime = prime_factor($number);
	for($i=2; $i<round($number/2);$i++){
		if($prime!=0){
			if($prime>$max){
				$max=$prime;
				$new_num=$new_num/$prime;
			}
			$prime = prime_factor($new_num);
		}else{break;}
	}
	return($max);
}

echo 'max prime factor of 600851475143 is : '.max_prime(600851475143)."\n";
echo 'execution time : '; echo microtime(true)-$start;

?>