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
