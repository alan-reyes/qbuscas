function buscar() {
    console.log("buscando...")
    // obtiene todas las cards
    var cards = document.getElementsByClassName('cards__item');
    // obtiene todos los titulos de las cards
    var cardTitles = document.getElementsByClassName('card__title');    
    // valor del buscador
    var searchValue = document.getElementById('search').value    
    for(var i = 0; i < cardTitles.length; i++) {
        if(!cardTitles[i].innerText.toLocaleLowerCase().includes(searchValue)) {
            cards[i].style.display = 'none'
        } else {
            cards[i].style.display = 'inline'
        }
    }
}

