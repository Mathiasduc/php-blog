# php-blog

# Objectifs
Créer un blog : en tant qu'utilisateur, je peux écrire des articles, les rendre visible sur la page principale et commenter des articles.

# Prérequis 
* Installer Db Ninja

# Technologies
* Php 7
* Idiorm
* MySql

# Step 1
Créer un fichier index.php

Créer une base de données my_blog avec une table posts et une table comments ayant les attributs suivants
* posts
  * id PRIMARY KEY
  * title VARCHAR
  * author VARCHAR
  * content VARCHAR(2000)
  * created_at DATETIME
  * updated_at DATETIME
* comments
  * id PRIMARY KEY
  * post_id FOREIGN KEY
  * author VARCHAR
  * content VARCHAR(500)
  * created_at DATETIME

Insérer deux posts d'exemples : 

Titre | Auteur | Contenu | Créé le | Mise à jour le 
--- | --- | --- | --- | ---
SQL <3 | Pierre Martin | Le sql est trop bien ! | 2017-01-31 | null
Vive les ORM | Allan | Eloquent vs IdioRm | 2016-12-12 | 2017-01-31


Sur index.php, ajouter un h1 'Mon blog', et afficher l'un en dessous de l'autre les deux articles de blog : 

{ TITRE DE L'ARTICLE }

{ CONTENU }

{ NOM DE L'AUTEUR}, le { DATE DE CREATION }


# Step 2
Sur la page principale, créer un bouton "Ajouter un article" qui redirige vers form.php

Sur la page form.php, créer un formulaire pour créer un nouvel article avec tous les champs nécessaires.

Le formulaire est envoyé à submit_post.php qui traite l'ajout du nouvel article. Si le titre, le contenu ou le nom de l'auteur est vide, renvoyer une erreur vers le formulaire. Sinon, sauvegarder le nouvel article et rediriger vers index.php


# Step 3
En dessous de chaque article, ajouter un bouton "Editer" qui redirige vers form.php?id={ id de l'article }.

Le formulaire est automatiquement pré-rempli avec les valeurs de l'article en question.

La soumission de ce formulaire, mettra à jour l'article avec les nouvelles valeurs.


# Step 4
En dessous de chaque article, ajouter un formulaire contenu deux champs visibles 'content' et 'author'. Ce formulaire est soumis à submit_comment.php

submit_comment.php permet d'ajouter un commentaire à l'article en question. Si l'auteur et le contenu sont ok, redirige vers index.php

Sur la page index.php, tous les commentaires liées à un article s'affichent en dessous de celui-ci.


# Step 10
Faire disparaître les fichiers submit_post.php et submit_comment.php, pour n'avoir que index.php et form.php

# Step 11
Mettre à jour l'architecture de votre repo pour respecter le pattern MVC : 
* http://bpesquet.developpez.com/tutoriels/php/evoluer-architecture-mvc/
* https://www.sitepoint.com/the-mvc-pattern-and-php-2/


# Step 12
Rendre son site accessible depuis "l'extérieur" et demander à ses camarades d'ajouter des articles et d'en commenter d'autres.

