<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
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
    <!-- Header -->
    <header>
        <div class="logo">Alan Coiffard</div>
        <nav>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#photos">Photos</a></li>
                <li><a href="#apropos">À propos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="accueil" class="hero">
        <div class="carousel">
            <div class="carousel-slide"><img src="./images/hero/hero_image_1.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_2.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_3.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_4.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_5.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_6.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_7.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_8.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_9.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="./images/hero/hero_image_10.jpg" alt="Image 1"></div>
        </div>
        <div class="hero-content">
            <h1>Salut, je suis Alan Coiffard</h1>
            <p>Développeur web et photographe passionné.</p>
            <?php $arrowDown->arrowDown('photos'); ?>
        </div>
        </div>
    </section>


    <!-- Projets Section -->
    <!-- <section id="projets">
        <h2>Mes Projets Web</h2>
        <div class="grid">
            <div class="card">Projet 1</div>
            <div class="card">Projet 2</div>
            <div class="card">Projet 3</div>
        </div>
    </section> -->

    <!-- Photos Section -->
    <section id="photos">
        <h2>Mon Univers Photo</h2>
        <div class="gallery">
            <img src="photo1.jpg" alt="Photo 1">
            <img src="photo2.jpg" alt="Photo 2">
            <img src="photo3.jpg" alt="Photo 3">
        </div>
    </section>

    <!-- À Propos Section -->
    <section id="apropos">
        <h2>À propos de moi</h2>
        <p>Je suis Alan, un passionné de développement web et de photographie.</p>
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact">
        <h2>Contactez-moi</h2>
        <form>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section> -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="center col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Created by
                        <a href="#">Alan COIFFARD</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="github" href="https://github.com/Alan-Coiffard"><i class="fa fa-github"></i></a></li>
                        <li><a class="www" href="https://portfolio.alan-coiffard.ovh"><i class="fa fa-globe"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/in/alan-coiffard-924033172"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php include 'bootstrap-5.0.0/includeBootstrapJs.php'; ?>

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