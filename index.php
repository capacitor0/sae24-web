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
            <a href="index.php?page=devices">Network devices</a>
            <a href="index.php?page=services">Services</a>
            <a href="index.php?page=attacks">Attaques</a>
            <a href="index.php?page=issues">Issues encountered</a>
            <a href="index.php?page=contact">Contact</a>
        </div>
    </header>
    <main>


        <?php
        require "static.php";
        require "devices.php";
        require "attaque.php";

        if (!isset($_GET["page"])) {
            header("Location: /index.php?page=home");
        } elseif ($_GET["page"] == "home") {
            echo $home;
        } elseif ($_GET["page"] == "topologie") {
            echo $topo;
        } elseif ($_GET["page"] == "devices") {
            $auth = false;
            if (!isset($_SERVER['PHP_AUTH_USER'])) {
                auth:
                header('WWW-Authenticate: Basic realm="Partie sécurisée"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            } else {
                if ($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "mdpSecure") {
                    deviceFlexGrid();
                } else {
                    echo '<section><p>Vous n\'êtes pas authentifié!</p></section>';
                    goto auth;
                }
            }
            
        } elseif ($_GET["page"] == "services") {
            echo $services;

        } elseif ($_GET["page"] == "attacks") {
            echo $attacks;
        } elseif ($_GET["page"] == "issues") {
            echo $issues;
        } elseif ($_GET["page"] == "attaque") {
            if (!isset($_GET["dev"])) {
                echo "<h1>IP VIDE !</h1>";
            } else {
                showAttaques($_GET["dev"]);
            }
        } else {
            header("Location: /index.php?page=home");
        }

        ?>
    </main>
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