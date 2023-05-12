var plus = document.getElementsByClassName('js-plus-btn')
var minus = document.getElementsByClassName('js-minus-btn')




for (let element of plus){
    element.addEventListener('click', function(){
        element.parentElement.getElementsByTagName("input")[0].value = Calc(1, element);
        price_plus = element.parentElement.parentElement.parentElement.parentElement.querySelector(".cart-price-basket")
        fprice_plus = element.parentElement.getElementsByTagName("input")[0].value * price_plus.dataset.price
        fprice_plus = number_format(fprice_plus, '', ' ', ' ')
        price_plus.innerHTML = fprice_plus + ' ₽';
        counterAmount()
        counterPrice()
    });
}

for (let element of minus){
    element.addEventListener('click', function(){
        element.parentElement.getElementsByTagName("input")[0].value = Calc(-1, element);
        price_minus = element.parentElement.parentElement.parentElement.parentElement.querySelector(".cart-price-basket")
        fprice_minus = element.parentElement.getElementsByTagName("input")[0].value * price_minus.dataset.price
        fprice_minus = number_format(fprice_minus, '', ' ', ' ')
        price_minus.innerHTML = fprice_minus + ' ₽';
        counterAmount()
        counterPrice()
    });
}


function Calc(oper, element) {
    let result = parseInt(element.parentElement.getElementsByTagName("input")[0].value) + oper ;
    return (result < 1) ? 1 : result;
}

function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k)
                .toFixed(prec);
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '')
        .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
            .join('0');
    }
    return s.join(dec);
}

function counterAmount(){
    const input = document.querySelectorAll('.value-js'); // получаем элемент input
    summ = 0;

    for (let element of input){
        summ += Number(element.value);

    };
    document.getElementById('count-p').innerHTML = summ + ' товара'
}

function counterPrice(){
    const price = document.querySelectorAll(".cart-price-basket");
    count = 0;

    for (let element of price){
        count += Number(element.innerText.replaceAll(' ', '').replace('₽', ''));

    };
    console.log(count)


    varchar_f_price = document.getElementById('count-f-price').innerHTML = count + ' ₽';
    var formatCount1 = number_format(varchar_f_price, '', ' ', ' ')
    document.getElementById('count-f-price').innerHTML = formatCount1 + ' ₽';


    title_f_price = document.getElementById('count-price').innerHTML = count + ' ₽';
    var formatCount2 = number_format(title_f_price, '', ' ', ' ')
    document.getElementById('count-price').innerHTML = formatCount2 + ' ₽';
}

