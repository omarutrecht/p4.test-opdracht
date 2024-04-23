import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.increaseCount = function() {
    var counter = document.getElementById("counter-value");
    counter.innerText = parseInt(counter.innerText) + 1;
}

window.decreaseCount = function() {
    var counter = document.getElementById("counter-value");
    counter.innerText = parseInt(counter.innerText) - 1;
}