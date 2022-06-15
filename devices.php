<?php
$devices = [
    "Routeur0" => "10.10.99.20",
    "SwitchRH" => "10.10.99.66",
    "SwitchFinance" => "10.10.99.62",
    "SwitchTechnique" => "10.10.99.63",
    "SwitchServeurs" => "10.10.99.61",
    "SwitchFederateur0" => "10.10.99.65",
    "SwitchFederateur1" => "10.10.99.64"
];

$libreNms = [
    "10.10.99.20" => "7",
    "10.10.99.66" => "18",
    "10.10.99.62" => "13",
    "10.10.99.63" => "14",
    "10.10.99.61" => "17",
    "10.10.99.65" => "16",
    "10.10.99.64" => "15"
];

$lastUpdated = file_get_contents("http://10.10.10.11:8899/get-last-backup");
$jsonLastUpdate = json_decode($lastUpdated, true);

function deviceFlexGrid() {

    global $devices;
    global $jsonLastUpdate;
    global $libreNms;
    echo '<section>
    <h1>Matériels</h1>
    <div id="indent">';
    echo '<div class="wrapper-devices">';

    foreach ($devices as $nom => $ip) {
        $count = file_get_contents("http://10.10.10.11:8899/get-logs?count=1&ip=" . $ip);
        echo '<div>';
        echo '<h3>' . $nom . '</h3>';
        echo '<ul>';
        echo '<li><b>Dernière sauvegarde de la configuration :</b> le ' . $jsonLastUpdate[$nom . ".config"] . '</li>';
        if ($count != 0) {
            $count = $count . '<a href="index.php?page=attaque&dev=' . $ip .'">Voir</a>';
        }
        echo '<li><b>Activités DHCP suspicieuses détéctées :</b> ' .  $count . '</li>';
        echo '<li><a target="_blank" href="http://172.25.249.7:7777/device/' . $libreNms[$ip] . '">Visualiser dans LibreNMS</a></li>';
        echo '</ul>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';
}


?>