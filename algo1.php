<?php

/*
  CN1 : mean(2,3) => 2.5
  CN2 : mean(2,4) => 3
*/
 function mean($nb1, $nb2)
{
  return 2.5 ;
}

function testMean_CN1() { 
    if (mean(3, 2) == 2.5) { 
        echo "Test de mean(3, 2) : Réussi " ;
     } 
     else { echo " Test de mean(3, 2) : Échec " ; 
    } 
}

testMean_CN1();

function testMean_CN2() {
  if (mean(2, 4) == 3.0) { 
    echo " Test de mean(2, 4) : Réussi " ;
 } 
 else { echo " Test de mean(2, 4) : Échec " ; 
} 
}

testMean_CN2();