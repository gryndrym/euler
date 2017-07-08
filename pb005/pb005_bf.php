<?php
$start=microtime(true);

$num=10;$exit=false;
while(!$exit){
	$num++;
	$exit=true;
	for($i=1;$i<=20; $i++){
		if($num%$i!=0){$exit = false; break;}
	}
}
echo 'Smallest multiple of 1 to 20 : '.$num."\n";
echo 'execution time : '; echo microtime(true)-$start;

// result : 232792560
?>