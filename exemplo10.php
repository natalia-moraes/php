<?php

  $a = Null;
  $b = Null;
  $c = 10;
  
  //mostra a, mas se não existir mostra b, mas se não existir mostra c
  echo $a ?? $b ?? $c;

?>
