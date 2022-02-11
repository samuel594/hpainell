const USER = JSON.parse(sessionStorage.getItem('user'));

const profileUsername = document.querySelector('#prof-username');
const profileRole = document.querySelector('#prof-role');

profileUsername.innerHTML = USER.nome;
profileRole.innerHTML = USER.nome_cargo;