<?php

$list1 = "3,4,5,6,7";
$list2 = "5,7,8,9,10";
$arr1 = explode(",", $list1);
$arr2 = explode(",", $list2);
$unique_mergedArr = [];
$unique_mergedlist ="";
     foreach ($arr1 as $index => $val){
		 $unique_mergedArr[$val] =$index;
	 }
	 foreach ($arr2 as $index => $val){
		 $unique_mergedArr[$val] =$index;
	 }
	 foreach ($unique_mergedArr as $index => $val){
		 $unique_mergedlist .= $index.",";
	 }
print($unique_mergedlist);

?>
