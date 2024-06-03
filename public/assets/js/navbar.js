

function menuShow(){
    let menuMobile = document.querySelector('.menu-mobile');
    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        console.log('1');
        document.querySelector('.icon').src = "assets/img/menu.svg";
        menuMobile.style.display = "none";
    }
    else{
        menuMobile.classList.add('open');
        console.log('2');
        menuMobile.style.display = "block";
        document.querySelector('.icon').src = "assets/img/sair.svg";
    }
}