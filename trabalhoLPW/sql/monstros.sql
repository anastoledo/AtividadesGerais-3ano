CREATE TABLE personagens (
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    especie VARCHAR(30) NOT NULL,
    acessorio_favorito VARCHAR(30) NOT NULL,
    habilidade_especial VARCHAR(40) NOT NULL,
    turma CHAR(1) NOT NULL,
     /* A=Assombração 101, M=Moda Monstro, C=Cozinha Macabra, P=Poções e Encantos */
    status CHAR(1) NOT NULL,
    /* A=Ativa, R=Repouso eterno, T=Transferida, E=Escondida nas sombras */
    CONSTRAINT pk_personagens PRIMARY KEY (id)
);
