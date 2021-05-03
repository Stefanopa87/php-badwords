<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>MAIL API</title>
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- vue -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="js/script.js"></script>
</head>

<body style="background-color: khaki;">
    <div class="container vh-100">
        <div class="row h-100">
            <div class="col-12 d-flex">
                <div class="m-auto">

                <!-- GOAL: Creare una variabile con un paragrafo di testo.
                Visualizzare a schermo il paragrafo con la relative lunghezza
                e sostituire la badword passata in GET con tre * -->

                <h1> Ode al Pomodoro</h1>

                    <?php

                        $poem = 
                        "<h6>La strada si riempì di pomodori, estate, mezzogiorno, la luce si divide in due metà di un pomodoro, scorre per le strade il succo.
                        In dicembre senza pausa il pomodoro, invade le cucine, entra per i pranzi, si siede riposato nelle credenze, tra i bicchieri, le matequilleras la saliere azzurre.
                        Emana una luce propria, maestà benigna. Dobbiamo, purtroppo, assassinarlo: affonda il coltello nella sua polpa vivente, è una rossa viscera, un sole
                        fresco, profondo, inesauribile, riempie le insalate del Cile, si sposa allegramente con la chiara cipolla, e per festeggiare si lascia cadere l'olio,
                        figlio essenziale dell'ulivo, sui suoi emisferi socchiusi, si aggiunge il pepe la sua fragranza, il sale il suo magnetismo: sono le nozze del giorno
                        il prezzemolo issa la bandiera, le patate bollono vigorosamente, l'arrosto colpisce con il suo aroma la porta, è ora! andiamo! e sopra il tavolo, nel mezzo
                        dell'estate, il pomodoro, astro della terra, stella  ricorrente e feconda, ci mostra le sue circonvoluzioni, i suoi canali, l'insigne pienezza e l'abbondanza
                        senza ossa, senza corazza, senza squame né spine, ci offre il dono del suo colore focoso e la totalità della sua freschezza.</h6>";

                        // stampa poesia più lunghezza
                        var_dump($poem);
                        
                        // oppure solo lunghezza con strlent
                        echo strlen($poem);

                        $newText = $_GET ['badword'];

                        // parola da sostituire: POMODORO. da inserire così: localhost/?badword=pomodoro

                        $finalResult = str_replace($newText, '***', $poem);

                        echo "<font color='red'>" .$finalResult. "</font>"; ;

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>