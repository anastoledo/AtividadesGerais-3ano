<?php 

class Curso {

    private ?int $id; //? é usado para aceitar nulo ou inteiro
    private ?string $nome;
    private ?string $turno;

     public function __toString() {
        return $this->nome . ' (' . 
            $this->getTurnoTexto() . ")";
    }


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of turno
     */
    public function getTurno(): ?string
    {
        return $this->turno;
    }

    public function getTurnoTexto(){
        switch ($this->getTurno()) {
            case 'M':
                return "Matutino";

            case 'V':
                return "Vespertino";

            
            case 'N':
                return "Noturno";
            
            default:
                return "";
        }
    }

    /**
     * Set the value of turno
     */
    public function setTurno(?string $turno): self
    {
        $this->turno = $turno;

        return $this;
    }
}