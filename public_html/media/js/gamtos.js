
let images = [
    {
        id: 1,
        imgPath: "http://katsosco.gr/media/images/products/images/2_MT_GlacierNP500px-200x200.jpg",
        title: "Graži gamta",
        text: "Graži gamta"
    },
    {
        id: 2,
        imgPath: "http://www.collahuasi.cl/wp-content/uploads/2016/06/amanecer-altiplano-200x200.png",
        title: "Graži gamta",
        text: "Graži gamta"
    },
    {
        id: 3,
        imgPath: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8fFPNO2PBiBobRvzI4w8RL8Nrw0fol7H8v_bwYA3LGzkLqrfW&s",
        title: "Graži gamta",
        text: "Graži gamta"
    },
];





let imagesContainer = document.querySelector(".row");
images.forEach(image => {
    let imageView = document.createElement("div");
    imageView.className = "card";

    imageView.innerHTML += `

        <img class="img" src="${image.imgPath}" alt="Nature" />
            <div class="text">
                <p>${image.title}</p>
                <p>${image.text}</p>
            </div>`;
    imagesContainer.appendChild(imageView);
});


