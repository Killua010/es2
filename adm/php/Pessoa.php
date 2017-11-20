<?php 
class Pessoa {

	private $nome;
	private $cpf;

	public function getNome() {
		return $this->nome;
	}

	public function getCPF() {
		return $this->cpf;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setCPF($cpf) {
		$this->cpf = $cpf;
	}
}