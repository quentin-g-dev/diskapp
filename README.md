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
Installer la base de données à l'aide des fichiers .sql présents à la racine du dossier (versions 'empty' et 'demo')
Créer un utilisateur doté d'un accès privilégié à cette nouvelle base de données, et reporter les références dans le fichier .env <br>
Toujours dans le fichier .env, configurer un serveur SMTP pour l'envoi d'e-mails (inscriptions, renouvellements de mots de passe...).
Sur un serveur local : depuis le répertoire racine du projet, exécuter la commande <pre>symfony server:start</pre>  et suivre le lien généré.
L'application s'exécute à partir du répertoire /public/<br>
Pour passer en mode production, exécuter la commande : <pre> APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear</pre>
