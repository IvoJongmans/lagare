<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Noto+Sans+JP:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/subscribed.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179162367-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179162367-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Gare - Laren</title>
</head>

<body>

    <?php

    // ADD TO .CSV
    if (empty($_POST['message'])) {
        $info = array(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['select1'],
            $_POST['select2'],
            date('d-m-Y H:i:s')
        );

        $fp = fopen("voorkeuren.csv", 'a');  //Open file for append
        fputcsv($fp, $info, ';', '"'); //@Optimist
        fclose($fp); //Close the file to free memory.

        $infomessage = "Bedankt voor uw inschrijving! E&#233;n van onze makelaars neemt spoedig contact met u op.";
    } else {
        $infomessage = "Er ging iets verkeerd.";
    }

    //MAIL ENTRIES

    //MESSAGE
    $msg = "
    Naam: " . $_POST['firstname'] . " " . $_POST['lastname'] . "\n
    E-mail: " . $_POST['email'] . "\n
    Telefoonnummer: " . $_POST['tel'] . "\n
    Voorkeur 1: " . $_POST['select1'] . "\n
    Voorkeur 2: " . $_POST['select2'] . "\n
    Datum en tijd: " . date('d-m-Y H:i:s') . "\n
    ";

    //SEND MAIL
    mail("ivo@aquive.nl,ivojongmans@gmail.com,hello@artoflivingbymar.com,laren@kappelle.nl", "Inschrijving La Gare - Laren", $msg);

    ?>

    <div>
        <p class="text-center"><?php echo $infomessage; ?></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <a class="buttton" href="index.html">Terug naar La Gare</a></button>
            </div>
        </div>
    </div>

</body>

</html>