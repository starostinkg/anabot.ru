<?php
error_reporting(0);
     $files = glob($dir . 'music/*.mp3');
     $file = array_rand($files);
     $mp3 = $files[$file];
  
     $filesize = filesize($mp3);
     $file = fopen($mp3, "r");
 
     fseek($file, -128, SEEK_END); // It reads the 
      
     $tag = fread($file, 3);
      
     if($tag == "TAG")
     {
         $data["song"] =  iconv('windows-1251', 'UTF-8', trim(fread($file, 30)));
          
     }
      
     fclose($file);

$name =  my_mb_ucfirst(mb_strtolower($data["song"]));
 
echo $mp3 . '#' . $name;
 ?>    


<?php
function my_mb_ucfirst($str) {
    $fc = mb_strtoupper(mb_substr($str, 0, 1));
    return $fc.mb_substr($str, 1);
}
?>