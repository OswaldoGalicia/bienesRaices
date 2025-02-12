document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkmode();
});
function darkmode(){

    const prefiereDark = window.matchMedia('(prefers-color-scheme: dark)');

    if(prefiereDark.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDark.addEventListener('change', ()=>{
        if(prefiereDark.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

    const btnDarkMode = document.querySelector('.dark-mode-boton');

    btnDarkMode.addEventListener('click', () =>{
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.addEventListener('click', navegacionResponsive);
    
}

function navegacionResponsive(){
    const nav = document.querySelector('.navegacion');

   nav.classList.toggle('mostrar');
}