<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            *{
                box-sizing: border-box;
            }
            header{
                height:50px; 
                background-color: blue;
            }

            /*-----navbaras----------------------*/

            ul {
                display: flex;
                list-style-type: none;
                font-size: 20px;
                justify-content: flex-end; 
                margin: 0px;
            }

            li {
                margin: 20px;

            }

            #home {
                margin-right: auto;
            }

            li a {
                color: white;
                text-decoration: none; 
                padding: 8px;
                margin: 0 5px;
            }

            li a:hover {

                background: #2c29cb2f;
                border: 1px solid black;
                border-radius: 8px;
                cursor: pointer;

            }


            /*--------------------*/
            section{
                display:flex;
                max-width: 100%;
                height: 300px;
                align-items: center;
            }

            .row{
                width: 100%;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content:space-around;
                align-items: center;

            }
            .card{
                height:150px;
                border:1px solid grey;
                text-align: center;
            } 

            .img{
                height: 50%;
                transition: transform 400ms ease-out;

            }

            .img:hover{
                transform: scale(1.15);
            }

            .text-container{
                width: 200px; 
                height:200px;
                padding:5px;
                background-color: rgba(209, 241, 160, 0.788);

            }

            .top{
                background-color: rgba(209, 241, 160, 0.788); 
            }

            .bottom{
                background-color: rgba(235, 191, 235, 0.596);
            }
            .text{
              
            }
            footer{
                height:50px;
                background-color: blue;
                text-align:center;
                padding:10px 0;
                color:white;
            } 

            @media only screen and (max-width: 400px) {

                .row{
                    flex-direction: column;
                }
                .text-container{
                    margin-bottom:10px;

                }

                .text-container:nth-child(2n+n){
                    margin-bottom:none;
                }

                .card{
                    max-width:100;
                    margin: 10px;
                }
                section{
                    max-width: 100%;
                    height:600px;
                }

                ul {
                    flex-wrap: wrap;
                    flex-direction:column;
                    padding: 0;
                }
            }
        </style>
    </head>
    <body>
        <header>

            <nav> 
                <ul>
                    <li id="home"><a href="#">Home</a></li>
                    <li><a href="#">Prisijungti </a></li>
                    <li><a href="#">Registruotis</a></li>
                </ul>
            </nav>

        </header>
        <section class="top">
            <div class="row">
                <div class="card">
                    <img class="img" src="http://katsosco.gr/media/images/products/images/2_MT_GlacierNP500px-200x200.jpg" alt="Nature">
                    <div class="text">
                        <p>Graži gamta</p>
                        <p>Graži gamta</p>
                    </div>
                </div>



                <div class="card">
                    <img class="img" src="http://www.collahuasi.cl/wp-content/uploads/2016/06/amanecer-altiplano-200x200.png" alt="Nature">
                    <div class="text">
                        <p>Graži gamta</p>
                        <p>Graži gamta</p>
                    </div>
                </div> 


                <div class="card">
                    <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8fFPNO2PBiBobRvzI4w8RL8Nrw0fol7H8v_bwYA3LGzkLqrfW&s" alt="Nature">
                  <div class="text">
                        <p>Graži gamta</p>
                        <p>Graži gamta</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bottom">
            <div class="row">
                <div class="text-container">
                    <div class="text">
                        <div>
                            <p> Saulės sistemoje Žemė yra trečioji nuo Saulės nutolusi planeta, tai didžiausia sausuminė planeta.</p>
                        </div>
                    </div>
                </div>


                <div class="text-container">
                    <div class="text">
                        <div>
                            <p>Žemė yra vienintelė žinoma planeta, kurioje yra gyvybė. Jos naturalios ypatybės yra tiriamos įvairių mokslinių sričių.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219602278376!2d25.33569661589081!3d54.72335198029069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1573637214776!5m2!1slt!2slt" width="100%" allowfullscreen=""></iframe>
        <footer>
            Copyright@Dainora.2019
        </footer>
    </body>
</html>


