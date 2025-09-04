<?php
require_once("../model/Consulta.php");
require_once("../dao/ConsultaDao.php");
class ConsultaControl {
    private $consulta;
    private $acao;
    private $dao;
    public function __construct(){
       $this->consulta=new Consulta();
      $this->dao=new ConsultaDao();
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
        $this->consulta->setCodCons($_POST['codCons']);
		$this->consulta->setCodMed($_POST['codMed']);
		$this->consulta->setCodPac($_POST['codPac']);
		$this->consulta->setData($_POST['data']);
		$this->consulta->setHora($_POST['hora']);
		
        $this->dao->inserir($this->consulta);
    }
    function excluir(){}
    function alterar(){}
    function buscarId(Consulta $consulta){}
    function buscaTodos(){}

}
new ConsultaControl();
?>