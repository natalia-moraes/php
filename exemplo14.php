<?php

  $nome = "joAo raNgEl";
  
  //função letra MAIUSCULA
  echo strtoupper($nome);
  
  echo "<br>";
  
  //função letra minuscula
  echo strtolower($nome);
  
   echo "<br>";
  
  //função para mudar 1 letra de cada palavra
  echo ucwords($nome);
  
   echo "<br>";
  
  //função para mudar 1 letra - geralmente aplica se em paragrafo
  echo ucfirst($nome);
  
  //trocar informação 
  $empresa = "Hcode";

  $empresa = str_replace("o" , "0" , $empresa);
  $empresa = str_replace("e" , "3" , $empresa);

  echo $empresa;
  

?>
