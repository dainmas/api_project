<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

if (!App::$session->userLoggedIn()) {
    header('Location: /login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alynas</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="media/css/normalize.css" />
        <!--<link rel="stylesheet" href="media/css/style2.css" />-->
        <link rel="stylesheet" href="media/css/style.css" />
        <link rel="stylesheet" href="media/css/alyno.css">





    </head>

    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>
        <!--    <nav class="navbar">
                <div class="navbar-container"> 
                    <div class="container-flex">
                        <div class="logo"><img class="lg" src="media/img/logo.png" alt="Alynas"></div>
                        <ul>
                            <li><a href="#apie">Apie</a></li>
                            <li><a href="#kontaktai">Kontaktai</a></li>
                            <li><a href="#registracija">Registracija</a></li>
                            <li><a href="#prisijungti">Prisijungti</a></li>
                        </ul>
                    </div>
                </div>
            </nav>-->
        <main>
            <section class="hero">
                <div class="hero-container">
                        <div class="flex-bottom">
                            <div class="hero-text">Alynas - alus internetu</div>
                        </div>
                </div>
            </section>




            <section id="apie">
                <div class="container">
                    <div class="reklama">Mūsų platus alaus asortimentas</div>
                    <main class="main-area">
                        <div class="cards">

                            <!-- <article class="card">
                                <a href="http://www.thefreshloaf.com/node/28374/granville-island-beer-bread" target="blank">
                                    <picture class="picture">
                                        <img class="bottle" src="img/blueberry_ale.png" alt="Ale">
                                    </picture>
                                    <div class="card-content">
                                        <h2>Blueberry Ale</h2>
                                        <p>TUX re-inventing the wheel, and move the needle. Feature creep dogpile that but
                                            diversify kpis but market-facing.</p>
                                    </div>
                                </a>
                            </article>
        
                            <article class="card">
                                <a href="#">
                                    <picture class="picture">
                                        <img class="bottle" src="img/BelgianDarkAbbey.png" alt="Ale">
                                    </picture>
                                    <div class="card-content">
                                        <h2>Belgian Dark Abbey</h2>
                                        <p>Staff engagement synergize productive mindfulness and waste of resources cross
                                            sabers, or forcing function shotgun approach drink the Kool-aid.</p>
                                    </div>
                                </a>
                            </article>
        
        
                            <article class="card">
                                <a href="#">
                                    <picture class="picture">
                                        <img class="bottle" src="img/broken dial.png" alt="Ale">
                                    </picture>
                                    <div class="card-content">
                                        <h2>Broken dial</h2>
                                        <p>Staff engagement synergize productive mindfulness and waste of resources cross
                                            sabers, or forcing function shotgun approach drink the Kool-aid.</p>
                                    </div>
                                </a>
                            </article>
        
                            <article class="card">
                                <a href="#">
                                    <picture class="picture">
                                        <img class="bottle" src="img/gran_ville_island.png" alt="Ale">
                                    </picture>
                                    <div class="card-content">
                                        <h2>Gran Ville island</h2>
                                        <p>Staff engagement synergize productive mindfulness and waste of resources cross
                                            sabers, or forcing function shotgun approach drink the Kool-aid.</p>
                                    </div>
                                </a>
                            </article>
        
                            <article class="card">
                                <a href="#">
                                    <picture class="picture">
                                        <img class="bottle" src="img/grinbergen_blonde.png" alt="Ale">
                                    </picture>
                                    <div class="card-content">
                                        <h2>Grinbergen blonde</h2>
                                        <p>Staff engagement synergize productive mindfulness and waste of resources cross
                                            sabers, or forcing function shotgun approach drink the Kool-aid.</p>
                                    </div>
                                </a>
                            </article>
        
                            <article class="card">
                                <a href="#">
                                    <picture class="picture">
                                        <img class="bottle" src="img/swindler.png" alt="Ale">
                                    </picture>
                                    <div class="card-content">
                                        <h2>Swindler</h2>
                                        <p>Staff engagement synergize productive mindfulness and waste of resources cross
                                            sabers, or forcing function shotgun approach drink the Kool-aid.</p>
                                    </div>
                                </a>
                            </article> -->


                        </div>
                    </main>
                </div>
            </section>



            <section id="kontaktai">
                <div class="container">
                    <h3>Contact Form</h3>
                    <div class="form-map">
                        <div class="form-container">
                            <form>
                                <!-- <form action="/action_page.php"> -->
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="First name">

                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Last name">

                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Email">

                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." rows="5"
                                          cols="14"></textarea>

                                <input type="submit" value="Send Message">
                            </form>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2305.008677335295!2d25.289781415890264!3d54.70947048028723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96ae1dedd637%3A0x15b7153271574c5f!2sAlynas!5e0!3m2!1slt!2slt!4v1573060830618!5m2!1slt!2slt"></iframe>
                    </div>
                </div>
            </section>

            <!--            
                            <div class="bobule-isvaziuoja">
                                <div class="bobule"></div>
                            </div>
            -->

        </main>
        <footer class="footer">

            <div class="container">
                 <?php print $footer->render(); ?>
            </div>

        </footer>

        <script src="media/js/alynoapp.js"></script>
    </body>

</html>

