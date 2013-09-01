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
    Название статьи
   </div>
  </td>
  <td class="paper_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="paper_left">
   <hr>
   <div class="actual_body paper_body">
Текст статьи 
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












