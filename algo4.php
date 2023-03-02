<?php

// CN1 : n == 0 => 0
// CN2 : n == 2 => 3
// CN3 : n == 10 => 55
// CN4 : n == -4 => FAUX

function sumNIntegers($n)
{
  return 1 ;
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
