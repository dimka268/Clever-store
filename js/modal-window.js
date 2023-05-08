var log_in = document.getElementById('log-in');
var register = document.getElementById('register');

document.getElementById('bth-aut').addEventListener('click', function (){
    log_in.classList.remove("hidden");
})

document.getElementById('exit').addEventListener('click', function () {
    log_in.classList.add("hidden");
})

document.getElementById('exit2').addEventListener('click', function () {
    register.classList.add("hidden");
})

document.getElementById('go_register').addEventListener('click', function () {
    log_in.classList.add("hidden");
    register.classList.remove("hidden");
})