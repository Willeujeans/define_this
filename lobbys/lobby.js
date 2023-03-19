let title = document.getElementById("lobbyTitle");

const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('lobbyName');
console.log(myParam);
title.innerHTML = myParam;