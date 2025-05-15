<?php 

require_once "conexao.php";

class criaClasses1 {
    private $tbBanco = "Tables_in_enderecos";
    private $con;

    function __construct(){
        $this->con = (new Conexao())->conectar();
    }

    function ClassesModel(){
        $sql = "SHOW TABLES";   
        $query = $this->con->query($sql);
        $tabelas = $query->fetchAll(PDO::FETCH_OBJ);

        foreach($tabelas as $tabela){
            $nomeTabela = ucfirst($tabela->{$this->tbBanco});
            $conteudo = <<<EOT
class {$nomeTabela} { 
}
EOT; //Se o pc estiver atualizado o TAB (espaço) não vai ser um problemas, mas dependendo da maquina pode dar ruim (deixa sem espaço por precaução)
            echo "conteudo: <br><pre>$conteudo</pre><br><br>";

        }
    }
}

(new criaClasses1())->ClassesModel();
