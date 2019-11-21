
let cards = [
    {
        id: 1,
        imgLink: "http://www.brew-dudes.com/blueberry-ale-recipe/271",
        imgPath: "media/img/blueberry_ale.png",
        title: "Blueberry Ale",
        text: "TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but" +
                "diversify kpis but market-facing."
    },
    {
        id: 2,
        imgLink: "http://www.castlemalting.com/CastleMaltingBeerRecipes.asp?Command=RecipeView&RecipeID=10",
        imgPath: "media/img/BelgianDarkAbbey.png",
        title: "Belgian Dark Abbey",
        text: "Staff engagement synergize productive mindfulness and waste of resources cross" +
                "sabers, or forcing function shotgun approach drink the Kool-aid."

    },
    {
        id: 3,
        imgLink: "https://www.ratebeer.com/beer/harviestoun-broken-dial/247661/",
        imgPath: "media/img/broken dial.png",
        title: "Broken dial",
        text: "This gloriously amber coloured ale is one of our brewer’s timeless classics." +
                "Made with what is often considered the finest hop on the earth, namely the Simcoe Hop."

    },
    {
        id: 4,
        imgLink: "http://www.thefreshloaf.com/node/28374/granville-island-beer-bread",
        imgPath: "media/img/gran_ville_island.png",
        title: "Gran Ville island",
        text: "TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but" +
                "diversify kpis but market-facing. Cook the bread!"
    },
    {
        id: 5,
        imgLink: "https://commonmancocktails.com/2008/04/04/grimbergen-blonde-ale/",
        imgPath: "media/img/grinbergen_blonde.png",
        title: "Grinbergen blonde",
        text: "Ochre coloured top fermented Abbey Beer with an abv of 6.7%. The use of Gatin" +
                "barley combined with carefully selected hops creates a perfectly balanced, relatively light tasting beer with a fruity malty taste.",
    },
    {
        id: 6,
        imgLink: "https://uk.inshaker.com/cocktails/1381-swindler-sour",
        imgPath: "media/img/swindler.png",
        title: "Swindler",
        text: "TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but" +
                "diversify kpis but market-facing."
    },
];



let cardsContainer = document.querySelector(".cards");
cards.forEach(card => {
    let cardView = document.createElement("div");
    cardView.className = "card";

    cardView.innerHTML += `

    <a href="${card.imgLink}" target="blank">
    
        <picture class="picture">
            <img class="bottle" src="${card.imgPath}" alt="Ale" />
        </picture>
        <div class="card-content">
            <h2>${card.title}</h2>
            <p>${card.text}</p>
        </div>
    </a>             
</div>`;
    cardsContainer.appendChild(cardView);
});




