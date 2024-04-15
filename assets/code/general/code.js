jQuery(function ($) {
  //beginning

  $("").on("click", function (e) {});

  //ending
});

document.addEventListener("DOMContentLoaded", function () {
  // Esconder el contenido de la página mientras carga
  document.querySelector(".l-contenedor-pagina").style.display = "none";

  // Simular una carga ficticia
  setTimeout(function () {
    // Ocultar el loader
    gsap.to(".loader", { duration: 0.5, autoAlpha: 0, display: "none" });

    // Mostrar el contenido de la página
    gsap.to(".l-contenedor-pagina", {
      duration: 0.5,
      autoAlpha: 1,
      display: "block",
    });
	gsap.fromTo(tituloPrincipal.chars, { opacity: 0, y: 20 }, { opacity: 1, y: 0, stagger: 0.03, duration: 0.5 })
	gsap.fromTo(".columna-2", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1.5, stagger: 0.2 });
	gsap.fromTo(".boton-hero-apply", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 2, stagger: 0.2, ease: "power4.out" }, "<");

  }, 1500)
});

gsap.registerPlugin(ScrollTrigger);

// Inicializar el timeline de GSAP
const timeline = gsap.timeline({
  scrollTrigger: {
    trigger: ".l-contenedor-pagina",
    start: "top 80%", // Comienza la animación cuando el 80% del contenido está en la vista
    end: "bottom 20%", // Termina la animación cuando el 20% del contenido está fuera de la vista
    scrub: 2, // Activa el efecto de "scrubbing" para una animación suave mientras se hace scroll
  },
});

const tituloPrincipal = new SplitType(".m-titulo");


// Animación para mostrar el contenido
timeline
	.to(".l-contenedor-pagina", { opacity: 1, duration: 1 })
	//Animacion texto 

