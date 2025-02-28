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

    <!-- Photos Section -->
    <section id="photos">

        <h2>Mon Univers Photo - étendue</h2>
        <div id="bestof" class="photo-grid">
            <?php
            $dirname = "./images/catalogue";
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

    <?php include('./templates/footer.php') ?>

</body>

</html>