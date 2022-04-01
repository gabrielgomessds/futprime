/* ==================== ADICIONAR CAMPO DE PESQUISA AO ROLAR A PÁGINA ================= */
let barra = document.querySelector(".bar_fixed");

window.addEventListener('scroll', ()=>{
    if(window.scrollY > 208 && barra != undefined){
        barra.style.display = "block";
      
    }else{
        if(barra != undefined){
            barra.style.display = "none";
        }
       
       
    }
});




/* ========================= MODO NOTURNO/DARK MODE ================================ */
const themeButton = document.querySelector('.theme-button');
const darkTheme = 'dark-theme';
const iconTheme = 'bx-sun';

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : ''
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'

if (selectedTheme) {
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](iconTheme)
  }

themeButton.addEventListener('click', ()=>{
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme)
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
});

/* ============================ ATIVER MENU MOBILE =================================== */
let iconMenu = document.querySelectorAll(".icon_menu"),
itensMenu = document.querySelectorAll('.item_mobile'),
menuMobile = document.querySelector(".menu_mobile"),
closeMenu = document.querySelector(".close_menuMobile");

    iconMenu.forEach((e)=>{
       e.addEventListener('click', ()=>{
            menuMobile.style.right = '0';
       })
    })

    closeMenu.addEventListener('click', ()=>{
        menuMobile.style.right = '-100%';
    });

    itensMenu.forEach((i)=>{
        i.addEventListener('click', ()=>{
            menuMobile.style.right = '-100%';
        });
    });

   