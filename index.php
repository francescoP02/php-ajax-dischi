<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~ E_NOTICE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- INCLUDO IL DATABASE CON REQUIRE -->
    <?php require_once __DIR__ . "/database.php"; ?>

    <!-- HEADER -->

    <header>

        <div class="ms-header">

            <a href="https://www.spotify.com/">
                <img src="./img/spotify-logo.png" alt="Spotify logo" />
            </a>

        </div>

    </header>

    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="row row-cols-3 row-cols-lg-5 mt-4">

                <?php foreach ($database as $element) { ?>

                <div class="song-card text-center p-3 mb-3">
                    <img class="pt-2" src="<?php echo $element["poster"]; ?>" alt="<?php echo $element["title"]; ?>"/>
                    <h5 class="p-3"><?php echo $element["title"]; ?></h5>
                    <span class="d-block"><?php echo $element["author"]; ?></span>
                    <span class="d-block"><?php echo $element["year"]; ?></span>
                </div>         

                <?php } ?>
                
            </div>
        </div>    
    </main>

    <!-- /MAIN -->
    
</body>
</html>