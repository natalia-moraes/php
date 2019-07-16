<?php

$nome = "Natalia";
$DataNascimento = "1987";

// mostrar tipo da variavel
var_dump($nome);

//limpar variavel, destruir 
$nome1= "Joao";
echo $nome1;
echo "<br/>";
//caso tenha mais de uma variavel você pode utilizar , para acrescentar as demais no mesmo unset
unset($nome1);
echo($nome1);

//tratar variavel para exibir somente se existir
$nome1 = "Joao";
if(isset($nome1)){
  echo $nome1;
}

//concatenação
$nome1= "Joao"
$nome2 = "Silva";
$NomeCompleto = $nome1 . " " . $nome2;

echo $NomeCompleto;


?>
