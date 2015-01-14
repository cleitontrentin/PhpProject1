<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrdemServico
 *
 * @author Iasoft7
 */
class OrdemServico {
    //put your code here
    private $idOrdemServico;
    private $idFuncionario = Funcionario;
    private $idCliente = Cliente;
    private $dtAbertura;
    private $dtFechamento;
    private $servico;
    private $status;
    private $desativado;
    
    function getIdOrdemServico() {
        return $this->idOrdemServico;
    }

    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getDtAbertura() {
        return $this->dtAbertura;
    }

    function getDtFechamento() {
        return $this->dtFechamento;
    }

    function getServico() {
        return $this->servico;
    }

    function getStatus() {
        return $this->status;
    }

    function getDesativado() {
        return $this->desativado;
    }

    function setIdOrdemServico($idOrdemServico) {
        $this->idOrdemServico = $idOrdemServico;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setDtAbertura($dtAbertura) {
        $this->dtAbertura = $dtAbertura;
    }

    function setDtFechamento($dtFechamento) {
        $this->dtFechamento = $dtFechamento;
    }

    function setServico($servico) {
        $this->servico = $servico;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDesativado($desativado) {
        $this->desativado = $desativado;
    }


}
