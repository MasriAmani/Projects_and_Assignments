<?php

$assoc_arr =["beirut"=>20 ,"tripoli"=>30 ,"bekaa"=>55];
$high_val= reset($assoc_arr);
foreach ($assoc_arr as $index => $val){
	     if ($val >= $high_val){
		 $high_val = $val;}
         $high_val_index = $index;}
	  
print($high_val_index."\n");

?>