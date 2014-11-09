<?php

$link = join(file("https://api.vk.com/method/wall.get?domain=anabotnews&count=10&filter=owner"));

$link = str_replace('😎', '8-)', $link);

$link = json_decode($link);

$Data = '';

if ((count($link->response) < 2)) $Data = 'А новостей пока нет...';
else {
 for ($i = 1; $i < (count($link->response)); $i++) {
  $Data .= '<li class="new">' . $link->response[$i]->text;
 }
}

/*
 if($link = mysql_query ("SELECT * from posts WHERE topic_id = " . (int)$GLOBALS['new_topic_id'] . " ORDER BY post_id DESC LIMIT 1")) {
  $Data = mysql_fetch_assoc($link);
  $Data = $Data['post_text'];
  $Data = str_replace('<br />', "\r\n", $Data);
  $Data = str_replace('target="_blank"', "", $Data);
  $Data = preg_replace('|^([^\*].*)$|misU', '<li> $1 <br><br>', $Data);
  $Data = preg_replace('|^\*(.*)$|misU', '<li class="new"> $1 <br><br>', $Data);
  fwrite(fopen($_SERVER['DOCUMENT_ROOT']."/conf/index.txt","w+"), $Data);
 }
 else {
  $Data = join('', file($_SERVER['DOCUMENT_ROOT']."/conf/index.txt"));
 }

 */