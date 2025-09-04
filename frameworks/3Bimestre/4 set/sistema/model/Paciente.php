<?php
class Paciente {
	private $codPac;
	private $nomePac;
	private $dataNasc;
	private $cpf;
	private $cidade;

	function getCodPac(){
		return $this->codPac;
	}
	function setCodPac($codPac){
		$this->codPac=$codPac;
	}
	function getNomePac(){
		return $this->nomePac;
	}
	function setNomePac($nomePac){
		$this->nomePac=$nomePac;
	}
	function getDataNasc(){
		return $this->dataNasc;
	}
	function setDataNasc($dataNasc){
		$this->dataNasc=$dataNasc;
	}
	function getCpf(){
		return $this->cpf;
	}
	function setCpf($cpf){
		$this->cpf=$cpf;
	}
	function getCidade(){
		return $this->cidade;
	}
	function setCidade($cidade){
		$this->cidade=$cidade;
	}

}
?>