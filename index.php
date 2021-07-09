<?php
include_once __DIR__ . '/classes/Movie.php';
include_once __DIR__ . '/db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>Movies</title>
    </head>

    <body>
        <!-- HEADER -->
        <?php include_once __DIR__ . '/partials/header.php'; ?>
        <!-- /HEADER -->

        <!-- MAIN -->
        <main>
            <section class="container d-flex justify-content-center">
                <?php foreach ($movies as $movie) { ?>
                    <?php
                        $new_movie = new Movie($movie["title"], $movie["original_title"], $movie["original_language"], $movie["vote"], $movie["genre"], $movie["year_release"], $movie["plot"]);
                    ?>
                    <div class="movie_card">
                        <ul>
                            <li>
                                <p><strong>Titolo: </strong><?= $new_movie->title; ?></p>
                            </li>
                            <li>
                                <p><strong>Titolo originale: </strong><?= $new_movie->original_title; ?></p>
                            </li>
                            <li>
                                <p><strong>Lingua originale: </strong><?= $new_movie->original_language; ?></p>
                            </li>
                            <li>
                                <p><strong>Voto: </strong><?= $new_movie->vote; ?> / 5</p>
                            </li>
                            <li>
                                <p><strong>Genere: </strong><?= $new_movie->genre; ?></p>
                            </li>
                            <li>
                                <p><strong>Anno: </strong><?= $new_movie->year_release; ?></p>
                            </li>
                            <li>
                                <p><strong>Trama: </strong><?= $new_movie->getExcerpt(); ?></p>
                            </li>
                            <li>
                                <a href="<?= $new_movie->url; ?>">Scopri di più</a>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </section>
        </main>
        <!-- /MAIN -->
    </body>
</html>