<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';

include ROOT . 'inc/header_common.htm';
?>

<script src="/js/ajax.js" type="text/javascript"></script>
<script src="/js/main.js" type="text/javascript"></script>
<script src="/js/calc.js" type="text/javascript"></script>

<div class="calc">
 <div class="calc_title">Калькулятор физических свойств</div>
 <div class="calc_pt">
  Выберите действие:
  <br>
  <select class="calc_select" id="calc_select" onchange="calc_sel(this.value)" name="act">
   <option value="bob4" selected="selected">Физические свойства воды на линии насыщения</option>
   <option value="bob23">Вязкость паров воды</option>
   <option value="bob9">Температуры кипения водных растворов неорганических веществ</option>
   <option value="bob14">Плотность органических жидкостей</option>
   <option value="bob15">Динамическая вязкость органических жидкостей</option>
   <option value="bob16">Поверхностное натяжение органических жидкостей</option>
   <option value="bob17">Коэффициенты объёмного теплового расширения органических жидкостей</option>
   <option value="bob18">Теплоёмкость органических жидкостей</option>
   <option value="bob19">Теплопроводность органических жидкостей</option>
   <option value="bob20">Теплота парообразования органических жидкостей</option>
   <option value="bob21">Давление насыщенного пара над органической жидкостью</option>
   <option value="bob22">Вязкость паров органических веществ</option>
  <select>
 </div>
 <div class="calc_arg">
  <div id="calc_arg_txt"></div>
  <div id="calc_arg"></div>
  <script type="text/javascript">
   calc_sel('x');
  </script>
 </div> 
 
 <div class="calc_ans">
  <div id="calc_ans_txt"></div>
  <input type="text" name="calc_ans" value="" class="calc_input" id="calc_input" onkeydown="if (event.keyCode == 13) calc_ans();"><br>
  <div align="right" class="calc_button"><input type="button" onclick="calc_ans()" value="Посчитать"></div>
 </div>
 
 <div id="calc_lin">
  Использован <a href = "http://ru.wikipedia.org/wiki/%d0%9b%d0%b8%d0%bd%d0%b5%d0%b9%d0%bd%d0%b0%d1%8f_%d0%b8%d0%bd%d1%82%d0%b5%d1%80%d0%bf%d0%be%d0%bb%d1%8f%d1%86%d0%b8%d1%8f" target="_blank">метод линейной интерполяции:</a><br><br>
  <img src="/lab/img/lin_inter.gif" alt="" class="lin_inter">
 </div>
 <div id="calc_answer">
  0
 </div>
&nbsp;
 </div>
 <div id="calc_source">&nbsp;</div>
<br>
<br>
<div class="footer_ie" style="height: 450px;">&nbsp;</div>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm';