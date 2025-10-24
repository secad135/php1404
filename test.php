<?php
// بیست عدد زوج با حلقه فور

$shomarande = 1 ; //شمارنده

for ($adad = 1 ; $shomarande <= 20 ; $adad++){
    if( $adad % 2 == 0 ){
        echo $shomarande . " -> " . $adad . "<br>" ;
        $shomarande++ ;
    }
    
}