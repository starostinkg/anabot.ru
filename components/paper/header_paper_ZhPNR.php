<?php
  for($i = 0; $i < 4; $i++) {
   $k = mt_rand(0,30);
   $nbsp[$i] = '';
   for($j = 0; $j < $k; $j++) {
    $nbsp[$i] .= '&nbsp;';
   }
  }
  $meta['title'] =  $nbsp[mt_rand(0, 3)] . 'ЖПНР!';
  $meta['description'] = 'ЖПНР = Жизнь Прекрасна! Надо радоваться!';
  $meta['keywords'] = 'ЖПНР, позитив, жизнь прекрасна, ура, хаха, психи, безумие';
  $meta['css'] = '/css/common.css';
  $meta['head'] =  $nbsp[0] . ' Жизнь&nbsp;<br>' . 
   $nbsp[1] . 'Прекрасна!&nbsp;<br>' . 
   $nbsp[2] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Надо&nbsp;<br>' .
   $nbsp[3] . 'Радоваться!&nbsp;';
  $meta['menu'] = '[paper]';