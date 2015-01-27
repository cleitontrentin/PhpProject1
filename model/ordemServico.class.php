<?php
class OrdemServico
{
   /*declaração de atributos*/
	private $idordemServico;
        private $idCliente;
        private $idFuncionario;
	private $dtAbertura;
	private $dtFechamento;
        private $valor;
        private $status;
	private $desativado;
	private $selecione;
        
        

        public function getIdordemServico() {
            return $this->idordemServico;
        }

        public function getIdCliente() {
            return $this->idCliente;
        }

        public function getIdFuncionario() {
            return $this->idFuncionario;
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

        public function getSelecione() {
            return $this->selecione;
        }

        public function setIdordemServico($idordemServico) {
            $this->idordemServico = $idordemServico;
        }

        public function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        public function setIdFuncionario($idFuncionario) {
            $this->idFuncionario = $idFuncionario;
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

        public function setSelecione($selecione) {
            $this->selecione = $selecione;
        }


        
        
	
}
?>