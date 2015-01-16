<?
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "root"; //seu usuario para acessar o banco
$pass = ""; //senha do usuario para acessar o banco
$banco = "dbPHP"; //banco que deseja acessar

$conexao = mysql_connect($host, $user) or die (mysql_error());
mysql_select_db($banco);
?>
 
