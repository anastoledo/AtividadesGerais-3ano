<?php 

class Piloto{
    private $nome;
    private $equipe;
    private $pontuacao;
    private $nacionalidade;
    private $foto;

    public function __construct($nome,$equipe,$pontuacao,$nacionalidade,$foto){
        $this->nome = $nome;
        $this->equipe = $equipe;
        $this->pontuacao = $pontuacao;
        $this->nacionalidade = $nacionalidade;
        $this->foto = $foto;
    }

    public function __tostring(){
        $dados  = "<div class='card' style='width: 18rem;'>";
        $dados .= "<img src='".$this->foto."' class='card-img-top' alt='Foto do piloto'>";
        $dados .= "<div class='card-body'>";
        $dados .= "<h1 class='card-title'>". $this->nome ."</h1>";
        $dados .= "</div>"; 
        $dados .= "<ul class='list-group list-group-flush'>";
        $dados .= "<li class='list-group-item'>Equipe: " . $this->equipe. "</li>";
        $dados .= "<li class='list-group-item'>Pontuação: " . $this->pontuacao. " PTS </li>";
        $dados .= "<li class='list-group-item'>Nacionalidade: " . $this->nacionalidade. "</li>";
        $dados .= "</ul>";
        $dados .= "</div>";
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
     * Get the value of equipe
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     */
    public function setEquipe($equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getPontuacao()
    {
        return $this->pontuacao;
    }

    /**
     * Set the value of idade
     */
    public function setPontuacao($pontuacao): self
    {
        $this->pontuacao = $pontuacao;

        return $this;
    }

    /**
     * Get the value of nacionalidade
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set the value of nacionalidade
     */
    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

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