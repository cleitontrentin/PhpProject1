<?php

include("banco/conexao.php");

$pdo = conectar();

$nomeCliente =$_POST ["nome"];
$endereco=$_POST ["endereco"];
$telefone=$_POST ["telefone"];
$desativado=$_POST ["desativado"];
//prepara o cadastro
$busca = $pdo -> prepare ("INSERT INTO cliente (nome, endereco, telefone, desativado) Values (?,?,?,?)");
$busca->binValue(":Cristiano",$nomeCliente);
//Valida o cadastro
$validar = $pdo->prepare("SELECT * FROM cliente where nome = ? ");
$validar->execute(array($nomeCliente));
if($validar->rowCount()== 0):
 // Executa o cadastro
$busca->execute();
else:
    echo "ja existe";
    endif;
    
    


?>

