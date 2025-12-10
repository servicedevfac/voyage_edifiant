const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-menu');
const menu = document.querySelector('.nav-links');


function setMenuHeight() {
  const windowHeight = window.innerHeight;
  menu.style.height = `${windowHeight}px`;
}



// Au clic sur l'icône menu
menuBtn.addEventListener('click', () => {
    menu.classList.add('menu-active');
    menu.style.overflowY = "auto";
    menu.classList.add('active');
    menuBtn.classList.add('hidden');
    closeBtn.classList.remove('hidden');
});

// Au clic sur la croix
closeBtn.addEventListener('click', () => {
    menu.classList.remove('menu-active');
    menu.classList.remove('active');
    menu.style.overflowY = "auto";
    menuBtn.classList.remove('hidden');
    closeBtn.classList.add('hidden');
});

menuBtn.addEventListener('click', () => {
  setMenuHeight(); // Définit la hauteur exacte au moment de l'ouverture
  menu.classList.add('active');
  menu.style.overflowY = "auto";
  menuBtn.classList.add('hidden');
  closeBtn.classList.add('active');
});