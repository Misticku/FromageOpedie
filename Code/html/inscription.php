<?php

$host = 'ec2-34-246-86-78.eu-west-1.compute.amazonaws.com';
$dbname = 'postgresql-metric-61408';
$user = 'tncgniwrddfkvg';
$password = '88d421f583b147bb6d8eaee9cd377b48a16d9c9481c094032c12aa17f968e19';

$bdd = "pgsql:host=$host;port=5432;dbname=$dbname;user=$user;password=$password";

try {
    $conn = new PDO($bdd);

    if ($conn) {
        echo "Connecté à $dbname avec succès!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../css/connexion.css">
    <link rel="stylesheet" href="../css/header_footer.css"> <!-- Rappel de la feuille de style pour la nav et le footer pour éviter la duplication de code -->
    <title>FromageOpédie</title>
</head>

<body>

    <!-- Début de l'entête de page -->

    <header>

        <nav>

            <div class="titre">
                <a href="accueil.html">
                    <h1>FromageOpédie</h1>
                </a>
            </div>

            <div class="onglets">
                <a href="fromage.html">
                    <p>Fromages</p>
                </a>
                <a href="favoris.html">
                    <p>Favoris</p>
                </a>
                <a href="histoire.html">
                    <p>Histoire</p>
                </a>
                <a href="carte.html">
                    <p>Carte</p>
                </a>
            </div>

            <div class="log">
                <a href="connexion.html">Connexion</a>
                <a href="inscription.html">Inscription</a>
            </div>

        </nav>

    </header>

    <!-- Début du corp de code -->

    <section>

        <div class="header_section">
            <h1>S'inscrire</h1>
        </div>

        <form method="POST" action="">

            <?php
            if (isset($_POST['formulaire_inscription'])) {
                echo $message_end;
            }
            ?>

            <div class="container">

                <div class="element">
                    <label>Nom</label>
                    <input name="nom" type="text">
                </div>

                <div class="element">
                    <label>Prénom</label>
                    <input name="prenom" type="text">
                </div>

                <div class="element">
                    <label>Mail</label>
                    <input name="mail" type="text" placeholder="exemple@exemple.XX">
                </div>

                <div class="element">
                    <label>Mot de passe</label>
                    <input name="mdp" type="password">
                </div>

                <div class="element">
                    <select name="" id="element_list">
                        <option value="" selected>Fromagier ou Particuiler ?</option>
                        <option value="">Fromagier</option>
                        <option value="">Particulier</option>
                    </select>
                </div>

                <input type="submit" value="S'inscrire" name="formulaire_inscription">

            </div>
        </form>

    </section>

    <!-- Début du pied de page -->

    <footer>

        <div class="global_footer">

            <div class="foot1">
                <h3>Contact</h1>
                    <p>exemple@exemple.fr</p>
            </div>

            <div class="foot2">
                <h3>A propos</h1>
                    <p>Iut Clermont-Ferrand</p>
            </div>

        </div>

    </footer>

</body>

</html>