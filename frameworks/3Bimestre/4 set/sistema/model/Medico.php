<?php
class Medico {
	private $codMed;
	private $nomeMed;
	private $dataNasc;
	private $cpf;
	private $cidade;
	private $especialidade;

	function getCodMed(){
		return $this->codMed;
	}
	function setCodMed($codMed){
		$this->codMed=$codMed;
	}
	function getNomeMed(){
		return $this->nomeMed;
	}
	function setNomeMed($nomeMed){
		$this->nomeMed=$nomeMed;
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
	function getEspecialidade(){
		return $this->especialidade;
	}
	function setEspecialidade($especialidade){
		$this->especialidade=$especialidade;
	}

}
?>