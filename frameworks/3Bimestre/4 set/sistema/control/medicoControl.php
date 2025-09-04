<?php
require_once("../model/Medico.php");
require_once("../dao/MedicoDao.php");
class MedicoControl {
    private $medico;
    private $acao;
    private $dao;
    public function __construct(){
       $this->medico=new Medico();
      $this->dao=new MedicoDao();
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
        $this->medico->setCodMed($_POST['codMed']);
		$this->medico->setNomeMed($_POST['nomeMed']);
		$this->medico->setDataNasc($_POST['dataNasc']);
		$this->medico->setCpf($_POST['cpf']);
		$this->medico->setCidade($_POST['cidade']);
		$this->medico->setEspecialidade($_POST['especialidade']);
		
        $this->dao->inserir($this->medico);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Medico $medico){}
    function buscaTodos(){}

}
new MedicoControl();
?>