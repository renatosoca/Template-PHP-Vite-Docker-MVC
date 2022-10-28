const navbar = document.querySelector('.nav__container');
const OpenNav = document.querySelector('.header__menu');
const closeNav = document.querySelector('#close-nav');

ListarEventos();
function ListarEventos(){

    OpenNav.addEventListener('click', MostrarNav);
}

function MostrarNav(e){
    e.stopPropagation();
    navbar.classList.toggle('active')
    console.log(navbar)
};
