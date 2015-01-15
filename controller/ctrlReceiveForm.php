<?php

/* Incluindo a classe de controle do Funcionário */
include_once("./ctrlCliente.php");
include_once("./ctrlFuncionario.php");
include_once("./ctrlOrdemServico.php");


//importando o controller referente ao controle de saída de informação
include_once("./ctrlSendForm.php");

/* htmlspecialchars - Converte caracteres especiais para a realidade HTML */
/* $_REQUEST - Variáveis de requisição HTTP */
/* Pegando a variavel que identifica o formulário que enviou os dados */
$formulario = htmlspecialchars($_REQUEST ['txtFormulario']);
/* Pegando a variavel que identifica a ação do formulário que enviou os dados */
$acao = htmlspecialchars($_REQUEST ['txtAcao']);

/* identifica e cria objeto para classe de control */
if ($formulario == "cliente") {
    $objController = new CtrlCliente();
} elseif ($formulario == "funcionario") {
    $objController = new CtrlFuncionario();
} elseif ($formulario == "ordemServico") {
    $objController = new CtrlOrdemServico();
}

/* identifica qual ação está sendo solicitada */
if ($acao == "principal") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Principal();
} elseif ($acao == "incluir") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Gravar();
} elseif ($acao == "alterar") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Alterar();
} elseif ($acao == "excluir") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Excluir();
} elseif ($acao == "listar") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Listar();
} elseif ($acao == "detalhe") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Detalhe();
} elseif ($acao == "pesquisa") {
    /* verificando a sessão */
    include_once("ctrlSessao.php");
    $objController->Pesquisa();
} elseif ($acao == "login") {
    $objController->Login();
} elseif ($acao == "upload") {
    $objController->MostraTela(null);
}
?>
