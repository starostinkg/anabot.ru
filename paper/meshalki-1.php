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
    Самодельная магнитная мешалка. Часть 1 (теоретическая)
   </div>
  </td>
  <td class="border_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="paper_left">
   <hr>
   <div class="actual_body paper_body">
<br>
<b>1. Не&nbsp;будем о&nbsp;грустном</b>
<p>Все началось с&nbsp;диплома... 
Точнее нет, не&nbsp;так. 
Все началось с&nbsp;того момента, как ваш покорный слуга к&nbsp;нему допустился. 
Это был очень непростой путь&nbsp;&mdash; наука в&nbsp;нашей стране тормозится всеми мыслимыми способами, а&nbsp;лаборатории все больше походят на&nbsp;заброшенные склады&nbsp;и... 
не&nbsp;будем о&nbsp;грустном. 
В&nbsp;общем, потребовалось шесть параллельно работающих мешалок, а&nbsp;в&nbsp;лабе их&nbsp;оказалось только три, из&nbsp;которых две были постоянно заняты. 
Что делать? Горький опыт подсказывал, что мешалок можно прождать до&nbsp;конца диплома (так и&nbsp;не&nbsp;дождавшись), а&nbsp;потому я&nbsp;решил сделать их&nbsp;сам. 
Магнитная мешалка представлялась наиболее заманчивым решением: удобна в&nbsp;обращении, мыть ее&nbsp;не&nbsp;требуется, не&nbsp;нужно ломать голову, как крепить вал... 
Вопрос только в&nbsp;том, а&nbsp;как ее&nbsp;делать?
</p>
<br>
<b>2. Все придумано до&nbsp;нас</b>
<p>
Гугл после недолгих пыток выдаст вам ссылку на&nbsp;статью <a rel="nofollow" target="_blank" href="http://how-make.ru/publ/1-1-0-189">men-person&rsquo;а.</a>
Она-то и&nbsp;вдохновила меня. 
Нисколько не&nbsp;умаляя значимость статьи&nbsp;&mdash; первой по&nbsp;этой теме&nbsp;&mdash; все&nbsp;же отметим, что автор несколько перегрузил свое творение. 
Сравните фотографии ниже (справа наш вариант, источник питания не&nbsp;показан):
</p>

<div class="img_center">
<img alt="" src="/paper/img/2mesh.jpg">
</div>

<p>
К&nbsp;тому&nbsp;же, далеко не&nbsp;все материалы, описанные в&nbsp;статье men-person&rsquo;а, являются подручными (не&nbsp;знаю как у&nbsp;вас, а&nbsp;у&nbsp;меня, например, нет &laquo;динамика древнего радио&raquo;, да&nbsp;и&nbsp;лишний дисковод на&nbsp;5&laquo;25&nbsp;не у&nbsp;каждого найдется). 
Спрозин шаг за&nbsp;шагом расскажет, как сделать магнитную мешалку&nbsp;&mdash; не&nbsp;то&nbsp;чтобы совсем из&nbsp;мусора, но&nbsp;затраты будут копеечными.
</p>
<br>
<a id="3"><b>3. Необходимый скарб</b></a>
<p>
Перед тем как, очертя голову, браться за&nbsp;отвертку с&nbsp;кувалдой, придется немного побегать по&nbsp;магазинам. Вот список-минимум для мешалки и&nbsp;примерные цены (Москва, 2012&nbsp;год):
</p>

<ul>
<li> CD/DVD диск&nbsp;&mdash; 1&nbsp;шт &times; 12&nbsp;руб;
<li> Кулер компьютерный (4pin, не&nbsp;ниже 0,16А)&nbsp;&mdash; 1&nbsp;шт &times; 50&nbsp;руб;
<li> Компьютерный блок питания&nbsp;&mdash; 1&nbsp;шт &times; 400&nbsp;руб;
<li> Магнит C&nbsp;4&times;15 N35H (цилиндр)&nbsp;&mdash; 1&nbsp;шт &times; 45&nbsp;руб; 
<li> Магнит P&nbsp;5&times;4&times;3 N35H (прямоугольник)&nbsp;&mdash; 2&nbsp;шт &times; 45&nbsp;руб 
<li> Клей &laquo;Супермомент&raquo;&nbsp;&mdash; 1&nbsp;шт &times; 50&nbsp;руб;

</ul>

