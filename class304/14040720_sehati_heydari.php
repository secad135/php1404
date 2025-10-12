<?php

$x = 12;
$y = 3; 


echo "jam x , y = " . $x+ $y . "<br>";
echo "tafrigh x , y = " . $x- $y . "<br>";
echo "zarb x , y = " . $x* $y . "<br>";
echo "taghsim x , y = " . $x/ $y . "<br>";
echo "baghimande x , y = " . $x% $y . "<br>";

echo "<hr>";

echo --$x . "<br>";
echo --$x . "<br>";

echo "<hr>";

$username = "hossein";
$password = 123456;
 
$login = ($username == "hossein" and $password == 123456) ? "خوش آمدید کاربر محترم" : "بیا بیرون";

echo $login;

echo "<hr>";


$x = 12;
$y = 3; 

$x .= $y;

echo $x;
var_dump($x);