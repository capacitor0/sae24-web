<?php
$skills = '<section>
<h1>Compétences</h1>
<em>Sur ⭐️⭐️⭐️⭐️⭐️</em>
<div id="indent">
    <h3>Techniques</h3>
    <div id="indent">
        <ul>
            <li id="part-info">Informatique ⭐️⭐️⭐️⭐️ :</li>
            <ul>
                <li>Administration système : Windows et Linux</li>
                <li>Déploiement de stations de travail</li>
                <li>Configuration de services (DHCP, FTP, NFS, NGINX)</li>
                <li>Gestion d\'une infrastructure de virtualisation (Hyper-V, VMware vSphere)</li>
            </ul>
            <li id="part-res">Réseaux ⭐️⭐️⭐️ :</li>
            <ul>
                <li>Configuration de VLAN</li>
                <li>Configuration d\'un serveur DHCP</li>
                <li>Configuration de Cisco IOS</li>
                <li>Configuration du NAT</li>

            </ul>
            <li id="part-telco">Téléphonie et télécommunications ⭐️⭐️ :</li>
            <ul>
                <li>Déploiement d\'une solution de communication sur IP</li>
            </ul>
            <li id="part-prog">Programmation ⭐️⭐️⭐️⭐️ :</li>
            <ul>
                <li>Développement et pilotage de projet</li>
                <li>Python, JavaScript, Bash</li>
                <li>C, WLangage</li>
                <li>Familier avec C#, Java et Go</li>
                <li>HTML, CSS</li>
            </ul>
            <li id="part-cyber">Cybersécurité ⭐️⭐️⭐️⭐️ :</li>
            <ul>
                <li>Mise en œuvre d\'un système d’information sécurisé</li>
                <li>Sécurisation d\'un réseau</li>
                <li>Mise en œuvre d\'un système de surveillance d’incidents de sécurité</li>
                <li>Audit de la sécurité des systèmes</li>
            </ul>
        </ul>
    </div>
    <h3>Humaines</h3>
    <div id="indent">
        <ul>
            <li>Autonomie ⭐️⭐️⭐️⭐️⭐️</li>
            <li>Investissement ⭐️⭐️⭐️⭐️⭐️</li>
            <li>Analyse ⭐️⭐️⭐️⭐️</li>
            <li>Assister d\'autres personnes ⭐️⭐️⭐️</li>
        </ul>
    </div>
</div>
</section>';


$issues = '<section>
<h1>Problèmes rencontrés</h1>
<div id="indent">
<ul>
<li><p>Switchs Cisco Catalyst émulés avec Dynamips qui ne supportent pas le DHCP snooping. => Necessité d\'utiliser de nouvelles images IOSvL2 beaucoup plus gourmandes en ressources.</p></li>
<li><p>Impossible de créer des liens à nouveau sur certains ports dans GNS3 après la mise en place d\'une capture réseau.</p></li>
<li><p><a href="https://www.cisco.com/c/en/us/support/docs/ip/simple-network-management-protocol-snmp/40367-camsnmp40367.html">Community string indexing</a> SNMP non fonctionnel. Necessité de récuperer les tables des addreses MAC connéctées via un "kron" IOS + utilisation d\'un serveur TFTP.</p></li>
<li><p>Performances dégradées pour les connexions WAN => necessité d\'utiliser une interface de type tap0. (Procédure <a href="https://websistent.com/how-to-connect-gns3-to-the-internet/">ici</a>)
</ul>
</div>
</section>';

$home = '<section id="sae24">
<h1>SAE24</h1>
<div id="indent">

    <div id="indent">
        <p id="time">Début du projet le <b>19 Mai 2022</b> et fin le <b>15 Juin 2022</b> pour évaluation.
        </p>
        <h3>Descriptif</h3>
        <div id="indent">
            <p>Réalisation d\'une petite infrastructure informatique dans un environnement de
                simulation de réseaux (<a href="https://www.gns3.com/">GNS3</a>) dans un cadre Universitaire.</p>

            <p>Le but est de construire le réseau d\'une entreprise contenant plusieurs services (service
                technique, ressources humaines…).
                Ce réseau doit contenir les éléments suivants : plusieurs serveurs, plusieurs services
                réseaux (DHCP, FTP, HTTP…) ainsi que des postes clients.
            </p>

            <h4>Points clés abordés :</h4>
            <div id="indent">
                <ul>
                    <li>Détection et mitigation d\'attaques sur le protocole DHCP (<em><a
                                href="https://fr.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol">Dynamic
                                Host Configuration Protocol</a></em>)</li>
                    <li>Sécurité</li>
                    <li>Analyse de journaux applicatifs</li>
                    <li>Redondance</li>
                    <li>Gestion de projet</li>
                </ul>
            </div>

            <h4>Objectifs :</h4>
            <div id="indent">
                <ul>
                    <li>Mettre a profit ce qui a été étudié durant l\'année</li>
                    <li>Être autonome et apprendre par soi-même</li>
                    <li>Acquérir de nouvelles compétences</li>
                </ul>
            </div>
            <h4>Ordonnancement prévisionnel du projet :</h4>
            <img src="res/planning.png" alt="Ordonnancement des tâches">


        </div>    
    </div>
</div>
</section>';

$topo = '
<section>
<h1>Topologie</h1>
<img src="res/topologie.png" alt="Topologie" style="width: 80vw;height: auto; margin-left: -5%">
<div id="indent">
<h3>Routeur0</h3>
<div id="indent">
<h4>Fonction remplies</h4>
<ul>
<li>Routage entre les VLAN</li>
<li>NAT avec l\'interface tap0 de l\'objet WAN</li>
<li>DNAT de 10.200.200.2 (TCP 50999) vers 10.10.10.12 (TCP 80)</li>
<ul>
</div>
</div>
</section>
';

?>


