<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Découvrez le portfolio d'Alan Coiffard, développeur web et photographe passionné par la nature et la faune sauvage.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" width="500px" />
    <title>Portfolio - Alan Coiffard</title>

    <?php
    include 'bootstrap-5.0.0/includeBootstrapCss.php';
    require './templates/arrows/arrow-down.php';
    $arrowDown = new arrowDown;
    require './templates/arrows/arrow-up.php';
    $arrowUp = new arrowUp;
    $arrowUp->arrowUp('accueil');
    ?>
    <link rel="stylesheet" href="css/hovi.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include("./templates/header.php") ?>

    <!-- Hero Section -->
    <section id="accueil" class="hero">
        <div class="carousel">
            <div class="carousel-slide"><img src="./images/hero/hero_image_1.webp" alt="hero_image_1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_2.webp" alt="hero_image_2"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_3.webp" alt="hero_image_3"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_4.webp" alt="hero_image_4"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_5.webp" alt="hero_image_5"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_6.webp" alt="hero_image_6"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_7.webp" alt="hero_image_7"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_8.webp" alt="hero_image_8"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_9.webp" alt="hero_image_9"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_10.webp" alt="hero_image_10"></div>
        </div>
        <div class="hero-content">
            <h1>Salut, je suis Alan Coiffard</h1>
            <p>Développeur web et photographe passionné.</p>
            <?php $arrowDown->arrowDown('photos'); ?>
        </div>
        </div>
    </section>

    <!-- Photos Section -->
    <section id="photos">
        <h2>Mon Univers Photo</h2>
        <div id="bestof" class="photo-grid">
            <?php
            $dirname = "./images/bestof/";
            $images = glob($dirname . "*.webp");
            foreach ($images as $image) {
            ?>
                <div class="photo-item">
                    <img src="<?= $image ?>" alt="<?= $image ?>">
                </div>
            <?php
            }
            ?>
        </div>
    </section>


    <!-- À Propos Section -->
    <section id="apropos" class="presentation">
        <h2>À propos de moi</h2>
        <div class="text">
            <p>
                Je m'appelle Alan Coiffard, photographe autodidacte passionné par la nature et les animaux sauvages. La photographie est pour moi un moyen de capturer l'instant, de révéler la beauté discrète du monde qui nous entoure et de raconter des histoires sans mots.
            </p>
            -
            <p>
                Bien que mes sujets de prédilection soient la faune et la flore, j'apprécie également le portrait, cherchant toujours à mettre en lumière l'authenticité et l'émotion de chaque personne. J'aime aussi relever des défis techniques, que ce soit dans la photographie sportive ou l'astrophoto, où patience et précision sont essentielles.
            </p>
            -
            <p>
                J'ai eu l'opportunité de collaborer sur plusieurs projets, notamment pour des associations et des groupes scolaires, et de travailler sur des séries personnelles avec des amis. Mon approche repose sur le respect de mon environnement et sur une volonté de minimiser mon impact pour capturer des images sincères et puissantes.
            </p>
        </div>
        <a class="btn btn-dark" href="https://alan-Coiffard.ovh">
            Pour en savoir plus sur mon côté développeur
            <i class="fa fa-globe"></i>
        </a>
    </section>


    <?php include('./templates/footer.php') ?>

</body>

<script>
    const carousel = document.querySelector('.carousel');
    let index = 0;

    setInterval(() => {
        index = (index + 1) % 3;
        carousel.style.transform = `translateX(${-index * 100}%)`;
    }, 4000);
</script>

</html>