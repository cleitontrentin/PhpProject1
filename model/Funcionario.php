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
    private $nome;
    private $login;
    private $senha;
    private $desativado;
    
    public function getIdFuncionario() {
        return $this->idFuncionario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDesativado() {
        return $this->desativado;
    }

    public function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setDesativado($desativado) {
        $this->desativado = $desativado;
    }


    
}
