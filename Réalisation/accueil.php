
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyBuddy</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="logo">HobbyBuddy.</div>

        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#activites">Activités</a>
            <a href="#apropos">À propos</a>
            <a href="#contact">Contact</a>
        </nav>

        <a href="#activites" class="join">Découvrir</a>
    </header>

    <!-- HERO -->
    <section class="hero" id="accueil">

        <small>BIENVENUE SUR HOBBYBUDDY</small>

        <h1>Discover a new hobby.</h1>

        <p>
            Découvrez différentes activités et trouvez celle
            qui correspond à vos envies.
        </p>

        <a href="#activites" class="discover">
            Découvrir les activités
        </a>

    </section>

    <!-- ABOUT -->
    <section class="about" id="apropos">

        <h2>Pourquoi HobbyBuddy ?</h2>

        <p class="about-text">
            HobbyBuddy vous permet d'explorer plusieurs loisirs,
            de découvrir comment les pratiquer et de partager vos intérêts
            avec d'autres passionnés.
        </p>

        <div class="about-list">
<?php foreach($avantages as $atouts):?>
            <div class="about-card">
                <h3>
                    <?=htmlspecialchars($atouts['titre'])?>
                </h3>
                <p>
                    <?=htmlspecialchars($atouts['description'])?>
                </p>
                
            </div>
<?php endforeach;?>
        </div>

    </section>

    <!-- ACTIVITIES -->
    <section class="activities" id="activites">

        <div class="section-title">
            <h2>Explorez nos activités</h2>
            <p>Choisissez un loisir et découvrez comment le pratiquer.</p>
        </div>

        <div class="activity-list">

<?php foreach($activet as $cart):?>
            <div class="activity">
                <img src="<?=htmlspecialchars($cart['img'])?>" alt="photo">
                <div>
                    <h3>
                        <?=htmlspecialchars($cart['titre'])?>
                </h3>
                 <p>
<?=htmlspecialchars($cart['desctiption'])?>
                 </p>
                </div>
                <a href="#" class="arrow">→</a>
            </div>
        <?php endforeach;?>

        </div>

    </section>

    <!-- FOOTER -->
    <footer id="contact">
        © 2026 HobbyBuddy - Tous droits réservés.
    </footer>

</body>

</html>
