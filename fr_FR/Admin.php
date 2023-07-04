<?php
/**$
    Admin - fr_FR
    CLIENTXCMS Translator system - Exported on 2023-07-04 21:11:53
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'admin' => [
    'delivery' => 'Livraison Service',
    'switchtheme' => 'Changer de thème',
    'backtoadmin' => 'Revenir en administration',
    'backtosite' => 'Retour au site',
    'documentation' => 'Documentation',
    'support' => 'Support',
    'profile' => [
      'title' => 'Profil',
      'subtitle' => 'Gérez votre profil administrateur',
    ],
    'database' => [
      'title' => 'Base de données',
      'subtitle' => 'Gestion de la base de données.',
      'available_actions' => 'Actions disponibles',
      'main' => 'Pour plus d\'informations sur l\'utilisation de phinx, ses commandes et ses nombreuses options.',
      'clickhere' => 'Cliquez-ici',
      'version' => 'Version',
      'start_at' => 'Temps de début',
      'end_at' => 'Temps de fin',
      'endpoint' => 'Point d\'arrêt',
      'list' => 'Liste des migrations déjà effectuées.',
      'seed' => 'La commande Seed exécute toutes les classes seed disponibles. Pour plus d\'options et d\'informations',
      'migrate' => 'La commande Migrate exécute toutes les migrations disponibles. Pour plus d\'options et d\'informations',
      'rollback' => 'La commande Rollback est utilisée pour annuler les migrations précédentes exécutées par Phinx. Pour plus d\'options et d\'informations',
    ],
    'themes' => [
      'config' => [
        'sections' => [
          'title' => 'Sections',
          'subtitle' => 'Gestion des sections personnalisés du thème.',
        ],
        'menus' => [
          'title' => 'Menus',
          'addsubmenu' => 'Ajouter un sous élement',
          'subtitle' => 'Gestion des menus du thème.',
        ],
        'footerlinks' => [
          'title' => 'Liens bas de page',
          'subtitle' => 'Gestion des liens du bas de page.',
        ],
      ],
      'title' => 'Thèmes',
      'subtitle2' => 'Thèmes CLIENTXCMS disponibles.',
      'author' => 'Auteur',
      'actual' => 'Thème actuel',
      'viewspath' => 'Chemin des vues',
      'templatesPath' => 'Chemin des vues principales',
      'assetsPath' => 'Chemin des assets',
      'official' => 'Theme officiel',
      'ComponentPath' => 'Chemin des composants',
      'PluginsPath' => 'Chemin des plugins',
      'downloaded' => 'Thèmes téléchargés',
      'apptitle' => 'Titre de l\'application',
      'appmobile' => 'Titre de l\'application pour mobile',
      'htmlsupport' => 'Le support de l\'HTML est activé pour le titre de l\'application.',
      'titlehome' => 'Titre de la page d\'accueil',
      'subtitle' => 'Sous-titre de la page d\'accueil',
      'btnaction' => 'Action du bouton',
      'btnicon' => 'Icone du bouton',
      'btntext' => 'Texte du bouton',
      'primary' => 'Couleur primaire',
      'dark' => 'Thème assombri',
      'updateglobal' => 'Globalement',
      'updateonlyassets' => 'Seulement les assets',
      'updateonlyviews' => 'Seulement les vues',
      'noofficial' => 'Changer avec un thème non officiel',
      'themeemail' => 'Importer votre modèle d\'email ici',
    ],
    'dashboard' => [
      'subtitle' => 'Bienvenue sur votre tableau de board CLIENTXCMS.',
      'isLatestVersion' => 'CLIENTXCMS est actuellement en %version%.',
      'isBetaOrAlpha' => 'CLIENTXCMS est actuellement en %version%. <a href=\'%route%\'>Signaler un problème</a>.',
      'statistics' => 'Statistiques de l\'hébergeur',
      'cronhours' => 'Attention : vos tâches planifiées n\'ont pas été executée depuis %hours% heures. Les livraisons, suspensions et expirations n\'ont pas était faites pendant ce temps.',
      'statistiquessub' => 'Retrouvez les statistiques de votre hébergeur, que ce soit les dernières inscriptions les factures générées et les services actifs, tout y est !',
    ],
    'firewall' => [
      'title' => 'Pare feu',
      'subtitle' => 'Vérification d\'identité & Autorisation',
      'confirm' => 'Confirmez votre mot de passe pour continuer.',
      'content' => 'Vous entrez dans une zone administrative de ClientXCMS. Vous devez confirmer votre mot de passe pour continuer',
      'confirmation' => 'Voulez-vous vraiment vous déconnecter du pare-feu ?',
      'btn' => 'Confirmer',
      'logout_btn' => 'Sortir du pare-feu',
      'actions' => [
        'badpwd' => 'Mot de passe incorrect.',
        'success' => 'Autorisation accordée.',
        'logout' => 'Déconnecté avec succès.',
      ],
    ],
    'emailtemplate' => [
      'title' => 'Modèles d\'e-mails',
      'subtitle' => 'Gérez les modèles d\'e-mail',
    ],
    'license' => [
      'title' => 'Licence',
      'subtitle' => 'Informations liées à votre licence.',
      'registar' => 'Enregistrée par',
      'key' => 'Clé de licence',
      'type' => 'Type de licence',
      'max' => 'Nb. Clients autorisés',
      'customers' => 'Nb. Clients sur système',
      'domain' => 'Domaine(s) autorisé(s)',
      'expire' => 'Expiration',
      'types' => [
        'dev' => 'Développement',
        'prod' => 'Production',
        'demo' => 'Démonstration',
        'gift' => 'Cadeau',
      ],
    ],
    'modules' => [
      'title' => 'Modules',
      'subtitle' => 'Modules disponibles.',
      'folder' => 'Dossier',
      'actived' => 'Activé',
      'support' => 'Support en ligne',
      'updatable' => 'Disponible en %tag%',
      'official' => 'Module officiel',
      'updated' => 'Dernière M.A.J.',
      'changelogbtn' => 'Voir les changements',
      'changelog' => 'Changements',
      'about' => 'À propos',
      'requiredmodules' => 'Module requis',
      'empty' => 'Impossible de récupérer les modules car le site Web principal est actuellement indisponible. Veuillez contacter l\'assistance.',
      'enable' => 'Activer',
      'refresh' => 'Forcer l\'actualisation',
      'warning' => 'En désactivant ce module, il se peut que certains page ne fonctionne plus dût à certaines fonctionnalités qui ne seront plus ajoutées par ce module sur le système. Notre support ne pourra pas vous aider en cas de problème de ce type',
      'disable' => 'Désactiver',
      'download' => 'Télécharger',
      'reinstall' => 'Réinstaller',
      'update' => 'Mettre à jour',
      'downloadsucess' => 'Module téléchargé/mis à jour avec succès.',
      'config' => [
        'title' => 'Configuration du module',
        'subtitle' => 'Configuration de vos clés d\'api pour %name%',
      ],
    ],
    'update' => [
      'translations' => [
        'content' => 'La dernière exporation de vos fichiers langue remonte au <code>%date%</code>. Vous pouvez télécharger les nouveaux fichiers dès maintenant.',
      ],
      'title' => 'Mise à jour',
      'subtitle' => 'Gestion des mises à jour.',
      'warning' => 'Avant de mettre à jour CLIENTXCMS, vous devriez faire une sauvegarde de votre site !',
      'download' => 'Télécharger',
      'unknown' => 'Impossible de mettre à jour le CMS car le site Web principal est actuellement indisponible. Veuillez contacter l\'assistance.',
      'info' => 'La version <code>%version1%</code> de CLIENTXCMS est disponible et vous êtes sur la version <code>%version2%</code>. La dernière version de CLIENTXCMS est prête à être téléchargée.',
    ],
    'phpinfo' => 'PHP Info',
    'logs' => [
      'title' => 'Historique',
      'clear' => 'Vider l\'historique',
      'subtitle' => 'Administrez l\'historique de CLIENTXCMS.',
      'masseaction' => 'Action en masse',
      'checkall' => 'Tout sélectionner',
      'delete' => 'Supprimer',
      'signal' => 'Signaler',
      'deleteall' => 'Supprimer les sélectionnés',
    ],
    'report' => [
      'cron' => [
        'successoftask' => 'Succès des tâches.',
        'last_schedule' => 'Dernière exécution',
        'start_at' => 'Début',
        'end_at' => 'Fin',
        'failed' => 'Échoué',
        'output' => 'Sortie',
        'exception' => 'Exception',
        'invokenow' => 'Exécuter maintenant',
        'delete' => 'Supprimer les tâches les plus anciennes',
        'successfully' => 'Réussis',
        'task' => 'Tâche #',
        'time' => 'Temps entre deux exécutions',
        'minuts' => 'toute les %minuts% minutes',
        'minut' => 'chaque minute',
        'hours' => 'toute les %hours% heures',
        'hour' => 'chaque heure',
      ],
      'general' => [
        'serverstate' => 'Statut du système',
        'good' => 'Bon',
        'suspended' => 'Services suspendus',
        'expired' => 'Services expirés',
      ],
    ],
    'settings' => [
      'cache' => 'Vider le cache de l\'application',
      'title' => 'Paramètres',
      'subtitle' => 'Configurez vos paramètres CLIENTXCMS ici.',
      'saving' => 'Sauvegarde...',
      'error' => 'Erreur',
      'saved' => 'Sauvegardé',
      'seo' => [
        'description' => 'Description des pages',
        'keywords' => 'Mots clés de la page',
        'favicon' => 'Favicon de la page',
        'head' => 'Code HTML à inclure dans le head de toutes les pages',
        'body' => 'Code HTML à inclure dans le body de toutes les pages',
        'analytics' => 'ID google analytics',
        'tawk' => 'ID Tawk.to',
        'how_did_you_find_us_options' => 'Options \'Comment nous avez-vous trouvé\'',
        'how_did_you_find_us_options_sub' => 'Laissé vide pour désactiver.',
      ],
      'security' => [
        'title' => 'Authentification & Limitation',
        'bannedemails' => 'E-Mails bannies ou domaines à l\'inscription',
        'authminuts' => 'Minutes limitant la connexion',
        'authlimit' => 'Nb. de tentative',
        'authreset' => 'Temps pour réinitialiser son mot de passe',
        'tosLinks' => 'Lien vers les conditions générales d\'utilisation',
        'confirmation' => 'Demande la confirmation de compte utilisateur',
        'resetpwd' => 'Autorise la réinitialisation de mot de passe aux utilisateurs',
        'autoredirecttologin' => 'Redirection automatique de l\'utilisateur vers la connexion lors qu\'il tente d\'accéder à l\'espace client',
        '2fa' => [
          'alert' => 'Vous devez activer l\'2FA pour utiliser l\'espace d\'administration',
          'required_for_admin' => '2FA Activée requis pour accéder à un compte administrateur',
          'minutes_between' => 'Minutes entre deux vérifications 2FA (Administrateur seulement)',
          'minutes_betweendesc' => '(0 pour garder jusqu\'à la fin de la session PHP)',
        ],
        'register' => 'Autorise l\'inscription aux utilisateurs',
        'captcha' => [
          'title' => 'Protégez vos formulaires et évitez les robots en sécurisant avec HCaptcha ou Recapcha',
          'validatewith' => 'Validation via',
          'sitekey' => 'Clé site',
          'secretkey' => 'Clé secrète',
          'recapcha' => [
            'title' => 'Configurer la protection Google reCaptcha',
            'content' => 'Vous pouvez obtenir des clés reCaptcha sur le <a
                        href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer">
                        Site Web de Google reCaptcha</a>. Vous devez utiliser reCaptcha <strong>v2
                        invisible</strong>
                    clées.',
          ],
          'hcaptcha' => [
            'title' => 'Configurer la protection HCaptcha',
            'content' => 'Vous pouvez obtenir des clés reCaptcha sur le <a
                        href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer">
                        Site Web de HCaptcha</a>.',
          ],
        ],
      ],
      'global' => [
        'logopdf' => 'Logo sur le PDF de la transaction',
        'logopdfhelp' => 'Taille recommandé : 90x35',
        'makerenewtransaction_days' => 'Nb. de jours avant l\'expiration pour génération de la facturation pour le renouvellement',
        'locale2' => 'Désactiver le changement de langue',
        'expire_days' => 'Nb. de jours pour renouveler le service après la suspension pour expiration',
        'expire_days2' => 'Après cette période, le service sera expiré, et le service sera supprimer du serveur.',
        'stock_warning' => 'Nb de stock restant pour afficher le stock restant.',
        'vat' => 'Désactiver la TVA',
        'appname' => 'Nom de l\'hébergeur',
        'license' => 'Licence d\'exploitation',
        'timezone' => 'Fuseau horaire',
        'currency' => 'Devise monétaire',
        'lang' => 'Language de la page',
        'driver' => 'Extension de traitement d\'image',
        'enable_addproduct_hidden' => 'Activer l\'ajout de produit caché au panier',
        'failedcreations_max' => 'Nb. de tentatives de création des services autorisés',
        'locale' => 'Traduction de base',
        'prefix' => 'Préfixe de l\'espace client',
        'logo' => 'Logo de l\'hébergeur',
        'scheme' => 'HTTP/HTTPS',
        'address' => 'Adresse de l\'hébergeur',
        'disabled_wallet' => 'Désactiver le paiement par le portefeuille',
        'disabled_autocreate' => 'Désactiver la création de service automatique',
        'disabled_basket' => 'Désactiver le panier',
        'upgrade' => [
          'title' => 'Politique de frais d\'installation lors d\'une amélioration de service',
          'default' => 'Facturation des frais d\'installation normalement',
          'diff' => 'Facturation des frais d\'installation en soustrayant les frais d\'installation de l\'ancienne offre',
          'disable' => 'Aucune facturation des frais d\'installation lors d\'une amélioration de service',
        ],
        'enabledpaywithcredit' => 'Activer la possibilité de payer en partie les factures avec les crédits du compte',
      ],
      'mail' => [
        'mailfrom' => 'Adresse E-mail utilisée pour envoyer les mails',
        'sendwithsmtp' => 'Envoyer via SMTP',
        'password' => 'Mot de passe SMTP',
        'username' => 'Nom d\'utilisateur SMTP',
        'hostname' => 'Nom d\'hôte SMTP',
        'port' => 'Port SMTP',
        'encryption' => 'Encryption',
        'title' => 'Essai de la messagerie CLIENTXCMS',
        'content' => 'Ceci est un test du système de messagerie ClientXCMS. Vous êtes prêt à envoyer des mails',
      ],
    ],
    'confirmation' => 'Voulez-vous vraiment faire cette action?',
    'account' => 'Compte utilisateur',
    'reports' => [
      'loginhistory' => [
        'emailsent' => 'Pourcentage d\'envoi d\'email',
        'login' => 'Nombre de connexions par jour',
      ],
      'title' => 'Rapports',
      'overview' => 'Vue d\'ensemble',
      'subtitle2' => 'Administrez les rapports du système.',
      'subtitle' => 'Les rapports ci-dessous fournissent une analyse des données conservées dans le système.',
    ],
    'email' => [
      'title' => 'Envoi d\'email',
      'subtitle' => 'Administrez les e-mails envoyés dans le système.',
      'sendtoeveryone' => 'Envoyer à tous les clients',
    ],
    'roles' => [
      'title' => 'Roles',
      'subtitle' => 'Administrez les rôles et permissions du système.',
      'info' => 'Quand ce role est propriétaire, il a toutes les permissions.',
    ],
    'staffs' => [
      'title' => 'Personnel',
      'subtitle' => 'Administrez les personnes ayant accès à l\'administration.',
      'owner' => 'Propriétaire',
      'ownertext' => 'En activant cette option, l\'administrateur pourrait supprimer votre propre compte sans votre autorisation. Donnez accès aux bonnes personnes.',
    ],
    'bannedips' => [
      'title' => 'Adresses IP Bannies',
      'subtitle' => 'Administrez les adresses IP bannies.',
      'punisher' => 'Punisseur',
      'definitive' => 'Sanction définitive',
      'reason' => 'Raison de la sanction',
      'expire' => 'Expiration de la sanction',
      'subtitleForCreate' => 'Vous pouvez appliquer la même sanction pour différentes adresses IP en les séparant par des virgules.',
    ],
    'servers' => [
      'title' => 'Serveurs',
      'nameservers' => 'Serveurs de nom',
      'enablemodule' => 'Vous devez au moins activer un module fournissant un service.',
      'details' => 'Détails du serveur',
      'subtitle' => 'Administrez les serveurs du système.',
      'name' => 'Nom du serveur',
      'authentification' => 'Authentification',
      'testconnect' => 'Tester la connexion',
      'result' => 'Résultat des essais',
      'statuscode' => 'Code HTTP',
      'data' => 'Données renvoyées',
      'add' => [
        'title' => 'Ajouter un nouveau serveur',
        'subtitle' => 'Permet de lier un serveur à CLIENTXCMS.',
      ],
      'forms' => [
        'secure' => 'Sécurité',
        'primarynameserver' => 'Premier serveur de nom',
        'username' => 'Nom d\'utilisateur',
        'password' => 'Mot de passe',
        'monthlycost' => 'Coût mensuel',
        'customport' => 'Port personnalisé',
        'noc' => 'Localisation',
        'secondarynameserver' => 'Second serveur de nom',
        'thirdnameserver' => 'Troisième serveur de nom',
        'fourthnameserver' => 'Quatrième serveur de nom',
        'fifthnameserver' => 'Cinquième serveur de nom',
        'type' => 'Type de serveur',
        'maxaccounts' => 'No. maximum de compte',
      ],
    ],
  ],
  'configuration' => [
    'update' => 'Configuration sauvegardée avec succès.',
    'delete' => 'Configuration supprimée avec succès.',
    'create' => 'Configuration crée avec succès.',
  ],
];