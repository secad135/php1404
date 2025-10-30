<?php
// روزهای هفته
$week = 2;

switch ($week) {
case 0:
echo "شنبه";
break;
case 1:
echo "یکشنبه";
break;
case 2:
echo "دوشنبه";
break;
case 3:
echo "سه‌شنبه";
break;
case 4:
echo "چهارشنبه";
break;
case 5:
echo "پنج‌شنبه";
break;
case 6:
echo "جمعه";
break;
default:
echo "عدد باشد بین 0 تا 6 باشد";
}
//---------------------
$damayehava= 10;

if ($damayehava< 0) {
echo "یخ";
}
elseif ($damayehava <= 30) {
echo "هوای خوب";
}
else {
echo "هوای گرم";
}