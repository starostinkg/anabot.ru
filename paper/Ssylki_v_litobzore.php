<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';
include ROOT . 'inc/header_common.htm';
?>
<br class="break0">
<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <div class="actual_title">
    Ссылки в литобзоре. 
<s>Доминируй</s> Автоматизируй!
   </div>
  </td>
  <td class="paper_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="paper_left">
   <hr>
<div class="actual_body paper_body">
<p>
Вы&nbsp;когда-нибудь держали в&nbsp;руках бумажные версии дипломов и&nbsp;диссертаций? Думаю, да. Ну&nbsp;по&nbsp;крайней мере, видели уж&nbsp;точно все. И&nbsp;сегодня, в&nbsp;век копи-пасты страшно даже представить себе, что это был за&nbsp;титанический труд в&nbsp;то&nbsp;время: хотя&nbsp;бы перенумеровать страницы (в&nbsp;Ворде-то это все автоматом), ну&nbsp;или еще страшней&nbsp;&mdash; вставить ссылку на&nbsp;источник в&nbsp;середину своего опуса.
</p>
<p>
Да, если это небольшая научная статья (страниц на&nbsp;10-15), то&nbsp;можно и&nbsp;ручками все сделать, но&nbsp;представьте, когда это сотня страниц диплома... Или несколько сотен страниц диссертации. Проблема в&nbsp;том, что нельзя просто так взять<sup>тм</sup> 
и&nbsp;вставить в&nbsp;квадратных скобках цифирку , которая укажет на&nbsp;новый источник в&nbsp;&laquo;Списке литературы&raquo;. Нумерация должна идти по&nbsp;порядку: если вы&nbsp;только что ссылались&nbsp;на [5], то&nbsp;дальше можете ссылаться либо&nbsp;на [1,2...итд], либо&nbsp;на [6], а&nbsp;вот сослаться сразу&nbsp;на [60]&nbsp;&mdash; уже не&nbsp;по&nbsp;фен-шую, придраться могут только так.
</p>
<p>
Казалось&nbsp;бы, на&nbsp;дворе XXI&nbsp;век, автоматика, у&nbsp;всех есть компьютеры, интернет... А&nbsp;до&nbsp;сих пор оси для графиков Excel подписываются карандашом на&nbsp;бумаге, усредненные линии строятся им&nbsp;же, выпавшие точки обрабатывают единицы. И&nbsp;до&nbsp;сих пор ссылки на&nbsp;источники перенумеровывают вручную, хотя&nbsp;бы уже и&nbsp;мышкой вместо авторучки. Про Excel мы&nbsp;поговорим в&nbsp;следующий раз, а&nbsp;сейчас...
</p>
<p>
<br />
<strong>
Как расставить ссылки в&nbsp;литобзоре при помощи M$&nbsp;Word
</strong>
</p>
<p>
Использовать будем Word 2007, для следующих версий все аналогично (если что, задавайте вопросы в&nbsp;комментариях). Для примера, у&nbsp;нас такой литобзор:
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424254588_word1.PNG">
<img alt="" src="http://anabot.ru/uploads/1424254588_word1.PNG" />
</a>
</p>
<p>
Сначала, разумеется, надо все подготовить&nbsp;&mdash; Word программа умная, но&nbsp;она автоматом не&nbsp;определит, что вон та&nbsp;закорючка в&nbsp;квадратных скобках&nbsp;&mdash; это ссылка на&nbsp;источник литературы. Потому, в&nbsp;идеале, следующую операцию надо проделывать по&nbsp;ходу литобзора. Итак, выделяем в&nbsp;квадратных скобках цифру &laquo;1&raquo; (да-да, просто так, мышкой), дальше в&nbsp;меню выбираем 
<strong>
Вставка &gt; Связи &gt; Перекрестная ссылка
</strong>
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424258588_word2.PNG">
<img alt="" src="http://anabot.ru/uploads/1424258588_word2.PNG" />
</a>
</p>
<p>
Появится такое окно:
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424258976_word3.PNG">
<img alt="" src="http://anabot.ru/uploads/1424258976_word3.PNG" />
</a>
</p>
<p>
Настраиваем. &laquo;Тип ссылки&nbsp;&mdash; Абзац&raquo;, &laquo;Вставить ссылку&nbsp;&mdash; Номер абзаца&raquo;. Снять галку &laquo;Вставить как гиперссылку&raquo; (впрочем, на&nbsp;ваш вкус). Если поле &laquo;Для какого абзаца&raquo; осталось пустым, то&nbsp;значит вы&nbsp;накосячили в&nbsp;списке литературы&nbsp;&mdash; проверьте, что нумерация там автоматическая (да, надеюсь числа 1-60 для каждого источника вы&nbsp;не&nbsp;вручную набивали?). Так вот. В&nbsp;поле &laquo;Для какого абзаца&raquo; выбирайте тот номер, который до&nbsp;этого выделяли мышкой. Нажимайте &laquo;Вставить&raquo;, потом &laquo;Закрыть&raquo;. Окно закроется и&nbsp;на&nbsp;первый взгляд ничего не&nbsp;изменилось, но&nbsp;если вы&nbsp;снимите выделение с&nbsp;нашей цифры &laquo;1&raquo; и&nbsp;просто поставите курсор рядом, то&nbsp;фон однерки автоматически окрасится в&nbsp;серый цвет, тем самым намекая на&nbsp;принадлежность к&nbsp;перекрестным ссылкам.
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424259770_word4.PNG">
<img alt="" src="http://anabot.ru/uploads/1424259770_word4.PNG" />
</a>
</p>
<p>
Дальше&nbsp;&mdash; по&nbsp;аналогии: выделяем &laquo;2&raquo; в&nbsp;квадратных скобках, в&nbsp;перекрестных ссылках выбираем второй абзац, потом &laquo;3&raquo;, &laquo;4&raquo; и&nbsp;&laquo;5&raquo;.
</p>
<p>
<strong>
Наконец-то! 
</strong>
Теперь приступаем к&nbsp;тому, ради чего все затевалось. Добавим еще один источник:
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424260397_word5.PNG">
<img alt="" src="http://anabot.ru/uploads/1424260397_word5.PNG" />
</a>
</p>
<p>
Пока выглядит ужасно: ссылки сбились, нумерация нарушена. Однако, не&nbsp;унываем: с&nbsp;криком ЖПНР! создаем новую перекрестную ссылку (выделяем красную тройку и&nbsp;выбираем третий абзац). Осталось дело за&nbsp;малым&nbsp;&mdash; заставить машину работать :)
</p>
<p>
Нажимаем Ctrl+A (аки &laquo;выделить все&raquo;), по&nbsp;выделенному тексту жмем правой кнопкой мыши, из&nbsp;выпавшей менюшки выбираем &laquo;Обновить поле&raquo;. Результат:
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424261232_word6.PNG">
<img alt="" src="http://anabot.ru/uploads/1424261232_word6.PNG" />
</a>
</p>
<p>
И&nbsp;&mdash; о&nbsp;чудо! Нумерация восстановлена: от&nbsp;1&nbsp;до&nbsp;6, все как полагается. И&nbsp;на&nbsp;этом можно было&nbsp;бы закончить, если&nbsp;бы не&nbsp;один косяк. Дааа, они случаются. Не&nbsp;знаю, баг это или фича: предположим, мы&nbsp;решили добавить новую ссылку в&nbsp;самое начало.
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424261661_word7.PNG">
<img alt="" src="http://anabot.ru/uploads/1424261661_word7.PNG" />
</a>
</p>
<p>
Добавляем перекрестную ссылку, обновляем поле и&nbsp;видим, что у&nbsp;нас... две подряд однерки:
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424261816_word8.PNG">
<img alt="" src="http://anabot.ru/uploads/1424261816_word8.PNG" />
</a>
</p>
<p>
Что делаем? Правильно! Опять не&nbsp;унываем! Тем более, что остальные-то ссылки пронумеровались правильно. Ну&nbsp;да, тут придется один раз заново назначить перекрестную ссылку. Выделяем вторую однерку, назначаем ей&nbsp;правильный абзац и&nbsp;&mdash; бинго!
</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424262375_word9.PNG">
<img alt="http://anabot.ru/uploads/1424262375_word9.PNG" src="http://anabot.ru/uploads/1424262375_word9.PNG" />
</a>
</p>
<p>
За&nbsp;сим все :) Успешных вам диссеров и&nbsp;дипломов!
</p>
<br>
&copy;&nbsp;Д.&nbsp;И.&nbsp;Спрозин<br>
<i>2015 год</i>
</div>
   <script type="text/javascript" src="/js/paper.js"></script>
  </td>
  <td class="paper_right">
&nbsp;
  </td>
 </tr>
 <tr>
  <td class="border_left_bottom">
   &nbsp;
  </td>
  <td class="paper_right">&nbsp;
  </td>
 </tr>
</table>
<div class="footer_ie">&nbsp;</div>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm'; ?>
