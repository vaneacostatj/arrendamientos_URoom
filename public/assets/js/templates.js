let cards = document.getElementById("cards");

let cardsTemplate = `<div id='name${i}' class='col-12 col-sm-12 col-md-6 col-lg-3'>
<div clas='col'>
    <div class='card' style='width: 18rem;'>
        <img src='${/img/apto.jpg}' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>Card title</h5>
            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
        </div>
    </div>
</div>
</div>`;

for (let i=0; i<5; i++) {
    cards.innerHTML += cardsTemplate;
}

