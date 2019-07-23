<?php

  $frase = "A repetição é a mãe da retenção";
  $palavra = "mãe";
  
  //função para encontrar indice da palavra
  $q = strpos($frase, $palavra);
   var_dump($q);
  
  //função para encontrar a partir de um indice
  $texto = substr($frase, 0, $q);
  var_dump($texto);
 
  $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
  echo "<br>";
  var_dump($texto2);
  
?>
