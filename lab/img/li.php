<?php
 $image = ImageCreateFromGif("li.gif");

 Header("Content-type: image/gif");
 
 $r = mt_rand(0, 10) * 90;
 $image = imagerotate($image, $r, 0);
 $thumb = imagecreatetruecolor(18, 18);
 ImageGif($image);