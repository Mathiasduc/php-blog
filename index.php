<?php require 'vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP-Blog</title>
</head>
<body>
<div style="display: flex; align-items: center; flex-direction: column;">
	<button><a href="form.php">Ajouter un article</a></button>
		<?php 
		ORM::configure('mysql:host=localhost;dbname=my_blog');
		ORM::configure('username','root');
		ORM::configure('password',getenv('PASSW42'));
		ORM::configure('return_result_sets', true);

		foreach (ORM::for_table('posts')->find_many() as $post) {
			?>
			<div style="display: flex; align-items: center; flex-direction: column;">

				<h1><?php echo htmlentities($post['title'], ENT_QUOTES, 'utf-8') ?></h1>

				<p>
					<?php echo htmlentities($post['content'], ENT_QUOTES, 'utf-8') ?>
				</p>

				<span>From : <?php echo htmlentities($post['author'], ENT_QUOTES, 'utf-8') ?>
					the, <?php echo htmlentities($post['created_at'], ENT_QUOTES, 'utf-8') ?>
				</span>
			</div>
			<?php 
		}
		?>
		<!-- 
				Sur la page principale, créer un bouton "Ajouter un article" qui redirige vers form.php
				
				Sur la page form.php, créer un formulaire pour créer un nouvel article avec tous les champs nécessaires.
				
				Le formulaire est envoyé à submit_post.php qui traite l'ajout du nouvel article. Si le titre, le contenu ou le nom de l'auteur est vide, renvoyer une erreur vers le formulaire. Sinon, sauvegarder le nouvel article et rediriger vers index.php
			-->		
	</div>
</body>
</html>