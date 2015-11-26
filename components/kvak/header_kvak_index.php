<?php
SetCookie("antispam", mt_rand(1,100000));
$kvak_str3 = '';
$kvak_str4 = '';
$kvak_out = '';

  if (empty($GLOBALS['user']) || $GLOBALS['user'] == 'Гость') {
   if (isset($error_auth)) $kvak_str3 = '<span style="color:red">Хм... А мы точно знакомы? Попробуй еще раз:</span>';
   else $kvak_str3 = 'Мы уже встречались? Напомни имя/пароль:';
   $kvak_str4 = '
      <form class="auth_form" action="." method="POST"> 
       <input class="login" name="login" type="text"> 
	   <input class="password" type="password" name="password"> 
	   <input name="submit" class="auth" value="Вход" type="submit"> 
	   <!--input name="reg" class="reg" value="Регистрация" type="button" onclick="reg();"--> 
	  </form>
   ';
   $meta['head'] = 'Здравствуй, путник!<br>
     Что привело тебя в наше болото?  &nbsp;<br>
     ' . $kvak_str3 . '&nbsp;<br>
     ' . $kvak_str4 . '&nbsp;
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
  if (empty($meta['head'])) $meta['head'] = 'Здравствуйте, <b>' . $f[11]->user . '</b>!<br>
    Добро пожаловать в наше болото.  &nbsp;<br>
    ' . $kvak_str3 . '&nbsp;<br>
    ' . $kvak_str4 . '&nbsp;
  ';
  $meta['menu'] = '/kvak/';