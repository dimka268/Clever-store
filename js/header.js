var links = document.getElementsByClassName('js-class');

for (let link of links){
    if (link.href && new URL(link.href).href == window.location.href){
        link.classList.add('active')
    }
}
