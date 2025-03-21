<?php 


class Presidente{


    // Atributos:
    private int $num;
    private string $nome;
    private int $inicio;
    private int $fim;


    // Função:
    public function __construct($num, $nome, $inicio, $fim){
        $this->num = $num;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }

    // GETs e SETs:
    public function getNum(): int
    {
        return $this->num;
    }
    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

   
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getInicio(): int
    {
        return $this->inicio;
    }
    public function setInicio(int $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    
    public function getFim(): int
    {
        return $this->fim;
    }
    public function setFim(int $fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}