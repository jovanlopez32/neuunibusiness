

var exit = document.getElementById('exit');
var menu = document.getElementById('menu');

const nav = document.querySelector('.nav');



exit.addEventListener('click', (x) => {


    nav.classList.remove('animate__fadeInDown');
    nav.classList.add('animate__fadeOutUp');
    nav.classList.add('z-0');

    console.log(nav);

});

menu.addEventListener('click', (x) => {

    nav.classList.replace('invisible', 'visible');
    nav.classList.remove('animate__fadeOutUp');
    nav.classList.add('animate__fadeInDown');
    nav.classList.add('z-10');

});

