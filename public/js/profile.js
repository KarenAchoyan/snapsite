const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.navigation');
const subm = document.querySelector('.subm');
const body = document.querySelector('.body');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
});

