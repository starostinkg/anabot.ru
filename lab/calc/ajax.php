<?php
$razm1 = '';
$b = 0;

if (empty($_GET['act']) && empty($_COOKIE['calc_act'])) exit('Нет аргументов');
elseif (isset($_GET['act'])) {$act = $_GET['act']; SetCookie('calc_act', $act);}
else $act = $_COOKIE['calc_act'];
$act = str_replace(array('.', '/', '\\'), '', $act);
if (!is_file($_SERVER['DOCUMENT_ROOT'] . '/conf/bob/' . $act . '.txt')) exit('Ошибка. Код ошибки: 6');

if (!defined('n')) define("n", "\r\n");
$fname = $act . '.txt';
$conf_name = $act . '.conf';
$f = join('', file($_SERVER['DOCUMENT_ROOT'].'/conf/bob/'.$fname));
$f = str_replace (',' , '.' , str_replace ("\r", "", $f));

$f = explode ("\n", $f);
$c = explode("\t", $f[0]);


foreach ($f as $key => $value){
 if ($key == 0) continue;
 $formula_chem = explode ("\t", $value);
 foreach ($formula_chem as $key1 => $grad) {
  if ($key1 == 0) continue;
  $mas["$formula_chem[0]"]["$c[$key1]"] = $grad;
 }
}
$arkeys = array_keys($mas);
$select = '';
foreach ($arkeys as $key => $value){
 $selected = isset($_POST['formula_chem']) && $_POST['formula_chem'] == $value ? ' selected = "selected"' : '';
 $select .= '<option value = "'.$value.'"'.$selected.'>'.$value.'</option>'.n;
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/conf/bob/' . $conf_name;

if (isset($_GET['calc_ans'])) calc_ans($_GET['calc_ans']);
else echo $select . $t_text_conf;

function calc_ans($b) {
 $bodyText = '';
 $error_conf = $GLOBALS['error_conf'];
 $razm =  $GLOBALS['razm'];
 $a = unescape($_GET['formula_chem']);
 $b = str_replace (',', '.', unescape($b));
 if (strpos ($b, '%') !== false) {
  $b = str_replace ('%', '', $b) / 100;
 }
 $cc = false;
 $ch = 0; //счетчик
 $mas = $GLOBALS['mas'];
 foreach ($mas as $key => $value) {
  if ($a == $key) {
   $razm = $razm[$ch];
   $mas = $mas["$a"];
   break;
  }
  $ch++;
 }
 if (!is_array($razm)) {
  $GLOBALS['razm1'] = $razm;
  $curr_mas = reset($mas);
  do {
   $key = key($mas);
   if (!preg_match('#^[-0-9\.E]+$#', $curr_mas)) {continue;}
   if ($key == $b) {
    $lin = 0;
    $cm[0] = $key;
    $cc = true;
    break;
   }
   elseif ($key > $b) {
    $lin = 1;
    $tmp = prev($mas);
    $cm[0] = key($mas);
    if (!preg_match('#^[-0-9\.E]+$#', $tmp)) break;
    next($mas);
    $cm[1] = $key;
    $cc = true;
    break;   
   }
   elseif (!preg_match('#^[-0-9\.E]+$#', $curr_mas)) {break;}
   $curr_mas=next($mas);
   if (!preg_match('#^[-0-9\.E]+$#', $curr_mas)) {break;}
   $curr_mas=prev($mas);
  }
  while ($curr_mas=next($mas));
  $GLOBALS['b'] = $b;
  if ($cc === false) $bodyText .= '!!!' . $error_conf . '!!!!!!!!!!!!';
  else $bodyText .= result($mas, $cm, $lin);
 }
 else {
  $bodyText .= 'Ошибка: '.__LINE__;
  $erf = join(';', $_GET);
  fwrite(fopen("error.txt", "a+"), $erf . "\r\n");
 }
 echo $bodyText;
 exit();
}

function result($mas, $cm, $lin){
 $html = '!!!';
 $html .=  $GLOBALS['rez_text_conf1'];
 if ($lin == 0) {
  $html .= '!!!<i>Рассчитывать не пришлось &mdash; данные оказались в таблице :-)</i>';
  $html .= '!!!';
  $html .= '!!!<span style = "color: #000000">'.drob($mas[$cm[0]]).'</span> '.$GLOBALS['razm1'];
 }
 elseif ($lin==1) {
  $html .= '!!!lin';
  $html .= '!!!' . drob($mas[$cm[0]]).' + ('.(drob($mas[$cm[1]]).' &ndash; '.drob($mas[$cm[0]])).') &middot; ('.(drob($GLOBALS['b']).' &ndash; '.drob($cm[0])).') / ('.(drob($cm[1]).' &ndash; '.drob($cm[0])).')';
  $rez=$mas[$cm[0]] + ($mas[$cm[1]] - $mas[$cm[0]]) * ($GLOBALS['b'] - $cm[0]) / ($cm[1] - $cm[0]);
  $rez =  round_to($rez, 4);
  $html .= '!!!' . drob($rez).(isset($buf[2]) ? ' '.$buf[2] : ''). ' ' . $GLOBALS['razm1'];
 }
 return $html;
}

function drob($d) {
 $d=explode('E',$d);
 $d = str_replace ('-0', ' &ndash;', $d);
 $d = str_replace ('-', ' &ndash;', $d);
 return '<span style = "color: #000000">'.$d[0].(isset($d[1]) ? ' &middot; 10<sup>'.$d[1].'</sup>' : '').'</span>';
}

function unescape($source) {
 return preg_replace('#%u([0-9a-fA-F]{4})#se',
                  'iconv("UTF-16BE","UTF-8",pack("H4","$1"))',
                  $source);
}

function round_to($val, $to) {
    if ($val < 0) $n = -1;
    else $n = 1;
    $val = $val * $n;
	$mn=0;
	while ($val<0.1) {
		$val *= 10;
		$mn--;
	}
	while ($val>1) {
		$val /= 10;
		$mn++;
	}
	$val = round($val, $to);
	if ($mn!=0) $val *= pow(10,$mn);
	return $val * $n;
}
