<h2>Démo : <a href="https://www.diskapp.quentin-g.com">https://www.diskapp.quentin-g.com</a></h2>
<h3>Première version de l'application Diskapp préparée pour la production.</h3>
<h4>Configuration requise :</h4>
<ul>
<li>Serveur Apache avec PHP, MySQL, Composer</li>
<li>Serveur SMTP</li>
</ul>

<h4>Installation</h4>
<ul>
<li>Importer le répertoire sur le serveur Apache</li>
<li>Depuis le répertoire racine '/', saisir les commandes :
<pre>composer require symfony/apache-pack</pre>
 <pre>composer install</pre></li>
<li>Configurer les connexions aux serveurs SMTP et MySQL  dans le fichier /.env :
<ul><li>ligne 25 : serveur SMTP
<pre>MAILER_DSN=smtp://YOUR_SMTP_ID:YOUR_SMTP_PASSWORD@YOUR_SMTP_SERVER:YOUR_SMTP_PORT</pre></li>
<li>ligne 33 : serveur MySQL
<pre>DATABASE_URL="mysql://YOUR_DB_USERNAME:YOUR_DB_PASSWORD@YOUR_HOST:YOUR_PORT/diskapp?serverVersion=YOUR_SERVER_VERSION"</pre></li>
</ul></li>
<li>Construire une base de données (le nom doit correspondre à  YOUR_DB_USERNAME) et un utilisateur doté de tous les privilèges sur celle-ci (son nom et son mot de passe doivent correspondre à  YOUR_DB_USERNAME et YOUR_DB_PASSWORD)</li>
<li>Exécuter un des dumps SQL disponibles dans le répertoire racine '/' . Au choix : <ul><li>une BDD vide : <pre>diskapp_empty.sql</pre></li><li>une BDD de démonstration avec quelques éléments et l'utilisateur quentin-g.com :<pre>diskapp_demo.sql</pre></li></ul></li>
 <li>Depuis le répertoire racine '/', exécuter la commande suivante pour passer effectivement en mode production :
 <pre>APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear</pre></li>
 <li>Réchauffer le cache :
 <pre>php bin/console cache:warmup</pre></li>
<li>Sur un serveur local type LAMP, démarrer le serveur Symfony en exécutant depuis le répertoire racine '/' la commande suivante : 
<pre>symfony server:start</pre></li>
 <li>L'application s'exécute à partir du répertoire '/public/'</li>
