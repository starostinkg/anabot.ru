<?
//Подкласс файлового архива
class Cls_files {
 static $style_files;
 protected $f;
 private $ul;
 private $ch1;
 private $beg;
 public $startlist;
 function __construct(){
  self::$style_files=1;
  $this->f=file($_SERVER['DOCUMENT_ROOT']."/conf/files.txt");
  $this->ul=0;
  $this->ch1=0;
  $this->beg=1;
  $this->startlist="";
 }
 function startlist(){
  self::$style_files="";
  $flask_ch = 0;
  foreach($this->f as $key => $value){
   if($value[0]=="#") continue;
   $value_md5=md5($value);
   $value=str_replace("&","&amp;",$value);
   $value=str_replace("&amp;#","&#",$value);
   $value=str_replace("\n","",$value);
   $value=str_replace("\r","",$value);
   $value=str_replace("<","&lt;",$value);
   $value=str_replace(">","&gt;",$value);
   for($i=0;$i<10;$i++){
    $value=preg_replace("/[\"]{1}([^\"]*)[\"]{1}/","&laquo;$1&raquo;",$value);
    $value=preg_replace("/([^0-9]*)[ ][-][ ]([^0-9]*)/","$1 &mdash; $2",$value);
    $value=preg_replace("/([^0-9][0-9]{1,3})[ ][-][ ](.*)/","$1 &mdash; $2",$value);
    $value=preg_replace("/(.*)[ ][-][ ]([0-9]{1,3}[^0-9])/","$1 &mdash; $2",$value);
    $value=preg_replace("/([0-9]{4})[ ][-][ ]([0-9]{4})/","$1 &ndash; $2",$value);
   }
   for($i=0;$i<50;$i++){
    $value=preg_replace("/\[br\](.*)/","<br><span style=\"font-size:12pt; color:#000000\">$1</span><span style='font-size:6pt;'><br>&nbsp;</span>",$value);
    $value=str_replace("[N]","",$value);
    //$value=str_replace("[N] ","[N]&nbsp;",$value);
    //$value=str_replace(" [N]","[N]",$value);
    //$value=preg_replace("/(.*)\[N\]/","$1<span style='font-size:10pt; vertical-align: super; /*color:black; background:white;*/ margin-left:3px; color:red;'><a name='$value_md5'></a><a href = '#$value_md5' style = 'color:red'>Свежак!</a></span>",$value);
   }
   if(
    isset($value[0]) && isset($value[1]) && $value[0]=="*" && $value[1]!="*" ||
    isset($value[0]) && !isset($value[1]) && $value[0]=="*"
   ) {
    while($this->ul>0){
     if (strpos($value, '<') !== false || strlen($value) < 4) $value="</ul>".$value;
     else $value="</ul></div>".'<div id="flask_ul_' . ++$flask_ch . '"><div style="font-size:14pt">'.$value.'</div>';
     $this->ul--;
    }
    if ($this->beg==1) {$this->beg=0; $value='<br> <div id="flask_ul_' . ++$flask_ch . '">' . $value;}
    else $value="<br><br>".$value;
  
    $value=preg_replace("/[*]{1}(.*)/","<div id='flask_title_$flask_ch' style='font-weight: bold;'>$1</div>",$value);
    $value = str_replace("<div id='flask_title_$flask_ch' style='font-weight: bold;'></div>", "<div></div>", $value);
    $value.="<ul>";
    $this->ul++;
   }
   if(isset($value[0]) && $value[0]=="-") {
    $value=preg_replace("/[-]{1,}(.*)[\[]{1}([^\]]{4,})[\]]{1}(.*)/","<li><a href=\"$2\">$1</a>$3",$value);
    $value=str_replace(" </a>","</a>",$value);
   }
   if($value=="") {
   }
   if(isset($value[0]) && $value[0]=="*") {
    for($this->ch=0;$this->ch<100;$this->ch++){
     if(!isset($value[$this->ch]) || $value[$this->ch]!="*") {$this->ch1=$this->ch; break;}
    }
    if($this->ul==$this->ch1){
     $value=preg_replace("/[*]{1,}(.*)/","</ul><li>$1<ul>",$value);
     //$value.="===";
    }
    elseif($this->ul>$this->ch1){
     while($this->ul>$this->ch1){
      $value="</ul>".$value;
      $this->ul--;
     }
     $value="</ul>".$value;
     $value=preg_replace("/([^*]*)[*]{1,}(.*)/","$1<li>$2<ul>",$value);
     $value=str_replace("<li><ul>","<ul>",$value);
     //$value.=">>>$this->ul";
    }
    elseif($this->ul<$this->ch1){
     while($this->ul<$this->ch){
      $value.="<ul>";
      $this->ul++;
      //if($this->ul>5) {echo "[[$this->ul]]"; break;}
     }
     $value=preg_replace("/[*]{1,}(.*)/","<li>$1",$value);
     //$value.="<<<";
    }
   }
   $this->ch=0;
   $this->startlist.=$value."\n";
  }
 $this->startlist.="</ul></div><br>";
 $this->startlist=str_replace("<br><br></ul></ul><ul>","</ul></ul><ul>",$this->startlist);
 }
}
?>