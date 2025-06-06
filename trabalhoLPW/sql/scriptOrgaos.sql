create TABLE organizacao (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    /* N=ONU, S=OMS, T=OIT, M=OMC */
    genero VARCHAR(1) NOT NULL,
    atuacao VARCHAR(50) NOT NULL,
    sede VARCHAR(50) NOT NULL,
    fundacao INT NOT NULL,
    imagem VARCHAR(100)
);


/*Nome do órgão

Sigla (ex: ONU, OMS)

Área de atuação (ex: saúde, meio ambiente, segurança)

País sede

Ano de fundação

Link da logo

*/