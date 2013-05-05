<?php

//Самописный base64_encode()
function b64e($txt) {

 $s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
 $l = strlen($txt);
 
 $i = 0;
 
 $endr = '';
 $rez = '';
 
 while ($i < strlen($txt)) {
  if (!isset($txt[$i+1])) {
   $endr = '=';
  }
  if (!isset($txt[$i+2])) {
   $endr = '==';
  }
  if (isset($txt[$i+1]) && !isset($txt[$i+2])) $endr = '=';
 
  $bin = s2b($txt[$i] . $txt[$i+1] . $txt[$i+2]);
  for ($j = 1; $j <= 24; $j = $j + 6) {
   if (isset($bin[$j - 1])) $rez .= $s[bindec(substr($bin, $j - 1, 6))];
  }
  $i += 3;
 }
 
 return $rez . $endr;
}


function s2b($txt) {
 $bin = '';
 for ($i = 0; $i < strlen($txt); $i++) {
  for ($j = 0; $j < 8; $j++) {
   $ch = 128 >> $j;
   if ((ord($txt[$i]) & $ch) == 0) $bin .= '0';
   else $bin .= '1';
  }
 }
 return $bin;
}



?>