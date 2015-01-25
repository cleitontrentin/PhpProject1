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
    private $idFuncionario;
    private $idCliente;
    private $dtAbertura;
    private $dtFechamento;
    private $valor;
    private $status;
    private $desativado;
    
    public function getIdOrdemServico() {
        return $this->idOrdemServico;
    }

    public function getIdFuncionario() {
        return $this->idFuncionario;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getDtAbertura() {
        return $this->dtAbertura;
    }

    public function getDtFechamento() {
        return $this->dtFechamento;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDesativado() {
        return $this->desativado;
    }

    public function setIdOrdemServico($idOrdemServico) {
        $this->idOrdemServico = $idOrdemServico;
    }

    public function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setDtAbertura($dtAbertura) {
        $this->dtAbertura = $dtAbertura;
    }

    public function setDtFechamento($dtFechamento) {
        $this->dtFechamento = $dtFechamento;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setDesativado($desativado) {
        $this->desativado = $desativado;
    }



}
