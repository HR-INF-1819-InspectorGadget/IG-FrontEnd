<?php
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Profiel</title>
        <link rel="icon" href="assets/img/logo.jpeg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="container background fontcolor">
        <div class="row">
            <h1 class="col-12" style="text-align: center">Naam schurk</h1>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="http://via.placeholder.com/200x250">
            </div>
            <div class="col-9 box">
                <ul>
                    <li class="row">
                        <div class="col-3">
                            <label for="BSN">BSN:</label>
                        </div>
                        <div class="col-9">
                            <p>placeholder</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-3">
                            <label for="Geboortedatum">Geboortedatum:</label>
                        </div>
                        <div class="col-9">
                            <p>placeholder</p>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-3">
                            <label for="Dood">Is overleden:</label>
                        </div>
                        <div class="col-9">
                            <p>placeholder</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h1 class="col-12" style="text-align: center">Misdaden van deze schurk</h1>
        </div>
        <?php
            //foreach($lijst_aan_misdaden_van_deze_schurk as $misdaad)
            //{
                ?>
                    <!-- container met data per misdaad -->
                    <div class="row">
                        <div class="col-12 box">
                            <h3>Misdaad naam</h3>
                        </div>
                        <div class="col-12 box">
                            Misdaad informatie
                        </div>
                    </div>
                <?php
            //}
        ?>
    </body>
</html>
