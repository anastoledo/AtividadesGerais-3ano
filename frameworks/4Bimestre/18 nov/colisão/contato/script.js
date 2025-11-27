const canvas = document.getElementById("meuCanvas");
const ctx = canvas.getContext("2d");

const vetQuadrados = [ 
    {
    x: canvas.width / 2 - 25,
    y: canvas.height / 2 - 25,
    tamanho: 70
},
{
    x: 100,
    y: 100,
    tamanho: 50
}
];


const circulo = {
    x: 50,
    y: 50,
    raio: 20
};




function desenhar() {

    ctx.clearRect(0, 0, canvas.width, canvas.height); //como vai ter movimento a preciso limpar a tela após cada movimentação

   for (let i = 0; i < vetQuadrados.length; i++) {
    q = vetQuadrados[i]
    ctx.beginPath();
    ctx.fillStyle = "pink"
    ctx.rect(q.x, q.y, q.tamanho, q.tamanho);
    ctx.fill();
   }

    ctx.beginPath();
    ctx.fillStyle = "red";
    ctx.arc(circulo.x, circulo.y, circulo.raio, 0, Math.PI * 2);
    ctx.fill();

    atualizarDistancia();

}

function calcularDistancia(x1, y1, x2, y2) {
    const dx = x2 - x1;
    const dy = y2 - y1;
    return Math.sqrt(dx * dx + dy * dy);
}

function atualizarDistancia() {
    
    for (let i = 0; i < vetQuadrados.length; i++) {
    q = vetQuadrados[i]
    const centroQuadradoX = q.x + q.tamanho / 2;
    const centroQuadradoY = q.y + q.tamanho / 2;
    }
    const d = calcularDistancia(circulo.x, circulo.y, centroQuadradoX, centroQuadradoY);

    if (d<= (circulo.raio+quadrado.tamanho/2)) {
        identificarColisao();
    }
    else{
        document.getElementById("distancia").textContent = "Distância: " + d.toFixed(2);
    }

}

function identificarColisao(){

    for (let i = 0; i < vetQuadrados.length; i++) {
    q = vetQuadrados[i]

    document.getElementById("distancia").textContent = "COLIDIU!"

    if ((circulo.y+circulo.raio)>q.y && circulo.y<q.y) {
        document.getElementById("distancia").textContent += "acima";
        circulo.y -=10;
    }
    else if (circulo.y - circulo.raio<q.y + q.tamanho && circulo.y>q.y + q.tamanho) {
        document.getElementById("distancia").textContent += " abaixo";
        circulo.y +=10;
    }
    else if ((circulo.x+circulo.raio)>q.x && circulo.x<q.x){
        document.getElementById("distancia").textContent += "esquerdo";
        circulo.x -=10;
    }
    else if (circulo.x - circulo.raio< q.x + q.tamanho && circulo.x > q.x + q.tamanho){
        document.getElementById("distancia").textContent += "direita";
        circulo.x +=10;
    }
}

}

document.addEventListener("keydown" , function(event) {
    const passo = 5;

    if(event.key === "ArrowUp") circulo.y -= passo;
    if(event.key === "ArrowDown") circulo.y += passo;
    if(event.key === "ArrowLeft") circulo.x -= passo;
    if(event.key === "ArrowRight") circulo.x += passo;

    desenhar();


});

desenhar();
