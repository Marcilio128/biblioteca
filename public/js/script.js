/*MENU MOBILE-JS*/
const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
    if(event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', 'true');
    if(active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');

    }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);
/*ANIMATION TEXT (SECTION-BOOKS)*/
function typeWriter(element){
    const text_Array = element.innerHTML.split('');
    element.innerHTML = '';
    text_Array.forEach((letra, i) => { 
    setTimeout(function() {
        element.innerHTML += letra;

    }, 75 * i)
    })
}
    const text_book = document.getElementById('text-book-initial');
    typeWriter(text_book);

    const text_cntcs = document.getElementById('title-initial-cntcs');
    typeWriter(text_cntcs);

    