<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Taxis\Views\CreateForm();
$updateForm = new \App\Taxis\Views\UpdateForm();
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
        <link rel="stylesheet" href="media/css/taxi.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
            <section class="wrapper">
                <div class="block">
                    <h1>Komentarų lentelė:</h1>                    
                    <?php print $createForm->render(); ?>
                </div>
                <div class="block">
                    <div id="taxi-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nr.</th>
                                    <th>Vardas</th>
                                    <th>Komentaras</th>
                                    <th>Data</th>
                                    <th>Trinimas</th>
                                    <th>Redagavimas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows Are Dynamically Populated -->
                            </tbody>
                        </table>
                    </div>                    
                </div>
            </section>

            <!-- Update Modal -->
            <div id="update-modal" class="modal">
                <div class="wrapper">
                    <span class="close">&times;</span>
                    <?php print $updateForm->render(); ?>
                </div>
            </div>

        </main>

        <!-- Footer -->        
        <footer id="footer">
            <?php print $footer->render(); ?>
        </footer>

        <script src="media/js/taxi.js"></script>
    </body>
</html>
