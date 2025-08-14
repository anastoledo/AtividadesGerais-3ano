<?php
require_once("../model/conexao.php");
class AlunosDao {
    private $con;
    public function __construct(){
        $this->con=(new Conexao())->conectar();
    }

function inserir($obj){
    $sql = "INSERT INTO alunos (id, nome, idade, estrangeiro, id_curso) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->con->prepare($sql);
    $id=$obj->getId();
$nome=$obj->getNome();
$idade=$obj->getIdade();
$estrangeiro=$obj->getEstrangeiro();
$id_curso=$obj->getId_curso();

    $stmt->execute([$id,$nome,$idade,$estrangeiro,$id_curso]);
}
}
?>