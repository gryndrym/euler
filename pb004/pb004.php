<?php
$start=microtime(true);

function palindrome($number){
	$num = str_split($number);
	for($i=0; $i<floor(sizeof($num)/2); $i++){
		if($num[$i]!=$num[sizeof($num)-1-$i]){
			return false;
		}
	}
	return true;
}

$max=$imax=$jmax=0;
for($i=999;$i>=900; $i--){
	for($j=999; $j>=900; $j--){
		$x = $i*$j;
		if(palindrome($x)){
			if($x>$max){$max = $x; $imax = $i; $jmax = $j;}
		}
	}
}
echo 'largest palindrome product :'.$max." = ".$imax." x ".$jmax."\n";  

echo 'execution time : '; echo microtime(true)-$start;
?>