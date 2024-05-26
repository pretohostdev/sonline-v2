

function menuShow(){
    let menuMobile = document.querySelector('.mobile-menu');
    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        console.log(document.querySelector('.icon'));
        document.querySelector('.icon').src = "assets/img/menu-open.svg";
    }
    else{
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "assets/img/delete.png";
    }
}