<?php
$start=microtime(true);

function sieveOfErathostene($limit){
	for($i=2; $i<$limit; $i++)
		$primeFactorCandidates[$i]=TRUE;
	for($prime=2; $prime<$limit; $prime++)
	{
		if($primeFactorCandidates[$prime]==TRUE){
			for($notPrime=$prime*$prime; $notPrime<$limit; $notPrime+=$prime){
				$primeFactorCandidates[$notPrime]=FALSE;
			}
		}
	}
	return $primeFactorCandidates;
}

$primeFactors=sieveOfErathostene(1e6);
$primeFactorsOrdered=array_keys($primeFactors, TRUE);

echo 'The 10001st prime factor is : '.$primeFactorsOrdered[10000]."\n";
echo 'execution time : '; echo microtime(true)-$start;
