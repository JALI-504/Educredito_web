class skewnav extends HTMLElement {
    constructor() {
        super();

        var hcustomContent = this.innerHTML;
        this.innerHTML = `<div class="skewnav" style="--justify: ${this.getAttribute('align')}; --bg-color: ${this.getAttribute('bgcolor')}; --tx-color: ${this.getAttribute('textcolor')};">` + hcustomContent + `</div>`;
    }
}

window.customElements.define('skew-nav', skewnav);

class skewlink extends HTMLElement {
    constructor() {
        super();

        var hcustomContent = this.innerHTML;
        this.innerHTML = `<a class="skewlink" href="${this.getAttribute('url')}" style="--hv-color: ${this.getAttribute('hovercolor')}; --tx-color: ${this.getAttribute('textcolor')}; --sk-color: ${this.getAttribute('skewcolor')};"><span>` + hcustomContent + `</span></a>`;
    }
}

window.customElements.define('skew-link', skewlink);

document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.style.backgroundColor = 'rgba(255, 255, 255, 0.8)'; // Fondo blanco con 60% de opacidad
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const sectionCard = document.querySelector('.section-card::before');
    if (sectionCard) {
        sectionCard.style.opacity = '0.5'; // Ajusta la opacidad a tu preferencia
    }
});



// enlaces

// Código JavaScript para la nueva sección después del carrusel

// const main = document.querySelector("main");
// const items = [139, 99, 104, 89, 140, 154, 106]; //diferentes IDs de imágenes

// items.forEach((n, i) => {
//     let item = document.querySelector(".item").cloneNode(true);
//     if (i == 0) item = document.querySelector(".item");

//     const txt = item.querySelector(".txt");
//     const thumb = item.querySelector(".thumb");
//     const img = thumb.querySelector("img");
//     const overlay = item.querySelector(".overlay");
//     const hit = item.querySelector(".hit");

//     main.append(item);
//     gsap.set(img, {
//         attr: { src: "images/logo_edu.png"}
//     });
//     gsap.fromTo(
//         img,
//         { xPercent: -18 },
//         {
//             scrollTrigger: {
//                 trigger: item,
//                 start: "0 100%",
//                 end: "100% 0",
//                 horizontal: true,
//                 scrub: 0
//             },
//             xPercent: 0,
//             ease: "none"
//         }
//     );

//     item.onpointerenter = (e) => {
//         gsap.to(overlay, { opacity: 0.5 });
//         gsap.to(img, {
//             duration: 0.3,
//             scale: 1.2,
//             overwrite: "auto",
//             ease: "back"
//         });
//         gsap.to(item.querySelector("h2"), { color: "rgb(160,180,225)" });
//         gsap.to(item.querySelector(".item-info"), { opacity: 0.6 });
//         gsap.to([thumb, txt], {
//             ease: "power3",
//             yPercent: (i) => [-6, 2][i],
//             overwrite: "auto"
//         });
//     };

//     item.onpointermove = (e) => {
//         const xp = gsap.utils.interpolate(-40, 20, e.offsetX / 500);
//         const yp = gsap.utils.interpolate(-40, 40, e.offsetY / 400);
//         gsap.to(overlay, { duration: 0.7, ease: "power2", x: xp * 4, y: yp * 4 });
//         gsap.to([hit, thumb], { duration: 0.7, ease: "power2", x: xp, y: yp });
//         gsap.to([img], {
//             duration: 0.7,
//             ease: "power2",
//             x: -xp / 1.3,
//             y: -yp / 1.3
//         });
//         gsap.to(txt, { duration: 0.7, x: xp, y: yp });
//     };

