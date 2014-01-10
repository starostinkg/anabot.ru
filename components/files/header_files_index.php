<?php
  $meta['title'] = 'Файловый архив РХТУ';
  $meta['description'] = 'В файловом архиве РХТУ вы найдете множество вкусностей, которые' .
                         ' облегчат вашу студенческую жизнь :-) читерство, короче :-)';
  $meta['keywords'] = 'Файлы РХТУ, файловый архив, читерство в универе, все для студента';
  $meta['css'] = '/css/common.css';
  $meta['head'] = 'А тут можно сказать, святая святых сайта ;-)<br>
   На этой странице вы найдете файловые новинки. <br>
  Мало этого? Тогда приглашаем посетить<br>
  <a href="http://files.anabot.ru/">большой файловый архив РХТУ</a> (>20 Гб).
';
  $meta['menu'] = '/files/';
  
if (isset($_GET['js_flask_off'])) {
 SetCookie('js_flask_off', 1);
 Header('Location: ./');
 exit();
}

if (isset($_GET['js_flask_on'])) {
 SetCookie('js_flask_off', '', 0);
 Header('Location: ./');
 exit();
}