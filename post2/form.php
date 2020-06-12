<?php

if (!empty($_POST)) {

    $firstnameValid = false;
    $lastnameValid = false;
    $civilityValid = false;

    if (isset($_POST['civility']) && in_array($_POST['civility'], ["M.", "Mme.", "Autres"])) {
        $civilityValid = true;
    }

    if (isset($_POST['firstname']) && ctype_alpha($_POST['firstname'])) {
        $firstnameValid = true;
    }

    if (isset($_POST['lastname']) && ctype_alpha($_POST['lastname'])) {
        $lastnameValid = true;
    }

    if ($firstnameValid && $lastnameValid && $civilityValid) {
        echo "Bienvenue " . $_POST['civility'] . " " . $_POST['firstname'] . " " . $_POST["lastname"] . " sur votre espace client.";
    } else {
        echo "erreur";
    }
} else { ?>

    <!doctype html>
    <html lang="en">

        <head>
            <title>Formulaires POST</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>

        <body>
            <div class="container mt-3">
                <div class="row">
                    <div class="col">
                        <form action="form.php" method="post" class="form">

                            <div class="form-group">
                                <label for="">Civilité</label>
                                <select name="civility" class="form-control">
                                    <option value="M.">M.</option>
                                    <option value="Mme.">Mme.</option>
                                    <option value="Autres">Autres</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input name="firstname" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Nom</label>
                                <input name="lastname" type="text" class="form-control">
                            </div>

                            <button class="btn btn-success">Envoyer</button>

                        </form>
                    </div>
                </div>
            </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>
        </body>

    </html>

<?php } ?>