//     item.onpointerleave = (e) => {
//         gsap.to(overlay, { opacity: 0, x: 0, y: 0, overwrite: "auto" });
//         gsap.to(img, { duration: 0.3, scale: 1, x: 0, y: 0, overwrite: "auto" });
//         gsap.to(item.querySelector("h2"), { color: "rgb(255,255,255)" });
//         gsap.to(item.querySelector(".item-info"), { opacity: 0.2 });
//         gsap.to([hit, thumb, txt], {
//             duration: 0.7,
//             x: 0,
//             y: 0,
//             yPercent: 0,
//             ease: "elastic.out(0.8)",
//             overwrite: "auto"
//         });
//     };
// });

// gsap
//     .timeline()
//     .to("main", { opacity: 1 })
//     .from(
//         ".item",
//         {
//             x: innerWidth,
//             skewX: 20,
//             stagger: 0.2,
//             duration: 1,
//             ease: "elastic.out(0.3)"
//         },
//         0.4
//     )
//     .from(
//         ".txt",
//         { x: innerWidth, stagger: 0.2, duration: 1, ease: "elastic.out(0.2)" },
//         0.44
//     )
//     .set("main", { pointerEvents: "auto" }, 1)
//     .add(() => {
//         Observer.create({
//             target: window,
//             type: "wheel",
//             onChangeY: (s) => (document.documentElement.scrollLeft += s.deltaY)
//         });

//         ScrollTrigger.create({
//             horizontal: true,
//             onUpdate: (self) => {
//                 let skew = clamp(self.getVelocity() / 500);
//                 if (Math.abs(skew) > Math.abs(proxy.skew)) {
//                     proxy.skew = skew;
//                     gsap.to(proxy, {
//                         skew: 0,
//                         duration: 0.9,
//                         ease: "elastic",
//                         overwrite: true,
//                         onUpdate: () => {
//                             skewSetter(proxy.skew);
//                             txtSetter(proxy.skew * 9);
//                         }
//                     });
//                 }
//             }
//         });

//         gsap.set(".item", { transformOrigin: "50% 0" });
//         let proxy = { skew: 0 },
//             skewSetter = gsap.quickSetter(".item", "skewX", "deg"),
//             txtSetter = gsap.quickSetter(".txt", "x", "px"),
//             clamp = gsap.utils.clamp(-6, 6);
//     }, 1);


const main = document.querySelector("main");
const items = [
    { src:"images/logohonducompras.jpg", link: "https://honducompras.gob.hn/", alt: "logohonducompras"},
    { src:"images/logoiaip.png", link: "https://portalunico.iaip.gob.hn/", alt: "logoiaip"}, 
    { src:"images/logooncae.png", link: "https://www.example.com", alt: "Logo"}, 
    { src:"images/logosielho.png", link: "https://www.example.com", alt: "Logo"}, 
    { src:"images/logoonadici.png", link: "https://www.example.com", alt: "Logo"}, 
    { src:"images/logoTSC.jpg", link: "https://www.example.com", alt: "Logo"}
]; // Lista de tus imágenes

// items.forEach((n, i) => {
//   let item = document.querySelector(".item").cloneNode(true);
//   if (i == 0) item = document.querySelector(".item");

//   const txt = item.querySelector(".txt");
//   const thumb = item.querySelector(".thumb");
//   const img = thumb.querySelector("img");
//   const overlay = item.querySelector(".overlay");
//   const hit = item.querySelector(".hit");

//   main.append(item);
//   gsap.set(img, {
//     attr: { src: "images/" + n } // Usar tus propias imágenes desde la carpeta "images"
//   });
//   gsap.fromTo(
//     img,
//     { xPercent: -18 },
//     {
//       scrollTrigger: {
//         trigger: item,
//         start: "0 100%",
//         end: "100% 0",
//         horizontal: true,
//         scrub: 0
//       },
//       xPercent: 0,
//       ease: "none"
//     }
//   );

//   item.onpointerenter = (e) => {
//     gsap.to(overlay, { opacity: 0.5 });
//     gsap.to(img, {
//       duration: 0.3,
//       scale: 1.2,
//       overwrite: "auto",
//       ease: "back"
//     });
//     gsap.to(item.querySelector("h2"), { color: "rgb(160,180,225)" });
//     gsap.to(item.querySelector(".item-info"), { opacity: 0.6 });
//     gsap.to([thumb, txt], {
//       ease: "power3",
//       yPercent: (i) => [-6, 2][i],
//       overwrite: "auto"
//     });
//   };

