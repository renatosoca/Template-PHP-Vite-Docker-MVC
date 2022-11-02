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

const sr = ScrollReveal({
    origin: "top",
    distance: '60px',
    duration: 2500,
    delay: 700,
    reset: true,
});

sr.reveal(`.table`);
