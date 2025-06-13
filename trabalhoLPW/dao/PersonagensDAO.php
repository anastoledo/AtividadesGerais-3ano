<?php 

require_once("modelo/Personagens.php");
require_once("util/Conexao.php");


class PersonagensDAO{

    //Inserir as informações na base de dados
    public function inserirDados (Personagens $personagens){
        $sql = "INSERT INTO personagens (nome, especie, origem, habilidade_especial, genero, situacao, imagem)
        VALUES (?,?,?,?,?,?,?)";
        $con = Conexao::getConexao();
        $stm = $con->prepare($sql);
        $stm->execute(array($personagens->getNome(), 
                                    $personagens->getEspecie(),
                                    $personagens->getOrigem(),
                                    $personagens->getHabilidadeEspecial(),
                                    $personagens->getGenero(),
                                    $personagens->getSituacao(),
                                    $personagens->getImg()));

    }
    


}