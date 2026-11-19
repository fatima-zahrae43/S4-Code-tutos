<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio   </title>
    <link rel="stylesheet" href="css/stayle.css">
</head>
<body>
  <header>
<h2>FZS</h2>
<nav>
<a href="#">Accueil</a>
<a href="#">À propos</a>
<a href="#">Projets</a>
</nav>
  </header>

  <main>
<section class="intro" >
    <div class="presentation" id="À propos" >  
<h3>Bonjour!</h3>
<h1>Je suis fatima zahrae sabban</h1>
<p>Apprenante en développement web
Passionnée par le design et la création web,
je construis des projets pour apprendre et progresser</p>
<nav class="link">
<a href="#">Voir mes projets</a>
<a href="#">Me contacter</a>
</nav>
</div>
<div class="photo">
  <img src="img/téléchargement (7).jpg" alt="photo"> 
</div>
</section>

<section class="projets" >
<h2>Mes Projets</h2>
<p>Quelques projets sur lesquels j'ai travaillé </p>
<div class="liste-projets"> 


<?php foreach ($projets as $cart):?>
<article class="carte ">
<h3> 
  <?php if($cart['statut']=='térmeni'):?>
       <span>⭐</span>
  <?php endif;?>
<?= htmlspecialchars ($cart ['titre'])?>
 </h3> 
<P> <?= htmlspecialchars ($cart ['description'])?>  </P>
<?php if($cart['id']== 2 ):?>
    <P class="proje1">Projet de loisirs</P>
   <?php else :?>
    <P class="proje2">Projet de stages</P>
    <?php endif;?>
<a href="cart.php?id=<?= $cart['id'] ?>" class ="bouton"> 
    <?= htmlspecialchars ($cart ['link'])?></a>

</article>
<?php endforeach; ?>

</div>
</section>

 <section class="Compétences">
<h2>Mes Compétences</h2>
<p>Les technologies que j'utilise</p>
<div class="lest-compétences">
<span>HTML</span>
<span>CSS</span>
<span>JavaScript</span>
<span>Git & GitHub</span>
</div> 

 </section>

  </main>

  <footer>
<p>© 2026 Tous droits réservés.</p>
  </footer>
</body>
</html>