//   item.onpointermove = (e) => {
//     const xp = gsap.utils.interpolate(-40, 20, e.offsetX / 500);
//     const yp = gsap.utils.interpolate(-40, 40, e.offsetY / 400);
//     gsap.to(overlay, { duration: 0.7, ease: "power2", x: xp * 4, y: yp * 4 });
//     gsap.to([hit, thumb], { duration: 0.7, ease: "power2", x: xp, y: yp });
//     gsap.to([img], {
//       duration: 0.7,
//       ease: "power2",
//       x: -xp / 1.3,
//       y: -yp / 1.3
//     });
//     gsap.to(txt, { duration: 0.7, x: xp, y: yp });
//   };

//   item.onpointerleave = (e) => {
//     gsap.to(overlay, { opacity: 0, x: 0, y: 0, overwrite: "auto" });
//     gsap.to(img, { duration: 0.3, scale: 1, x: 0, y: 0, overwrite: "auto" });
//     gsap.to(item.querySelector("h2"), { color: "rgb(255,255,255)" });
//     gsap.to(item.querySelector(".item-info"), { opacity: 0.2 });
//     gsap.to([hit, thumb, txt], {
//       duration: 0.7,
//       x: 0,
//       y: 0,
//       yPercent: 0,
//       ease: "elastic.out(0.8)",
//       overwrite: "auto"
//     });
//   };
  
// });

items.forEach((itemData) => {
    let item = document.createElement("div");
    item.classList.add("item");
  
    let link = document.createElement("a");
    link.href = itemData.link;
    link.target = "_blank";  // Abre el enlace en una nueva pestaña
  
    let thumb = document.createElement("div");
    thumb.classList.add("thumb");
  
    let img = document.createElement("img");
    img.src = itemData.src;
    img.alt = itemData.alt;
  
    thumb.appendChild(img);
    link.appendChild(thumb);
    item.appendChild(link);
    main.appendChild(item);
  });

// stagger reveal
gsap
  .timeline()
  .to("main", { opacity: 1 })
  .from(
    ".item",
    {
      x: innerWidth,
      skewX: 20,
      stagger: 0.2,
      duration: 1,
      ease: "elastic.out(0.3)"
    },
    0.4
  )
  .from(
    ".txt",
    { x: innerWidth, stagger: 0.2, duration: 1, ease: "elastic.out(0.2)" },
    0.44
  )
  .set("main", { pointerEvents: "auto" }, 1) //enable mouse interaction
  .add(() => {
    // Convert vertical scroll to horizontal scroll with GSAP Observer
    Observer.create({
      target: window,
      type: "wheel",
      onChangeY: (s) => (document.documentElement.scrollLeft += s.deltaY)
    });

    // Horizontal skewing came from: https://codepen.io/GreenSock/pen/eYpGLYL?editors=1011
    ScrollTrigger.create({
      horizontal: true,
      onUpdate: (self) => {
        console.log("hi");
        let skew = clamp(self.getVelocity() / 500);
        if (Math.abs(skew) > Math.abs(proxy.skew)) {
          proxy.skew = skew;
          gsap.to(proxy, {
            skew: 0,
            duration: 0.9,
            ease: "elastic",
            overwrite: true,
            onUpdate: () => {
              skewSetter(proxy.skew);
              txtSetter(proxy.skew * 9);
            }
          });
        }
      }
    });

    gsap.set(".item", { transformOrigin: "50% 0" });
    let proxy = { skew: 0 },
      skewSetter = gsap.quickSetter(".item", "skewX", "deg"),
      txtSetter = gsap.quickSetter(".txt", "x", "px"),
      clamp = gsap.utils.clamp(-6, 6);
  }, 1);
