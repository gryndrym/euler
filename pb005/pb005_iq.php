<?php
$start=microtime(true);

$tab=array();
$prime=array();
for($i=1; $i<=20; $i++){
	$number=$i;$fac=2;
	while($fac<=round($number)){
		if($number%$fac==0){
			$number=$number/$fac;
			$prime[$i][]=$fac;
			 $fac=2;
		}else{
			$fac++;
		}
	}			
}

$move=array();
for($i=2; $i<=20; $i++){
	$tmp=$prime[$i];
	for($j=0;$j<=sizeof($tmp)-1; $j++){
		if(isset($count[$tmp[$j]])) $count[$tmp[$j]]++;
		else $count[$tmp[$j]]=1;
	}
	foreach($count as $key=>$factor){
		if(isset($move[$key])){
			if($key**$factor>$move[$key]){$move[$key]=$key**$factor;}
		}else{$move[$key]=$key**$factor;}
	}
	unset($count);	
}
$result=1;
foreach($move as $value){
	$result=$result*$value;
}


// result : 232792560

echo 'Smallest multiple of 1 to 20 : '.$result."\n";
echo 'execution time : '; echo microtime(true)-$start;

// result : 232792560

//Créer un tableau de 1 à 20
//pour chaque case, décomposer en facteur premier (12 =2*2*3)
//si un facteur est trouvé (2), regarder s'il peut l'etre plusieurs fois (2^x)
// dans ce cas, décaler le 2^x dns la case du 2 (s'il est plus grand que ce qui y est déjà) et mettre le reste 
// donc 3 dans la case du 3 (vérifier au besoin si on est aussi sur un nombre qui peut s'écrire 
?>
