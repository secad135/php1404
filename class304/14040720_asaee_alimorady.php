<?php

define("ADAD_SABET", 6543);

$x = 25+ADAD_SABET;

echo $x;

echo "<hr>";
$f =34;
$w =74;
echo "jam f , w =" . $f + $w . "<br>";
echo "tafriq f , w =" . $f - $w . "<br>";
echo "taqsem f , w =" . $f / $w . "<br>";
echo "zarb f , w =" . $f * $w . "<br>";
echo "baqemandh f , w =" . $f % $w . "<br>";
echo "<hr>";
 var_dump($f < $w);
 echo  "<br>";
 var_dump($f > $w);
 echo  "<br>";
 var_dump($f == $w);
 echo  "<br>";
 var_dump($f != $w);
 echo  "<br>";
 var_dump($f === $w);
 echo  "<hr>";
 var_dump($f < $w or $f == $w );
 echo  "<hr>";
 
 $e =true ;
  var_dump(! $e);
  echo  "<hr>";

  $username = "sajad";
  $password = 54321 ;

  $login =($username == "sajad" and $password == 54321 )?  "wellcome"  : "get out";

echo $login ;

  echo  "<hr>";

$h = 67 ;
$g = 14 ;
  var_dump($h);

$h .= $g;

  echo $h;
  var_dump($h);