<?php
$arr = [5,9,3,4,2,10,];
$min = $arr[0];	
$max = $arr[0];
foreach ($arr as $val){
	    if ($val<$min) {
		$min = $val;}
		if ($val>$max){
		$max = $val;}
}
print ("$max , $min");
?>
