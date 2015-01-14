<?php

require_once "banco/conexao.php";

$link = conectar();
$SQL = "SELECT * FROM funcionario";
$Requisicao  = mysql_query($SQL);
while($RF = mysql_fetch_array($Requisicao))
{
    echo '<pre>';
    print_r($RF);
    echo '</pre>';
}

?>






