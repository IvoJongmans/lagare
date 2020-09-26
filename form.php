<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Noto+Sans+JP:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/subscribed.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Gare - Laren</title>
</head>

<body>

    <?php

    if (empty($_POST['message'])) {
        $info = array(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['select1'],
            $_POST['select2'],
            $_POST['select3']
        );

        $fp = fopen("voorkeuren.csv", 'a');  //Open file for append
        fputcsv($fp, $info, ';', '"'); //@Optimist
        fclose($fp); //Close the file to free memory.

        $infomessage = "Bedankt voor uw inschrijving!";
    }
    else {
        $infomessage = "Er ging iets verkeerd.";
    }

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