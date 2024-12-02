import "./bootstrap";

// dark mode
const darkMode = document.getElementById('darkMode');
const body = document.body;

darkMode.addEventListener('click', () => {
  body.classList.toggle('dark');
});