<h1>Diskapp</h1>
Cette application réalisée avec Symfony 4.4 permet de gérer un registre de disques, d'artistes, de labels et de genres musicaux.<br>

<h2>Installation sur un serveur Apache</h2>

Installer Composer sur le serveur de destination.<br>
Vérifier si Symfony peut être exécuté sur le serveur avec la commande <pre>symfony check:requirements</pre> et suivre les instructions au besoin.<br>
Si la configuration du serveur pose problème, la solution est peut-être ici : https://symfony.com/doc/4.4/setup/web_server_configuration.html<br>
Importer les fichiers du projet sur le serveur de destination.<br>
Installer mysql, au besoin.<br>
Depuis le répertoire racine, installer la base de donnees avec la commande, adaptée aux données de votre serveur : " mysql -u username -p -h localhost DATA-BASE-NAME " < db_backup.sql<br>
Créer un utilisateur doté d'un accès privilégié à cette nouvelle base de données, et reporter les références dans le fichier .env <br>
Sur un serveur local, exécuter la commande symfony server:start depuis le répertoire racine du projet et suivre le lien généré.

<h2>Utilisation</h2>

Saisissez les informations demandées dans les différents formulaires.<br>
L'application est en cours de développement. 
