 <?php
 $submit = 'Редактировать';
 $alertR = '';
 $alertG = '';
 !empty($_GET['title']) ? $title = $_GET['title'] : $title = 'microblog';
 if (!empty($_GET['nick'])) $nick = $_GET['nick'];
 else {
  Header('Location: /?microblog=nonick');
  exit();
 }
 $nick = str_replace(array('/', '\\', ':', '<', '>', '|', '"', '\'', '`'), ' ;-) ', $nick);
 $db_path = 'db/' . $nick . '_last';
 $db_path = iconv('utf-8', 'windows-1251', $db_path);
 $r = 'templ/';
 if (is_file($db_path)) $alertG .= 'Вы вошли под ником ' . $nick . '<br>';
 else {
  $alertG .= '<br>Поздравляем, ваш аккаунт только что создан!';
  fclose(fopen($db_path, 'w+'));
 }
 $req_main = $r . 'index.htm';
 if (!empty($_SERVER['HTTP_REFERER']) && !isset($_POST['btext'])) {
  $title = 'Предупреждение!';
  $req_main = $r . 'err.htm';
 }
 else {
  $title .= ' :: Здравствуйте, '. $nick;
  if (!empty($_POST['btext'])) {
   $fh = fopen($db_path, 'w+');
   fwrite($fh, ltrim($_POST['btext'], " \r\n"));
   $alertG .= 'Изменения сохранены (' . date('H:i:s') . ')<br>';
  }
 }
 $btext = join('', file($db_path));
 if (isset($_POST['btext'])) {
  $submit = 'Сохранить изменения';
  $btext = <<<BT
   <textarea name="btext" rows='10' cols='100'>

$btext</textarea>
BT;
 }
 else {
  $alertG .= 'Последнее изменение: ' . date('d.m в H:i') . '<br>';
  $btext = '<hr><input type="hidden" name="btext" value="">'. "\n" . str_replace("\n", '<br>', $btext) . "\n<hr>\n";
 }


 require_once($req_main);

#ЖПНР!