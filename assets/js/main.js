const toggleButton = document.getElementById('theme-toggle');

toggleButton.addEventListener('click', () => {
    const body = document.body;

    body.classList.toggle('bg-dark');
    body.classList.toggle('text-light');

    // Ajusta texto do botão
    if (body.classList.contains('bg-dark')) {
        toggleButton.innerText = 'Tema claro';
    } else {
        toggleButton.innerText = 'Tema escuro';
    }
});

const clickButton = document.getElementById('click-button');
const counterText = document.querySelector('#click-counter strong');

let clicks = 0;

clickButton.addEventListener('click', () => {
    clicks++;
    counterText.innerText = clicks;
});