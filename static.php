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
<h3>Configurations communes à tous les équipements</h3>



<div id="indent">
<p>Définition du mot de passe (chiffré) pour le mode privilégié</p>
<code>enable secret 5 $1$iHN8$4RGiriMWo8oYY68SbB34W/ (=> jCm&ZsN3w) </code>
<p>Définition du mot de passe pour se connecter en SSH (utilisateur admin)</p>
<code>username admin secret 5 $1$MbOK$.Hz0qLyW1uYEDnBV5aRK5/ (=> jHXw8vH&!)</code>
<p>Envoie des logs sur un serveur du réseau (protocole Syslog)</p>
<code>logging trap debugging
logging facility local6
logging host 10.10.99.254</code>
<p>Configuration du serveur SNMP</p>
<code>snmp-server community public RO 1 <-- n° ACL
snmp-server community private RW 1
snmp-server location Salle serveur, baie reseau A
snmp-server contact clement@oziol.fr</code>
<p>ACL n\'autorisant que le serveur de supervision à se connecter au SNMP</p>
<code>access-list 1 permit 10.10.99.254
access-list 1 deny   any</code>
<p>Définition de tâches planifiées "kron"</p>
<code>kron occurrence dump_clients in 1 recurring (Execution toutes les 1 minute)
 policy-list dump_mac_address_table  (Seulement sur les commutateurs)

kron occurrence bkp_cfg in 10 recurring (Execution toutes les 10 minutes)
 policy-list backup_config

kron policy-list dump_mac_address_table                                                       
 cli show mac address-table | redirect tftp://10.10.99.254/client-tables/[NOM ÉQUIPEMENT].dump (Seulement sur les commutateurs)

kron policy-list backup_config
 cli show startup-config | redirect tftp://10.10.99.254/cfg-backup/[NOM ÉQUIPEMENT].config</code>

<p>Ajout d\'une adresse IP sur le VLAN de supervision (spécifique aux commutateurs)</p>
<code>interface Vlan99
 ip address 10.10.99.6X 255.255.255.0</code>
<p>Configuration du DHCP Snooping (spécifique aux commutateurs)</p>
<code>ip dhcp snooping vlan 99-103
no ip dhcp snooping information option (désactive l\'option 82, non configuré sur notre serveur DHCP)
ip dhcp snooping</code>
<code>interface GigabitEthernetx/y (interface de confiance, typiquement interface sur un switch edge avec trunk vers le coeur de réseau)
[...]
ip dhcp snooping trust</code>
</div>
</div>
<h3>Routeur0</h3>
<div id="indent">

<h4>Fonction remplies</h4>
<ul>
<li>Routage entre les VLAN</li>
<li>NAT avec l\'interface tap0 de l\'objet WAN</li>
<li>DNAT de 10.200.200.2 (TCP 50999) vers 10.10.10.12 (TCP 80)</li>
</ul>

<h4>Configurations spécifiques</h4>

<p>Définition d\'une VRF (autre table de routage), cela sert à isoler le réseu de gestion (SNMP + SSH).</p>
<code>ip vrf management
 description table reseau gestion</code>
<p>Paramètres sur l\'interface dédiée à l\'administration (VLAN 99)</p>
<code>interface GigabitEthernet0/1.99
 encapsulation dot1Q 99
 ip vrf forwarding management
 ip address 10.10.99.20 255.255.255.0
 no routing dynamic</code>
<p>Paramètres sur l\'interface côté WAN</p>
<code>interface GigabitEthernet0/0
 ip address 10.200.200.2 255.255.255.0
 ip nat outside
</code>
<p>Paramètres sur une sous-interface pour VLAN</p>
<code>interface GigabitEthernet0/1.10X
 encapsulation dot1Q 10X
 ip address 10.10.1X.254 255.255.255.0
 ip helper-address 10.10.10.10
 ip nat inside</code>

 <p>Configuration du NAT pour sortir du réseau</p>
 <code>ip nat inside source list 10 interface GigabitEthernet0/0 overload</code>
<p>ACL pour l\'autorisation du NAT</p>
<code>access-list 10 permit 10.10.0.0 0.0.255.255
access-list 10 deny   any</code>

 <p>Configuration du DNAT pour accéder au serveur Web</p>
 <code>ip nat inside source static tcp 10.10.10.12 80 10.200.200.2 50999</code>
</div>
<h3>SwitchFederateur0</h3>
<div id="indent">
<p>Configuration du STP</p>
<code>spanning-tree vlan 1,99-103 root primary (racine primaire)</code>
</div>
<h3>SwitchFederateur1</h3>
<div id="indent">
<p>Configuration du STP</p>
<code>spanning-tree vlan 1,99-103 root secondary (racine secondaire)</code>
</div>
</section>
';

$services = '
<section>
<h1>Supervision</h1>
<div id="indent">
<p>Solution basée sur LibreNMS</p>
<ul>
<li>Collecte de diverses statistiques en SNMP</li>
<li>Collecte des logs (protocole syslog)</li>
<li>Visualisations (graphiques, weathermap)</li>
<li>Alerte pour détécter une attaque à partir des logs (détaillé dans la partie attaque)</li>
</ul>
<p><em>Météo des liens: </em></p>
<img src="res/weather.png" alt="Météo" style="width: 50vw;height: auto;">

<p><em>Informations sur un équipement : </em></p>
<img src="res/info.png" alt="Météo" style="width: 50vw;height: auto;">

<p><em>Alerte de detection à partir des logs : </em></p>
<img src="res/alert.png" alt="Météo" style="width: 60vw;height: auto;">
</div>
<h1>DHCP</h1>
<div id="indent">
<p>Permet d\'attribuer une configuration IP aux machines</p>
<p>Configuration en place :</p>
<code>
### /etc/dhcp/dhcpd.conf

# Serveur DHCP principal du réseau
authoritative;

# Serveurs DNS communs aux pools
option domain-name-servers 192.168.118.129, 192.168.118.130;

# Pool VLAN 101
subnet 10.10.11.0 netmask 255.255.255.0 {
	range 10.10.11.10 10.10.11.250;
	option routers 10.10.11.254;

}

# Pool VLAN 102
subnet 10.10.12.0 netmask 255.255.255.0 {
	range 10.10.12.10 10.10.12.250;
	option routers 10.10.12.254;
}

# Pool VLAN 103
subnet 10.10.13.0 netmask 255.255.255.0 {
	range 10.10.13.10 10.10.13.250;
	option routers 10.10.13.254;
}

# Pool serveur (pour compatibilité)
subnet 10.10.10.0 netmask 255.255.255.0 {}

</code>
</div>
</section>

';


?>


