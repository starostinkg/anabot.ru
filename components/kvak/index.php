<?php$kvak_title = 'Последние &laquo;Ква!&raquo;';$kvak_body = ''; ## #Список кваков  for ($kvak = 1; $kvak < 300; $kvak++) {   $f[$kvak] = new Cls_Kvak_Items;   $f[$kvak]->f = $kvak;  }    $f[13]->img_src = '/kvak/img/muctr.gif';  $f[13]->img_alt = 'РХТУ';  $f[13]->title = 'О нашем РХТУ';    $f[16]->img_src = '/kvak/img/smile.gif';  $f[16]->img_alt = ':-)';  $f[16]->div_class = 'border_right_menu2line';  $f[16]->title = 'Остров хорошего <br>настроения';      $f[10]->img_src = '/kvak/img/cup.gif';  $f[10]->img_alt = 'ква!';  $f[10]->title = 'Ква обо всем';  $f[10]->title2 = ':-)';      $f[19]->img_src = '/kvak/img/games.gif';  $f[19]->img_alt = ';]';  $f[19]->title = 'Игры';      $f[20]->img_src = '/kvak/img/celebr.gif';  $f[20]->img_alt = '*_*';  $f[20]->title = 'Поздравления!';      $f[14]->img_src = '/kvak/img/tekh.gif';  $f[14]->img_alt = '*_*';  $f[14]->title = 'Техническая часть';  $f[14]->a_title = 'Доступно, начиная с "Аспирантов"';  $f[14]->chmod['Aspirant'] = 'rwx';  $f[14]->chmod['Student'] = 'r';    $f[22]->img_src = '/kvak/img/bug.gif';  $f[22]->img_alt = '}8{';  $f[22]->title = 'От вируса до слона';  $f[22]->chmod['Guest'] = '';  $f[22]->chmod['Diplomnic'] = 'rwx';  $f[22]->chmod['Student'] = '';    $f[12]->img_src = '/kvak/img/help.gif';  $f[12]->img_alt = '(((O)))';  $f[12]->div_class = 'border_right_menu2line';  $f[12]->title = 'Скорая компьютерная <br>помощь'; # ##  if (empty($_GET['f'])) {  include ROOT . 'inc/kvak/index.htm'; } elseif (!empty($_GET['f']) && empty($_GET['t'])) {  include ROOT . 'inc/kvak/f.htm';  $kvak_title = strip_tags($f[$_GET['f']]->title . ' ' . $f[$_GET['f']]->title2);  $f[$_GET['f']]->active = 'on';    } elseif (!empty($_GET['f']) && !empty($_GET['t'])) {  include ROOT . 'inc/kvak/t.htm'; } 