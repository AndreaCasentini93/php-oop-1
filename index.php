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
        <main class="text-center">
            <?php foreach ($movies as $movie) { ?>
                <?php
                    $new_movie = new Movie($movie["title"], $movie["original_title"], $movie["original_language"], $movie["vote"], $movie["genre"], $movie["year_release"], $movie["plot"]);
                ?>
                <div class="movie_card">
                    <div>
                        <p><strong>Titolo: </strong><?= $new_movie->title; ?></p>
                    </div>
                    <div>
                        <p><strong>Titolo originale: </strong><?= $new_movie->original_title; ?></p>
                    </div>
                    <div>
                        <p><strong>Lingua originale: </strong><?= $new_movie->original_language; ?></p>
                    </div>
                    <div>
                        <p><strong>Voto: </strong><?= $new_movie->vote; ?></p>
                    </div>
                    <div>
                        <p><strong>Genere: </strong><?= $new_movie->genre; ?></p>
                    </div>
                    <div>
                        <p><strong>Anno d'uscita: </strong><?= $new_movie->year_release; ?></p>
                    </div>
                    <div>
                        <p><strong>Trama: </strong><?= $new_movie->getExcerpt(); ?></p>
                    </div>
                    <div>
                        <a href="<?= $new_movie->url; ?>">Scopri di più</a>
                    </div>
                </div>
                <hr>
            <?php } ?>
        </main>
        <!-- /MAIN -->
    </body>
</html>