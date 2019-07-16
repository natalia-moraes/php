<?php
  // Tipos basicos  
  $nome = "Maria";  //string
  $site = 'www.google.com.br';  //string com aspas simples
  $ano = 1990;   //numerico
  $salario = 5500.99; //decimal
  $bloqueado = false; //booleano
  
  ////////////////////////////////////
  
  //Tipos compostos
  $frutas = array("abacaxi", "morango", "laranja"); //array
    echo $frutas[2];
  
  $nascimento = new DateTime(); //objeto
  
  ////////////////////////////////////
  
  //Tipos especiais
  $arquivo = fopen("exemplo03.php", "r"); //resource
  var_dump($arquivo);
  
  $nulo = Null;   //nulo é ausencia de valor, não existe.
  $vazio= "";   //vazio, foi iniciado só não tem informação mas já reservou espaço na memoria.
?>
