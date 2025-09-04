<?php
require_once("../model/Paciente.php");
require_once("../dao/PacienteDao.php");
class PacienteControl {
    private $paciente;
    private $acao;
    private $dao;
    public function __construct(){
       $this->paciente=new Paciente();
      $this->dao=new PacienteDao();
      $this->acao=$_GET["a"];
      $this->verificaAcao(); 
    }
    function verificaAcao(){
       switch($this->acao){
          case 1:
            $this->inserir();
          break;
       }
    }
    function inserir(){
        $this->paciente->setCodPac($_POST['codPac']);
		$this->paciente->setNomePac($_POST['nomePac']);
		$this->paciente->setDataNasc($_POST['dataNasc']);
		$this->paciente->setCpf($_POST['cpf']);
		$this->paciente->setCidade($_POST['cidade']);
		
        $this->dao->inserir($this->paciente);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Paciente $paciente){}
    function buscaTodos(){}

}
new PacienteControl();
?>