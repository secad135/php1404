<?php

$x = 5;
$y = 4;
echo $x + $y;

$x = 6;
$y = 12;
echo $x - $y;

$x = 7;
$y = 24;
echo $x * $y;

$x = 54;
$y = 40;
echo $x / $y;

$x = 31;
$y = 12;
echo $x % $y;

$x = 10 ;
$y = 10 ;
var_dump( $x < $y );

$x = 13 ;
$y = 9 ;
var_dump( $x > $y );

$x = 70 ;
$y = 70 ;
var_dump( $x <= $y );

$x = 66 ;
$y = 65 ;
var_dump( $x >= $y );


$x = 60 ;
$y = 70 ;
var_dump( $x == $y );

$x = 20 ;
$y = 50 ;
var_dump( $x != $y );

$x = 88 ;
$y = 43 ;
var_dump( $x === $y );

$x = 10 ;
$y = 10 ;
var_dump( $x < $y );

$x += $y;

echo $x;

$x -= $y;

echo $x;

// $x ++= $y;

echo ++$x;

// $x --= $y;

echo $x;

$x / $y;

echo $x;


$x * $y;

echo $x;

$x = ( 5 < 6 ) ?"yes" : " no" ;
echo $x ;