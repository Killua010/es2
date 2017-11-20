<?php

include 'Usuario.php';
include 'Arquivo.php';
include 'Tipo.php';

class ProcessoContratacao{
	private $id;
	private $dataInicio;
	private $dataFIim;
	private $disciplina;
	private $descricao;
	private $ativo;
	private $curso;
	private $matutino;/***?***/
	private $vespertino;
	private $noturno;
	private $usuario;
	private $arquivo;
	private $tipo;
	
	public function salvarContratacao($dataInicio, $dataFim, $disciplina, $descricao) {
		$this->dataInicio = $dataInicio;
		$this->dataFim = $dataFim; 
		$this->disciplina = $disciplina; 
		$this->descricao = $descricao;
		// código banco de dados
	}

	public function listarProcessoPorDisciplina() {
		
	}

	public function listarProcessoPorCurso() {
		
	}

	public function listarProcessoPorPeriodo() {
		
	}

	public function inativarPublicacoes($dataFim) {
		
	}

	public function buscarPublicacao() {// parametro ?
		
	}

	public function verificarAnexo() {
		
	}

	public function validarCamposeObrigatorios() {
		
	}

	public function validarDescricao() {
		
	}
}
