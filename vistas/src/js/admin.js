const navbar = document.querySelector('#aside-nav');
const edit = document.querySelector('#table-body');
const OpenNav = document.querySelector('#btn-nav');
const closeNav = document.querySelector('#close-nav');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('#close-modal');

ListarEventos();
function ListarEventos(){

    OpenNav.addEventListener('click', MostrarNav);

    closeNav.addEventListener('click', CerrarNav);

    edit.addEventListener('click', Modales);

    closeModal.addEventListener('click', CerrarModal);
}

function MostrarNav(e){
    e.stopPropagation();
    navbar.style.left ='0';
};

function CerrarNav(e){
    e.stopPropagation();
    navbar.style.left ='-20rem';
};

function Modales(e){
    if (e.target.classList.contains('btn__edit')) {
        modal.classList.add('active')
    }
}

function CerrarModal(){
    modal.classList.remove('active')
}
