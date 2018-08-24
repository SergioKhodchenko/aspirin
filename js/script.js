const button = document.querySelector('.order-button');
const submit = document.querySelector('.modal-window__submit');
const modalScreen = document.querySelector('.modal-window__screen');
const modalWindow = document.querySelector('.modal-window');
// const order = () => alert('CLICK!')
const order = () => modalWindow.removeAttribute('hidden');
const closeModal = () => modalWindow.setAttribute('hidden', true);
const handler = event => event.stopPropagation();
// const order = (mod) => mod.classList.add('visible');
// const remove = (mod) => mod.classList.remove('invisible');
button.addEventListener('click', order);
submit.addEventListener('submit', closeModal);
modalWindow.addEventListener('click', closeModal);
modalScreen.addEventListener("click", handler);
// button.addEventListener('click', remove(modWindow));


