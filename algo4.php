<?php

// CN1 : n == 0 => 0
// CN2 : n == 2 => 3
// 
// CN4 : n == -1 => FAUX

function sumNIntegers($n)
{
  $k ;
  if ($n >= 0) {
    $k = ($n * $n/2) + $n/2 ;
    return $k ;
  }
  return false ;
}

/*
function sumNIntegers($n) {
    if ($n < 1) {
        return false;
    }
    
        Déclarer resultat <- 0
        Déclarer compteur <- 1
        TANT QUE compteur <= n FAIRE
            résultat <- résultat + compteur
            compteur <- compteur + 1
        FIN TANT QUE
    
    $resultat = 0;
    $compteur = 1;
    while ($compteur <= $n) {
        $resultat = $resultat + $compteur;
        $compteur = $compteur + 1;
    }
    return $resultat;
}

*/

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
echo sumNIntegers(10) ;