<?php
  $meta['title'] = 'Файловый архив РХТУ';
  $meta['description'] = 'В файловом архиве РХТУ вы найдете множество вкусностей, которые' .
                         ' облегчат вашу студенческую жизнь :-) читерство, короче :-)';
  $meta['keywords'] = 'Файлы РХТУ, файловый архив, читерство в универе, все для студента';
  $meta['css'] = '/css/common.css';
  $meta['head'] = '
  Большой файловый архив (>20 Гб) <a href="http://files.anabot.ru/">можно скачать там.</a> <br>
  А тут файловые новинки. Внесите и вы свой вклад:<br>
  <div style="margin-top:5px;">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="350" height="60">
<param name="movie" value="http://static.depositfiles.com/flash/DepositUploader_350x60.swf?ref=anabotru&member_passkey=1fvrw5ow4y73al8x&interfaceId=2&lang=RU&lang_xml=http%3A%2F%2Fstatic.depositfiles.com%2Fflash%2FDepositUploader.xml"></param>
<param name="menu" value="false"></param>
<param name="scale" value="noScale"></param>
<param name="allowFullScreen" value="true"></param>
<param name="allowscriptaccess" value="always"></param>
<param name="wmode" value="transparent"></param>
<embed src="http://static.depositfiles.com/flash/DepositUploader_350x60.swf?ref=anabotru&member_passkey=1fvrw5ow4y73al8x&interfaceId=2&lang=RU&lang_xml=http%3A%2F%2Fstatic.depositfiles.com%2Fflash%2FDepositUploader.xml" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" menu="false" scale="noScale" wmode="transparent" width="350" height="60"></embed>
</object>
</div>
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