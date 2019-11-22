
let vegetables = [
    {
        id: 1,
        imgLink: "https://www.rachaelraymag.com/recipes/20-carrot-recipes",
        imgPath: "media/img/carrot.png",
        title: "Carrot",
        text: "TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but" +
                "diversify kpis but market-facing."
    },
    {
        id: 2,
        imgLink: "https://www.thespruceeats.com/great-ways-to-enjoy-cauliflower-3052548",
        imgPath: "media/img/cauliflower.png",
        title: "Cauliflower",
        text: "Staff engagement synergize productive mindfulness and waste of resources cross" +
                "sabers, or forcing function shotgun approach drink the Kool-aid."

    },
    {
        id: 3,
        imgLink: "https://www.goodhousekeeping.com/food-recipes/g1633/potato-recipes/",
        imgPath: "media/img/Potato.png",
        title: "Potato",
        text: "This gloriously amber coloured ale is one of our brewer’s timeless classics." +
                "Made with what is often considered the finest hop on the earth, namely the Simcoe Hop."

    },
    {
        id: 4,
        imgLink: "https://www.thespruceeats.com/what-makes-radishes-spicy-3111662",
        imgPath: "media/img/radishes.png",
        title: "Radishes",
        text: "TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but" +
                "diversify kpis but market-facing. Cook the bread!"
    },
    {
        id: 5,
        imgLink: "https://www.bonappetit.com/recipes/slideshow/radish-recipes",
        imgPath: "media/img/tomato.png",
        title: "Tomato",
        text: "Ochre coloured top fermented Abbey Beer with an abv of 6.7%. The use of Gatin" +
                "barley combined with carefully selected hops creates a perfectly balanced, relatively light tasting beer with a fruity malty taste.",
    },
    {
        id: 6,
        imgLink: "https://www.theguardian.com/lifeandstyle/2014/dec/27/onion-recipes-soup-fritters-salad-10-best",
        imgPath: "media/img/onion.png",
        title: "Onion",
        text: "TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but" +
                "diversify kpis but market-facing."
    },
];



let vegetablesContainer = document.querySelector(".cards");
vegetables.forEach(vegetable => {
    let vegetableView = document.createElement("div");
    vegetableView.className = "card";

    vegetableView.innerHTML += `

    <a href="${vegetable.imgLink}" target="blank">
    
        <picture class="picture">
            <img class="bottle" src="${vegetable.imgPath}" alt="Vegetable" />
        </picture>
        <div class="card-content">
            <h2>${vegetable.title}</h2>
            <p>${vegetable.text}</p>
        </div>
    </a>             
</div>`;
    vegetablesContainer.appendChild(vegetableView);
});




