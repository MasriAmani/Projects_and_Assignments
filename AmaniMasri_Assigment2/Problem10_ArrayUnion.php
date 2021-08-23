<?php
function array_union ($arr1,$arr2){
	 $union=[];
	 $union_arr =[];
	 foreach ($arr1 as $index => $val){
		 $union[$val] =$index;
	 }
	 foreach ($arr2 as $index => $val){
		 $union[$val] =$index;
	 }
	  foreach ($union as $index => $val){
		 $union_arr[] =$index;
	 }
	 return $union_arr;
}
$arr1=[1,2,8,10];
$arr2=[3,5,8,9];
print_r(array_union($arr1,$arr2));
?>
