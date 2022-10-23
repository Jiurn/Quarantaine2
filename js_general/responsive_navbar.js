const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const switch_ = document.querySelector('.switch');
const links = document.querySelectorAll('.nav-links a');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('open')
    switch_.classList.toggle('hamburger_list')
});