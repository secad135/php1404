<?php
// دمای هوا
$hava = 22;

if ($hava < 0) {
echo "یخ";
}
elseif ($hava <= 30) {
echo "هوای خوب";
}
elseif ($hava > 30) {
echo "هوای گرم";
}

//-------------------------

// روزهای هفته
$week=0 ;

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

default :
echo "عدد وارد شده باید بین 0 تا 6 باشد";
}