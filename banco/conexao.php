<?php
function conectar(){

 //Conexão com o Banco
  $servidor = 'localhost';
  $banco      = 'dbphp';
  $usuario  = 'root';
  $senha    = '';

  $link = mysql_connect($servidor, $usuario, $senha);
  $bd = mysql_select_db($banco,$link);
  if(!$link)
  {
  echo "erro ao conectar ao banco de dados!";exit();
  } 
return $link;
}

