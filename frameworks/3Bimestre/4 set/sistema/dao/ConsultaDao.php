<?php
require_once("../model/conexao.php");
class ConsultaDao {
    private $con;
    public function __construct(){
       $this->con=(new Conexao())->conectar();
    }
function inserir($obj) {
    $sql = "INSERT INTO consulta (codCons, codMed, codPac, data, hora) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $codCons=$obj->getCodCons();
$codMed=$obj->getCodMed();
$codPac=$obj->getCodPac();
$data=$obj->getData();
$hora=$obj->getHora();

    $stmt->execute([$codCons,$codMed,$codPac,$data,$hora]);
}
    function listaGeral() {
    try {
        $sql = "select * FROM consulta";
        $query = $this->con->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_ASSOC); //muda se tiver facilidade com objeto
        return $dados;

        } catch (Exception $e) {
            echo "Erro ao buscar dados: " . $e->getMessage();
        }
    }
}
?>