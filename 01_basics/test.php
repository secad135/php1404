<?php
$a = 1.5 ;
var_dump($a);

echo "<br><br>";

// هم قبل و هم بعد نقطه اعشار فاصله باشد آن را عدد اعشاری فرض نمی کند
$b = 3 . 9 ;
var_dump($b);

echo "<br><br>";

$c = -346.890 ;
var_dump($c);

echo "<br><br>";

$f = 10.00 ;
var_dump($f);

echo "<br><br>";

// قبل یا بعد از نقطه فاصله باشد خطا میدهد
// $z = 4 .7 ;
// var_dump($z);