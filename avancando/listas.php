<?php

// $idadeList = array(21, 23, 19, 25, 30, 41, 18);
$idadeList = [21, 23, 19, 25, 30, 41, 18];
// $primeiroItem = $idadeList[0];
// echo $primeiroItem;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
  echo $idade . PHP_EOL;
}