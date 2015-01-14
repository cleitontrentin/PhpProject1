<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Iasoft7
 */
class Funcionario {
    //put your code here
    
    private $idFuncionario;
    private $nomefunc;
    private $login;
    private $senha;
    private $desativado;
    
    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getNomefunc() {
        return $this->nomefunc;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getDesativado() {
        return $this->desativado;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setNomefunc($nomefunc) {
        $this->nomefunc = $nomefunc;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setDesativado($desativado) {
        $this->desativado = $desativado;
    }

    
    
}
