<?php

//mysql_connect("localhost", "root", "");
//mysql_select_db("dbphp");

$banco = "dbphp";
$usuario = "root";
$senha = "";
$hostname = "localhost";
$conn = mysql_connect($hostname, $usuario, $senha);
mysql_select_db($banco) or die("Não foi possível conectar ao banco MySQL");
if (!$conn) {
    echo "Não foi possível conectar ao banco MySQL.";
    exit();
} else {
    echo "<br>Parabéns!! A conexão ao banco de dados ocorreu normalmente!.</br>";

}
?>

<?php
include_once ("./conexao.php");

$SQL = "SELECT * FROM funcionario";
$Requisicao  = mysql_query($SQL);
while($RF = mysql_fetch_array($Requisicao))
{
    echo '<pre>';
    print_r($RF);
    echo '</pre>';
}


?>



