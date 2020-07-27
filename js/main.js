// MENU burger

const activar = window.matchMedia('screen and (max-width: 768px)');
const menu = document.querySelector(".main-menu");
const burger = document.querySelector("#burger");
const cerrar = document.querySelector(".burger-item");

console.log(activar);
// activar.addListener(validation)
//
// function validation(event){
//   console.log(event);

  if (activar.matches = true) {

    burger.addEventListener('click', function(){
      menu.classList.add('active');
      burger.classList.add('quitar-burger');
    });
    cerrar.addEventListener('click', function(){
      menu.classList.remove('active');
      burger.classList.remove('quitar-burger');
    });
  }
// }


//animacion pagina Servicios
let animado = document.querySelectorAll(".img-serv");

function mostrarScroll(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i = 0; i < animado.length; i++) {
    let alturaAnimado = animado[i].offsetTop;
    if (alturaAnimado - 450 < scrollTop) {
      animado[i].style.opacity = 1;
      animado[i].classList.add("animar");
    }
  }
}

window.addEventListener('scroll', mostrarScroll);






// seccion MAPA. se utiliza la libreria leaflet

var map = L.map('mapa').setView([4.438452, -75.217679], 16);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
