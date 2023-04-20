var plus = document.getElementsByClassName('js-plus-btn')[0];
var minus = document.getElementsByClassName('js-minus-btn')[0];
var field = document.getElementById('number-diet');
// TODO: Переписать выделение ссылок
var links = document.getElementsByClassName('js-class');

for (let link of links){
    if (new URL(link.href).href == window.location.href){
        link.classList.add('active')
    }
}

plus.addEventListener('click', function(){
    field.value = Calc(1);
});
minus.addEventListener('click', function(){
    field.value = Calc(-1);
});

function Calc(oper) {
    let result = parseInt(field.value) + oper ;
    return (result < 1) ? 1 : result;
}

