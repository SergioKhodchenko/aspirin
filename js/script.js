const headButton = document.querySelector('.header-button');
const contactButton = document.querySelector('.contacts-button');
const mailButton = document.querySelector('.mail-button');
const submit = document.querySelector('.modal-window__submit');
const mailSubmit = document.querySelector('.mail-submit');
const modalScreen = document.querySelector('.tel-screen');
const modalMailScreen = document.querySelector('.mail-screen');
const modalWindow = document.querySelector('.tel-window');
const modalMailWindow = document.querySelector('.mail-window');

// const confirmWindow = document.querySelector('.confirm-window');
// const confirmButton = document.querySelector('.confirm-window__button');
// const confirmScreen = document.querySelector('.confirm-window__screen');

const upLink = document.querySelector('.pickup__link');

const order = () => modalWindow.removeAttribute('hidden');
const mail = () => modalMailWindow.removeAttribute('hidden');
const closeModal = () => modalWindow.setAttribute('hidden', true);
const closeMail = () => modalMailWindow.setAttribute('hidden', true);
const handler = event => event.stopPropagation();
const openConfirm = () => confirmWindow.removeAttribute('hidden');
const closeConfirm = () => confirmWindow.setAttribute('hidden', true);


headButton.addEventListener('click', order);
contactButton.addEventListener('click', order);
mailButton.addEventListener('click', mail);
submit.addEventListener('submit', closeModal);
// submit.addEventListener('submit', openConfirm);
// confirmWindow.addEventListener('click', closeConfirm);
// confirmButton.addEventListener('click', closeConfirm);
mailSubmit.addEventListener('mailSubmit', closeMail);
modalWindow.addEventListener('click', closeModal);
modalMailWindow.addEventListener('click', closeMail);
modalScreen.addEventListener("click", handler);
modalMailScreen.addEventListener("click", handler);


