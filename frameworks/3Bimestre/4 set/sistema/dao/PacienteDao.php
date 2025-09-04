<?php
require_once("../model/conexao.php");
class PacienteDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO paciente (codPac, nomePac, dataNasc, cpf, cidade) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $codPac=$obj->getCodPac();
$nomePac=$obj->getNomePac();
$dataNasc=$obj->getDataNasc();
$cpf=$obj->getCpf();
$cidade=$obj->getCidade();

    $stmt->execute([$codPac,$nomePac,$dataNasc,$cpf,$cidade]);
}
    function listaGeral() {
    try {
        $sql = "select * FROM paciente";
        $query = $this->con->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_ASSOC); //muda se tiver facilidade com objeto
        return $dados;

        } catch (Exception $e) {
            echo "Erro ao buscar dados: " . $e->getMessage();
        }
    }
}
?>