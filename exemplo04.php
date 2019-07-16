<?php

//Metodo get
$nome = (int)$_GET["usuario"];
  var_dump($nome);
  echo $nome;
//para testar metodo get: localhost\variaveis\exemplo04.php?usuario=123
//caso tenha mais de uma variavel para retornar no metodo get utiliza o & , ou seja, usuario=123&user=456;

/////////////////////////////////////////////////////////

//Pegando ip da maquina
$ip = $_SERVER["REMOTE_ADDR"];
  echo $ip;

//Pegando nome do arquivo (utilizado para sistema de log: que pagina usuario está acessando, data, hora, ip, navegador)
$nomeArquivo = $_SERVER["SCRIPT_NAME"];
  echo $nomeArquivo;
  
  
?>
