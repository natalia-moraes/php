<?php

  // o resultado será a divisão de 3/2 = 1,5 somado ao valor 10 , temos 11,5
  $resultado = 10 + 3 / 2;
    echo $resultado;
    echo "<br>";
    
  //o resultado será a soma de 10+3 = 13 dividido por 2, temos 6,5
   $resultado = (10 + 3) / 2;
    echo $resultado;
    echo "<br>";
  
  //Operador E - duas condições tem que ser verdadeiras para validar como True
  $resultado = (10 + 2) / 2 < 5 && (10 + 6) / 8 < 3;
    echo $resultado;
  
    //Operador OU - uma das condições tem que ser verdadeira para validar como True
  $resultado = (10 + 2) / 2 < 5 || (10 + 6) / 8 < 3;
    echo $resultado;

?>
