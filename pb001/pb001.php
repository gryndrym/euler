<?php
function multiple($multiples, $maximum){
	$result = 0;
	for($value=0; $value<$maximum; $value++){
		foreach($multiples as $mult){
			if($value%$mult==0){
				$result+=$value;
				break;
			}
		}
	}
	return $result;
}
echo multiple(array(3,5),1000);

# result = 233168
?>