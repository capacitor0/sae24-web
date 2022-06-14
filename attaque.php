<?php

function showAttaques($ip) {
    require_once "devices.php";
    global $devices;
    $arrIpToDev = array_flip($devices);

    $attaques = file_get_contents("http://10.10.10.11:8899/get-logs?count=0&ip=" . $ip);
    $jsonAttaques = json_decode($attaques, true);

    echo '<section>
    <h1>' . $arrIpToDev[$ip] . '</h1>
    <table>
    <tr>
    <th>Date</th>
    <th>Message</th>
    </tr>';
    foreach ($jsonAttaques as $details) {
            echo '<tr>
            <td>' . $details['date'] . '</td>
            <td>' . $details['message'] . '</td>
            </tr>';
    }
    echo '</table>
    </section>';
}


?>