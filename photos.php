<!DOCTYPE html>
<html lang="en">

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

<style>
    .photos {
        display: flex;
        width: 90vw;
    }

    .photo {
        width: 250px;
    }

    .photo img {
        width: 100%;
    }
</style>

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
    <section>

        <div class="tags">
            <button data-tag="portrait">Portrait</button>
            <button data-tag="noir-et-blanc">Noir et blanc</button>
            <button data-tag="urbain">Urbain</button>
        </div>
        <div class="photos">
            <div class="photo" data-tags="portrait noir-et-blanc">
                <img src="./images/hero/hero_image_2.webp" alt="Portrait">
            </div>
            <div class="photo" data-tags="urbain">
                <img src="./images/hero/hero_image_1.webp" alt="Urbain">
            </div>
        </div>
    </section>

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
                        <li><a class="github" href="https://github.com/Alan-Coiffard" alt="github"><i class="fa fa-github"></i></a>Github</li>
                        <li><a class="www" href="https://portfolio.alan-coiffard.ovh"><i class="fa fa-globe"></i></a>Site web</li>
                        <li><a class="linkedin" href="https://www.linkedin.com/in/alan-coiffard-924033172"><i class="fa fa-linkedin"></i></a>Linkedin</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php include 'bootstrap-5.0.0/includeBootstrapJs.php'; ?>

    <script>
        const buttons = document.querySelectorAll('.tags button');
        const photos = document.querySelectorAll('.photo');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const tag = button.getAttribute('data-tag');
                photos.forEach(photo => {
                    photo.style.display = photo.getAttribute('data-tags').includes(tag) ? 'block' : 'none';
                });
            });
        });
    </script>


</body>

</html>