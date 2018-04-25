<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intermarché</title>
	<?=
		$this->Html->css([
			'admin.css',
			'grid.css'
		])
    ?>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
</head>
<body>
	<header>
		<div class="menu">
			<div class="container">
				<div class="grid-2">
					<h1><span>Inter</span>marché</h1>
				</div>

				<div class="grid-10 menu-a">
					<li><a href="http://127.0.0.1/cakephp/">Accueil</a></li>
					<li><a href="http://127.0.0.1/cakephp/produits/">Produits</a></li>
					<li><a href="http://127.0.0.1/cakephp/users/">Espace membre</a></li>
				</div>
			</div>
		</div>
	</header>


	<div class="container">
		<?= $this->fetch('content') ?>
	</div>
</body>
</html>