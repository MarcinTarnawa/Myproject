import "./bootstrap";

// dark mode
const darkMode = document.getElementById('darkMode');
const body = document.body;

// check if dark mode is enabled
if (localStorage.getItem('darkMode') === 'true') {
  body.classList.add('dark');
}
// toggle dark mode
darkMode.addEventListener('click', () => {
  body.classList.toggle('dark');
  localStorage.setItem('darkMode', body.classList.contains('dark'));
});

