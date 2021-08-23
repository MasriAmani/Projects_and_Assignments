<?php
function bin_to_dec($n){
	   $d=0;
	   $a=0;
	   $s=strval($n);
	   for ($i=strlen($s)-1;$i>=0;$i--){
		   $d += $s[$i]*pow(2,$a);
		   $a +=1;
	   }
return $d;}

print(bin_to_dec(110110)."\n");
?>