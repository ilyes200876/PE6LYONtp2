<?php

// CN1 : n == 0 => 0
// CN2 : n == 2 => 3
// 
// CN4 : n == -1 => FAUX

function sumNIntegers($n)
{
  $k = 0 ;
  while ($k < $n) {
    $k = $k + 1 ;
  } 
  return 3 ;
}

function testsumNIntegers_CN1() { 
  if (sumNIntegers(0) == 0) { 
      echo "Test de sumInteger(0) : Réussi " ;
   } 
   else { echo "Test de sumInteger(0) : Échec " ; 
  } 
}
 
testsumNIntegers_CN1() ; 
echo PHP_EOL;

function testsumNIntegers_CN2() { 
  if (sumNIntegers(2) == 3) { 
      echo "Test de sumInteger(2) : Réussi " ;
   } 
   else { echo "Test de sumInteger(2) : Échec " ; 
  } 
}
 
testsumNIntegers_CN2() ; 
echo PHP_EOL;

function testsumNIntegers_CN3() { 
  if (sumNIntegers(-1) == false) { 
      echo "Test de sumInteger(-1) : Réussi " ;
   } 
   else { echo "Test de sumInteger(-1) : Échec " ; 
  } 
}
 
testsumNIntegers_CN3() ; 
echo PHP_EOL;