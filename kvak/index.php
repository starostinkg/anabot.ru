<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';
include ROOT . 'Cls/Cls_Kvak.php';
include ROOT . 'components/kvak/index.php';
include ROOT . 'inc/header_common.htm';


?>

<script type="text/javascript" src="/js/kvak.js"></script>

<br class="break0">
<div class="kvak_head"><?php echo $pages; ?></div>
<!--Список КВА -->

<table class="table_actual kva">
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
  <td class="<?php echo $main_css;?>_left">
   <hr>
   <div class="actual_body paper_body">
<?php eval($kvak_body); ?>
   </div>
  </td>
  
  <td class="<?php echo $main_css;?>_right">

<?php
 if ($main_css == "border") {
  echo $f[13]->kvak();
  echo $f[16]->kvak();
  echo $f[10]->kvak();
  echo $f[19]->kvak();
  echo $f[20]->kvak();
  echo $f[14]->kvak();
  echo $f[22]->kvak();
  echo $f[12]->kvak();
 }
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
