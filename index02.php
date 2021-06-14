<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet05 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">Vous êtes redirigé sur une autre page !</h1>
            <!-- <h2 class="col-12 text-info text-center">Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page et affichez ces paramètres.</h2> -->
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
        <a class="mr-3" href="index.php">cliquez pour revenir</a>
            <?php 
                echo 'Nom : '. $_GET['nom']. ' '. 'Prénom : '. $_GET['prenom']. '  '. 'Âge : '. '  '. $_GET['age'];
            ?>
        </div>
    </div>
</body>
</html>