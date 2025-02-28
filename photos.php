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
    <?php include("./templates/header.php") ?>

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

    <?php include('./templates/footer.php') ?>

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