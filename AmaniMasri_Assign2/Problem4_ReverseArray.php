<?php
function reverse_array($arr){
	$rev_arr=[];
	for ($i=sizeof($arr)-1;$i>=0;$i--){
		$rev_arr[] = $arr[$i];
	}
return $rev_arr;}

$arr =[1,2,3,4,5];
print_r(reverse_array($arr));
	
?>