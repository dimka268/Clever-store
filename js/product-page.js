var specification = document.getElementById('specification')
var description = document.getElementById('description')

document.getElementById('d-header').addEventListener('click', function (){
    specification.classList.add("hidden");
    description.classList.remove("hidden");
    document.getElementById('d-header').classList.add("active-color");
    document.getElementById('s-header').classList.remove("active-color");
})

document.getElementById('s-header').addEventListener('click', function (){
    description.classList.add("hidden");
    specification.classList.remove("hidden");
    document.getElementById('s-header').classList.add("active-color");
    document.getElementById('d-header').classList.remove("active-color");
})