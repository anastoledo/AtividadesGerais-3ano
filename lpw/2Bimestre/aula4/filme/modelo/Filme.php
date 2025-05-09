<?php

class Filme {
    private $nome;
    private $diretor;
    private $ano;
    private $foto;

    public function __construct($nome,$diretor,$ano,$foto){
        $this->nome = $nome;
        $this->diretor = $diretor;
        $this->ano = $ano;
        $this->foto = $foto;
    }

    public function __tostring(){
        $dados = "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
        $dados .= $this->nome. "<br>";
        $dados .= $this->diretor. "<br>";
        $dados .= $this->ano. "<br>";
        $dados .= "<img style='width: 100%; height: auto;' src='".$this->foto."' /><br>";
        $dados .= "</div>";
        $dados .= "<br><br>";
        return $dados;
    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     */
    public function setFoto($foto): self
    {
        $this->foto = $foto;

        return $this;
    }
}