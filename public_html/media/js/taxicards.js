
let taxis = [
    {
        id: 1,
        imgLink: "http://www.gidas.mb.vu.lt/wp-content/uploads/2009/10/taksi.jpg",
        imgPath: "media/img/taxicar.png",
        title: "Apie mus",
        text: "Mūsų pavadinimas- Portalo taxi. Ar ieškote patikimos, draugiškos kompanijos? Pristatysim Jus į bet kurią Vilniaus vietą. " +
                "Paskambinkite mums tel.86868686! Paspausk ant paveikslėlio ir pamatysi koks buvo senoviškas taxi."
    },
    {
        id: 2,
        imgLink: "https://linijos.lt/wp-content/uploads/2017/04/a2b_linijos_vairuotojai.jpg",
        imgPath: "media/img/taxicomfort.jpg",
        title: "Kodėl mes",
        text: "Mūsų taxi kompanija rūpinasi, kad klientai gautų kokybišką servisą. "+
                "Mūsų vairuotojai tvarkingai apsirengę, mandagūs, draugiški."
                

    },
    {
        id: 3,
        imgLink: "https://cdn1.hellovilnius.lt/wp-content/uploads/2017/11/23-e1509607856708.jpg",
        imgPath: "media/img/studentstaxi.png",
        title: "Nuolaidos",
        text: "Sek mūsų puslapyje akcijas. Kiekvieną dieną siūlome naujų akcijų. " +
        "Turim nuolaidų lojaliems klientams: po penkto važiavimo 5%  nuolaida!"

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




