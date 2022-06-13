<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/e6584b82db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Chivo:400,700">
    <meta name="author" content="Clément OZIOL">
    <title>Projet Intégratif</title>
</head>

<body>
    <header>
        <h1>SAE24</h1>
        <p><em>Projet intégratif</em></p>
        <div>
            <a href="index.php?page=home">Accueil</a>
            <a href="index.php?page=topologie">Topologie</a>
            <a href="index.php?page=devices">Matériels</a>
            <a href="index.php?page=attacks">Attaques</a>
            <a href="index.php?page=skills">Compétences</a>
            <a href="index.php?page=issues">Problèmes rencontrés</a>
            <a href="index.php?page=contact">Contact</a>
        </div>
    </header>
    <main>


    <?php
    require "static.php";
    if !(isset($_GET["page"])) {

    } elseif ($_GET["page"] == "topologie") {
        # code...
    
    } elseif ($_GET["page"] == "devices") {
        # code...
    
    } elseif ($_GET["page"] == "attacks") {
        # code...
    
    } elseif ($_GET["page"] == "skills") {
        echo $skills;
    
    } elseif ($_GET["page"] == "issues") {
        # code...
    }

    ?>
        <section id="home">
            <h1>Accueil</h1>
            <div id="indent">
                <p>Je m’appelle Clément OZIOL, je poursuis actuellement un Bachelor Universitaire de
                    Technologie en Réseaux et Télécommunications à l'Institut universitaire de technologie de Clermont-Ferrand (63). On peut me distinguer par mon sérieux, ma curiosité et
                    mon
                    attention au détail ce qui m’est très utile dans ce secteur. Passionné d’informatique depuis le plus
                    jeune âge j’ai rapidement développé un intérêt pour la cyber sécurité. Je souhaite donc m’orienter
                    vers
                    une école d’ingénieur pour me spécialiser d’autant plus dans ce domaine.</p>
            </div>
        </section>
    </main>
    <footer>
        <section id="cv">
            <h1><em>Curriculum vitæ</em></h1>
            <div id="indent">
                <img src="res/uk.png"><img src="res/us.png">
                <p>English version: </i><a href="cv/CV_OZIOL_EN.pdf" target="_blank">CV_OZIOL_EN.pdf</a></p>
                <img src="res/fr.png">
                <p>Version française: </i><a href="cv/CV_OZIOL_FR.pdf" target="_blank">CV_OZIOL_FR.pdf</a></p>
            </div>
        </section>
        <section id="contact">
            <h1>Contact</h1>
            <div id="indent">
                <p>E-mail: <em>clement.oziol (@) etu.uca.fr</em> | <em>clement (@) oziol.fr</em></p>
                <p>GitHub: <i class="fab fa-github-square"></i><a href="https://github.com/capacitor0" target="_blank">
                        capacitor0</a></p>
            </div>
        </section>
    </footer>
</body>

</html>