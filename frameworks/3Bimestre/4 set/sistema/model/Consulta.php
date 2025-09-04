<?php
class Consulta {
	private $codCons;
	private $codMed;
	private $codPac;
	private $data;
	private $hora;

	function getCodCons(){
		return $this->codCons;
	}
	function setCodCons($codCons){
		$this->codCons=$codCons;
	}
	function getCodMed(){
		return $this->codMed;
	}
	function setCodMed($codMed){
		$this->codMed=$codMed;
	}
	function getCodPac(){
		return $this->codPac;
	}
	function setCodPac($codPac){
		$this->codPac=$codPac;
	}
	function getData(){
		return $this->data;
	}
	function setData($data){
		$this->data=$data;
	}
	function getHora(){
		return $this->hora;
	}
	function setHora($hora){
		$this->hora=$hora;
	}

}
?>