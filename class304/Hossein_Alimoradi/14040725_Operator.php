<?php
// حسین علیمرادی
$a = 55 ;
$s = 40 ;
var_dump($a == $s) ;
var_dump($a < $s) ;
echo "" ;
$d =35;
$f =60;
$k=53;
$p=74;
Var_dump ( $d < $f and $k < $p);
Var_dump ( $d < $f and $k == $p);
Var_dump ( $p == $k or $d < $f);
Var_dump ( $k == $f or $d < $p);
//------------------
echo "" ;
$x = 10 ;
$y = 5 ;
$x += $y ;
echo $x ;
echo "" ;
$h = ( 5 < 3 ) ? "yes" : "no" ;
echo $h ;
echo "" ;
$t = 10 ; 
echo ++$t ;
//اول مقدار اضافه می‌شود بعد نشان داده می‌شود
echo ++$t ;
echo ++$t ;
echo ++$t ;
echo "" ;
$DaneshAmooz = array("hossein", "alimorady", "1386", "0770360317");
var_dump($DaneshAmooz);
echo "" ;
$m=5.6;
var_dump ($m); //flout
echo " " ;
$b=60;
var_dump ($b); // integer
echo "" ;
$e = 5;
$w = 4;
echo $e + $w;
echo "" ;
define("hossein" , "0770360316");
echo hossein ;