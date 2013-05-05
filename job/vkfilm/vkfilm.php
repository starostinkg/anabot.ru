<?php
 require_once 'config4vk.php';
?>

<meta charset="utf-8">

<style>
label {
 cursor: pointer;
}

.dotted {
  *display: inline;
  *position: relative;
  border-bottom: 1px dashed #000;
  text-decoration: none;
}
 input {
  margin: 2px;
  width: 330px;
 }
 .chk {
  width:20px;
 }
 td {
  text-align: right;
 }
 td+td {
  text-align: left;
 }
</style>

<form action="" method="post">
<table>
  <tr><td><a href="javascript:alert('Ссылка должна выглядеть так:\nhttp://vk.com/videos-12345678?section=album_654321 \n\nСсылка для видео вне альбомов: \nhttp://vk.com/videos-12345678?section=all');" class="dotted">адрес видео<br>+ id альбома</a></td>
     <td><input type="text" name="addr" value=""> </td> </tr>
 <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Загрузить"> </td></tr>
</table>
</form>
<?php
 if (isset($_POST['addr'])) $addr = $_POST['addr'];
 else exit();
 if (empty($addr)) exit('Вы не ввели адрес');
 if (!preg_match('#http://vk\.com/videos([^\?]+)\?section=(?:all|album_(.*))$#isU', $addr, $buf)) exit('Ссылка должна выглядеть так:<br>http://vk.com/videos-12345678?section=album_654321 <br><br>Ссылка для видео вне альбомов: <br>http://vk.com/videos-12345678?section=all');
 $oid = $buf[1];
 if (empty($buf[2])) $album = '0';
 else $album = $buf[2];


##
#Авторизация
 $host = "login.vk.com";
 $con_len = strlen($email) + strlen($pass) + 92;
 $header = <<<H
POST /?act=login HTTP/1.1
Host: login.vk.com
Connection: close
Content-Type: application/x-www-form-urlencoded
Content-Length: $con_len

act=login&role=al_frame&expire=&captcha_sid=&captcha_key=&_origin=http://vk.com&email=$email&pass=$pass


H;

 $ans = fsopen($host, $header, 443);

 if (!preg_match('#http://vk.com(/login.php\?act=slogin&to=&s=1&hash=[^\s]+)[\s]#isU',$ans, $buf)) exit('Неверный адрес почты или пароль. Проверьте файл конфигурации');
 $hash = $buf[1];
 $host = 'vk.com';
 $header = <<<H
GET /login.php?act=slogin&to=&s=1&hash=$hash HTTP/1.1
Host: vk.com
Connection: close


H;

 $ans = fsopen($host, $header);

 if (!preg_match('#remixsid=([^;]+);#isU', $ans, $buf)) exit('Неизвестная ошибка. Невозможно авторизоваться. Отладочная информация: строка ' . __LINE__);;
 $remixsid = $buf[1];


 $host = "vk.com";
 $header1 = <<<H
POST /al_video.php HTTP/1.1
Host: vk.com
Cookie: remixsid=$remixsid;
Connection: close
Content-Length: 51
Content-Type: application/x-www-form-urlencoded
X-Requested-With: XMLHttpRequest
Content-Transfer-Encoding: binary

act=load_videos_silent&al=1&offset=0&oid=$oid



H;


 
 $ans = fsopen($host, $header1);
 exit($ans); 


 //$ans = join('', file('-1444878.cash'));
 $ans = preg_replace('#\'[^\']*\'(?:(,|\]))#isU', '0$1', $ans);
 $pma = preg_match_all('#' . $oid . ',([^,]*),[^,]*,[^,]*,[^,]*,[^,]*,([^,]*),#isU', $ans, $buf);
 if ($pma == 0) exit('Ошибка. Возможно, неверный адрес');

 foreach($buf[1] as $key => $value) {
  if ($key == 1) continue;
  if (trim($buf[2][$key]) == $album) $albs[] = trim($buf[1][$key]);
 }
 if (empty($albs)) exit('Такого альбома не существует');
 
 //fwrite(fopen($oid . '.cash', 'w+'), $ans); ////////////////////предусмотреть кэш
 
 $header2 = '';
 $cnt = count($albs);
 foreach($albs as $key => $value) {
 if ($key == $cnt - 1) $con = 'close';
 else $con = 'Keep-Alive';
 $header2.= <<<H
POST /al_video.php HTTP/1.1
Host: vk.com
Cookie: remixsid=$remixsid;
Connection: $con
Content-Length: 51
Content-Type: application/x-www-form-urlencoded
X-Requested-With: XMLHttpRequest
Content-Transfer-Encoding: binary

act=video_embed_box&al=1&oid=$oid&vid=$value

H;

}
 $ans = fsopen($host, $header2);

 //echo $ans;
 $pma = preg_match_all('#src=(?:&quot;|")([^"]+)(?:&quot;|")#isU', $ans, $buf);
 if ($pma == 0) exit('Неизвестная ошибка. Отладочная информация: строка ' . __LINE__);
 foreach($buf[1] as $key => $value) {
  if ($key == 3) break;
  echo $value . '<br>';
 }
 
 function unchunk($result) {
    return preg_replace_callback(
        '/(?:(?:\r\n|\n)|^)([0-9A-F]+)(?:\r\n|\n){1,2}(.*?)'
        .'((?:\r\n|\n)(?:[0-9A-F]+(?:\r\n|\n))|$)/si',
        create_function(
            '$matches',
            'return hexdec($matches[1]) == strlen($matches[2]) ?
                 $matches[2] :
                 $matches[0];'
        ),
        $result
    );
 }
 
 function fsopen($host, $header, $port = 80) {
  if ($port == 443) $host = 'ssl://' . $host;
  $f = fsockopen($host, $port);

  fwrite($f, $header);
  $ans = '';
  while(!feof($f)) {
   $ans .= fgets($f);
  }
  $ans = unchunk($ans);
  fclose($f);
  return $ans;
 }
 //$vid = "162203527";
