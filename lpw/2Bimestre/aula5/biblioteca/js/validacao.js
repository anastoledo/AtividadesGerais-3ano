function validarCampos() {

    //Capturar os valores informados pelo usuário
    var titulo = document.getElementById('titulo').value;
    var autor = document.getElementById('autor').value;
    var genero = document.getElementById('genero').value;
    var paginas = document.getElementById('paginas').value;

    //alert(titulo + ' - ' + autor + ' - ' +  genero + ' - ' + paginas);

    erros = [];

    if (titulo == '') {
        erros.push("Informe o título!");
    }
    if (autor == ''){
        erros.push("Informe o autor!");
    }
    if (genero == ''){
        erros.push("Informe o gênero!");
    }
    if (paginas == ''){
        erros.push("Informe o número de páginas!");
    }
    
    if (erros.length > 0) {

        document.getElementById("mensagem").innerHTML = erros.join("<br>");
        //alert(erros.join("\n"));
        return false;
    }

    return true;

   
}