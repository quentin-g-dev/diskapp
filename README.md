<h1>Diskapp</h1>
Cette application réalisée avec Symfony 4.4 permet de gérer un registre de disques, d'artistes, de labels et de genres musicaux.<br>

<h2>Installation sur un serveur Apache</h2>

Installer Composer sur le serveur de destination.<br>
Vérifier si Symfony peut être exécuté :
<pre>symfony check:requirements</pre> 
Suivre les instructions au besoin.<br>
Si la configuration du serveur pose problème, la solution est peut-être ici : https://symfony.com/doc/4.4/setup/web_server_configuration.html<br>
Importer les fichiers du projet sur le serveur de destination.<br>
Installer mysql.<br>
Depuis le répertoire racine, installer la base de donnees avec la commande (remplacer les parties soulignées avec les données de votre serveur) :
<pre>mysql -u username -p -h <u>localhost</u> <u>DATA-BASE-NAME</u> " < db_backup.sql<br></pre>
Créer un utilisateur doté d'un accès privilégié à cette nouvelle base de données, et reporter les références dans le fichier .env <br>
Sur un serveur local, depuis le répertoire racine du projet, exécuter la commande <pre>symfony server:start</pre>  et suivre le lien généré.

<h2>Utilisation</h2>

Saisissez les informations demandées dans les différents formulaires.<br>
L'application est en cours de développement. 
