<?php
$arr =[1,2,3,4,5];
$arr_even =[];
$arr_odd =[];

foreach ($arr as $val){
	    if ($val%2 ==0) {
		$arr_even [] =$val;}
		else {
		$arr_odd [] =$val;}
}
print_r($arr_even);
print_r($arr_odd);
?>
