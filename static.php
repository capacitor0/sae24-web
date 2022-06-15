<?php
$skills = '<section>
<h1>Compétences</h1>
<em>Sur ⭐️⭐️⭐️⭐️⭐️</em>
<div id="indent">
    <h2>Techniques</h2>
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
    <h2>Humaines</h2>
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
        <h2>Descriptif</h2>
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
<h2>Table des VLANs et réseaux</h2>
<div id="indent">
<table>
<tr>
<th>n° VLAN</th>
<th>Réseau IP</th>
<th>Description</th>
</tr>
<tr>
<td>99</td>
<td>10.10.99.0/24</td>
<td>Management des équipements</td>
</tr>
<tr>
<td>100</td>
<td>10.10.10.0/24</td>
<td>Serveurs</td>
</tr>
<tr>
<td>101</td>
<td>10.10.11.0/24</td>
<td>RH</td>
</tr>
<tr>
<td>102</td>
<td>10.10.12.0/24</td>
<td>Finance</td>
</tr>
<tr>
<td>103</td>
<td>10.10.12.0/24</td>
<td>Technique</td>
</tr>
</table>
</div>
<h2>Configurations communes à tous les équipements</h2>



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
<h2>Routeur0</h2>
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
<h2>SwitchFederateur0</h2>
<div id="indent">
<p>Configuration du STP</p>
<code>spanning-tree vlan 1,99-103 root primary (racine primaire)</code>
</div>
<h2>SwitchFederateur1</h2>
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
<h1>API de supervision des équipements</h1>
<div id="indent">
<p>API développée en Python (framewrok Flask). Elle est très important au processus de détection de d\'enregistrement des attaques : c\'est elle qui est appelée lors de la dectection de DHCP DISCOVER suspicieux au niveau des commutateurs pour traiter et corréler les informations. Les données sont stockées dans une base SQLite.</p>
<p>Elle met à disposition différents endpoints :</p>
<ul>
<li>/get-last-backup</li>
<em>Permet de déterminer quand un matériel a été sauvegardé pour la dernière fois</em>
<li>/log-event</li>
<em>Permet de signaler une activité DHCP suspicieuse, le script détermine ensuite de qu\'elle interface elle provient.</em>
<li>/get-logs</li>
<em>Selon les paramètres passés : récupération des attaques pour un équipement ou récupération du nombre de celles-ci.</em>
</ul>
<p>Extrait du code (fichiers spécifiques à l\'ORM omis): </p>
<code>
[...]
@app.route(\'/\', methods=[\'GET\'])
def home():
    return &quot;&lt;h1&gt;API de gestion des équipements.&lt;/h1&gt;&quot;


@app.route(\'/get-last-backup\', methods=[\'GET\'])
def get_last_backup():

    CFG_PREFIX = \'/srv/tftp/cisco_data/cfg-backup/\'

    dictFiles = {}

    for file in os.listdir(CFG_PREFIX):
        file_time_string = dt.fromtimestamp(os.path.getmtime(CFG_PREFIX + file))
        dictFiles[file.replace(".dump", "")] = file_time_string.strftime("%d/%m/%Y à %H:%M")

    return jsonify(dictFiles)

@app.route(\'/log-event\', methods=[\'GET\'])
def log_event():
    class MAC_Record(object):
        def __init__(self, rawRecord) -> None:
            tab = []
            for field in rawRecord.split(" "):
                if field != "":
                    tab.append(field.replace(\'\n\', \'\'))

            self.vlan = tab[0]
            self.mac = tab[1]
            self.int = tab[3]

        def toDict(self):
            return {"vlan": self.vlan, "mac": self.mac, "port": self.int}

    TABLES_PREFIX = \'/srv/tftp/cisco_data/client-tables/\'



    ip = request.args.get("ip")
    msg = request.args.get("msg")
    lines = msg.split(\'\n\')

    for ligne_log in lines:
        if ligne_log != "":
            
            suspicious_mac = ligne_log.split(",")[2].replace(" chaddr: ", "")
            source_mac = ligne_log.split(",")[3].replace(" MAC sa: ", "")

            equipement = Equipement.query.filter_by(ip=ip).first()

            try:
                with open(TABLES_PREFIX + equipement.nom + ".dump", "r") as mac_table:
                    lignes = mac_table.readlines()
            except:
                return jsonify("Erreur."), 500

            tabRecords = [MAC_Record(ligne) for ligne in lignes[5:-1]]

            for record in tabRecords:
                if record.mac == source_mac:
                    res_record = record

            attack = Attaque(dt.now(), f"DHCP Discover suspicieux sur l\'interface {res_record.int}. Détails : MAC PC {res_record.mac}, VLAN {res_record.vlan}, MAC Déguisée {suspicious_mac}")
            equipement.attaques.append(attack)
            db_session.add(attack)
            db_session.commit()


    return jsonify("ok")

@app.route(\'/get-logs\', methods=[\'GET\'])
def get_logs():
    
    ip = request.args.get("ip")
    count = request.args.get("count")

    if ip == None:
        return jsonify("Paramètre `ip` requis."), 500
    
    
    equipement = Equipement.query.filter_by(ip=ip).first()

    if equipement == None:
        return jsonify("Équipement inexistant."), 500

    attacks = Attaque.query.filter_by(dev_id=equipement.id)
    
    res = []

    for attaque in attacks:
        res.append(attaque.to_dict())

    if count == "1":
        return jsonify(len(res))
    else:
        return jsonify(res)

[...]</code>
</div>
<div>
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
<h1>FTP</h1>
<div id="indent">
<p>Permet de la récupération de fichiers sur les stations (mode anonyme ou non)</p>
<p>Configuration : </p>
<code>
# Connexion en mode anonyme
anonymous_enable=YES

# Activation de l\'écriture
write_enable=YES

# Chemin vers le rep. pour les connexions anonymes
anon_root=/srv/ftp/pub

# Bannière de connexion
ftpd_banner=Bienvenue sur le serveur FTP, vous y trouverez divers scripts et outils.
</code>
</div>
<h1>HTTP + PHP</h1>
<div id="indent">
<p>Requière les paquets nginx et php-fpm</p>
<p>Pour activer la prise en charge PHP : </p>
<code>
### /etc/nginx/sites-available/default

[...]
location ~ \.php$ {
    include snippets/fastcgi-php.conf;

    # With php-fpm (or other unix sockets):
    fastcgi_pass unix:/run/php/php7.3-fpm.sock;
    # With php-cgi (or other tcp sockets):
    #fastcgi_pass 127.0.0.1:9000;
}
</code>

</div>
</section>

';

$attacks = '
<section>
<h1>DHCP Starvation</h1>
<div id="indent">

<h2>Principe</h2>
<p>Un attaquant envoie en boucle des DHCP REQUEST au serveur DHCP avec des adresses MAC usurpées de sorte à occuper tous les bails disponibles dans un pool.</p>
<p>Si menée avec succès cette attaque mène à un déni de service : le serveur DHCP ne peut plus attribuer de bails aux clients.</p>
<h2>POC</h2>
<div id="indent">
<h2>Outils utilisés </h2>
<ul>
<li><a href="http://dhcpstarv.sourceforge.net/">dhcpstarv</a></li>
<li>tcpdump</li>
<li>Machine virtuelle Debian Buster</li>
</ul>
<p>Attaque : <a href="https://ucafr-my.sharepoint.com/:v:/g/personal/clement_oziol_etu_uca_fr/EUYynTzPbEBDoaIX0wZidZIBvvuFYEZv0x0L0LNavKuynQ?e=PvGLb5">Vidéo</a></p>
</div>
<h2>Mitigation</h2>
<p>Activer le DHCP snooping sur les commutateurs edge (cf. partie topologie). Définir les interfaces vers le réseau de fédération / distrinution comme étant de confiance.</p>
<p>On s\'en sert ici pour n\'autoriser le gain de bails DHCP qu\'à travers certains port et détécter l\'usurpation d\'adresse MAC (MAC Client du paquet DHCP est différente de la MAC source Ethernet).</p>
<h2>Détection</h2>
<p>La détéction se base sur la récupération des logs des commutateurs "edge". S\'en suit le déclenchement d\'une alerte selon les conditions suivantes :</p>
<code>syslog.program LIKE \'%DHCP_SNOOPING-5-DHCP_SNOOPING_M%\' AND syslog.timestamp >= macros.past_5m</code>
<p>Concrétement on regarde si il y a eu un log qui contient "DHCP_SNOOPING-5-DHCP_SNOOPING_M)" (préfixe pour les logs du DHCP snooping lors d\'une usurpation d\'adresse MAC) sur les 5 dernières minutes</p>
<p>La situation peut être schématisée comme suit : </p>
<code>
                                 ┌────────────────────────────────────────────────────┐
                                 │                                                    │
                                 │                     LibreNMS                       │
                                 │                                                    │
┌───────────────────┐            │  ┌─────────────────┐       ┌────────────────┐      │
│                   │    Syslog  │  │                 │       │                │      │
│    Commutateur    ├────────────┼──►    Ingestion    ├───────►    Analyse     │      │
│                   │            │  │                 │       │                │      │
└───────────────────┘            │  └─────────────────┘       └────────┬───────┘      │
                                 │                                     │              │
                                 │                                     │              │
                                 │                                     │              │
                                 │ ┌────────────────┐         ┌────────▼───────┐      │
                                 │ │                │         │                │      │
               HTTP              │ │  Notification  │  MATCH! │   Filtre pour  │      │
      ┌──────────────────────────┼─┤    de l\'API    ◄─────────┤     alerte     │      │
      │                          │ │                │         │                │      │
      │                          │ └────────────────┘         └────────┬───────┘      │
      │                          │                                     │              │
      │                          │                                     │ Pas de match │
      │                          │                                     │              │
      │                          │                                     │              │
      │                          │                                     ▼              │
      │                          │                            Fonctionnement normal   │
      │                          │                                                    │
      │                          └────────────────────────────────────────────────────┘
      │
┌─────┼────────────────────────────────────────────────┐
│     │                                                │
│     │            API "Equip_monitor"                 │
│     │                                                │
│ ┌───▼────────────┐         ┌──────────────────────┐  │
│ │                │         │  Extraction adresses │  │
│ │  /log-event    ├─────────►         MAC          │  │
│ │                │         │                      │  │
│ └────────────────┘         └──────────┬───────────┘  │
│                                       │              │
│                                       │              │
│ ┌─────────────────────────────────────▼────────────┐ │
│ │                                                  │ │
│ │    Correlation MAC source <=> interface du SW    │ │
│ │                                                  │ │
│ └─────┬────────────────────────────────────────────┘ │
│       │                                              │
│       │         ┌───────────────────────────────┐    │
│       │         │                               │    │
│       └─────────►    Enregistrement dans BDD    │    │
│                 │                               │    │
│                 └───────────────────▲───────────┘    │
│                                     │                │
│                          ┌──────────┴───────┐        │
│                          │                  │        │
│                          │    /get-logs     │        │
│                          │                  │        │
│                          └──────────▲───────┘        │
│                                     │                │
└─────────────────────────────────────┼────────────────┘
                                      │
                                      │
                                      │
             ┌────────────────────────┴────────────┐
             │                                     │
             │        Code PHP "Matériels"         │
             │              (ce site)              │
             └─────────────────────────────────────┘
</code>


</div>
</section>
';


?>


