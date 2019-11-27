
let taxis = [
    {
        id: 1,
        imgLink: "https://www.rachaelraymag.com/recipes/20-carrot-recipes",
        imgPath: "media/img/taxicar.png",
        title: "Apie mus",
        text: "Ar ieškote patikimos, draugiškos kompanijos? Pristatysim Jus į bet kurią Vilniaus vietą." +
                "Paskambinkite mums tel.86868686!"
    },
    {
        id: 2,
        imgLink: "https://www.thespruceeats.com/great-ways-to-enjoy-cauliflower-3052548",
        imgPath: "media/img/taxicomfort.jpg",
        title: "Kodėl mes",
        text: "Mūsų taxi kompanija rūpinasi, kad klientai gautų kokybišką servisą"+
                "Mūsų vairuotojai tvarkingai apsirengę, mandagūs, draugiški."
                

    },
    {
        id: 3,
        imgLink: "https://www.goodhousekeeping.com/food-recipes/g1633/potato-recipes/",
        imgPath: "media/img/studentstaxi.png",
        title: "Nuolaidos",
        text: "Sek mūsų puslapyje akcijas. Kiekvieną dieną siūlome naujų akcijų." +
        "Turim nuolaidų lojaliems klientams: po penkto važiavimo 5%  nuolaida"

    },
    
];



let taxisContainer = document.querySelector(".cards");
taxis.forEach(taxi => {
    let taxiView = document.createElement("div");
    taxiView.className = "card";

    taxiView.innerHTML += `

    <a href="${taxi.imgLink}" target="blank">
    
        <picture class="picture">
            <img class="img" src="${taxi.imgPath}" alt="Taxi" />
        </picture>
        <div class="card-content">
            <h2>${taxi.title}</h2>
            <p>${taxi.text}</p>
        </div>
    </a>             
</div>`;
    taxisContainer.appendChild(taxiView);
});




