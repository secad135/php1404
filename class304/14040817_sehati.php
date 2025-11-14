<?php
$a=30;
$b=15;
$c=45;
if ($c > $a && $c > $b){
    echo $c;
}elseif($a > $b && $a > $c){

    echo $a;
}elseif($b > $a && $b > $c){
    echo $b;
}

