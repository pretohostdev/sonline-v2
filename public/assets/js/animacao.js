window.sr = ScrollReveal({reset:true});

sr.reveal('.tituloAnimado', {
    rotate:{x:0, y:80, z:0},
    duration:2000});

sr.reveal('.slideShow', {
    origin: 'left', // Os slides irão deslizar da esquerda para a direita
    distance: '500px', // Distância que o slide irá percorrer
    duration: 2000, // Duração da animação em milissegundos
    interval: 2000 // Intervalo entre cada slide
});