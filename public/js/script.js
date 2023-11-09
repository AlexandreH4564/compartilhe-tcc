const cards = document.querySelectorAll('.card-vit');
const anteriorBtn = document.getElementById('anterior');
const proximoBtn = document.getElementById('proximo');
let currentIndex = 0;

function mostrarCard(index) {
    cards.forEach((card, i) => {
        if (i === index) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

function avancarCard() {
    if (currentIndex < cards.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    mostrarCard(currentIndex);
}

function voltarCard() {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = cards.length - 1;
    }
    mostrarCard(currentIndex);
}

anteriorBtn.addEventListener('click', voltarCard);
proximoBtn.addEventListener('click', avancarCard);

mostrarCard(currentIndex);
