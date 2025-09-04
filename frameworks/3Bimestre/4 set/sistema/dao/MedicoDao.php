<?php
require_once("../model/conexao.php");
class MedicoDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO medico (codMed, nomeMed, dataNasc, cpf, cidade, especialidade) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $codMed=$obj->getCodMed();
$nomeMed=$obj->getNomeMed();
$dataNasc=$obj->getDataNasc();
$cpf=$obj->getCpf();
$cidade=$obj->getCidade();
$especialidade=$obj->getEspecialidade();

    $stmt->execute([$codMed,$nomeMed,$dataNasc,$cpf,$cidade,$especialidade]);
}
    function listaGeral() {
    try {
        $sql = "select * FROM medico";
        $query = $this->con->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_ASSOC); //muda se tiver facilidade com objeto
        return $dados;

        } catch (Exception $e) {
            echo "Erro ao buscar dados: " . $e->getMessage();
        }
    }
}
?>