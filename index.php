<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';

include ROOT . 'inc/header_common.htm';
?>

<script type="text/javascript" src="/js/lab.js"></script>


<br class="break0">

<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <div class="actual_title">
    Актуально
   </div>
  </td>
  <td class="border_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="border_left">
   <hr>
<!--Список новостей ("актуально!")-->
<?php include ROOT . 'components/main/actual.php'; ?>
   <div class="actual_body">
   <ul>
    <?php echo $Data; unset($Data); ?>
   </ul>
   </div>
  </td>
  <td class="border_right">
  <!--img src="/img/positive.gif" alt="Позитивые новости" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a class="border_right_link" href="#/news/"  style="color: gray;" onclick="alert('В разработке, скоро появится ;)');">Новости мира<br>
   от  01.09.2012</a>
  </div>
  <br class="break"-->

  <img src="/img/vk.gif" alt="Анабот Вконтакте" class="img_right_menu">
  <div class="border_right_menu">
   <a class="border_right_link" href="http://vkontakte.ru/club758006">Мы Вконтакте</a>
  </div>
  <br class="break">
  <img src="/img/sci-hub.gif" alt="Бесплатные научные статьи" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a target="_blank" class="border_right_link" href="http://www.sci-hub.org/">Sci-Hub: сервис доступа<br> к научной литературе</a>
  </div>
  <br class="break">
  <img src="/img/libgen.gif" alt="Бесплатные научные статьи" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a target="_blank" class="border_right_link" href="http://libgen.org/scimag/index.php">Поиск и скачивание научных статей и книг</a>
  </div>
  <br class="break">  
  <img src="/img/dz.gif" alt="Бесплатные научные статьи" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a target="_blank" class="border_right_link" href="http://www.jxplore.com/resources">Бесплатно скачать научные статьи</a>
  </div>
  <br class="break">
  <img src="/img/market.gif" alt="Жми скорей!" class="img_right_menu">
  <div class="border_right_menu">
   <a class="border_right_link" href="http://natribu.org/?IOPu8e-u5OAg8OXq6+Ds7uTg8uXr6CElIMDt4OHu8iDv6+Xi4PL8IPXu8uXrIO3gIOLg+Ogg7-Dl5Ovu5uXt6P8g7iDw5err4OzlLiUg7eUg5O7t6Ozg6fLlIMDt4OHu8iDx4u7o7Ogg7-Dl5Ovu5uXt6P-s6C4">Рекламодателям</a>
  </div>
  <br class="break">
  <img src="/img/bug.gif" alt="Единственный баг на сайте" title="Единственный баг на сайте" class="img_right_menu">
  <div class="border_right_menu">
   <a class="border_right_link" href="/forhack.php">Кулхацкерам</a><br>
  </div>
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
