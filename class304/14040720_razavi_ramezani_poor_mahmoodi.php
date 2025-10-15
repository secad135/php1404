<?php

$x = "41";
$y = 251;
$z = 12;

var_dump($x != $y and $z < $y);

echo "<hr>";

$username = "mohamad";
$password = 312;

$login = ($username == "mohamad" and $password == 312) ? "خوش امدید کاربر گرامیی" : "سیکتیررر کن ";

echo $login;

echo "<hr>";

$y = 251;
$z = 12;

$y .= $z;

echo $y;
var_dump($y);