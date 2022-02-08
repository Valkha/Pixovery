let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})

let btns = body.getElementsByClassName('btn');
let menu = document.querySelector('.menu');
let toggle_menu = function() {
    let menu_ON = body.getAttribute('menu_ON') === "true";

    body.setAttribute('menu_ON', !menu_ON);
}

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", toggle_menu);
}