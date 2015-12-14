<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';
include ROOT . 'inc/header_common.htm';
?>
<script type="text/javascript" src="/js/lab.js"></script>

<div class="dver">
 <img src="/lab/img/dver_off.gif" alt="dver" onclick="dver(this);" onmouseover="dver_on(this);" onmouseout="dver_off(this);">
</div>

<br class="break">

<div class="m_tabl">
 <a href="/lab/table.php"><img src="/lab/img/table.gif" alt="" title="Таблица Менделеева, ряд напряжений"></a><br><br>
 <a href="/lab/sol.php"><img src="/lab/img/sol.gif" alt="" title="Таблица растворимости"></a>
</div>

<div class="lab_info">
 <img src="/lab/img/info.gif" class="w100" alt="">
  <div style="position:absolute; bottom:4%; left:12px;"><a href="http://we.easyelectronics.ru/page/Konkurs" target="_blank"><img src="http://easyelectronics.ru/img/konkurs/konkurs.gif" alt="Конкурс на лучшую статью"></a></div>
</div>
<div class="lab_info_text">
 <div class="ul_lab">
  <span style="background-color: #EEEEEE;">&nbsp;ИНФОРМАЦИЯ&nbsp;</span>
 </div>
 <br>
 <div class="li_lab" style="background-image: url('/lab/img/li.php?id=1');">
  <span class="menu_lab">&nbsp;<a href="/lab/calc/" class="menu_lab">Калькулятор физических свойств</a> &mdash; третий этаж&nbsp;</span>
 </div>
 <br>
 <div class="li_lab" style="background-image: url('/lab/img/li.php?id=2');">
  <span class="menu_lab">&nbsp;<a href="http://www.dpva.info/" class="menu_lab" target="_blank">Инженерные справочники</a> &mdash; соседнее здание&nbsp;</span>
 </div>
 <br>
 <div class="li_lab" style="background-image: url('/lab/img/li.php?id=3');">
  <span class="menu_lab">&nbsp;Веселая химия &mdash; <a href="http://alhimik.ru/fun/fun.htm" class="menu_lab" target="_blank">следуйте по этому адресу</a>&nbsp;</span>
 </div>
</div>

<div class="footer_ie">&nbsp;</div>
<div style="height:100px;">&nbsp;</div>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm';