const forms = document.querySelectorAll('.form');
const nextButtons = document.querySelectorAll('.Next-btn"');

nextButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        forms[index].classList.remove('active');
        forms[index + 1].classList.add('active');
    });
});
