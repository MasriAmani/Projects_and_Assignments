<?php
function remove_by_val($arr,$v){
	foreach ($arr as $index => $val){
		  if($val == $v){
		  array_splice($arr,$index,1);
		  }
	}
	return $arr;
}
	
$arr=[1,2,3,4,5];
$arr= remove_by_val($arr,4);
print_r($arr);

?>
	       