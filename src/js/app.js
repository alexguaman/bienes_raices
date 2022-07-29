document.addEventListener('DOMContentLoaded', function() {
    eventListeners();

    darkMode();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
};

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    console.log(navegacion.classList.contains('mostrar'));

    navegacion.classList.toggle('mostrar');
};

function darkMode() {

    const prefDarkMode = window.matchMedia('(prefers-color-scheme: dark)')

    if (prefDarkMode.matches) {
        document.body.classList.add('dark-mode')
    } else {
        document.body.classList.remove('dark-mode')
    }

    prefDarkMode.addEventListener('change', function() {
        if (prefDarkMode.matches) {
            document.body.classList.add('dark-mode')
        } else {
            document.body.classList.remove('dark-mode')
        }
    });

    const btnDarkMode = document.querySelector('.dark-mode-boton');
    btnDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}