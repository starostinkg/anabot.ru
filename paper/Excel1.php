<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . 
'/');
include ROOT . 
'conf/main_conf.php';

include ROOT . 
'inc/header_common.htm';
?>



<br class="break0">

<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <div class="actual_title">
    Оформление Excel-графиков. 
Выпавшие точки.
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
В&nbsp;данной статье будут рассмотрены приемы усреднения графиков и&nbsp;обработки выпавших точек. 
Дело в&nbsp;том, что в&nbsp;жизни каждого студента наступает такой момент, когда его перестает устраивать график такого вида:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424987960_excel-1.GIF">
<img alt="" src="http://anabot.ru/uploads/1424987960_excel-1.GIF" />
</a>
</p>
<p>
Эту безобразную зависимость можно легко представить, как вполне себе линейную, если строить график руками (руками&nbsp;&mdash; это на&nbsp;миллиметровке&nbsp;&mdash; это на&nbsp;такой бумаге в&nbsp;мелкую клеточку). 
С&nbsp;автоматикой все сложнее&nbsp;&mdash; если подпись осей рано или поздно осваивают даже самые ленивые (или не&nbsp;осваивают, а&nbsp;варварски подписывают карандашом), то&nbsp;с&nbsp;выпавшими точками идет как-то туже.</p>
<p>
Старая мудрость гласит, что прямую линию нужно проводить через две точки. 
Чем точек больше, тем кривее становится предполагаемая прямая. 
Чтобы вернуть ей&nbsp;желаемый вид, можно провести, например, усредненную линию. 
В&nbsp;Excel это называется &laquo;линия тренда&raquo;:</p>
<p style="text-align:center;">
<img alt="" src="http://anabot.ru/uploads/1424988340_excel-2.GIF" />
</p>
<p>
Согласитесь, выглядит лучше, чем просто провести кривульку через все точки. 
Но&nbsp;в&nbsp;чистом виде этот прием выручает далеко не&nbsp;всегда. 
Будь у&nbsp;нас в&nbsp;руках карандаш, мы&nbsp;бы легко отбросили явно ошибочные (выпавшие) точки и&nbsp;построили&nbsp;бы усредненную линию только по&nbsp;верхним точкам. 
Сделать подобное можно и&nbsp;в&nbsp;Excel. 
Сравните:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424988561_excel-3.GIF">
<img alt="" src="http://anabot.ru/uploads/1424988561_excel-3.GIF" style="height:210px;width:700px;" />
</a>
</p>
<p>
Заметно, что правая зависимость больше соответствует реальности. 
Но&nbsp;если при ручном построении &laquo;лишние&raquo; точки так&nbsp;бы и&nbsp;остались на&nbsp;графике, то&nbsp;в&nbsp;Excel-варианте образовались дыры&nbsp;&mdash; как будто мы&nbsp;поленились выполнять несколько экспериментов. 
По&nbsp;выпавшим точкам (если их&nbsp;немного) вопросов ни&nbsp;у&nbsp;кого не&nbsp;возникнет&nbsp;&mdash; всякое бывает: зевнул, прибор глюканул, рука дрогнула... 
А&nbsp;вот &laquo;дырки&raquo; сразу бросаются в&nbsp;глаза, потому будем от&nbsp;них избавляться. 
В&nbsp;качестве подопытного кролика возьмем что-то поближе к&nbsp;жизни:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424993874_excel-4.GIF">
<img alt="" src="http://anabot.ru/uploads/1424993874_excel-4.GIF" style="height:395px;width:701px;" />
</a>
</p>
<p>
Попутно причешем график и&nbsp;сделаем его более читабельным.</p>
<p>
Начнем с&nbsp;подписи&nbsp;&mdash; подпись быть должна. 
Либо на&nbsp;графике, либо под ним. 
Второй вариант очевиден, так что рассмотрим первый. 
Один щелчок по&nbsp;графику, наверху выбираем &laquo;Работа с&nbsp;диаграммами&raquo; &gt; &laquo;Макет&raquo; &gt; &laquo;Название диаграммы&raquo; &gt; &laquo;Над диаграммой&raquo;.</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424992549_excel-5.png">
<img alt="" src="http://anabot.ru/uploads/1424992549_excel-5.png" style="height:292px;width:651px;" />
</a>
</p>
<br>
<p>
График назвать&nbsp;&mdash; полдела. 
Важно показать, в&nbsp;каких попугаях мы&nbsp;измеряли. 
Для этого чуть правее находится кнопка &laquo;Названия осей&raquo;. 
Тыкаем, выбираем понравившийся вариант, заменяем &laquo;Название оси&raquo; на&nbsp;свой текст. 
Легенду (такой отрезок справа с&nbsp;подписью &laquo;Ряд&nbsp;1&raquo;) можно смело удалить&nbsp;&mdash; когда график один в&nbsp;ней смысла нет. 
Получится что-то такое:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424994013_excel-6.GIF">
<img alt="" src="http://anabot.ru/uploads/1424994013_excel-6.GIF" style="height:395px;width:701px;" />
</a>
</p>
<br>
<p>
Ну&nbsp;разве не&nbsp;обидно? График получился замечательный, всего пара выпавших точек. 
Но&nbsp;линию тренда тут уже не&nbsp;провести, а&nbsp;оставлять как есть тоже нельзя. 
Проводя линию через очередную точку, мы&nbsp;подтверждаем, что готовы не&nbsp;только объяснить, почему она там взялась, но&nbsp;и&nbsp;доказать, что она там <em>
необходима</em>
. 
Мы&nbsp;тут даже не&nbsp;можем просто выбросить лишние точки, как в&nbsp;примере выше. 
Получится дырявая зависимость:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424994461_excel-7.GIF">
<img alt="" src="http://anabot.ru/uploads/1424994461_excel-7.GIF" style="height:395px;width:701px;" />
</a>
</p>
<br>
<p>
Да, можно подогнать значения так, чтобы они легли на&nbsp;одну линию, но&nbsp;это не&nbsp;наш метод :) Итак, что имеем: график и&nbsp;таблицу к&nbsp;нему.</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424994682_excel-8.GIF">
<img alt="" src="http://anabot.ru/uploads/1424994682_excel-8.GIF" style="height:411px;width:833px;" />
</a>
</p>
<br>
<p>
Выделим желтым маркером выпавшие точки в&nbsp;таблице:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424994855_excel-9.GIF">
<img alt="" src="http://anabot.ru/uploads/1424994855_excel-9.GIF" style="height:401px;width:834px;" />
</a>
</p>
<br>
<p>
Теперь нажмите правой кнопкой по&nbsp;графику -&gt; &laquo;Выбрать данные&raquo;:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424995184_excel-10.png">
<img alt="" src="http://anabot.ru/uploads/1424995184_excel-10.png" style="height:316px;width:551px;" />
</a>
</p>
<br>
<p>
Там нажмите &laquo;Удалить&raquo;&nbsp;&mdash; ваш график исчезнет. 
Теперь нажмите &laquo;Добавить&raquo;</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424995401_excel-11.png">
<img alt="" src="http://anabot.ru/uploads/1424995401_excel-11.png" style="height:188px;width:330px;" />
</a>
</p>
<p>
В&nbsp;первой строке можете ввести название линии (если у&nbsp;вас их&nbsp;несколько). 
Теперь перейдите ко&nbsp;второй строке. 
Зажав Ctrl, выберите мышкой сначала верхний диапазон левого столбца (до&nbsp;первой желтой ячейки), после<strong>
, не&nbsp;отпуская Ctrl, </strong>
выберите мышкой второй диапазон (между желтыми ячейками) и, наконец, выберите диапазон после второй желтой ячейки. 
Получится так:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424995875_excel-12.png">
<img alt="" src="http://anabot.ru/uploads/1424995875_excel-12.png" style="height:398px;width:546px;" />
</a>
</p>
<p>
Как видите, желтые ячейки не&nbsp;имеют общей рамки. 
Если рука дрогнула, то&nbsp;лучше стереть все из&nbsp;второй строки &laquo;Значения&nbsp;Х:&raquo; и&nbsp;выделить диапазоны заново. 
Теперь переходим к&nbsp;третьей строке &laquo;Значения Y&raquo;. 
Сотрите ее&nbsp;содержимое и&nbsp;аналогичным образом выделите в&nbsp;правом столбце все ячейки, кроме желтых. 
Нажмите OK. 
Снова нажмите &laquo;Добавить&raquo;. 
Теперь, находясь на&nbsp;второй строке, просто щелкните по&nbsp;левой верхней желтой ячейке, в&nbsp;третьей строке (предварительно все удалив оттуда) щелкните мышкой по&nbsp;правой верхней желтой ячейке. 
Нажмите ОК. 
Аналогично нужно добавить нижние две желтые ячейки. 
Результат можно посмотреть чуть ниже.</p>
<p>
Теперь приведем к&nbsp;общему виду выпавшие точки и&nbsp;график. 
Правая кнопка по&nbsp;выпавшей точке -&gt; Формат ряда данных. 
В&nbsp;открывшемся окне меняем &laquo;Параметры маркера&raquo;, &laquo;Заливка маркера&raquo; и&nbsp;&laquo;Цвет линии маркера&raquo; на&nbsp;нужные (как у&nbsp;основного графика).</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424996502_excel-13.GIF">
<img alt="" src="http://anabot.ru/uploads/1424996502_excel-13.GIF" style="height:402px;width:777px;" />
</a>
</p>
<p>
<br />
Еще раз вспомним, как было:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424993874_excel-4.GIF">
<img alt="" src="http://anabot.ru/uploads/1424993874_excel-4.GIF" style="height:395px;width:701px;" />
</a>
</p>
<p>
<br />
Стало:</p>
<p style="text-align:center;">
<a href="http://anabot.ru/uploads/1424996852_excel-14.GIF">
<img alt="" src="http://anabot.ru/uploads/1424996852_excel-14.GIF" style="height:395px;width:701px;" />
</a>
</p>
<p>
Это далеко не&nbsp;предел совершенства, но&nbsp;направление, думаю, понятно. 
Критикуйте, задавайте вопросы, предлагайте свои программы для построения графиков (желательно бесплатные и&nbsp;без особых наворотов)...</p>
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
<?php include ROOT . 
'inc/footer_common.htm'; ?>












