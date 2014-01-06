<?php

$kvak_str3 = '';
$kvak_str4 = '';
$kvak_out = '';

  if (empty($GLOBALS['user']) || $GLOBALS['user'] == 'Гость') {
   if (isset($error_auth)) $kvak_str3 = '<span style="color:red">Логин или пароль неверен, попробуйте еще раз:</span>';
   else $kvak_str3 = 'Для входа введите ваш логин и пароль:';
   $kvak_str4 = '
      <form class="auth_form" action="." method="POST"> 
       <input class="login" name="login" type="text"> 
	   <input class="password" type="password" name="password"> 
	   <input name="submit" class="auth" value="Вход" type="submit"> 
	   <!--input name="reg" class="reg" value="Регистрация" type="button" onclick="reg();"--> 
	  </form>
   ';
  }
  else {
   $kvak_str3 = '';
   $kvak_out = '<a class="menu_top" href="/kvak/out">[Выйти]</a><br>';
  }
  
  
  if (!isset($m_title)) $m_title = $kvak_title;
  $meta['title'] = 'Квак (тихий омут)';
  $meta['mtitle'] = strip_tags($m_title) . ' ::: Квак (тихий омут)';
  $meta['description'] = 'Уютное болото, в недрах которого рождается юмор и серьезное, полезные советы и разная инфа о Менделеевке';
  $meta['keywords'] = '';
  $meta['css'] = '/css/common.css';
  $meta['head'] = 'Здравствуйте, <b>' . $f[11]->user . '</b>!<br>
    Добро пожаловать в наше болото.  &nbsp;<br>
    ' . $kvak_str3 . '&nbsp;<br>
    ' . $kvak_str4 . '&nbsp;
  ';
  $meta['menu'] = '/kvak/';