<p>Итак... 
Во-первых, автор очень надеется, что у&nbsp;вас завалялся ненужный диск. 
Действительно, когда за&nbsp;окном двадцать первый век с&nbsp;интернетом и&nbsp;флешками, зачем вам DVD, а&nbsp;тем более CD? Пожертвуйте одним&nbsp;&mdash; и&nbsp;вот уже на&nbsp;<span class="nobr">12&ndash;20</span> рублей платить меньше. 
Дальше идет кулер за&nbsp;50&nbsp;рублей, который можно найти на&nbsp;<a href="http://market.yandex.ru/catalogmodels.xml?CAT_ID=755741&amp;hid=818965">Яндекс-Маркете</a> (выбираем кулер по&nbsp;параметрам &laquo;до&nbsp;50&nbsp;рублей&raquo;). 
Только кулер желательно выбирать именно с&nbsp;<span class="nobr">4-pin</span> разъемом&nbsp;&mdash; для блока питания, хотя на&nbsp;крайний случай подойдет и&nbsp;2-, и&nbsp;<span class="nobr">3-пиновые</span> (они для материнской платы). 
Разницу хорошо видно на&nbsp;картинках ниже: слева <span class="nobr">3-pin,</span> справа <span class="nobr">4-pin.</span>
</p>

<table class="table_img_noc">
<tr>
<td>
<img alt="" src="/paper/img/3pin.jpg">
</td>
<td>
<img alt="" src="/paper/img/4pin.jpg">
</td>
</tr>
</table>

<p>
Для тех, у&nbsp;кого внутренности компьютера вызывают вселенский трепет, поясним. 
Если вы&nbsp;купите кулер с&nbsp;разъемом 2- или <span class="nobr">3-pin,</span> то&nbsp;напрямую к&nbsp;компьютерному блоку питания его подключить не&nbsp;удасться&nbsp;&mdash; придется вооружиться ножницами. 
Как это делается мы&nbsp;рассмотрим во&nbsp;второй, практической части статьи. 
Таким&nbsp;же образом, через Яндекс-Маркет, подберете и&nbsp;блок питания. 
Немного о&nbsp;нем.
</p>
<p>
Стоит компьютерный блок питания (БП) от&nbsp;400&nbsp;рублей. 
С&nbsp;одной стороны, дорого. 
Однако, обратите внимание: сколько мешалок к&nbsp;нему можно подключить? Свыше полусотни! То&nbsp;есть, чем больше вам понадобится мешалок, тем меньше будет стоимость каждой (для интересующихся, подробные расчеты приведены в&nbsp;конце главы). 
К&nbsp;тому&nbsp;же, на&nbsp;развалах легко найти&nbsp;БП и&nbsp;за&nbsp;<span class="nobr">200&ndash;250 рублей.</span>
</p>
<p>
Магниты можно купить на&nbsp;любом радиорынке. 
Я&nbsp;делаю упор именно на&nbsp;эти марки (см. выше), потому что они довольно дешевы и&nbsp;уже испытаны.
На&nbsp;клее тоже останавливаться не&nbsp;буду&nbsp;&mdash; и&nbsp;стоит копейки, и, подобно блоку питания, используется для множества мешалок. 
</p>
<br>
<b> 4. Немного электротехники</b>
<p>
Когда будете покупать кулеры и&nbsp;блок питания, обращайте внимание на&nbsp;силу тока. 
Одни кулеры при напряжении питания 12&nbsp;Вольт потребляют 0,12&nbsp;Ампер, другие&nbsp;&mdash; 0,16А и&nbsp;т. 
д. 
Ниже&nbsp;0,16А брать нежелательно, т. 
к. 
при небольшом токе кулер, расчитанный на&nbsp;0,12А, не&nbsp;запустится, а&nbsp;когда все-таки сила тока достигнет нужной, мешалка будет вращаться слишком быстро. 
Определить ток несложно:
</p>
<div class="img_center">
<img alt="" src="/paper/img/fan.jpg">
</div>
<p>
С&nbsp;другой стороны, в&nbsp;зависимости от&nbsp;мощности, одни блоки питания расчитаны на&nbsp;9А, другие&nbsp;&mdash; на&nbsp;19... 
Прочитать это можно на&nbsp;боковой стенке:
</p>
<div class="img_center">
<img alt="" src="/paper/img/power.jpg">
</div>
<p>
На&nbsp;фотографии видно, что при напряжении 12&nbsp;Вольт максимальная сила тока, которую может выдержать данный блок питания, равна 12&nbsp;Ампер. 
В&nbsp;практическом отношении это означает, что к&nbsp;такому&nbsp;БП можно подключить 12&nbsp;/ 0,16 = 75&nbsp;кулеров (читайте&nbsp;&mdash; мешалок). 
Разумеется, читателю вряд&nbsp;ли понадобится так много, но&nbsp;ведь есть маломощные блоки питания (например, зарядка ноутбука или сотового телефона&nbsp;&mdash; на&nbsp;них тоже имеется информация о&nbsp;силе тока), и&nbsp;теперь вы&nbsp;сами можете посчитать, сколько мешалок к&nbsp;ним можно подключить. 
Кроме того, интересно поговорить об&nbsp;аккумуляторах&nbsp;&mdash; они позволят сделать вашу мешалку портативной. 
Оставим все это для второй или третьей части статьи, а&nbsp;пока закончим тему о&nbsp;БП и&nbsp;кулерах.
</p>
<br>
<b>5. Провода&nbsp;БП: красный, желтый, черный...</b>
<p>
Компьютерный блок питания&nbsp;&mdash; это просто кладезь всевозможных токов: теоретически, с&nbsp;него можно получать напряжения от&nbsp;3,3 до&nbsp;24&nbsp;Вольт. 
Теоретически, потому что в&nbsp;ряде случаев (с&nbsp;одним из&nbsp;них скоро познакомимся) максимально допустимый ток очень небольшой&nbsp;&mdash; едва&nbsp;ли хватит на&nbsp;запуск одной мешалки. 
Мы&nbsp;рассмотрим получение 5&nbsp;и&nbsp;12&nbsp;Вольт, позволяющие подключать десятки мешалок. 
Несложно заметить, что разъемов на&nbsp;компьютерном блоке питания несколько. 
Для нас представляют интерес <span class="nobr">4-штырьковые</span> (широкие):
</p>

