<?php
$skills = `<section>
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
                <li>Gestion d'une infrastructure de virtualisation (Hyper-V, VMware vSphere)</li>
            </ul>
            <li id="part-res">Réseaux ⭐️⭐️⭐️ :</li>
            <ul>
                <li>Configuration de VLAN</li>
                <li>Configuration d'un serveur DHCP</li>
                <li>Configuration de Cisco IOS</li>
                <li>Configuration du NAT</li>

            </ul>
            <li id="part-telco">Téléphonie et télécommunications ⭐️⭐️ :</li>
            <ul>
                <li>Déploiement d'une solution de communication sur IP</li>
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
                <li>Mise en œuvre d'un système d’information sécurisé</li>
                <li>Sécurisation d'un réseau</li>
                <li>Mise en œuvre d'un système de surveillance d’incidents de sécurité</li>
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
            <li>Assister d'autres personnes ⭐️⭐️⭐️</li>
        </ul>
    </div>
</div>
</section>`;


$issues = `<section>
<h1>Problèmes rencontrés</h1>
<div id="indent">
<ul>
<li><p>Switchs Cisco Catalyst émulés avec Dynamips qui ne supportent pas le DHCP snooping. => Necessité d'utiliser de nouvelles images IOSvL2 beaucoup plus gourmandes en ressources.</p></li>
<li>Impossible de créer des liens à nouveau sur certains ports dans GNS3 après la mise en place d'une capture réseau.</li>
<li><a href="https://www.cisco.com/c/en/us/support/docs/ip/simple-network-management-protocol-snmp/40367-camsnmp40367.html">Community string indexing</a> SNMP non fonctionnel. Necessité de récuperer les tables des addreses MAC connéctées via un "kron" IOS + utilisation d'un serveur TFTP.</li>
<li></li>
<li></li>
</ul>
</div>
</section`
?>