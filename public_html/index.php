
<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Vegetables\Views\CreateForm();
$updateForm = new \App\Vegetables\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

if (!App::$session->userLoggedIn()) {
    header('Location: /login.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <!--<link rel="stylesheet" href="media/css/style.css">-->
        <link rel="stylesheet" href="media/css/vegetables.css">

        <!--<link rel="stylesheet" href="media/css/style2.css">-->

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
            <section id="apie">
                <div class="container">
                    <div class="reklama">Mūsų platus daržovių asortimentas</div>
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

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219602278376!2d25.33569661589081!3d54.72335198029069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1573637214776!5m2!1slt!2slt" width="100%" allowfullscreen=""></iframe>

        </main>

        <!-- Footer -->        
        <footer id="footer">
            <?php print $footer->render(); ?>
        </footer>
        <script src="media/js/vegcards.js"></script>
        <!--<script src="media/js/vegetables.js"></script>-->


    </body>
</html>
