
<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Taxis\Views\CreateForm();
$updateForm = new \App\Taxis\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

date_default_timezone_set('Europe/Vilnius');

$date = date("l");

switch ($date) {
    case 'Monday':
        $date = "Pirmadienis";
        break;
    case 'Tuesday':
        $date = "Antradienis";
        break;
    case 'Wednesday':
        $date = "Trečiadienis";
        break;
    case 'Thursday':
        $date = "Ketvirtadienis";
        break;
    case 'Friday':
        $date = "Penktadienis";
        break;
    case 'Saturday':
        $date = "Šeštadienis";
        break;
    case 'Sunday':
        $date = "Sekmadienis";
        break;
}
$today = "Šiandien yra  $date. O kaip mes laukiam Tavęs!";


$days = 365;
for ($d = 0; $d < $days; $d++) {
    $savaites_diena = date('N', strtotime("+$d days"));
    if ($savaites_diena < 4) {
        $text = 'Geros dienos!';
    } elseif ($savaites_diena == 4) {
        $text = "Šiandien ketvirtadienio 5% nuolaida";
    } elseif ($savaites_diena == 5) {
        $text = "Šiandien nuolaida studentams! Užsisakyk taxi 10% pigiau";
    } else {
        $text = "Savaitgalio nuolaidos, net 8% nuolaida,jei užsisakai taxi daugiau, nei 3 žmonėm!";
    }
}
if (!App::$session->userLoggedIn()) {
    header('Location: /login.php');
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taxi</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/taxi.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
            <section class="hero">
                <div class="hero-container">
                    <div class="flex-bottom">
                        <div class="hero-text"><?php print "$today $text"; ?></div>
                    </div>
                </div>
            </section>

            <section id="paslaugos">
                <main class="main-area">
                    <div class="service-container">
                        <div class="cards">
                        </div>
                    </div>
                </main>

            </section>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219602278376!2d25.33569661589081!3d54.72335198029069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1573637214776!5m2!1slt!2slt" width="100%" allowfullscreen=""></iframe>

        </main>

        <!-- Footer -->        
        <footer id="footer">
            <?php print $footer->render(); ?>
        </footer>
        <script src="media/js/taxicards.js"></script>
        <script src="media/js/taxi.js"></script>


    </body>
</html>
