var log_in = document.getElementById('log-in');
var register = document.getElementById('register');
var pass1 = document.getElementById('password1');
var pass2 = document.getElementById('password2');
var error_pass = document.getElementsByClassName('error-valid')[0];
var form_registr = document.getElementById('form-registr');

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

form_registr.addEventListener('submit', passwordValidate)

function passwordValidate(event) {event.preventDefault()
    if (pass1.value != pass2.value){
        error_pass.innerText = 'Пароли не совпадают';
        error_pass.classList.remove("hidden");
    }else{
        event.target.submit()
    }
}
