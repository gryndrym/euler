<?php
$start=microtime(true);

function isPrime($primeCandidate, $primeFactorList){
	foreach($primeFactorList as $primeFactor){
		if($primeCandidate%$primeFactor==0){ return FALSE;}
	}
	return TRUE;
}

$primeFactorList=array(2);
$primeCandidate=3;
while(count($primeFactorList)<10001){
	if(isPrime($primeCandidate, $primeFactorList)) array_push($primeFactorList, $primeCandidate);
	$primeCandidate+=2;
}

echo 'The 10001st prime factor is : '.$primeFactorList[10000]."\n";
echo 'execution time : '; echo microtime(true)-$start;

