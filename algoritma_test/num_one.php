<?php 
$string = "NEGIE1";
$substr = substr($string, 5);  
$length = strlen($string);  
for ($i=($length-2) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  
echo $substr;

?>