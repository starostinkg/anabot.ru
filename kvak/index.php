<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';
include ROOT . 'Cls/Cls_Kvak.php';
include ROOT . 'inc/header_common.htm';


?>


<br class="break0">

<!--Список КВА -->
<?php include ROOT . 'components/kvak/index.php'; ?>
<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <div class="actual_title" id="actual_title">
	<?php echo $kvak_title; ?>
   </div>
  </td>
  <td class="border_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="border_left">
   <hr>
   <div class="actual_body paper_body">
ква<br>
<?php echo $kvak_body; ?>
<br>ква
<br>ква
<br>ква
   </div>
  </td>
  
  <td class="border_right">

<?php
 echo $f[13]->kvak();
 echo $f[16]->kvak();
 echo $f[10]->kvak();
 echo $f[19]->kvak();
 echo $f[20]->kvak();
 echo $f[14]->kvak();
 echo $f[22]->kvak();
 echo $f[12]->kvak();
?>

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
