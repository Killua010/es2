<?php

include 'Pessoa.php';

class Usuario extends Pessoa {
	private $id;
	private $login;
	private $senha;
	private $permissao;
	
	public function EfetuarLogin($login, $senha) {


		VerificarPermissoes($id, $permissao);		
	}

	public function VerificarPermissoes($id, $permissao) {
		
	}

	public function getid() {
		return $this->cpf;
	}
}