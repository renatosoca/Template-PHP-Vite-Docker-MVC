const navbar = document.querySelector('#aside-nav');
const OpenNav = document.querySelector('#btn-nav');
const closeNav = document.querySelector('#close-nav');

ListarEventos();
function ListarEventos(){

    OpenNav.addEventListener('click', MostrarNav);

    closeNav.addEventListener('click', CerrarNav);
}

function MostrarNav(e){
    e.stopPropagation();
    navbar.style.left ='0';
};

function CerrarNav(e){
    e.stopPropagation();
    navbar.style.left ='-20rem';
};