<div class="img_center">
<img alt="" src="/paper/img/4pin-pw.jpg">
</div>

<p>
От&nbsp;них отходят 4&nbsp;провода разных цветов (или&nbsp;8, если разъем промежуточный), а&nbsp;именно: 2&nbsp;черных, желтый и&nbsp;красный. 
Вы, конечно, обращали внимание, что на&nbsp;обычной батарейке указана полярность: &laquo;+&raquo; и &laquo;&ndash;&raquo;. 
С&nbsp;блоком питания все аналогично, только &laquo;+&raquo; в&nbsp;данном случае&nbsp;&mdash; цветной провод, а &laquo;&ndash;&raquo; &mdash; черный.
</p>
<p>
<b>Важно. </b>
Если подключить мешалку к&nbsp;черному (&ndash;) и&nbsp;красному (+) проводам, то&nbsp;она будет работать под напряжением 5&nbsp;Вольт. 
В&nbsp;свою очередь, между черным (&ndash;) и&nbsp;желтым (+) проводами напряжение составляет 12&nbsp;Вольт.
</p>
<p>
Что будет, если подсоединить мешалку к&nbsp;двум черным проводам? Произойдет короткое замыкание. 
В&nbsp;старых&nbsp;БП вы&nbsp;почувствуете запах паленой проводки (так, так, может не&nbsp;будем лишний раз экспериментировать?) &mdash; рискуете спалить блок питания. 
В&nbsp;более новых&nbsp;БП произойдет мгновенное отключение&nbsp;&mdash; сработает предохранитель.
</p>
<p>
А&nbsp;если задействовать два цветных провода&nbsp;&mdash; желтый и&nbsp;красный? В&nbsp;разных интернетах пишут, что так можно получить 7&nbsp;Вольт. 
Можно, однако далеко вы&nbsp;на&nbsp;них не&nbsp;уедете&nbsp;&mdash; вряд&nbsp;ли запустите хотя&nbsp;бы одну мешалку (максимально допустимый ток&nbsp;&mdash; около 0,1&nbsp;ампер!). 
На&nbsp;практике результат наверняка будет аналогичен подсоединению к&nbsp;двум черным проводам&nbsp;&mdash; блок питания &laquo;подумает&raquo;, что произошло короткое замыкание, и&nbsp;отключится.
</p>
<p>
Что делать, если дух горе-экспериментатора в&nbsp;вас возобладал или просто случайно перемкнули обозначенные выше провода? Иначе говоря, что делать, если блок питания в&nbsp;панике отключился, издав напоследок легкий дымок с&nbsp;едким запахом? Вытащите его из&nbsp;розетки (я&nbsp;сказал, выдернуть из&nbsp;розетки, а&nbsp;не&nbsp;просто нажать выключатель!) и&nbsp;подождите секунд 30&nbsp;&mdash; с&nbsp;вероятностью 99% БП&nbsp;оживет. 
Только старайтесь устраивать ему таких стрессов поменьше, глядишь, проживет подольше.
</p>
<p>
Фух... Улеглось? Потерпите, еще немного&nbsp;&mdash; и&nbsp;практика!
</p>
<br>
<a id="6"><b>6. Провода кулера: много и&nbsp;разные</b></a>
<p>
И&nbsp;каких только проводов у&nbsp;кулеров не&nbsp;встречается: красный, желтый, зеленый... 
Целый светофор! А&nbsp;еще черный (он&nbsp;есть обязательно&nbsp;&mdash; хоть какой-то стандарт!), белый... 
Как в&nbsp;них ориентироваться? Если у&nbsp;вас кулер <span class="nobr">4-pin,</span> то&nbsp;все просто, на&nbsp;БП есть подходящий разъем, перепутать невозможно. 
А&nbsp;остальные?
</p>
<p>
Кулеры с&nbsp;<span class="nobr">2-pin</span> разъемом. 
В&nbsp;принципе, ничего сложного: один провод &laquo;+&raquo;, другой&nbsp;&mdash; &laquo;&ndash;&raquo;. 
Вы&nbsp;еще помните, что у&nbsp;БП&nbsp;&laquo;минусом&raquo; был черный провод? Так вот, это правило распространяется и&nbsp;на&nbsp;любой кулер. 
Находим у&nbsp;него черный провод&nbsp;&mdash; это будет &laquo;минусом&raquo;, второй будет &laquo;плюсом&raquo;. 
Проще легкого!
</p>
<p>
Кулеры с&nbsp;<span class="nobr">3-pin</span> разъемом. 
С&nbsp;ними сложнее: два провода все так&nbsp;же &laquo;+&raquo; и &laquo;&ndash;&raquo;, а&nbsp;третий? Будем есть слона по&nbsp;частям. 
Вначале, находим черный провод. 
Это у&nbsp;нас &laquo;минус&raquo;. 
Остается два. 
Как правило, это красный и&nbsp;желтый. 
Реже&nbsp;&mdash; красный и&nbsp;белый. 
В&nbsp;клинических случаях цвета совсем другие (тогда лезем в&nbsp;любимый поисковик или применяем метод научного тыка). 
Так вот, красный провод&nbsp;&mdash; &laquo;плюс&raquo;. 
Вот мы&nbsp;и&nbsp;вычленили нужные нам провода: красный (+) и&nbsp;черный (&ndash;). 
А&nbsp;для чего, спросите, желтый (белый) провод? Это таходатчик&nbsp;&mdash; снимать число оборотов кулера. 
Его можно обрезать, либо просто заизолировать в&nbsp;надежде, что когда-нибудь ваша мешалка будет показывать число оборотов.
</p>
<p>
Кулеры с&nbsp;<span class="nobr">4-pin</span> разъемом. 
С&nbsp;них начали, на&nbsp;них и&nbsp;закончим. 
Несмотря на&nbsp;то, что они <span class="nobr">4-штырьковые,</span> реально задействовано только два провода. 
При желании, их&nbsp;тоже можно разрезать и&nbsp;подключить, действуя по&nbsp;алгоритму выше: черный провод&nbsp;&mdash; &laquo;&ndash;&raquo;, второй провод (как правило, красный)&nbsp;&mdash; &laquo;+&raquo;. 
Зачем это может понадобиться? Например, вы&nbsp;захотите перенести мешалку подальше от&nbsp;блока питания.
</p>
<p>
В&nbsp;заключение (чтобы взорвать ваш бедный мозг окончательно): есть еще один тип <span class="nobr">4-pin</span> кулера&nbsp;&mdash; для материнской платы. 
Однако, он&nbsp;стоит дорого и&nbsp;вряд&nbsp;ли будет у&nbsp;кого-то лишним. 
А&nbsp;теперь выпейте чаю и&nbsp;съешьте ещё этих мягких французских булочек&nbsp;&mdash; <a href="/paper/25/602">приступаем к&nbsp;практике!</a>
</p>
<br>
&copy;&nbsp;Д.&nbsp;И.&nbsp;Спрозин<br>
<i>2012 год</i>
   </div>
  <!-- comment form -->
  <?php include ROOT . 'inc/paper/comment.htm'; ?>
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
  <td class="border_right_bottom">&nbsp;
  </td>
 </tr>
</table>
<div class="footer_ie">&nbsp;</div>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm'; ?>












